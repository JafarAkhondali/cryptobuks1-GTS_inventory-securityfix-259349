<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Ibi Clients Controller
*| --------------------------------------------------------------------------
*| Pos Ibi Clients site
*|
*/
class Pos_ibi_clients extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_pos_ibi_clients');
		$this->load->model('model_pos_ibi_fournisseurs');
	}

	/**
	* show all Pos Ibi Clientss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('pos_ibi_clients_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_ibi_clientss'] = $this->model_pos_ibi_clients->get($filter, $field, $this->limit_page, $offset);
		$this->data['pos_ibi_clients_counts'] = $this->model_pos_ibi_clients->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_ibi_clients/index/',
			'total_rows'   => $this->model_pos_ibi_clients->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Clients List');
		$this->render('backend/standart/administrator/pos_ibi_clients/pos_ibi_clients_list', $this->data);
	}
	
	/**
	* Add new pos_ibi_clientss
	*
	*/
	public function add()
	{
		$this->is_allowed('pos_ibi_clients_add');

		$this->template->title('Clients New');
		$this->render('backend/standart/administrator/pos_ibi_clients/pos_ibi_clients_add', $this->data);
	}

	/**
	* Add New Pos Ibi Clientss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('pos_ibi_clients_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('NOM_CLIENT', 'Nom', 'trim|required');
		$this->form_validation->set_rules('PRENOM_CLIENT', 'Prenom', 'trim|required');
		$this->form_validation->set_rules('TEL_CLIENT', 'Telephone', 'trim|required');
		$this->form_validation->set_rules('EMAIL_CLIENT', 'Email', 'trim|required');
		$this->form_validation->set_rules('DATE_NAISSANCE_CLIENT', 'Date De Naissance', 'trim|required');
		$this->form_validation->set_rules('CITY_CLIENT', 'Ville', 'trim|required');
		$this->form_validation->set_rules('COUNTRY_CLIENT', 'Pays', 'trim|required');
		$this->form_validation->set_rules('COMPANY_NAME_CLIENT', 'NIF Du Client', 'trim|required');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'NOM_CLIENT' => $this->input->post('NOM_CLIENT'),
				'PRENOM_CLIENT' => $this->input->post('PRENOM_CLIENT'),
				'TEL_CLIENT' => $this->input->post('TEL_CLIENT'),
				'EMAIL_CLIENT' => $this->input->post('EMAIL_CLIENT'),
				'DESCRIPTION_CLIENT' => $this->input->post('DESCRIPTION_CLIENT'),
				'DATE_NAISSANCE_CLIENT' => $this->input->post('DATE_NAISSANCE_CLIENT'),
				'CITY_CLIENT' => $this->input->post('CITY_CLIENT'),
				'COUNTRY_CLIENT' => $this->input->post('COUNTRY_CLIENT'),
				'COMPANY_NAME_CLIENT' => $this->input->post('COMPANY_NAME_CLIENT'),
				'DATE_CREATION_CLIENT' => date('Y-m-d H:i:s'),
				'DATE_MOD_CLIENT' => date('Y-m-d H:i:s'),
				'REF_GROUP_CLIENT' => $this->input->post('REF_GROUP_CLIENT'),
				'AUTHOR_CLIENT' => get_user_data('id'),			];

			
			$save_pos_ibi_clients = $this->model_pos_ibi_clients->store($save_data);

			if ($save_pos_ibi_clients) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_pos_ibi_clients;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/pos_ibi_clients/edit/' . $save_pos_ibi_clients, 'Edit Pos Ibi Clients'),
						anchor('administrator/pos_ibi_clients', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/pos_ibi_clients/edit/' . $save_pos_ibi_clients, 'Edit Pos Ibi Clients')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_ibi_clients');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_ibi_clients');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Ibi Clientss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('pos_ibi_clients_update');

		$this->data['pos_ibi_clients'] = $this->model_pos_ibi_clients->find($id);

		$this->template->title('Clients Update');
		$this->render('backend/standart/administrator/pos_ibi_clients/pos_ibi_clients_update', $this->data);
	}

	/**
	* Update Pos Ibi Clientss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('pos_ibi_clients_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('NOM_CLIENT', 'Nom', 'trim|required');
		$this->form_validation->set_rules('PRENOM_CLIENT', 'Prenom', 'trim|required');
		$this->form_validation->set_rules('TEL_CLIENT', 'Telephone', 'trim|required');
		$this->form_validation->set_rules('EMAIL_CLIENT', 'Email', 'trim|required');
		$this->form_validation->set_rules('DATE_NAISSANCE_CLIENT', 'Date De Naissance', 'trim|required');
		$this->form_validation->set_rules('CITY_CLIENT', 'Ville', 'trim|required');
		$this->form_validation->set_rules('COUNTRY_CLIENT', 'Pays', 'trim|required');
		$this->form_validation->set_rules('COMPANY_NAME_CLIENT', 'NIF Du Client', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'NOM_CLIENT' => $this->input->post('NOM_CLIENT'),
				'PRENOM_CLIENT' => $this->input->post('PRENOM_CLIENT'),
				'TEL_CLIENT' => $this->input->post('TEL_CLIENT'),
				'EMAIL_CLIENT' => $this->input->post('EMAIL_CLIENT'),
				'DESCRIPTION_CLIENT' => $this->input->post('DESCRIPTION_CLIENT'),
				'DATE_NAISSANCE_CLIENT' => $this->input->post('DATE_NAISSANCE_CLIENT'),
				'CITY_CLIENT' => $this->input->post('CITY_CLIENT'),
				'COUNTRY_CLIENT' => $this->input->post('COUNTRY_CLIENT'),
				'COMPANY_NAME_CLIENT' => $this->input->post('COMPANY_NAME_CLIENT'),
				'DATE_CREATION_CLIENT' => date('Y-m-d H:i:s'),
				'DATE_MOD_CLIENT' => date('Y-m-d H:i:s'),
				'REF_GROUP_CLIENT' => $this->input->post('REF_GROUP_CLIENT'),
				'AUTHOR_CLIENT' => get_user_data('id'),			];

			
			$save_pos_ibi_clients = $this->model_pos_ibi_clients->change($id, $save_data);

			if ($save_pos_ibi_clients) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/pos_ibi_clients', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_ibi_clients');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_ibi_clients');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Ibi Clientss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('pos_ibi_clients_delete');

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
            set_message(cclang('has_been_deleted', 'pos_ibi_clients'), 'success');
        } else {
            set_message(cclang('error_delete', 'pos_ibi_clients'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Ibi Clientss
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('pos_ibi_clients_view');

		$this->data['pos_ibi_clients'] = $this->model_pos_ibi_clients->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Clients Detail');
		$this->render('backend/standart/administrator/pos_ibi_clients/pos_ibi_clients_view', $this->data);
	}
	
	/**
	* delete Pos Ibi Clientss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$pos_ibi_clients = $this->model_pos_ibi_clients->find($id);

		
		
		return $this->model_pos_ibi_clients->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('pos_ibi_clients_export');

		$this->model_pos_ibi_clients->export('pos_ibi_clients', 'pos_ibi_clients');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('pos_ibi_clients_export');

		$this->model_pos_ibi_clients->pdf('pos_ibi_clients', 'pos_ibi_clients');
	}
}


/* End of file pos_ibi_clients.php */
/* Location: ./application/controllers/administrator/Pos Ibi Clients.php */