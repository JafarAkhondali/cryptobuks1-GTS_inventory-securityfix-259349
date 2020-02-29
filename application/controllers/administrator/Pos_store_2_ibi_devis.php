<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Devis Controller
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Devis site
*|
*/
class Pos_store_2_ibi_devis extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_pos_store_2_ibi_devis');
	}

	/**
	* show all Pos Store 2 Ibi Deviss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('pos_store_2_ibi_devis_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_store_2_ibi_deviss'] = $this->model_pos_store_2_ibi_devis->get($filter, $field, $this->limit_page, $offset);
		$this->data['pos_store_2_ibi_devis_counts'] = $this->model_pos_store_2_ibi_devis->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_store_2_ibi_devis/index/',
			'total_rows'   => $this->model_pos_store_2_ibi_devis->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Pos Store 2 Ibi Devis List');
		$this->render('backend/standart/administrator/pos_store_2_ibi_devis/pos_store_2_ibi_devis_list', $this->data);
	}
	
	/**
	* Add new pos_store_2_ibi_deviss
	*
	*/
	public function add()
	{
		$this->is_allowed('pos_store_2_ibi_devis_add');

		$this->template->title('Pos Store 2 Ibi Devis New');
		$this->render('backend/standart/administrator/pos_store_2_ibi_devis/pos_store_2_ibi_devis_add', $this->data);
	}

	/**
	* Add New Pos Store 2 Ibi Deviss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('pos_store_2_ibi_devis_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('TITRE_DEVIS', 'TITRE DEVIS', 'trim|required');
		$this->form_validation->set_rules('REF_CLIENT_DEVIS', 'REF CLIENT DEVIS', 'trim|required');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'TITRE_DEVIS' => $this->input->post('TITRE_DEVIS'),
				'CODE_DEVIS' => $this->input->post('CODE_DEVIS'),
				'REF_CLIENT_DEVIS' => $this->input->post('REF_CLIENT_DEVIS'),
				'TYPE_DEVIS' => $this->input->post('TYPE_DEVIS'),
				'DATE_CREATION_DEVIS' => $this->input->post('DATE_CREATION_DEVIS'),
				'DATE_MOD_DEVIS' => $this->input->post('DATE_MOD_DEVIS'),
				'AUTHOR_DEVIS' => $this->input->post('AUTHOR_DEVIS'),
				'COEFFICIENT_DEVIS' => $this->input->post('COEFFICIENT_DEVIS'),
				'TOTAL_DEVIS' => $this->input->post('TOTAL_DEVIS'),
				'TOTAL_FINAL_DEVIS' => $this->input->post('TOTAL_FINAL_DEVIS'),
				'TYPE_DELAY_DEVIS' => $this->input->post('TYPE_DELAY_DEVIS'),
				'TEMPS_DELAY_DEVIS' => $this->input->post('TEMPS_DELAY_DEVIS'),
				'COND_PAID_DEVIS' => $this->input->post('COND_PAID_DEVIS'),
				'PERCENT_PAID_DEVIS' => $this->input->post('PERCENT_PAID_DEVIS'),
				'PERCENT_PAID_LIVR_DEVIS' => $this->input->post('PERCENT_PAID_LIVR_DEVIS'),
				'VALID_OFFRE_DEVIS' => $this->input->post('VALID_OFFRE_DEVIS'),
				'STATUT_DEVIS' => $this->input->post('STATUT_DEVIS'),
			];

			
			$save_pos_store_2_ibi_devis = $this->model_pos_store_2_ibi_devis->store($save_data);

			if ($save_pos_store_2_ibi_devis) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_pos_store_2_ibi_devis;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/pos_store_2_ibi_devis/edit/' . $save_pos_store_2_ibi_devis, 'Edit Pos Store 2 Ibi Devis'),
						anchor('administrator/pos_store_2_ibi_devis', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/pos_store_2_ibi_devis/edit/' . $save_pos_store_2_ibi_devis, 'Edit Pos Store 2 Ibi Devis')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_devis');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_devis');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Store 2 Ibi Deviss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('pos_store_2_ibi_devis_update');

		$this->data['pos_store_2_ibi_devis'] = $this->model_pos_store_2_ibi_devis->find($id);

		$this->template->title('Pos Store 2 Ibi Devis Update');
		$this->render('backend/standart/administrator/pos_store_2_ibi_devis/pos_store_2_ibi_devis_update', $this->data);
	}

	/**
	* Update Pos Store 2 Ibi Deviss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('pos_store_2_ibi_devis_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('TITRE_DEVIS', 'TITRE DEVIS', 'trim|required');
		$this->form_validation->set_rules('REF_CLIENT_DEVIS', 'REF CLIENT DEVIS', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'TITRE_DEVIS' => $this->input->post('TITRE_DEVIS'),
				'CODE_DEVIS' => $this->input->post('CODE_DEVIS'),
				'REF_CLIENT_DEVIS' => $this->input->post('REF_CLIENT_DEVIS'),
				'TYPE_DEVIS' => $this->input->post('TYPE_DEVIS'),
				'DATE_CREATION_DEVIS' => $this->input->post('DATE_CREATION_DEVIS'),
				'DATE_MOD_DEVIS' => $this->input->post('DATE_MOD_DEVIS'),
				'AUTHOR_DEVIS' => $this->input->post('AUTHOR_DEVIS'),
				'COEFFICIENT_DEVIS' => $this->input->post('COEFFICIENT_DEVIS'),
				'TOTAL_DEVIS' => $this->input->post('TOTAL_DEVIS'),
				'TOTAL_FINAL_DEVIS' => $this->input->post('TOTAL_FINAL_DEVIS'),
				'TYPE_DELAY_DEVIS' => $this->input->post('TYPE_DELAY_DEVIS'),
				'TEMPS_DELAY_DEVIS' => $this->input->post('TEMPS_DELAY_DEVIS'),
				'COND_PAID_DEVIS' => $this->input->post('COND_PAID_DEVIS'),
				'PERCENT_PAID_DEVIS' => $this->input->post('PERCENT_PAID_DEVIS'),
				'PERCENT_PAID_LIVR_DEVIS' => $this->input->post('PERCENT_PAID_LIVR_DEVIS'),
				'VALID_OFFRE_DEVIS' => $this->input->post('VALID_OFFRE_DEVIS'),
				'STATUT_DEVIS' => $this->input->post('STATUT_DEVIS'),
			];

			
			$save_pos_store_2_ibi_devis = $this->model_pos_store_2_ibi_devis->change($id, $save_data);

			if ($save_pos_store_2_ibi_devis) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/pos_store_2_ibi_devis', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_devis');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_devis');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Deviss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('pos_store_2_ibi_devis_delete');

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
            set_message(cclang('has_been_deleted', 'pos_store_2_ibi_devis'), 'success');
        } else {
            set_message(cclang('error_delete', 'pos_store_2_ibi_devis'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Store 2 Ibi Deviss
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('pos_store_2_ibi_devis_view');

		$this->data['pos_store_2_ibi_devis'] = $this->model_pos_store_2_ibi_devis->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Pos Store 2 Ibi Devis Detail');
		$this->render('backend/standart/administrator/pos_store_2_ibi_devis/pos_store_2_ibi_devis_view', $this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Deviss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$pos_store_2_ibi_devis = $this->model_pos_store_2_ibi_devis->find($id);

		
		
		return $this->model_pos_store_2_ibi_devis->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('pos_store_2_ibi_devis_export');

		$this->model_pos_store_2_ibi_devis->export('pos_store_2_ibi_devis', 'pos_store_2_ibi_devis');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('pos_store_2_ibi_devis_export');

		$this->model_pos_store_2_ibi_devis->pdf('pos_store_2_ibi_devis', 'pos_store_2_ibi_devis');
	}
}


/* End of file pos_store_2_ibi_devis.php */
/* Location: ./application/controllers/administrator/Pos Store 2 Ibi Devis.php */