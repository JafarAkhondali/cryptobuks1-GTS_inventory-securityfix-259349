<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Eleve Controller
*| --------------------------------------------------------------------------
*| Eleve site
*|
*/
class Eleve extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_eleve');
	}

	/**
	* show all Eleves
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('eleve_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['eleves'] = $this->model_eleve->get($filter, $field, $this->limit_page, $offset);
		$this->data['eleve_counts'] = $this->model_eleve->count_all($filter, $field);
		// $this->data['user']=$this->model_eleve->get_user_info('aauth_users',$id,'id');

		$config = [
			'base_url'     => 'administrator/eleve/index/',
			'total_rows'   => $this->model_eleve->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Etudiant List');

		$this->render('backend/standart/administrator/eleve/eleve_list', $this->data);
	}
	
	/**
	* Add new eleves
	*
	*/
	public function add()
	{
		$this->is_allowed('eleve_add');

		$this->template->title('Etudiant New');
		$this->render('backend/standart/administrator/eleve/eleve_add', $this->data);
	}

	/**
	* Add New Eleves
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('eleve_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('nom', 'Nom:', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('age', 'Age:', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('classe', 'Classe', 'trim|required|max_length[11]');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'nom' => $this->input->post('nom'),
				'age' => $this->input->post('age'),
				'classe' => $this->input->post('classe'),
				'date_creation' => date('Y-m-d H:i:s'),
				'created_by' => get_user_data('id'),			];

			
			$save_eleve = $this->model_eleve->store($save_data);

			if ($save_eleve) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_eleve;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/eleve/edit/' . $save_eleve, 'Edit Eleve'),
						anchor('administrator/eleve', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/eleve/edit/' . $save_eleve, 'Edit Eleve')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/eleve');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/eleve');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Eleves
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('eleve_update');

		$this->data['eleve'] = $this->model_eleve->find($id);

		$this->template->title('Etudiant Update');
		$this->render('backend/standart/administrator/eleve/eleve_update', $this->data);
	}

	/**
	* Update Eleves
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('eleve_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('nom', 'Nom:', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('age', 'Age:', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('classe', 'Classe', 'trim|required|max_length[11]');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'nom' => $this->input->post('nom'),
				'age' => $this->input->post('age'),
				'classe' => $this->input->post('classe'),
				'date_modified' => date('Y-m-d H:i:s'),
				'modified_by' => get_user_data('id'),			];

			
			$save_eleve = $this->model_eleve->change($id, $save_data);

			if ($save_eleve) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/eleve', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/eleve');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/eleve');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Eleves
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('eleve_delete');

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
            set_message(cclang('has_been_deleted', 'eleve'), 'success');
        } else {
            set_message(cclang('error_delete', 'eleve'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Eleves
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('eleve_view');

		$this->data['eleve'] = $this->model_eleve->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Etudiant Detail');
		$this->render('backend/standart/administrator/eleve/eleve_view', $this->data);
	}
	
	/**
	* delete Eleves
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$eleve = $this->model_eleve->find($id);

		
		
		return $this->model_eleve->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('eleve_export');

		$this->model_eleve->export('eleve', 'eleve');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('eleve_export');

		$this->model_eleve->pdf('eleve', 'eleve');
	}

	//get user credetianls
	// public function get_user($id,$contrainte)
	// {
	// 	return $this->model_eleve->get_user_info('aauth_users',$id,$contrainte);
	// }

}


/* End of file eleve.php */
/* Location: ./application/controllers/administrator/Eleve.php */