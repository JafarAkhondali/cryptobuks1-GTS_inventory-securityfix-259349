<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Ibi Categories Controller
*| --------------------------------------------------------------------------
*| Pos Ibi Categories site
*|
*/
class Categories extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_categories');
		$this->load->model('model_fournisseurs');
	}

	/**
	* show all Pos Ibi Categoriess
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('categories_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['categoriess'] = $this->model_categories->get($filter, $field, $this->limit_page, $offset);
		$this->data['categories_counts'] = $this->model_categories->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/categories/index/',
			'total_rows'   => $this->model_categories->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Categories List');
		$this->render('backend/standart/administrator/categories/categories_list', $this->data);
	}
		public function categories_only($offset = 0)
	{
		$this->is_allowed('categories_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['categoriess'] = $this->model_categories->get3($filter, $field, $this->limit_page, $offset);
		$this->data['categories_counts'] = $this->model_categories->count_all3($filter, $field);

		$config = [
			'base_url'     => 'administrator/categories/index/',
			'total_rows'   => $this->model_categories->count_all3($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Categories List');
		$this->render('backend/standart/administrator/categories/categories_only', $this->data);
	}
	

	public function sous_categories_only($offset = 0)
	{
		$this->is_allowed('categories_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['categoriess'] = $this->model_categories->get2($filter, $field, $this->limit_page, $offset);
		$this->data['categories_counts'] = $this->model_categories->count_all2($filter, $field);

		$config = [
			'base_url'     => 'administrator/categories/index/',
			'total_rows'   => $this->model_categories->count_all2($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Categories List');
		$this->render('backend/standart/administrator/categories/pos_ibi_sous_categories', $this->data);
	}

	/**
	* Add new categoriess
	*
	*/
	public function add()
	{
		$this->is_allowed('categories_add');

		$this->template->title('Categories New');
		$this->render('backend/standart/administrator/categories/categories_add', $this->data);
	}


