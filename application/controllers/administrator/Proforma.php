<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Proforma extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_proforma');
		$this->load->model('model_registers');
        
        $dd =$this->uri->segment(4);

		// print_r($dd); exit();
	}

	/**
	* show all Pos Store Ibi Commandess
	*
	* @var $offset String
	*/
	public function index($store, $offset = 0)
	{

        if ($this->index() == false) {

			print_r('expression');

		}else{
			print_r("false");

		}
		exit();
		$this->is_allowed('proforma_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['proformas'] = $this->model_proforma->get($filter, $field, $this->limit_page, $offset);
		$this->data['proforma_counts'] = $this->model_proforma->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/proforma/index/',
			'total_rows'   => $this->model_proforma->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Liste de proforma');
		$this->render('backend/standart/administrator/proforma/proforma_list', $this->data);
	}
	public function edit($store, $id)
	{
		$this->is_allowed('registers_update');
        $store = $this->uri->segment(4);
		$id = $this->uri->segment(5);
		$store_prefix = 'store_'.$store;

		$proforma = $this->model_registers->getOne('pos_'.$store_prefix.'_ibi_proforma',array('ID_PROFORMA'=>$id));
		$this->data['type'] = $proforma['TYPE_PROFORMA'];
		$this->data['titre'] = $proforma['TITRE_PROFORMA'];
		$this->data['ref_client'] = $proforma['REF_CLIENT_PROFORMA'];
		$this->data['code_commande'] = $proforma['CODE_PROFORMA'];
		$this->data['getposProduit'] = $this->model_registers->getList('pos_'.$store_prefix.'_ibi_proforma_produits',array('REF_PROFORMA_CODE_PROD'=>$proforma['CODE_PROFORMA']));
		$this->data['registers'] = $proforma;
        $this->data['getProduit'] = $this->model_registers->getList('pos_'.$store_prefix.'_ibi_articles','CODEBAR_ARTICLE NOT IN (SELECT REF_PRODUCT_CODEBAR_PROFORMA_PROD FROM pos_'.$store_prefix.'_ibi_proforma_produits WHERE REF_PROFORMA_CODE_PROD= "'.$proforma['CODE_PROFORMA'].'")', NULL, FALSE);

		$this->template->title('Modifier une proforma');
		$this->render('backend/standart/administrator/registers/registers_update', $this->data);
	}
	public function view($store,$id)
	{
		$this->is_allowed('proforma_view');
		$this->is_allowed('registers_update');
        $store = $this->uri->segment(4);
		$id = $this->uri->segment(5);
		$store_prefix = 'store_'.$store;

		$proforma = $this->model_registers->getOne('pos_'.$store_prefix.'_ibi_proforma',array('ID_PROFORMA'=>$id));
		$this->data['getposProduit'] = $this->model_registers->getList('pos_'.$store_prefix.'_ibi_proforma_produits',array('REF_PROFORMA_CODE_PROD'=>$proforma['CODE_PROFORMA']));
        // print_r($this->data['proforma']);
		// $this->data['proforma'] = $this->model_proforma->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Détail du proforma');
		$this->render('backend/standart/administrator/proforma/proforma_view', $this->data);
	}
	public function file_client($id){

		$this->is_allowed('file_client_add');

		$proforma = $this->model_registers->getOne('pos_store_2_ibi_proforma',array('ID_PROFORMA'=>$id));
		$this->data['client_data'] = $this->model_registers->getOne('pos_ibi_clients',array('ID_CLIENT'=>$proforma['REF_CLIENT_PROFORMA']));
		$this->data['proforma'] = $proforma;

		$this->template->title('Fiche du client');
		$this->render('backend/standart/administrator/proforma/file_client_add', $this->data);
     
	}
	public function file_client_add_save(){
		
		if (!$this->is_allowed('bon_commande_view', false)) {

			echo json_encode([

				'success' => false,

				'message' => cclang('sorry_you_do_not_have_permission_to_access')

				]);

			exit;

		}
		$this->form_validation->set_rules('bon_commande_number', 'Ajouter le numero de bon de commande', 'trim|required');

		if ($this->form_validation->run()) {

			$bon_commande_client_file = $this->input->post('bon_commande_client_file');

			$bon_commande_client_file_name = $this->input->post('bon_commande_client_file_name');

			$file_commissioning = $this->input->post('file_commissioning');

			$file_commissioning_name = $this->input->post('file_commissioning_name');

			$file_contant_garantie = $this->input->post('file_contant_garantie');

			$file_contant_garantie_name = $this->input->post('file_contant_garantie_name');

			$file_contrat_maintenance = $this->input->post('file_contrat_maintenance');

			$file_contrat_maintenance_name = $this->input->post('file_contrat_maintenance_name');

			// $project_project_id = $this->input->post('project_client_file_project_id');

			$client_id = $this->input->post('client_id');

			$proforma_code = $this->input->post('proforma_code');

			$save_data = [

				'REF_CLIENT_FILE' => $this->input->post('client_id'),
				'NUMBER_PURCHASE_CLIENT_FILE' => $this->input->post('bon_commande_number'),
				'FILE_PURCHASE_CLIENT_FILE' => $bon_commande_client_file_name,
			];

			print_r($save_data);
			exit();


		}else {

			$this->data['success'] = false;

			$this->data['message'] = validation_errors();

		}

		echo json_encode($this->data);
	}

	
	private function _remove($id)
	{
		$proforma = $this->model_proforma->find($id);

		
		
		return $this->model_proforma->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('proforma_export');

		$this->model_proforma->export('proforma', 'proforma');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('proforma_export');

		$this->model_proforma->pdf('proforma', 'proforma');
	}
}


/* End of file proforma.php */
/* Location: ./application/controllers/administrator/Pos Store Ibi Commandes.php */