<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class client_file extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_client_file');
		$this->load->model('model_registers');
	}

	public function index($store,$offset = 0)
	{
		$this->is_allowed('client_file_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['client_files'] = $this->model_client_file->get($filter, $field, $this->limit_page, $offset);
		$this->data['client_file_counts'] = $this->model_client_file->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/client_file/index/',
			'total_rows'   => $this->model_client_file->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Fiches de clients');
		$this->render('backend/standart/administrator/client_file/client_file_list', $this->data);
	}
	
	public function add($store,$id){

		$this->is_allowed('file_client_add');
        
        $id = $this->uri->segment(5);
        $store_prefix = 'store_'.$store;
		$file = $this->model_registers->getOne('pos_'.$store_prefix.'_ibi_client_file',array('PROFORMA_ID_CLIENT_FILE'=>$id));
	  
		if($file == ''){

			$proforma = $this->model_registers->getOne('pos_'.$store_prefix.'_ibi_proforma',array('ID_PROFORMA'=>$id));
		$this->data['client_data'] = $this->model_registers->getOne('pos_ibi_clients',array('ID_CLIENT'=>$proforma['REF_CLIENT_PROFORMA']));
		$this->data['proforma'] = $proforma;

		$this->template->title('Fiche du client');
		$this->render('backend/standart/administrator/client_file/client_file_add', $this->data);


		}else{
        
			redirect(base_url('administrator/client_file/view/'.$store.'/'.$file['ID_CLIENT_FILE']));

			
		}

		
     
	}
	public function add_save()
	{
		if (!$this->is_allowed('client_file_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		$this->form_validation->set_rules('purchase_number_file', 'Number purchase client file', 'trim|required');
		

		if ($this->form_validation->run()) {
			$store_prefix=$this->input->post('store_prefix');
			$store_uri=$this->input->post('store_uri');
			$bon_commande_client_file = $this->input->post('bon_commande_client_file');
			$bon_commande_client_file_name = $this->input->post('bon_commande_client_file_name');
			$file_commissioning = $this->input->post('file_commissioning');
			$file_commissioning_name = $this->input->post('file_commissioning_name');
			$file_contrat_garantie = $this->input->post('file_contrat_garantie');
			$file_contrat_garantie_name = $this->input->post('file_contrat_garantie_name');
			$file_contrat_maintenance = $this->input->post('file_contrat_maintenance');
			$file_contrat_maintenance_name = $this->input->post('file_contrat_maintenance_name');
		
			$save_data = [
				'PROFORMA_ID_CLIENT_FILE' => $this->input->post('proforma_ids'),
				'REF_CLIENT_FILE' => $this->input->post('client_id'),
				'REF_PROFORMA_CODE_CLIENT_FILE' => $this->input->post('proforma_codes'),
				'NUMBER_PURCHASE_CLIENT_FILE' => $this->input->post('purchase_number_file'),
				'INVOICE_NUMBER_CLIENT_FILE' => $this->model_client_file->shuffle_code_file(),
				'DATE_CREATION_CLIENT_FILE' => date('Y-m-d H:i:s'),
				'OPERATING_STATUT' =>1,
				'AUTHOR' => get_user_data('id'),
			];

			if (!is_dir(FCPATH . '/uploads/client_file/')) {
				mkdir(FCPATH . '/uploads/client_file/');
			}

			if (!empty($bon_commande_client_file_name)) {
				$bon_commande_client_file_name_copy = date('YmdHis') . '-' . $bon_commande_client_file_name;

				rename(FCPATH . 'uploads/tmp/' . $bon_commande_client_file . '/' . $bon_commande_client_file_name, 
						FCPATH . 'uploads/client_file/' . $bon_commande_client_file_name_copy);

				if (!is_file(FCPATH . '/uploads/client_file/' . $bon_commande_client_file_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['FILE_PURCHASE_CLIENT_FILE'] = $bon_commande_client_file_name_copy;
			}
		
			if (!empty($file_commissioning_name)) {
				$file_commissioning_name_copy = date('YmdHis') . '-' . $file_commissioning_name;

				rename(FCPATH . 'uploads/tmp/' . $file_commissioning . '/' . $file_commissioning_name, 
						FCPATH . 'uploads/client_file/' . $file_commissioning_name_copy);

				if (!is_file(FCPATH . '/uploads/client_file/' . $file_commissioning_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['COMMISSIONING_CLIENT_FILE'] = $file_commissioning_name_copy;
			}
		
			if (!empty($file_contrat_garantie_name)) {
				$file_contrat_garantie_name_copy = date('YmdHis') . '-' . $file_contrat_garantie_name;

				rename(FCPATH . 'uploads/tmp/' . $file_contrat_garantie . '/' . $file_contrat_garantie_name, 
						FCPATH . 'uploads/client_file/' . $file_contrat_garantie_name_copy);

				if (!is_file(FCPATH . '/uploads/client_file/' . $file_contrat_garantie_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['CONTRAT_GARANTIE_CLIENT_FILE'] = $file_contrat_garantie_name_copy;
			}
		
			if (!empty($file_contrat_maintenance_name)) {
				$file_contrat_maintenance_name_copy = date('YmdHis') . '-' . $file_contrat_maintenance_name;

				rename(FCPATH . 'uploads/tmp/' . $file_contrat_maintenance . '/' . $file_contrat_maintenance_name, 
						FCPATH . 'uploads/client_file/' . $file_contrat_maintenance_name_copy);

				if (!is_file(FCPATH . '/uploads/client_file/' . $file_contrat_maintenance_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['CONTRAT_MAINTENANCE_CLIENT_FILE'] = $file_contrat_maintenance_name_copy;
			}
		
			
			$save_client_file = $this->model_registers->insert('pos_'.$store_prefix.'_ibi_client_file',$save_data);

			if ($save_client_file) {

                $table = 'pos_'.$store_prefix.'_ibi_proforma';
				$update_proforma = $this->model_registers->update($table,array('ID_PROFORMA'=>$this->input->post('proforma_ids')),array('STATUT_PROFORMA' => 1));

				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_client_file;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/client_file/edit/'.$store_uri.'/' . $save_client_file, 'Edit Pos Store 2 Ibi Client File'),
						anchor('administrator/client_file', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/client_file/edit/'.$store_uri.'/' . $save_client_file, 'Edit Pos Store 2 Ibi Client File')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/client_file/index/'.$store_uri.'');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/client_file/index/'.$store_uri.'');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	public function edit($id)
	{
		$this->is_allowed('client_file_update');

		$this->data['client_file'] = $this->model_client_file->find($id);

		$this->template->title('Pos Store 2 Ibi Client File Update');
		$this->render('backend/standart/administrator/client_file/client_file_update', $this->data);
	}

	public function edit_save($id)
	{
		if (!$this->is_allowed('client_file_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('PROFORMA_ID_CLIENT_FILE', 'PROFORMA ID CLIENT FILE', 'trim|required');
		$this->form_validation->set_rules('REF_CLIENT_FILE', 'REF CLIENT FILE', 'trim|required');
		$this->form_validation->set_rules('REF_PROFORMA_CODE_CLIENT_FILE', 'REF PROFORMA CODE CLIENT FILE', 'trim|required');
		$this->form_validation->set_rules('NUMBER_PURCHASE_CLIENT_FILE', 'NUMBER PURCHASE CLIENT FILE', 'trim|required');
		
		if ($this->form_validation->run()) {
			$bon_commande_client_file = $this->input->post('bon_commande_client_file');
			$bon_commande_client_file_name = $this->input->post('bon_commande_client_file_name');
			$file_commissioning = $this->input->post('file_commissioning');
			$file_commissioning_name = $this->input->post('file_commissioning_name');
			$file_contrat_garantie = $this->input->post('file_contrat_garantie');
			$file_contrat_garantie_name = $this->input->post('file_contrat_garantie_name');
			$file_contrat_maintenance = $this->input->post('file_contrat_maintenance');
			$file_contrat_maintenance_name = $this->input->post('file_contrat_maintenance_name');
		
			$save_data = [
				'PROFORMA_ID_CLIENT_FILE' => $this->input->post('PROFORMA_ID_CLIENT_FILE'),
				'REF_CLIENT_FILE' => $this->input->post('REF_CLIENT_FILE'),
				'REF_PROFORMA_CODE_CLIENT_FILE' => $this->input->post('REF_PROFORMA_CODE_CLIENT_FILE'),
				'NUMBER_PURCHASE_CLIENT_FILE' => $this->input->post('NUMBER_PURCHASE_CLIENT_FILE'),
				'INVOICE_NUMBER_CLIENT_FILE' => $this->input->post('INVOICE_NUMBER_CLIENT_FILE'),
				'DATE_CREATION_CLIENT_FILE' => date('Y-m-d H:i:s'),
				'DATE_MODIFICATION_CLIENT_FILE' => date('Y-m-d H:i:s'),
				'OPERATING_STATUT' => $this->input->post('OPERATING_STATUT'),
				'APPROUVE_BY' => $this->input->post('APPROUVE_BY'),
				'CLOSURE_DATE_CLIENT_FILE' => date('Y-m-d H:i:s'),
				'CLOSURE_BY_CLIENT_FILE' => $this->input->post('CLOSURE_BY_CLIENT_FILE'),
				'AUTHOR' => $this->input->post('AUTHOR'),
			];

			if (!is_dir(FCPATH . '/uploads/client_file/')) {
				mkdir(FCPATH . '/uploads/client_file/');
			}

			if (!empty($bon_commande_client_file)) {
				$bon_commande_client_file_name_copy = date('YmdHis') . '-' . $bon_commande_client_file_name;

				rename(FCPATH . 'uploads/tmp/' . $bon_commande_client_file . '/' . $bon_commande_client_file_name, 
						FCPATH . 'uploads/client_file/' . $bon_commande_client_file_name_copy);

				if (!is_file(FCPATH . '/uploads/client_file/' . $bon_commande_client_file_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['FILE_PURCHASE_CLIENT_FILE'] = $bon_commande_client_file_name_copy;
			}
		
			if (!empty($file_commissioning)) {
				$file_commissioning_name_copy = date('YmdHis') . '-' . $file_commissioning_name;

				rename(FCPATH . 'uploads/tmp/' . $file_commissioning . '/' . $file_commissioning_name, 
						FCPATH . 'uploads/client_file/' . $file_commissioning_name_copy);

				if (!is_file(FCPATH . '/uploads/client_file/' . $file_commissioning_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['COMMISSIONING_CLIENT_FILE'] = $file_commissioning_name_copy;
			}
		
			if (!empty($file_contrat_garantie)) {
				$file_contrat_garantie_name_copy = date('YmdHis') . '-' . $file_contrat_garantie_name;

				rename(FCPATH . 'uploads/tmp/' . $file_contrat_garantie . '/' . $file_contrat_garantie_name, 
						FCPATH . 'uploads/client_file/' . $file_contrat_garantie_name_copy);

				if (!is_file(FCPATH . '/uploads/client_file/' . $file_contrat_garantie_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['CONTRAT_GARANTIE_CLIENT_FILE'] = $file_contrat_garantie_name_copy;
			}
		
			if (!empty($file_contrat_maintenance)) {
				$file_contrat_maintenance_name_copy = date('YmdHis') . '-' . $file_contrat_maintenance_name;

				rename(FCPATH . 'uploads/tmp/' . $file_contrat_maintenance . '/' . $file_contrat_maintenance_name, 
						FCPATH . 'uploads/client_file/' . $file_contrat_maintenance_name_copy);

				if (!is_file(FCPATH . '/uploads/client_file/' . $file_contrat_maintenance_name_copy)) {
					echo json_encode([
						'success' => false,
						'message' => 'Error uploading file'
						]);
					exit;
				}

				$save_data['CONTRAT_MAINTENANCE_CLIENT_FILE'] = $file_contrat_maintenance_name_copy;
			}
		
			
			$save_client_file = $this->model_client_file->change($id, $save_data);

			if ($save_client_file) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/client_file', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/client_file');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/client_file');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Client Files
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('client_file_delete');

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
            set_message(cclang('has_been_deleted', 'client_file'), 'success');
        } else {
            set_message(cclang('error_delete', 'client_file'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Store 2 Ibi Client Files
	*
	* @var $id String
	*/
	public function view($store,$id)
	{
		$this->is_allowed('client_file_view');

		$id = $this->uri->segment(5);
        
		$this->data['client_file'] = $this->model_client_file->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Détail de la fiche');
		$this->render('backend/standart/administrator/client_file/client_file_view', $this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Client Files
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$client_file = $this->model_client_file->find($id);

		if (!empty($client_file->FILE_PURCHASE_CLIENT_FILE)) {
			$path = FCPATH . '/uploads/client_file/' . $client_file->FILE_PURCHASE_CLIENT_FILE;

			if (is_file($path)) {
				$delete_file = unlink($path);
			}
		}
		if (!empty($client_file->COMMISSIONING_CLIENT_FILE)) {
			$path = FCPATH . '/uploads/client_file/' . $client_file->COMMISSIONING_CLIENT_FILE;

			if (is_file($path)) {
				$delete_file = unlink($path);
			}
		}
		if (!empty($client_file->CONTRAT_GARANTIE_CLIENT_FILE)) {
			$path = FCPATH . '/uploads/client_file/' . $client_file->CONTRAT_GARANTIE_CLIENT_FILE;

			if (is_file($path)) {
				$delete_file = unlink($path);
			}
		}
		if (!empty($client_file->CONTRAT_MAINTENANCE_CLIENT_FILE)) {
			$path = FCPATH . '/uploads/client_file/' . $client_file->CONTRAT_MAINTENANCE_CLIENT_FILE;

			if (is_file($path)) {
				$delete_file = unlink($path);
			}
		}
		
		
		return $this->model_client_file->remove($id);
	}
	

	public function upload_client_file()
	{
		if (!$this->is_allowed('client_file_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$uuid = $this->input->post('qquuid');

		echo $this->upload_file([
			'uuid' 		 	=> $uuid,
			'table_name' 	=> 'client_file',
		]);
	}

	public function delete_client_file($uuid)
	{
		if (!$this->is_allowed('client_file_delete', false)) {
			echo json_encode([
				'success' => false,
				'error' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		echo $this->delete_file([
            'uuid'              => $uuid, 
            'delete_by'         => $this->input->get('by'), 
            'field_name'        => 'FILE_PURCHASE_CLIENT_FILE', 
            'upload_path_tmp'   => './uploads/tmp/',
            'table_name'        => 'client_file',
            'primary_key'       => 'ID_CLIENT_FILE',
            'upload_path'       => 'uploads/client_file/'
        ]);
	}

	public function get_client_file($id)
	{
		if (!$this->is_allowed('client_file_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => 'Image not loaded, you do not have permission to access'
				]);
			exit;
		}

		$client_file = $this->model_client_file->find($id);

		echo $this->get_file([
            'uuid'              => $id, 
            'delete_by'         => 'id', 
            'field_name'        => 'FILE_PURCHASE_CLIENT_FILE', 
            'table_name'        => 'client_file',
            'primary_key'       => 'ID_CLIENT_FILE',
            'upload_path'       => 'uploads/client_file/',
            'delete_endpoint'   => 'administrator/client_file/delete_FILE_PURCHASE_CLIENT_FILE_file'
        ]);
	}
	
	public function upload_commissioning_file()
	{
		if (!$this->is_allowed('client_file_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$uuid = $this->input->post('qquuid');

		echo $this->upload_file([
			'uuid' 		 	=> $uuid,
			'table_name' 	=> 'client_file',
		]);
	}

	public function delete_commissioning_file($uuid)
	{
		if (!$this->is_allowed('client_file_delete', false)) {
			echo json_encode([
				'success' => false,
				'error' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		echo $this->delete_file([
            'uuid'              => $uuid, 
            'delete_by'         => $this->input->get('by'), 
            'field_name'        => 'COMMISSIONING_CLIENT_FILE', 
            'upload_path_tmp'   => './uploads/tmp/',
            'table_name'        => 'client_file',
            'primary_key'       => 'ID_CLIENT_FILE',
            'upload_path'       => 'uploads/client_file/'
        ]);
	}

	public function get_commissioning_file($id)
	{
		if (!$this->is_allowed('client_file_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => 'Image not loaded, you do not have permission to access'
				]);
			exit;
		}

		$client_file = $this->model_client_file->find($id);

		echo $this->get_file([
            'uuid'              => $id, 
            'delete_by'         => 'id', 
            'field_name'        => 'COMMISSIONING_CLIENT_FILE', 
            'table_name'        => 'client_file',
            'primary_key'       => 'ID_CLIENT_FILE',
            'upload_path'       => 'uploads/client_file/',
            'delete_endpoint'   => 'administrator/client_file/delete_COMMISSIONING_CLIENT_FILE_file'
        ]);
	}

	public function upload_contant_garantie_file()
	{
		if (!$this->is_allowed('client_file_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$uuid = $this->input->post('qquuid');

		echo $this->upload_file([
			'uuid' 		 	=> $uuid,
			'table_name' 	=> 'client_file',
		]);
	}

	public function delete_contant_garantie_file($uuid)
	{
		if (!$this->is_allowed('client_file_delete', false)) {
			echo json_encode([
				'success' => false,
				'error' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		echo $this->delete_file([
            'uuid'              => $uuid, 
            'delete_by'         => $this->input->get('by'), 
            'field_name'        => 'CONTRAT_GARANTIE_CLIENT_FILE', 
            'upload_path_tmp'   => './uploads/tmp/',
            'table_name'        => 'client_file',
            'primary_key'       => 'ID_CLIENT_FILE',
            'upload_path'       => 'uploads/client_file/'
        ]);
	}

	public function get_contant_garantie_file($id)
	{
		if (!$this->is_allowed('client_file_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => 'Image not loaded, you do not have permission to access'
				]);
			exit;
		}

		$client_file = $this->model_client_file->find($id);

		echo $this->get_file([
            'uuid'              => $id, 
            'delete_by'         => 'id', 
            'field_name'        => 'CONTRAT_GARANTIE_CLIENT_FILE', 
            'table_name'        => 'client_file',
            'primary_key'       => 'ID_CLIENT_FILE',
            'upload_path'       => 'uploads/client_file/',
            'delete_endpoint'   => 'administrator/client_file/delete_CONTRAT_GARANTIE_CLIENT_FILE_file'
        ]);
	}
	
	public function upload_contrat_maintenance_file()
	{
		if (!$this->is_allowed('client_file_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$uuid = $this->input->post('qquuid');

		echo $this->upload_file([
			'uuid' 		 	=> $uuid,
			'table_name' 	=> 'client_file',
		]);
	}

	public function delete_contrat_maintenance_file($uuid)
	{
		if (!$this->is_allowed('client_file_delete', false)) {
			echo json_encode([
				'success' => false,
				'error' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		echo $this->delete_file([
            'uuid'              => $uuid, 
            'delete_by'         => $this->input->get('by'), 
            'field_name'        => 'CONTRAT_MAINTENANCE_CLIENT_FILE', 
            'upload_path_tmp'   => './uploads/tmp/',
            'table_name'        => 'client_file',
            'primary_key'       => 'ID_CLIENT_FILE',
            'upload_path'       => 'uploads/client_file/'
        ]);
	}

	/**
	* Get Image Pos Store 2 Ibi Client File	* 
	* @return JSON
	*/
	public function get_contrat_maintenance_file($id)
	{
		if (!$this->is_allowed('client_file_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => 'Image not loaded, you do not have permission to access'
				]);
			exit;
		}

		$client_file = $this->model_client_file->find($id);

		echo $this->get_file([
            'uuid'              => $id, 
            'delete_by'         => 'id', 
            'field_name'        => 'CONTRAT_MAINTENANCE_CLIENT_FILE', 
            'table_name'        => 'client_file',
            'primary_key'       => 'ID_CLIENT_FILE',
            'upload_path'       => 'uploads/client_file/',
            'delete_endpoint'   => 'administrator/client_file/delete_CONTRAT_MAINTENANCE_CLIENT_FILE_file'
        ]);
	}
	
	
	public function export()
	{
		$this->is_allowed('client_file_export');

		$this->model_client_file->export('client_file', 'client_file');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('client_file_export');

		$this->model_client_file->pdf('client_file', 'client_file');
	}
}


/* End of file client_file.php */
/* Location: ./application/controllers/administrator/Pos Store 2 Ibi Client File.php */