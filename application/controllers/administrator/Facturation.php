<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Ibi Facture Controller
*| --------------------------------------------------------------------------
*| Pos Ibi Facture site
*|
*/
class Facturation extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_facturation');
	}

	/**
	* show all Pos Ibi Factures
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('facturation_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['facturations'] = $this->model_facturation->get($filter, $field, $this->limit_page, $offset);
		$this->data['facturation_counts'] = $this->model_facturation->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/facturation/index/',
			'total_rows'   => $this->model_facturation->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Facture List');
		$this->render('backend/standart/administrator/facturation/facturation_list', $this->data);
	}
	
	/**
	* Add new facturations
	*
	*/
	public function add()
	{
		$this->is_allowed('facturation_add');

		$this->template->title('Facture New');
		$this->render('backend/standart/administrator/facturation/facturation_add', $this->data);
	}

	/**
	* Add New Pos Ibi Factures
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('facturation_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('DATE_CREATION_FACTURE', 'DATE CREATION FACTURE', 'trim|required');
		$this->form_validation->set_rules('AUTHOR_FACTURE', 'AUTHOR FACTURE', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('STATUT_FACTURE', 'STATUT FACTURE', 'trim|required|max_length[11]');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'NUMERO_FACTURE' => $this->input->post('NUMERO_FACTURE'),
				'REF_CODE_COMMAND_FACTURE' => $this->input->post('REF_CODE_COMMAND_FACTURE'),
				'STORE_BY_FACTURE' => $this->input->post('STORE_BY_FACTURE'),
				'DATE_CREATION_FACTURE' => $this->input->post('DATE_CREATION_FACTURE'),
				'AUTHOR_FACTURE' => $this->input->post('AUTHOR_FACTURE'),
				'STATUT_FACTURE' => $this->input->post('STATUT_FACTURE'),
			];

			
			$save_facturation = $this->model_facturation->store($save_data);

			if ($save_facturation) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_facturation;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/facturation/edit/' . $save_facturation, 'Edit Pos Ibi Facture'),
						anchor('administrator/facturation', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/facturation/edit/' . $save_facturation, 'Edit Pos Ibi Facture')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/facturation');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/facturation');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Ibi Factures
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('facturation_update');

		$this->data['facturation'] = $this->model_facturation->find($id);

		$this->template->title('Facture Update');
		$this->render('backend/standart/administrator/facturation/facturation_update', $this->data);
	}

	/**
	* Update Pos Ibi Factures
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('facturation_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('DATE_CREATION_FACTURE', 'DATE CREATION FACTURE', 'trim|required');
		$this->form_validation->set_rules('AUTHOR_FACTURE', 'AUTHOR FACTURE', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('STATUT_FACTURE', 'STATUT FACTURE', 'trim|required|max_length[11]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'NUMERO_FACTURE' => $this->input->post('NUMERO_FACTURE'),
				'REF_CODE_COMMAND_FACTURE' => $this->input->post('REF_CODE_COMMAND_FACTURE'),
				'STORE_BY_FACTURE' => $this->input->post('STORE_BY_FACTURE'),
				'DATE_CREATION_FACTURE' => $this->input->post('DATE_CREATION_FACTURE'),
				'AUTHOR_FACTURE' => $this->input->post('AUTHOR_FACTURE'),
				'STATUT_FACTURE' => $this->input->post('STATUT_FACTURE'),
			];

			
			$save_facturation = $this->model_facturation->change($id, $save_data);

			if ($save_facturation) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/facturation', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/facturation');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/facturation');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Ibi Factures
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('facturation_delete');

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
            set_message(cclang('has_been_deleted', 'facturation'), 'success');
        } else {
            set_message(cclang('error_delete', 'facturation'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Ibi Factures
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('facturation_view');

		$this->data['facturation'] = $this->model_facturation->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Facture Detail');
		$this->render('backend/standart/administrator/facturation/facturation_view', $this->data);
	}
	
	/**
	* delete Pos Ibi Factures
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$facturation = $this->model_facturation->find($id);

		
		
		return $this->model_facturation->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('facturation_export');

		$this->model_facturation->export('facturation', 'facturation');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('facturation_export');

		$this->model_facturation->pdf('facturation', 'facturation');
	}
}


/* End of file facturation.php */
/* Location: ./application/controllers/administrator/Pos Ibi Facture.php */