<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Dashboard Controller
*| --------------------------------------------------------------------------
*| For see your board
*|
*/
class Stores extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

	}

	public function index($store)
	{ 
		
		// if (!$this->aauth->is_allowed('dashboard')) {
		// 	redirect('/','refresh');
		// }

		// $data = [];
		// $this->render('backend/standart/dashboard', $data);
		redirect(base_url('administrator/dashboard/index/'.$store));
	}
}

/* End of file Stores.php */
/* Location: ./application/controllers/administrator/Stores.php */