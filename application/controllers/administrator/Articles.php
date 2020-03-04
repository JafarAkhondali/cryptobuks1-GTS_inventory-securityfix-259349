<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Articles Controller
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Articles site
*|
*/
class articles extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_articles');
		$this->load->model('model_categories');
		$this->load->model('model_fournisseurs');
	}

	/**
	* show all Pos Store 2 Ibi Articless
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('articles_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['articless'] = $this->model_articles->get($filter, $field, $this->limit_page, $offset);
		$this->data['articles_counts'] = $this->model_articles->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/articles/index/',
			'total_rows'   => $this->model_articles->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Articles List');
		$this->render('backend/standart/administrator/articles/articles_list', $this->data);
	}
	
	/**
	* Add new articless
	*
	*/
	public function add()
	{
		$this->is_allowed('articles_add');

		$this->template->title('Articles New');
		$this->render('backend/standart/administrator/articles/articles_add', $this->data);
	}

	/**
	* Add New Pos Store 2 Ibi Articless
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('articles_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('DESIGN_ARTICLE', 'Nom Du Produit', 'trim|required');
		$this->form_validation->set_rules('REF_CATEGORIE_ARTICLE', 'Categorie', 'trim|required');
		$this->form_validation->set_rules('SKU_ARTICLE', 'Part No', 'trim|required');
		// $this->form_validation->set_rules('TYPE_ARTICLE', 'Type Article', 'trim|required');
		// $this->form_validation->set_rules('STATUS_ARTICLE', 'Etat', 'trim|required');
		// $this->form_validation->set_rules('STOCK_ENABLED_ARTICLE', 'Gestion De Stock', 'trim|required');
		$this->form_validation->set_rules('PRIX_DE_VENTE_ARTICLE', 'Prix De Vente', 'trim|required');
		$this->form_validation->set_rules('POIDS_ARTICLE', 'Unite', 'trim|required');
		

		if ($this->form_validation->run()) {
			$articles_APERCU_ARTICLE_uuid = $this->input->post('articles_APERCU_ARTICLE_uuid');
			$articles_APERCU_ARTICLE_name = $this->input->post('articles_APERCU_ARTICLE_name');
		
			$save_data = [
				'DESIGN_ARTICLE' => $this->input->post('DESIGN_ARTICLE'),
				'REF_RAYON_ARTICLE' => $this->input->post('REF_RAYON_ARTICLE'),
				'REF_CATEGORIE_ARTICLE' => $this->input->post('REF_CATEGORIE_ARTICLE'),
				'REF_SOUS_CATEGORIE_ARTICLE' => $this->input->post('REF_SOUS_CATEGORIE_ARTICLE'),
				'SKU_ARTICLE' => $this->input->post('SKU_ARTICLE'),
				// 'TYPE_ARTICLE' => $this->input->post('TYPE_ARTICLE'),
				// 'STATUS_ARTICLE' => $this->input->post('STATUS_ARTICLE'),
				// 'STOCK_ENABLED_ARTICLE' => $this->input->post('STOCK_ENABLED_ARTICLE'),
				'PRIX_DE_VENTE_ARTICLE' => $this->input->post('PRIX_DE_VENTE_ARTICLE'),
				'SHADOW_PRICE_ARTICLE' => $this->input->post('SHADOW_PRICE_ARTICLE'),
				'PRIX_PROMOTIONEL_ARTICLE' => $this->input->post('PRIX_PROMOTIONEL_ARTICLE'),
				'SPECIAL_PRICE_START_DATE_ARTICLE' => $this->input->post('SPECIAL_PRICE_START_DATE_ARTICLE'),
				'SPECIAL_PRICE_END_DATE_ARTICLE' => $this->input->post('SPECIAL_PRICE_END_DATE_ARTICLE'),
				'TAILLE_ARTICLE' => $this->input->post('TAILLE_ARTICLE'),
				'POIDS_ARTICLE' => $this->input->post('POIDS_ARTICLE'),
				'COULEUR_ARTICLE' => $this->input->post('COULEUR_ARTICLE'),
				'HAUTEUR_ARTICLE' => $this->input->post('HAUTEUR_ARTICLE'),
				'LARGEUR_ARTICLE' => $this->input->post('LARGEUR_ARTICLE'),
				'DESCRIPTION_ARTICLE' => $this->input->post('DESCRIPTION_ARTICLE'),
				'DATE_CREATION_ARTICLE' => date('Y-m-d H:i:s'),
				'AUTHOR_ARTICLE' => get_user_data('id'),			];

			if (!is_dir(FCPATH . '/uploads/articles/')) {
				mkdir(FCPATH . '/uploads/articles/');
			}

			if (!empty($articles_APERCU_ARTICLE_name)) {
				$articles_APERCU_ARTICLE_name_copy = date('YmdHis') . '-' . $articles_APERCU_ARTICLE_name;

				rename(FCPATH . 'uploads/tmp/' . $articles_APERCU_ARTICLE_uuid . '/' . $articles_APERCU_ARTICLE_name, 
						FCPATH . 'uploads/articles/' . $articles_APERCU_ARTICLE_name_copy);

				if (!is_file(FCPATH . '/uploads/articles/' . $articles_APERCU_ARTICLE_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['APERCU_ARTICLE'] = $articles_APERCU_ARTICLE_name_copy;
			}
		
			
			$save_articles = $this->model_articles->store($save_data);

			if ($save_articles) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_articles;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/articles/edit/' . $save_articles, 'Edit Pos Store 2 Ibi Articles'),
						anchor('administrator/articles', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/articles/edit/' . $save_articles, 'Edit Pos Store 2 Ibi Articles')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/articles');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/articles');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Store 2 Ibi Articless
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('articles_update');

		$this->data['articles'] = $this->model_articles->find($id);

		$this->template->title('Articles Update');
		$this->render('backend/standart/administrator/articles/articles_update', $this->data);
	}

	/**
	* Update Pos Store 2 Ibi Articless
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('articles_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('DESIGN_ARTICLE', 'Nom Du Produit', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('REF_CATEGORIE_ARTICLE', 'Categorie', 'trim|required');
		$this->form_validation->set_rules('SKU_ARTICLE', 'Part No', 'trim|required');
		// $this->form_validation->set_rules('TYPE_ARTICLE', 'Type Article', 'trim|required');
		// $this->form_validation->set_rules('STATUS_ARTICLE', 'Etat', 'trim|required');
		// $this->form_validation->set_rules('STOCK_ENABLED_ARTICLE', 'Gestion De Stock', 'trim|required');
		$this->form_validation->set_rules('PRIX_DE_VENTE_ARTICLE', 'Prix De Vente', 'trim|required');
		$this->form_validation->set_rules('POIDS_ARTICLE', 'Unite', 'trim|required');
		
		if ($this->form_validation->run()) {
			$articles_APERCU_ARTICLE_uuid = $this->input->post('articles_APERCU_ARTICLE_uuid');
			$articles_APERCU_ARTICLE_name = $this->input->post('articles_APERCU_ARTICLE_name');
		
			$save_data = [
				'DESIGN_ARTICLE' => $this->input->post('DESIGN_ARTICLE'),
				'REF_RAYON_ARTICLE' => $this->input->post('REF_RAYON_ARTICLE'),
				'REF_CATEGORIE_ARTICLE' => $this->input->post('REF_CATEGORIE_ARTICLE'),
				'REF_SOUS_CATEGORIE_ARTICLE' => $this->input->post('REF_SOUS_CATEGORIE_ARTICLE'),
				'SKU_ARTICLE' => $this->input->post('SKU_ARTICLE'),
				
				'PRIX_DE_VENTE_ARTICLE' => $this->input->post('PRIX_DE_VENTE_ARTICLE'),
				'SHADOW_PRICE_ARTICLE' => $this->input->post('SHADOW_PRICE_ARTICLE'),
				'PRIX_PROMOTIONEL_ARTICLE' => $this->input->post('PRIX_PROMOTIONEL_ARTICLE'),
				'SPECIAL_PRICE_START_DATE_ARTICLE' => $this->input->post('SPECIAL_PRICE_START_DATE_ARTICLE'),
				'SPECIAL_PRICE_END_DATE_ARTICLE' => $this->input->post('SPECIAL_PRICE_END_DATE_ARTICLE'),
				'TAILLE_ARTICLE' => $this->input->post('TAILLE_ARTICLE'),
				'POIDS_ARTICLE' => $this->input->post('POIDS_ARTICLE'),
				'COULEUR_ARTICLE' => $this->input->post('COULEUR_ARTICLE'),
				'HAUTEUR_ARTICLE' => $this->input->post('HAUTEUR_ARTICLE'),
				'LARGEUR_ARTICLE' => $this->input->post('LARGEUR_ARTICLE'),
				'DESCRIPTION_ARTICLE' => $this->input->post('DESCRIPTION_ARTICLE'),
				'DATE_MOD_ARTICLE' => date('Y-m-d H:i:s'),
			];

			if (!is_dir(FCPATH . '/uploads/articles/')) {
				mkdir(FCPATH . '/uploads/articles/');
			}

			if (!empty($articles_APERCU_ARTICLE_uuid)) {
				$articles_APERCU_ARTICLE_name_copy = date('YmdHis') . '-' . $articles_APERCU_ARTICLE_name;

				rename(FCPATH . 'uploads/tmp/' . $articles_APERCU_ARTICLE_uuid . '/' . $articles_APERCU_ARTICLE_name, 
						FCPATH . 'uploads/articles/' . $articles_APERCU_ARTICLE_name_copy);

				if (!is_file(FCPATH . '/uploads/articles/' . $articles_APERCU_ARTICLE_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['APERCU_ARTICLE'] = $articles_APERCU_ARTICLE_name_copy;
			}
		
			
			$save_articles = $this->model_articles->change($id, $save_data);

			if ($save_articles) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/articles', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/articles');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/articles');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Articless
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('articles_delete');

		$this->load->helper('file');

		$arr_id = $this->input->get('id');
		$remove = false;

		if (!empty($id)) {
			$remove = $this->_remove($id);
		} elseif (count($arr_id) >0) {
			foreach ($arr_id as $id) {
				$remove = $this->_remove($id);
			}
		}

		if ($remove) {
            set_message(cclang('has_been_deleted', 'articles'), 'success');
        } else {
            set_message(cclang('error_delete', 'articles'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Store 2 Ibi Articless
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('articles_view');

		$this->data['articles'] = $this->model_articles->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Articles Detail');
		$this->render('backend/standart/administrator/articles/articles_view', $this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Articless
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$articles = $this->model_articles->find($id);

		if (!empty($articles->APERCU_ARTICLE)) {
			$path = FCPATH . '/uploads/articles/' . $articles->APERCU_ARTICLE;

			if (is_file($path)) {
				$delete_file = unlink($path);
			}
		}
		
		
		return $this->model_articles->remove($id);
	}
	
	/**
	* Upload Image Pos Store 2 Ibi Articles	* 
	* @return JSON
	*/
	public function upload_APERCU_ARTICLE_file()
	{
		if (!$this->is_allowed('articles_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$uuid = $this->input->post('qquuid');

		echo $this->upload_file([
			'uuid' 		 	=> $uuid,
			'table_name' 	=> 'articles',
		]);
	}

	/**
	* Delete Image Pos Store 2 Ibi Articles	* 
	* @return JSON
	*/
	public function delete_APERCU_ARTICLE_file($uuid)
	{
		if (!$this->is_allowed('articles_delete', false)) {
			echo json_encode([
				'success' => false,
				'error' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		echo $this->delete_file([
            'uuid'              => $uuid, 
            'delete_by'         => $this->input->get('by'), 
            'field_name'        => 'APERCU_ARTICLE', 
            'upload_path_tmp'   => './uploads/tmp/',
            'table_name'        => 'articles',
            'primary_key'       => 'ID_ARTICLE',
            'upload_path'       => 'uploads/articles/'
        ]);
	}

	/**
	* Get Image Pos Store 2 Ibi Articles	* 
	* @return JSON
	*/
	public function get_APERCU_ARTICLE_file($id)
	{
		if (!$this->is_allowed('articles_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => 'Image not loaded, you do not have permission to access'
				]);
			exit;
		}

		$articles = $this->model_articles->find($id);

		echo $this->get_file([
            'uuid'              => $id, 
            'delete_by'         => 'id', 
            'field_name'        => 'APERCU_ARTICLE', 
            'table_name'        => 'articles',
            'primary_key'       => 'ID_ARTICLE',
            'upload_path'       => 'uploads/articles/',
            'delete_endpoint'   => 'administrator/articles/delete_APERCU_ARTICLE_file'
        ]);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('articles_export');

		$this->model_articles->export('Pos_store_2_ibi_articles', 'articles');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('articles_export');

		$this->model_articles->pdf('Pos_store_2_ibi_articles', 'articles');
	}
}


/* End of file articles.php */
/* Location: ./application/controllers/administrator/Pos Store 2 Ibi Articles.php */