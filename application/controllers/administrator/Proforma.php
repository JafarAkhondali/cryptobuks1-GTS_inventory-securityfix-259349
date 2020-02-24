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