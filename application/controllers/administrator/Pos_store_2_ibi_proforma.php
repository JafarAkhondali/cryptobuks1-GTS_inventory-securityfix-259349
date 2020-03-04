<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Proforma Controller
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Proforma site
*|
*/
class Pos_store_2_ibi_proforma extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_pos_store_2_ibi_proforma');
	}

	/**
	* show all Pos Store 2 Ibi Proformas
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('pos_store_2_ibi_proforma_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_store_2_ibi_proformas'] = $this->model_pos_store_2_ibi_proforma->get($filter, $field, $this->limit_page, $offset);
		$this->data['pos_store_2_ibi_proforma_counts'] = $this->model_pos_store_2_ibi_proforma->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_store_2_ibi_proforma/index/',
			'total_rows'   => $this->model_pos_store_2_ibi_proforma->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Pos Store 2 Ibi Proforma List');
		$this->render('backend/standart/administrator/pos_store_2_ibi_proforma/pos_store_2_ibi_proforma_list', $this->data);
	}
	
	/**
	* Add new pos_store_2_ibi_proformas
	*
	*/
	public function add()
	{
		$this->is_allowed('pos_store_2_ibi_proforma_add');

		$this->template->title('Pos Store 2 Ibi Proforma New');
		$this->render('backend/standart/administrator/pos_store_2_ibi_proforma/pos_store_2_ibi_proforma_add', $this->data);
	}


	 public function numero_proforma()

       {                 $this->db->select('ID_PROFORMA');
                         $this->db->from('pos_store_2_ibi_proforma');
                        $this->db->order_by('ID_PROFORMA','desc');
                       $this->db->limit('1');
                         $query = $this->db->get();

             if($query->num_rows()>0)
                {
                      foreach($query->result() as $row){
                           $job_card_id = (int)$row->ID_PROFORMA;
                      }
                      $job_card_id++;
                }else{
                   $job_card_id = 1;
                }
                $invoice_number = $job_card_id;
               
                  $bre = strlen($invoice_number);
                
                        if($bre==1){
                             $value= '0000'.$invoice_number;
                         }
                       else if($bre==2){
                           $value='000'.$invoice_number;
                       }else if($bre==3){
                          $value= '00'.$invoice_number;
                       }
                       else if($bre==4){
                          $value= '0'.$invoice_number;
                       }else{
                           $value=$invoice_number;
                       }
             $value.='/'.date('m').'/'.date('Y');

              return $value;

    }

	/**
	* Add New Pos Store 2 Ibi Proformas
	*
	* @return JSON
	*/

	public function add_save()
	{
		if (!$this->is_allowed('pos_store_2_ibi_proforma_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

$type_pro='ibi_proforma_dv';
		

$id_devis=$this->input->post('id_devis');

$this->db->select('*');
$this->db->from('pos_store_2_ibi_devis');
$this->db->where('ID_DEVIS',$id_devis);

$query = $this->db->get();

   foreach ($query->result() as $row)  //Iterate through results
   {

$type_delay=$row->TYPE_DELAY_DEVIS;
$type_temps=$row->TEMPS_DELAY_DEVIS;
$cond_pay=$row->COND_PAID_DEVIS;
$parcent_paid=$row->PERCENT_PAID_DEVIS;
$parcent_livr_pay=$row->PERCENT_PAID_LIVR_DEVIS;
$garantie=$row->VALID_OFFRE_DEVIS;
$garantie_value=$row->VALID_OFFRE_DEVIS_VALUE;
   }

$vide='';

$form=1;



		if ($form==1) {
		
			$save_data = [
				'TITRE_PROFORMA' => $this->input->post('titre_proforma'),
				'CODE_PROFORMA' =>$this->numero_proforma() ,
				'REF_CLIENT_PROFORMA' => $this->input->post('client'),
				'TYPE_PROFORMA' =>$type_pro,
				'DATE_CREATION_PROFORMA' =>date('Y-m-d H:i:s'),
				'DATE_MOD_PROFORMA' =>date('Y-m-d H:i:s'),
				'PAYMENT_TYPE_PROFORMA' =>$vide,
				'AUTHOR_PROFORMA' => get_user_data('id'),
				'SOMME_PERCU_PROFORMA' => 0,
				'TOTAL_PROFORMA' => 0,
				'DISCOUNT_TYPE_PROFORMA' => 0,
				'TVA_PROFORMA' => 0,
				'GROUP_DISCOUNT_PROFORMA' => 0,
				'REF_SHIPPING_ADDRESS_PROFORMA' =>0 ,
				'SHIPPING_AMOUNT_PROFORMA' => 0,
				'TYPE_DELAY_PROFORMA' =>$type_delay ,
				'TEMPS_DELAY_PROFORMA' =>$type_temps ,
				'COND_PAID_PROFORMA' =>$cond_pay ,
				'PERCENT_PAID_PROFORMA' =>$parcent_paid,
				'PERCENT_PAID_LIVR_PROFORMA' => $parcent_livr_pay,
				'VALID_OFFRE_PROFORMA' =>$garantie,
				'VALID_OFFRE_VALUE' =>$garantie_value,
			];




			
			$save_pos_store_2_ibi_proforma = $this->model_pos_store_2_ibi_proforma->store($save_data);

			for ($count = 0; $count < count($_POST["design"]); $count++) 
            {


			$save_datas = [

				'REF_PRODUCT_CODEBAR_PROFORMA_PROD' => $_POST["reference"][$count],
				'REF_PROFORMA_CODE_PROD' => $vide,
				'QUANTITE_PROFORMA_PROD' =>$_POST["quantite"][$count],
				'PRIX_PROFORMA_PROD ' =>$_POST["unit_price"][$count],
				'NAME_PROFORMA_PROD ' =>$_POST["design"][$count],
				'REF_PROFORMA_ID' => $save_pos_store_2_ibi_proforma,];


			$this->db->insert('pos_store_2_ibi_proforma_produits', $save_datas);
			//$save_pos_store_2_ibi_commande = $this->db->insert_id();			

           }





			if ($save_pos_store_2_ibi_proforma) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_pos_store_2_ibi_proforma;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/pos_store_2_ibi_proforma/edit/' . $save_pos_store_2_ibi_proforma, 'Edit Pos Store 2 Ibi Proforma'),
						anchor('administrator/pos_store_2_ibi_proforma', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/pos_store_2_ibi_proforma/edit/' . $save_pos_store_2_ibi_proforma, 'Edit Pos Store 2 Ibi Proforma')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_proforma');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_proforma');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Store 2 Ibi Proformas
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('pos_store_2_ibi_proforma_update');

		$this->data['pos_store_2_ibi_proforma'] = $this->model_pos_store_2_ibi_proforma->find($id);

		$this->template->title('Pos Store 2 Ibi Proforma Update');
		$this->render('backend/standart/administrator/pos_store_2_ibi_proforma/pos_store_2_ibi_proforma_update', $this->data);
	}

	/**
	* Update Pos Store 2 Ibi Proformas
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('pos_store_2_ibi_proforma_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'TITRE_PROFORMA' => $this->input->post('TITRE_PROFORMA'),
				'CODE_PROFORMA' => $this->input->post('CODE_PROFORMA'),
				'REF_CLIENT_PROFORMA' => $this->input->post('REF_CLIENT_PROFORMA'),
				'TYPE_PROFORMA' => $this->input->post('TYPE_PROFORMA'),
				'DATE_CREATION_PROFORMA' => $this->input->post('DATE_CREATION_PROFORMA'),
				'DATE_MOD_PROFORMA' => $this->input->post('DATE_MOD_PROFORMA'),
				'PAYMENT_TYPE_PROFORMA' => $this->input->post('PAYMENT_TYPE_PROFORMA'),
				'AUTHOR_PROFORMA' => $this->input->post('AUTHOR_PROFORMA'),
				'SOMME_PERCU_PROFORMA' => $this->input->post('SOMME_PERCU_PROFORMA'),
				'TOTAL_PROFORMA' => $this->input->post('TOTAL_PROFORMA'),
				'DISCOUNT_TYPE_PROFORMA' => $this->input->post('DISCOUNT_TYPE_PROFORMA'),
				'TVA_PROFORMA' => $this->input->post('TVA_PROFORMA'),
				'GROUP_DISCOUNT_PROFORMA' => $this->input->post('GROUP_DISCOUNT_PROFORMA'),
				'REF_SHIPPING_ADDRESS_PROFORMA' => $this->input->post('REF_SHIPPING_ADDRESS_PROFORMA'),
				'SHIPPING_AMOUNT_PROFORMA' => $this->input->post('SHIPPING_AMOUNT_PROFORMA'),
				'TYPE_DELAY_PROFORMA' => $this->input->post('TYPE_DELAY_PROFORMA'),
				'TEMPS_DELAY_PROFORMA' => $this->input->post('TEMPS_DELAY_PROFORMA'),
				'COND_PAID_PROFORMA' => $this->input->post('COND_PAID_PROFORMA'),
				'PERCENT_PAID_PROFORMA' => $this->input->post('PERCENT_PAID_PROFORMA'),
				'PERCENT_PAID_LIVR_PROFORMA' => $this->input->post('PERCENT_PAID_LIVR_PROFORMA'),
				'VALID_OFFRE_PROFORMA' => $this->input->post('VALID_OFFRE_PROFORMA'),
			];

			
			$save_pos_store_2_ibi_proforma = $this->model_pos_store_2_ibi_proforma->change($id, $save_data);

			if ($save_pos_store_2_ibi_proforma) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/pos_store_2_ibi_proforma', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_proforma');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_proforma');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Proformas
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('pos_store_2_ibi_proforma_delete');

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
            set_message(cclang('has_been_deleted', 'pos_store_2_ibi_proforma'), 'success');
        } else {
            set_message(cclang('error_delete', 'pos_store_2_ibi_proforma'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Store 2 Ibi Proformas
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('pos_store_2_ibi_proforma_view');

		$this->data['pos_store_2_ibi_proforma'] = $this->model_pos_store_2_ibi_proforma->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Pos Store 2 Ibi Proforma Detail');
		$this->render('backend/standart/administrator/pos_store_2_ibi_proforma/pos_store_2_ibi_proforma_view', $this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Proformas
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$pos_store_2_ibi_proforma = $this->model_pos_store_2_ibi_proforma->find($id);

		
		
		return $this->model_pos_store_2_ibi_proforma->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('pos_store_2_ibi_proforma_export');

		$this->model_pos_store_2_ibi_proforma->export('pos_store_2_ibi_proforma', 'pos_store_2_ibi_proforma');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('pos_store_2_ibi_proforma_export');

		$this->model_pos_store_2_ibi_proforma->pdf('pos_store_2_ibi_proforma', 'pos_store_2_ibi_proforma');
	}

		function pos_store_2_ibi_proforma_printable()
 {
   // $id=$this->uri->segment(4);
   

	//$data['donne']=$this->model_project_situation_caisse->getRequete($id);
	

		$this->load->view('backend/standart/administrator/pos_store_2_ibi_proforma/pos_store_2_ibi_proforma_printable');
}
}


/* End of file pos_store_2_ibi_proforma.php */
/* Location: ./application/controllers/administrator/Pos Store 2 Ibi Proforma.php */