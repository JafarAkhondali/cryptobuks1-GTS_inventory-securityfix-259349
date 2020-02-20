<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Ibi Fournisseurs Controller
*| --------------------------------------------------------------------------
*| Pos Ibi Fournisseurs site
*|
*/
class Pos_ibi_fournisseurs extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_pos_ibi_fournisseurs');
		//$this->load->model('model_eleve');
	}

	/**
	* show all Pos Ibi Fournisseurss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('pos_ibi_fournisseurs_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_ibi_fournisseurss'] = $this->model_pos_ibi_fournisseurs->get($filter, $field, $this->limit_page, $offset);
		$this->data['pos_ibi_fournisseurs_counts'] = $this->model_pos_ibi_fournisseurs->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_ibi_fournisseurs/index/',
			'total_rows'   => $this->model_pos_ibi_fournisseurs->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Fournisseurs List');
		$this->render('backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list', $this->data);
	}
	
	/**
	* Add new pos_ibi_fournisseurss
	*
	*/
	public function add()
	{
		$this->is_allowed('pos_ibi_fournisseurs_add');

		$this->template->title('Fournisseurs New');
		$this->render('backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_add', $this->data);
	}

	/**
	* Add New Pos Ibi Fournisseurss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('pos_ibi_fournisseurs_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('NOM', 'NOM', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('BP', 'BP', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('TEL', 'TEL', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('EMAIL', 'EMAIL', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('DESCRIPTION', 'DESCRIPTION', 'trim|required');
		

		if ($this->form_validation->run()) {
		
			$save_data = [
				'NOM' => $this->input->post('NOM'),
				'BP' => $this->input->post('BP'),
				'TEL' => $this->input->post('TEL'),
				'EMAIL' => $this->input->post('EMAIL'),
				'DATE_CREATION' => date('Y-m-d H:i:s'),
				'AUTHOR' => get_user_data('id'),				'DESCRIPTION' => $this->input->post('DESCRIPTION'),
			];

			
			$save_pos_ibi_fournisseurs = $this->model_pos_ibi_fournisseurs->store($save_data);

			if ($save_pos_ibi_fournisseurs) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_pos_ibi_fournisseurs;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/pos_ibi_fournisseurs/edit/' . $save_pos_ibi_fournisseurs, 'Edit Pos Ibi Fournisseurs'),
						anchor('administrator/pos_ibi_fournisseurs', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/pos_ibi_fournisseurs/edit/' . $save_pos_ibi_fournisseurs, 'Edit Pos Ibi Fournisseurs')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_ibi_fournisseurs');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_ibi_fournisseurs');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Ibi Fournisseurss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('pos_ibi_fournisseurs_update');

		$this->data['pos_ibi_fournisseurs'] = $this->model_pos_ibi_fournisseurs->find($id);

		$this->template->title('Fournisseurs Update');
		$this->render('backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_update', $this->data);
	}

	/**
	* Update Pos Ibi Fournisseurss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('pos_ibi_fournisseurs_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('NOM', 'NOM', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('BP', 'BP', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('TEL', 'TEL', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('EMAIL', 'EMAIL', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('DESCRIPTION', 'DESCRIPTION', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'NOM' => $this->input->post('NOM'),
				'BP' => $this->input->post('BP'),
				'TEL' => $this->input->post('TEL'),
				'EMAIL' => $this->input->post('EMAIL'),
				'DATE_MOD' => date('Y-m-d H:i:s'),
				'DESCRIPTION' => $this->input->post('DESCRIPTION'),
			];

			
			$save_pos_ibi_fournisseurs = $this->model_pos_ibi_fournisseurs->change($id, $save_data);

			if ($save_pos_ibi_fournisseurs) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/pos_ibi_fournisseurs', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_ibi_fournisseurs');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_ibi_fournisseurs');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Ibi Fournisseurss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('pos_ibi_fournisseurs_delete');

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
            set_message(cclang('has_been_deleted', 'pos_ibi_fournisseurs'), 'success');
        } else {
            set_message(cclang('error_delete', 'pos_ibi_fournisseurs'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Ibi Fournisseurss
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('pos_ibi_fournisseurs_view');

		$this->data['pos_ibi_fournisseurs'] = $this->model_pos_ibi_fournisseurs->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Fournisseurs Detail');
		$this->render('backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_view', $this->data);
	}
	
	/**
	* delete Pos Ibi Fournisseurss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$pos_ibi_fournisseurs = $this->model_pos_ibi_fournisseurs->find($id);

		
		
		return $this->model_pos_ibi_fournisseurs->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('pos_ibi_fournisseurs_export');

		$this->model_pos_ibi_fournisseurs->export('pos_ibi_fournisseurs', 'pos_ibi_fournisseurs');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('pos_ibi_fournisseurs_export');

		$this->model_pos_ibi_fournisseurs->pdf('pos_ibi_fournisseurs', 'pos_ibi_fournisseurs');
	}
}


/* End of file pos_ibi_fournisseurs.php */
/* Location: ./application/controllers/administrator/Pos Ibi Fournisseurs.php */