// public function list_categorie_only(){
// 	$this->is_allowed('categories_only');
// 	$this->template->title('Categories Only');
// 	$this->render('backend/standart/administrator/categories/categories_only', $this->data);
// }
	/**
	* Add New Pos Ibi Categoriess
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('categories_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('NOM_CATEGORIE', 'Nom De La Categorie', 'trim|required');
		

		if ($this->form_validation->run()) {
			$categories_THUMB_CATEGORIE_uuid = $this->input->post('categories_THUMB_CATEGORIE_uuid');
			$categories_THUMB_CATEGORIE_name = $this->input->post('categories_THUMB_CATEGORIE_name');
		
			$save_data = [
				'NOM_CATEGORIE' => $this->input->post('NOM_CATEGORIE'),
				'PARENT_REF_ID_CATEGORIE' => $this->input->post('PARENT_REF_ID_CATEGORIE'),
				'DESCRIPTION_CATEGORIE' => $this->input->post('DESCRIPTION_CATEGORIE'),
				'DATE_CREATION_CATEGORIE' => date('Y-m-d H:i:s'),
				'AUTHOR_CATEGORIE' => get_user_data('id'),			];

			if (!is_dir(FCPATH . '/uploads/categories/')) {
				mkdir(FCPATH . '/uploads/categories/');
			}

			if (!empty($categories_THUMB_CATEGORIE_name)) {
				$categories_THUMB_CATEGORIE_name_copy = date('YmdHis') . '-' . $categories_THUMB_CATEGORIE_name;

				rename(FCPATH . 'uploads/tmp/' . $categories_THUMB_CATEGORIE_uuid . '/' . $categories_THUMB_CATEGORIE_name, 
						FCPATH . 'uploads/categories/' . $categories_THUMB_CATEGORIE_name_copy);

				if (!is_file(FCPATH . '/uploads/categories/' . $categories_THUMB_CATEGORIE_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['THUMB_CATEGORIE'] = $categories_THUMB_CATEGORIE_name_copy;
			}
		
			
			$save_categories = $this->model_categories->store($save_data);

			if ($save_categories) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_categories;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/categories/edit/' . $save_categories, 'Edit Pos Ibi Categories'),
						anchor('administrator/categories', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/categories/edit/' . $save_categories, 'Edit Pos Ibi Categories')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/categories');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/categories');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Ibi Categoriess
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('categories_update');

		$this->data['categories'] = $this->model_categories->find($id);

		$this->template->title('Categories Update');
		$this->render('backend/standart/administrator/categories/categories_update', $this->data);
	}

	/**
	* Update Pos Ibi Categoriess
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('categories_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('NOM_CATEGORIE', 'Nom De La Categorie', 'trim|required');
		
		if ($this->form_validation->run()) {
			$categories_THUMB_CATEGORIE_uuid = $this->input->post('categories_THUMB_CATEGORIE_uuid');
			$categories_THUMB_CATEGORIE_name = $this->input->post('categories_THUMB_CATEGORIE_name');
		
			$save_data = [
				'NOM_CATEGORIE' => $this->input->post('NOM_CATEGORIE'),
				'PARENT_REF_ID_CATEGORIE' => $this->input->post('PARENT_REF_ID_CATEGORIE'),
				'DESCRIPTION_CATEGORIE' => $this->input->post('DESCRIPTION_CATEGORIE'),
				'DATE_MOD_CATEGORIE' => date('Y-m-d H:i:s'),
			];

			if (!is_dir(FCPATH . '/uploads/categories/')) {
				mkdir(FCPATH . '/uploads/categories/');
			}

			if (!empty($categories_THUMB_CATEGORIE_uuid)) {
				$categories_THUMB_CATEGORIE_name_copy = date('YmdHis') . '-' . $categories_THUMB_CATEGORIE_name;

				rename(FCPATH . 'uploads/tmp/' . $categories_THUMB_CATEGORIE_uuid . '/' . $categories_THUMB_CATEGORIE_name, 
						FCPATH . 'uploads/categories/' . $categories_THUMB_CATEGORIE_name_copy);

				if (!is_file(FCPATH . '/uploads/categories/' . $categories_THUMB_CATEGORIE_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['THUMB_CATEGORIE'] = $categories_THUMB_CATEGORIE_name_copy;
			}
		
			
			$save_categories = $this->model_categories->change($id, $save_data);

			if ($save_categories) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/categories', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/categories');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/categories');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Ibi Categoriess
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('categories_delete');

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
            set_message(cclang('has_been_deleted', 'categories'), 'success');
        } else {
            set_message(cclang('error_delete', 'categories'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Ibi Categoriess
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('categories_view');

		$this->data['categories'] = $this->model_categories->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Categories Detail');
		$this->render('backend/standart/administrator/categories/categories_view', $this->data);
	}
	
	/**
	* delete Pos Ibi Categoriess
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$categories = $this->model_categories->find($id);

		if (!empty($categories->THUMB_CATEGORIE)) {
			$path = FCPATH . '/uploads/categories/' . $categories->THUMB_CATEGORIE;

			if (is_file($path)) {
				$delete_file = unlink($path);
			}
		}
		
		
		return $this->model_categories->remove($id);
	}
	
	/**
	* Upload Image Pos Ibi Categories	* 
	* @return JSON
	*/
	public function upload_THUMB_CATEGORIE_file()
	{
		if (!$this->is_allowed('categories_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$uuid = $this->input->post('qquuid');

		echo $this->upload_file([
			'uuid' 		 	=> $uuid,
			'table_name' 	=> 'categories',
		]);
	}

	/**
	* Delete Image Pos Ibi Categories	* 
	* @return JSON
	*/
	public function delete_THUMB_CATEGORIE_file($uuid)
	{
		if (!$this->is_allowed('categories_delete', false)) {
			echo json_encode([
				'success' => false,
				'error' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		echo $this->delete_file([
            'uuid'              => $uuid, 
            'delete_by'         => $this->input->get('by'), 
            'field_name'        => 'THUMB_CATEGORIE', 
            'upload_path_tmp'   => './uploads/tmp/',
            'table_name'        => 'categories',
            'primary_key'       => 'ID_CATEGORIE',
            'upload_path'       => 'uploads/categories/'
        ]);
	}

	/**
	* Get Image Pos Ibi Categories	* 
	* @return JSON
	*/
	public function get_THUMB_CATEGORIE_file($id)
	{
		if (!$this->is_allowed('categories_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => 'Image not loaded, you do not have permission to access'
				]);
			exit;
		}

		$categories = $this->model_categories->find($id);

		echo $this->get_file([
            'uuid'              => $id, 
            'delete_by'         => 'id', 
            'field_name'        => 'THUMB_CATEGORIE', 
            'table_name'        => 'categories',
            'primary_key'       => 'ID_CATEGORIE',
            'upload_path'       => 'uploads/categories/',
            'delete_endpoint'   => 'administrator/categories/delete_THUMB_CATEGORIE_file'
        ]);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('categories_export');

		$this->model_categories->export('Pos_ibi_categories', 'categories');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('categories_export');

		$this->model_categories->pdf('Pos_ibi_categories', 'categories');
	}
}


/* End of file categories.php */
/* Location: ./application/controllers/administrator/Pos Ibi Categories.php */