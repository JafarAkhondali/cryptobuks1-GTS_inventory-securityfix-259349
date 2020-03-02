<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Fiche Travail Controller
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Fiche Travail site
*|
*/
class Pos_store_2_ibi_fiche_travail extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_pos_store_2_ibi_fiche_travail');
	}

	/**
	* show all Pos Store 2 Ibi Fiche Travails
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('pos_store_2_ibi_fiche_travail_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_store_2_ibi_fiche_travails'] = $this->model_pos_store_2_ibi_fiche_travail->get($filter, $field, $this->limit_page, $offset);
		$this->data['pos_store_2_ibi_fiche_travail_counts'] = $this->model_pos_store_2_ibi_fiche_travail->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_store_2_ibi_fiche_travail/index/',
			'total_rows'   => $this->model_pos_store_2_ibi_fiche_travail->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Pos Store 2 Ibi Fiche Travail List');
		$this->render('backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_list', $this->data);
	}
	
	/**
	* Add new pos_store_2_ibi_fiche_travails
	*
	*/
	public function add()
	{
		$this->is_allowed('pos_store_2_ibi_fiche_travail_add');

		$this->template->title('Pos Store 2 Ibi Fiche Travail New');
		$this->render('backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_add', $this->data);
	}

	/**
	* Add New Pos Store 2 Ibi Fiche Travails
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('pos_store_2_ibi_fiche_travail_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('TITRE_FICHE', 'TITRE FICHE', 'trim|required');
		$this->form_validation->set_rules('REF_CLIENT_FICHE', 'REF CLIENT FICHE', 'trim|required');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'TITRE_FICHE' => $this->input->post('TITRE_FICHE'),
				'DEVIS_CODE_FICHE' => $this->input->post('DEVIS_CODE_FICHE'),
				'NUMERO_FICHE' => $this->input->post('NUMERO_FICHE'),
				'REF_CLIENT_FICHE' => $this->input->post('REF_CLIENT_FICHE'),
				'TYPE_DEVIS_FICHE' => $this->input->post('TYPE_DEVIS_FICHE'),
				'DATE_CREATION_FICHE' => $this->input->post('DATE_CREATION_FICHE'),
				'DATE_MOD_FICHE' => $this->input->post('DATE_MOD_FICHE'),
				'AUTHOR_FICHE' => get_user_data('id'),				'REF_CATEGORIE_FICHE' => $this->input->post('REF_CATEGORIE_FICHE'),
				'TOTAL_FICHE' => $this->input->post('TOTAL_FICHE'),
				'STATUT_FICHE' => $this->input->post('STATUT_FICHE'),
			];

			
			$save_pos_store_2_ibi_fiche_travail = $this->model_pos_store_2_ibi_fiche_travail->store($save_data);

			if ($save_pos_store_2_ibi_fiche_travail) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_pos_store_2_ibi_fiche_travail;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/pos_store_2_ibi_fiche_travail/edit/' . $save_pos_store_2_ibi_fiche_travail, 'Edit Pos Store 2 Ibi Fiche Travail'),
						anchor('administrator/pos_store_2_ibi_fiche_travail', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/pos_store_2_ibi_fiche_travail/edit/' . $save_pos_store_2_ibi_fiche_travail, 'Edit Pos Store 2 Ibi Fiche Travail')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_fiche_travail');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_fiche_travail');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Store 2 Ibi Fiche Travails
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('pos_store_2_ibi_fiche_travail_update');

		$this->data['pos_store_2_ibi_fiche_travail'] = $this->model_pos_store_2_ibi_fiche_travail->find($id);

		$this->template->title('Pos Store 2 Ibi Fiche Travail Update');
		$this->render('backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update', $this->data);
	}

	/**
	* Update Pos Store 2 Ibi Fiche Travails
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('pos_store_2_ibi_fiche_travail_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('TITRE_FICHE', 'TITRE FICHE', 'trim|required');
		$this->form_validation->set_rules('REF_CLIENT_FICHE', 'REF CLIENT FICHE', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'TITRE_FICHE' => $this->input->post('TITRE_FICHE'),
				'DEVIS_CODE_FICHE' => $this->input->post('DEVIS_CODE_FICHE'),
				'NUMERO_FICHE' => $this->input->post('NUMERO_FICHE'),
				'REF_CLIENT_FICHE' => $this->input->post('REF_CLIENT_FICHE'),
				'TYPE_DEVIS_FICHE' => $this->input->post('TYPE_DEVIS_FICHE'),
				'DATE_CREATION_FICHE' => $this->input->post('DATE_CREATION_FICHE'),
				'DATE_MOD_FICHE' => $this->input->post('DATE_MOD_FICHE'),
				'AUTHOR_FICHE' => get_user_data('id'),				'REF_CATEGORIE_FICHE' => $this->input->post('REF_CATEGORIE_FICHE'),
				'TOTAL_FICHE' => $this->input->post('TOTAL_FICHE'),
				'STATUT_FICHE' => $this->input->post('STATUT_FICHE'),
			];

			
			$save_pos_store_2_ibi_fiche_travail = $this->model_pos_store_2_ibi_fiche_travail->change($id, $save_data);

			if ($save_pos_store_2_ibi_fiche_travail) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/pos_store_2_ibi_fiche_travail', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_fiche_travail');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_fiche_travail');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Fiche Travails
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('pos_store_2_ibi_fiche_travail_delete');

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
            set_message(cclang('has_been_deleted', 'pos_store_2_ibi_fiche_travail'), 'success');
        } else {
            set_message(cclang('error_delete', 'pos_store_2_ibi_fiche_travail'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Store 2 Ibi Fiche Travails
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('pos_store_2_ibi_fiche_travail_view');

		$this->data['pos_store_2_ibi_fiche_travail'] = $this->model_pos_store_2_ibi_fiche_travail->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Pos Store 2 Ibi Fiche Travail Detail');
		$this->render('backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_view', $this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Fiche Travails
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$pos_store_2_ibi_fiche_travail = $this->model_pos_store_2_ibi_fiche_travail->find($id);

		
		
		return $this->model_pos_store_2_ibi_fiche_travail->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('pos_store_2_ibi_fiche_travail_export');

		$this->model_pos_store_2_ibi_fiche_travail->export('pos_store_2_ibi_fiche_travail', 'pos_store_2_ibi_fiche_travail');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('pos_store_2_ibi_fiche_travail_export');

		$this->model_pos_store_2_ibi_fiche_travail->pdf('pos_store_2_ibi_fiche_travail', 'pos_store_2_ibi_fiche_travail');
	}
}


/* End of file pos_store_2_ibi_fiche_travail.php */
/* Location: ./application/controllers/administrator/Pos Store 2 Ibi Fiche Travail.php */