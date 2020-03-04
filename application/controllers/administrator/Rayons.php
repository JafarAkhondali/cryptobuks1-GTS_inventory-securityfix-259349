<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Rayons Controller
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Rayons site
*|
*/
class rayons extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_rayons');
		$this->load->model('model_fournisseurs');
	}

	/**
	* show all Pos Store 2 Ibi Rayonss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('rayons_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['rayonss'] = $this->model_rayons->get($filter, $field, $this->limit_page, $offset);
		$this->data['rayons_counts'] = $this->model_rayons->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/rayons/index/',
			'total_rows'   => $this->model_rayons->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Rayons List');
		$this->render('backend/standart/administrator/rayons/rayons_list', $this->data);
	}
	
	/**
	* Add new rayonss
	*
	*/
	public function add()
	{
		$this->is_allowed('rayons_add');

		$this->template->title('Rayons New');
		$this->render('backend/standart/administrator/rayons/rayons_add', $this->data);
	}

	/**
	* Add New Pos Store 2 Ibi Rayonss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('rayons_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('TITRE_RAYON', 'TITRE RAYON', 'trim|required');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'TITRE_RAYON' => $this->input->post('TITRE_RAYON'),
				'DESCRIPTION_RAYON' => $this->input->post('DESCRIPTION_RAYON'),
				'DATE_CREATION_RAYON' => date('Y-m-d H:i:s'),
				'AUTHOR_RAYON' => get_user_data('id'),			];

			
			$save_rayons = $this->model_rayons->store($save_data);

			if ($save_rayons) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_rayons;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/rayons/edit/' . $save_rayons, 'Edit Pos Store 2 Ibi Rayons'),
						anchor('administrator/rayons', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/rayons/edit/' . $save_rayons, 'Edit Pos Store 2 Ibi Rayons')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/rayons');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/rayons');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Store 2 Ibi Rayonss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('rayons_update');

		$this->data['rayons'] = $this->model_rayons->find($id);

		$this->template->title('Rayons Update');
		$this->render('backend/standart/administrator/rayons/rayons_update', $this->data);
	}

	/**
	* Update Pos Store 2 Ibi Rayonss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('rayons_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('TITRE_RAYON', 'TITRE RAYON', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'TITRE_RAYON' => $this->input->post('TITRE_RAYON'),
				'DESCRIPTION_RAYON' => $this->input->post('DESCRIPTION_RAYON'),
				'DATE_MOD_RAYON' => date('Y-m-d H:i:s'),
			];

			
			$save_rayons = $this->model_rayons->change($id, $save_data);

			if ($save_rayons) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/rayons', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/rayons');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/rayons');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Rayonss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('rayons_delete');

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
            set_message(cclang('has_been_deleted', 'rayons'), 'success');
        } else {
            set_message(cclang('error_delete', 'rayons'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Store 2 Ibi Rayonss
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('rayons_view');

		$this->data['rayons'] = $this->model_rayons->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Rayons Detail');
		$this->render('backend/standart/administrator/rayons/rayons_view', $this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Rayonss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$rayons = $this->model_rayons->find($id);

		
		
		return $this->model_rayons->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('rayons_export');

		$this->model_rayons->export('Pos_store_2_ibi_rayons', 'rayons');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('rayons_export');

		$this->model_rayons->pdf('Pos_store_2_ibi_rayons', 'rayons');
	}
}


/* End of file rayons.php */
/* Location: ./application/controllers/administrator/Pos Store 2 Ibi Rayons.php */