<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Articles Controller
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Articles site
*|
*/
class Pos_store_2_ibi_articles extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_pos_store_2_ibi_articles');
		$this->load->model('model_pos_ibi_categories');
		$this->load->model('model_pos_ibi_fournisseurs');
	}

	/**
	* show all Pos Store 2 Ibi Articless
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('pos_store_2_ibi_articles_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_store_2_ibi_articless'] = $this->model_pos_store_2_ibi_articles->get($filter, $field, $this->limit_page, $offset);
		$this->data['pos_store_2_ibi_articles_counts'] = $this->model_pos_store_2_ibi_articles->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_store_2_ibi_articles/index/',
			'total_rows'   => $this->model_pos_store_2_ibi_articles->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Articles List');
		$this->render('backend/standart/administrator/pos_store_2_ibi_articles/pos_store_2_ibi_articles_list', $this->data);
	}
	
	/**
	* Add new pos_store_2_ibi_articless
	*
	*/
	public function add()
	{
		$this->is_allowed('pos_store_2_ibi_articles_add');

		$this->template->title('Articles New');
		$this->render('backend/standart/administrator/pos_store_2_ibi_articles/pos_store_2_ibi_articles_add', $this->data);
	}

	/**
	* Add New Pos Store 2 Ibi Articless
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('pos_store_2_ibi_articles_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('DESIGN', 'Nom Du Produit', 'trim|required');
		$this->form_validation->set_rules('REF_CATEGORIE', 'Categorie', 'trim|required');
		$this->form_validation->set_rules('REF_PROVIDER', 'Part N0', 'trim|required');
		$this->form_validation->set_rules('TYPE', 'Type Articles', 'trim|required');
		$this->form_validation->set_rules('STATUS', 'Etat', 'trim|required');
		$this->form_validation->set_rules('STOCK_ENABLED', 'Gestion De Stock', 'trim|required');
		$this->form_validation->set_rules('PRIX_DE_VENTE', 'Prix De Vente', 'trim|required');
		
		$this->form_validation->set_rules('POIDS', 'Unite', 'trim|required');
		

		if ($this->form_validation->run()) {
			$pos_store_2_ibi_articles_APERCU_uuid = $this->input->post('pos_store_2_ibi_articles_APERCU_uuid');
			$pos_store_2_ibi_articles_APERCU_name = $this->input->post('pos_store_2_ibi_articles_APERCU_name');
		
			$save_data = [
				'DESIGN' => $this->input->post('DESIGN'),
				'REF_RAYON' => $this->input->post('REF_RAYON'),
				'REF_CATEGORIE' => $this->input->post('REF_CATEGORIE'),
				'REF_SOUS_CATEGORIE' => $this->input->post('REF_SOUS_CATEGORIE'),
				'REF_PROVIDER' => $this->input->post('REF_PROVIDER'),
				'TYPE' => $this->input->post('TYPE'),
				'STATUS' => $this->input->post('STATUS'),
				'STOCK_ENABLED' => $this->input->post('STOCK_ENABLED'),
				'PRIX_DE_VENTE' => $this->input->post('PRIX_DE_VENTE'),
				'SHADOW_PRICE' => $this->input->post('SHADOW_PRICE'),
				'PRIX_PROMOTIONEL' => $this->input->post('PRIX_PROMOTIONEL'),
				'SPECIAL_PRICE_START_DATE' => $this->input->post('SPECIAL_PRICE_START_DATE'),
				'SPECIAL_PRICE_END_DATE' => $this->input->post('SPECIAL_PRICE_END_DATE'),
				'TAILLE' => $this->input->post('TAILLE'),
				'POIDS' => $this->input->post('POIDS'),
				'COULEUR' => $this->input->post('COULEUR'),
				'HAUTEUR' => $this->input->post('HAUTEUR'),
				'LARGEUR' => $this->input->post('LARGEUR'),
				'DESCRIPTION' => $this->input->post('DESCRIPTION'),
				'DATE_CREATION' => date('Y-m-d H:i:s'),
				'AUTHOR' => get_user_data('id'),
			];
			

			if (!is_dir(FCPATH . '/uploads/pos_store_2_ibi_articles/')) {
				mkdir(FCPATH . '/uploads/pos_store_2_ibi_articles/');
			}

			if (!empty($pos_store_2_ibi_articles_APERCU_name)) {
				$pos_store_2_ibi_articles_APERCU_name_copy = date('YmdHis') . '-' . $pos_store_2_ibi_articles_APERCU_name;

				rename(FCPATH . 'uploads/tmp/' . $pos_store_2_ibi_articles_APERCU_uuid . '/' . $pos_store_2_ibi_articles_APERCU_name, 
						FCPATH . 'uploads/pos_store_2_ibi_articles/' . $pos_store_2_ibi_articles_APERCU_name_copy);

				if (!is_file(FCPATH . '/uploads/pos_store_2_ibi_articles/' . $pos_store_2_ibi_articles_APERCU_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['APERCU'] = $pos_store_2_ibi_articles_APERCU_name_copy;
			}
		
			
			$save_pos_store_2_ibi_articles = $this->model_pos_store_2_ibi_articles->store($save_data);

			if ($save_pos_store_2_ibi_articles) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_pos_store_2_ibi_articles;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/pos_store_2_ibi_articles/edit/' . $save_pos_store_2_ibi_articles, 'Edit Pos Store 2 Ibi Articles'),
						anchor('administrator/pos_store_2_ibi_articles', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/pos_store_2_ibi_articles/edit/' . $save_pos_store_2_ibi_articles, 'Edit Pos Store 2 Ibi Articles')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_articles');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_articles');
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
		$this->is_allowed('pos_store_2_ibi_articles_update');

		$this->data['pos_store_2_ibi_articles'] = $this->model_pos_store_2_ibi_articles->find($id);

		$this->template->title('Articles Update');
		$this->render('backend/standart/administrator/pos_store_2_ibi_articles/pos_store_2_ibi_articles_update', $this->data);
	}

	/**
	* Update Pos Store 2 Ibi Articless
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('pos_store_2_ibi_articles_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('DESIGN', 'Nom Du Produit', 'trim|required');
		$this->form_validation->set_rules('REF_CATEGORIE', 'Categorie', 'trim|required');
		$this->form_validation->set_rules('REF_PROVIDER', 'Part N0', 'trim|required');
		$this->form_validation->set_rules('TYPE', 'Type Articles', 'trim|required');
		$this->form_validation->set_rules('STATUS', 'Etat', 'trim|required');
		$this->form_validation->set_rules('STOCK_ENABLED', 'Gestion De Stock', 'trim|required');
		$this->form_validation->set_rules('PRIX_DE_VENTE', 'Prix De Vente', 'trim|required');
		$this->form_validation->set_rules('SHADOW_PRICE', 'Prix Fictif', 'trim|required');
		$this->form_validation->set_rules('TAILLE', 'Taille', 'trim|required');
		
		if ($this->form_validation->run()) {
			$pos_store_2_ibi_articles_APERCU_uuid = $this->input->post('pos_store_2_ibi_articles_APERCU_uuid');
			$pos_store_2_ibi_articles_APERCU_name = $this->input->post('pos_store_2_ibi_articles_APERCU_name');
		
			$save_data = [
				'DESIGN' => $this->input->post('DESIGN'),
				'REF_RAYON' => $this->input->post('REF_RAYON'),
				'REF_CATEGORIE' => $this->input->post('REF_CATEGORIE'),
				'REF_SOUS_CATEGORIE' => $this->input->post('REF_SOUS_CATEGORIE'),
				'REF_PROVIDER' => $this->input->post('REF_PROVIDER'),
				'TYPE' => $this->input->post('TYPE'),
				'STATUS' => $this->input->post('STATUS'),
				'STOCK_ENABLED' => $this->input->post('STOCK_ENABLED'),
				'PRIX_DE_VENTE' => $this->input->post('PRIX_DE_VENTE'),
				'SHADOW_PRICE' => $this->input->post('SHADOW_PRICE'),
				'PRIX_PROMOTIONEL' => $this->input->post('PRIX_PROMOTIONEL'),
				'SPECIAL_PRICE_START_DATE' => $this->input->post('SPECIAL_PRICE_START_DATE'),
				'SPECIAL_PRICE_END_DATE' => $this->input->post('SPECIAL_PRICE_END_DATE'),
				'TAILLE' => $this->input->post('TAILLE'),
				'POIDS' => $this->input->post('POIDS'),
				'COULEUR' => $this->input->post('COULEUR'),
				'HAUTEUR' => $this->input->post('HAUTEUR'),
				'LARGEUR' => $this->input->post('LARGEUR'),
				'DESCRIPTION' => $this->input->post('DESCRIPTION'),
				'DATE_MOD' => date('Y-m-d H:i:s'),
				'AUTHOR' => get_user_data('id'),	
			];

			if (!is_dir(FCPATH . '/uploads/pos_store_2_ibi_articles/')) {
				mkdir(FCPATH . '/uploads/pos_store_2_ibi_articles/');
			}

			if (!empty($pos_store_2_ibi_articles_APERCU_uuid)) {
				$pos_store_2_ibi_articles_APERCU_name_copy = date('YmdHis') . '-' . $pos_store_2_ibi_articles_APERCU_name;

				rename(FCPATH . 'uploads/tmp/' . $pos_store_2_ibi_articles_APERCU_uuid . '/' . $pos_store_2_ibi_articles_APERCU_name, 
						FCPATH . 'uploads/pos_store_2_ibi_articles/' . $pos_store_2_ibi_articles_APERCU_name_copy);

				if (!is_file(FCPATH . '/uploads/pos_store_2_ibi_articles/' . $pos_store_2_ibi_articles_APERCU_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['APERCU'] = $pos_store_2_ibi_articles_APERCU_name_copy;
			}
		
			
			$save_pos_store_2_ibi_articles = $this->model_pos_store_2_ibi_articles->change($id, $save_data);

			if ($save_pos_store_2_ibi_articles) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/pos_store_2_ibi_articles', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_articles');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_articles');
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
		$this->is_allowed('pos_store_2_ibi_articles_delete');

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
            set_message(cclang('has_been_deleted', 'pos_store_2_ibi_articles'), 'success');
        } else {
            set_message(cclang('error_delete', 'pos_store_2_ibi_articles'), 'error');
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
		$this->is_allowed('pos_store_2_ibi_articles_view');

		$this->data['pos_store_2_ibi_articles'] = $this->model_pos_store_2_ibi_articles->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Articles Detail');
		$this->render('backend/standart/administrator/pos_store_2_ibi_articles/pos_store_2_ibi_articles_view', $this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Articless
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$pos_store_2_ibi_articles = $this->model_pos_store_2_ibi_articles->find($id);

		if (!empty($pos_store_2_ibi_articles->APERCU)) {
			$path = FCPATH . '/uploads/pos_store_2_ibi_articles/' . $pos_store_2_ibi_articles->APERCU;

			if (is_file($path)) {
				$delete_file = unlink($path);
			}
		}
		
		
		return $this->model_pos_store_2_ibi_articles->remove($id);
	}
	
	/**
	* Upload Image Pos Store 2 Ibi Articles	* 
	* @return JSON
	*/
	public function upload_APERCU_file()
	{
		if (!$this->is_allowed('pos_store_2_ibi_articles_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$uuid = $this->input->post('qquuid');

		echo $this->upload_file([
			'uuid' 		 	=> $uuid,
			'table_name' 	=> 'pos_store_2_ibi_articles',
		]);
	}

	/**
	* Delete Image Pos Store 2 Ibi Articles	* 
	* @return JSON
	*/
	public function delete_APERCU_file($uuid)
	{
		if (!$this->is_allowed('pos_store_2_ibi_articles_delete', false)) {
			echo json_encode([
				'success' => false,
				'error' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		echo $this->delete_file([
            'uuid'              => $uuid, 
            'delete_by'         => $this->input->get('by'), 
            'field_name'        => 'APERCU', 
            'upload_path_tmp'   => './uploads/tmp/',
            'table_name'        => 'pos_store_2_ibi_articles',
            'primary_key'       => 'ID',
            'upload_path'       => 'uploads/pos_store_2_ibi_articles/'
        ]);
	}

	/**
	* Get Image Pos Store 2 Ibi Articles	* 
	* @return JSON
	*/
	public function get_APERCU_file($id)
	{
		if (!$this->is_allowed('pos_store_2_ibi_articles_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => 'Image not loaded, you do not have permission to access'
				]);
			exit;
		}

		$pos_store_2_ibi_articles = $this->model_pos_store_2_ibi_articles->find($id);

		echo $this->get_file([
            'uuid'              => $id, 
            'delete_by'         => 'id', 
            'field_name'        => 'APERCU', 
            'table_name'        => 'pos_store_2_ibi_articles',
            'primary_key'       => 'ID',
            'upload_path'       => 'uploads/pos_store_2_ibi_articles/',
            'delete_endpoint'   => 'administrator/pos_store_2_ibi_articles/delete_APERCU_file'
        ]);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('pos_store_2_ibi_articles_export');

		$this->model_pos_store_2_ibi_articles->export('pos_store_2_ibi_articles', 'pos_store_2_ibi_articles');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('pos_store_2_ibi_articles_export');

		$this->model_pos_store_2_ibi_articles->pdf('pos_store_2_ibi_articles', 'pos_store_2_ibi_articles');
	}
}


/* End of file pos_store_2_ibi_articles.php */
/* Location: ./application/controllers/administrator/Pos Store 2 Ibi Articles.php */