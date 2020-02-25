<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Proforma extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_proforma');
		$this->load->model('model_registers');
	}

	/**
	* show all Pos Store Ibi Commandess
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
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
	public function edit($id)
	{
		$this->is_allowed('registers_update');

		$proforma = $this->model_registers->getOne('pos_store_2_ibi_proforma',array('ID_PROFORMA'=>$id));
		$this->data['type'] = $proforma['TYPE_PROFORMA'];
		$this->data['titre'] = $proforma['TITRE_PROFORMA'];
		$this->data['ref_client'] = $proforma['REF_CLIENT_PROFORMA'];
		$this->data['code_commande'] = $proforma['CODE_PROFORMA'];
		$this->data['getposProduit'] = $this->model_registers->getList('pos_store_2_ibi_proforma_produits',array('REF_PROFORMA_CODE_PROD'=>$proforma['CODE_PROFORMA']));
		$this->data['registers'] = $proforma;
        $this->data['getProduit'] = $this->model_registers->getList('pos_store_2_ibi_articles','CODEBAR_ARTICLE NOT IN (SELECT REF_PRODUCT_CODEBAR_PROFORMA_PROD FROM pos_store_2_ibi_proforma_produits WHERE REF_PROFORMA_CODE_PROD= "'.$proforma['CODE_PROFORMA'].'")', NULL, FALSE);

		$this->template->title('Modifier le proforma');
		$this->render('backend/standart/administrator/registers/registers_update', $this->data);
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