<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Devis Controller
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Devis site
*|
*/
class Pos_store_2_ibi_devis extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_pos_store_2_ibi_devis');
	}

	/**
	* show all Pos Store 2 Ibi Deviss
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('pos_store_2_ibi_devis_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_store_2_ibi_deviss'] = $this->model_pos_store_2_ibi_devis->get($filter, $field, $this->limit_page, $offset);
		$this->data['pos_store_2_ibi_devis_counts'] = $this->model_pos_store_2_ibi_devis->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_store_2_ibi_devis/index/',
			'total_rows'   => $this->model_pos_store_2_ibi_devis->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Pos Store 2 Ibi Devis List');
		$this->render('backend/standart/administrator/pos_store_2_ibi_devis/pos_store_2_ibi_devis_list', $this->data);
	}
	



	public function ibi_devis_liste_attente($offset = 0)
	{
		$this->is_allowed('pos_store_2_ibi_devis_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_store_2_ibi_deviss'] = $this->model_pos_store_2_ibi_devis->get_ibi_devis_liste_attente($filter, $field, $this->limit_page, $offset);
		$this->data['pos_store_2_ibi_devis_counts'] = $this->model_pos_store_2_ibi_devis->count_all_ibi_devis_liste_attente($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_store_2_ibi_devis/index/',
			'total_rows'   => $this->model_pos_store_2_ibi_devis->count_all_ibi_devis_liste_attente($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Pos Store 2 Ibi Devis List');
		$this->render('backend/standart/administrator/pos_store_2_ibi_devis/pos_store_2_ibi_devis_list_attente', $this->data);
	}











	/**
	* Add new pos_store_2_ibi_deviss
	*
	*/
	public function add()
	{
		$this->is_allowed('pos_store_2_ibi_devis_add');

		$this->template->title('Pos Store 2 Ibi Devis New');
		$this->render('backend/standart/administrator/pos_store_2_ibi_devis/pos_store_2_ibi_devis_add', $this->data);
	}






	   public function numero_fiche_travail()

  {                 $this->db->select('ID_FICHE');
                         $this->db->from(' pos_store_2_ibi_fiche_travail');
                        $this->db->order_by('ID_FICHE','desc');
                       $this->db->limit('1');
                         $query = $this->db->get();

             if($query->num_rows()>0)
                {
                      foreach($query->result() as $row){
                           $job_card_id = (int)$row->ID_FICHE;
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


              return $value;

    }
       public function numero_commande()

  {                 $this->db->select('ID_DEVIS');
                         $this->db->from('pos_store_2_ibi_devis');
                        $this->db->order_by('ID_DEVIS','desc');
                       $this->db->limit('1');
                         $query = $this->db->get();

             if($query->num_rows()>0)
                {
                      foreach($query->result() as $row){
                           $job_card_id = (int)$row->ID_DEVIS;
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


              return $value;

    }





















	/**
	* Add New Pos Store 2 Ibi Deviss
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('pos_store_2_ibi_devis_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$this->form_validation->set_rules('titre', 'Le titre est requis', 'trim|required');
		$this->form_validation->set_rules('client', 'un client est requis', 'trim|required');
		

		if ($this->form_validation->run()) {


		$position= $this->input->post('optradio');
$code='cb123456';
		
switch ($position) {

    case "is_gamme":


			$save_data = [
				'TITRE_FICHE' => $this->input->post('titre'),

				'DEVIS_CODE_FICHE' => $code,

				'NUMERO_FICHE' =>$this -> numero_fiche_travail(),

				'REF_CLIENT_FICHE' => $this->input->post('client'),

				'TYPE_DEVIS_FICHE'=>$position,

				'DATE_CREATION_FICHE' =>date('Y-m-d H:i:s') ,

				'DATE_MOD_FICHE' =>date('Y-m-d H:i:s') ,

				'AUTHOR_FICHE' => get_user_data('id'),

				'REF_CATEGORIE_FICHE' => $this->input->post('categorie'),

				'TOTAL_FICHE' => 0,

				'STATUT_FICHE' => 0,
			];

			
			//$save_pos_store_2_ibi_devis = $this->model_pos_store_2_ibi_devis->store($save_data);

     $this->db->insert('pos_store_2_ibi_fiche_travail', $save_data);
     $id_fiche_travail=$this->db->insert_id();


        if ($id_fiche_travail) 
             {
                 $id_devis='';
			           for ($count = 0; $count < count($_POST["name"]); $count++) 
			              {
						     $save_datas = [

							'REF_PRODUCT_CODEBAR_DEVIS_PROD' => $_POST["article"][$count],

							'REF_DEVIS_CODE_DEVIS_PROD' => $id_devis,

							'QUANTITE_DEVIS_PROD' => $_POST["search"][$count],

							'QUANTITE_ADD_DEVIS_PROD' =>$_POST["search"][$count],

							'UNIT_DEVIS_PROD ' =>$_POST["unit"][$count],

							'PRIX_DEVIS_PROD ' =>$_POST["price"][$count],

							'ID_FICHE_DEVIS_PRO ' =>$id_fiche_travail,

							'NAME_DEVIS_PROD ' =>$_POST["name"][$count],

							'STATUT_DEVIS_PROD ' =>0,

									];
						$this->db->insert('pos_store_2_ibi_devis_produits', $save_datas);
						//$save_pos_store_2_ibi_commande = $this->db->insert_id();			

			}

							if ($this->input->post('save_type') == 'stay') {
								$this->data['success'] = true;
								$this->data['id'] 	   = $save_pos_store_2_ibi_devis;
								$this->data['message'] = cclang('success_save_data_stay', [
									anchor('administrator/pos_store_2_ibi_fiche_travail/edit/' . $id_fiche_travail, 'Edit Pos Store 2 Ibi Devis'),
									anchor('administrator/pos_store_2_ibi_fiche_travail', ' Go back to list')
								]);
							} else {
								set_message(
									cclang('success_save_data_redirect', [
									anchor('administrator/pos_store_2_ibi_fiche_travail/edit/' . $id_fiche_travail, 'Edit Pos Store 2 Ibi Devis')
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




			        break;
			    case "is_commande":

           







			$save_data = [
				'TITRE_DEVIS' => $this->input->post('titre'),
				'CODE_DEVIS' => $this->numero_commande(),
				'REF_CLIENT_DEVIS' => $this->input->post('client'),
				'TYPE_DEVIS' => $position,
				'DATE_CREATION_DEVIS' => date('Y-m-d H:i:s'),
				'DATE_MOD_DEVIS' =>date('Y-m-d H:i:s') ,
				'AUTHOR_DEVIS' =>get_user_data('id') ,
				'REF_CATEGORIE_DEVIS'=>$this->input->post('categorie'),
				'COEFFICIENT_DEVIS' => 0,
				'TOTAL_DEVIS' => 0,
				'TOTAL_FINAL_DEVIS' => 0,
				'TYPE_DELAY_DEVIS' => $this->input->post('temps'),
				'TEMPS_DELAY_DEVIS' => $this->input->post('delai'),
				'COND_PAID_DEVIS' => $this->input->post('condPayer'),
				'PERCENT_PAID_DEVIS' => $this->input->post('typeCond1'),
				'PERCENT_PAID_LIVR_DEVIS' => $this->input->post('typeCond2'),
				'VALID_OFFRE_DEVIS' => $this->input->post('tempsvalid'),
				'VALID_OFFRE_DEVIS_VALUE' => $this->input->post('validOff'),
                'STATUT_DEVIS' => 0,
			];

			
			$save_pos_store_2_ibi_devis = $this->model_pos_store_2_ibi_devis->store($save_data);



        if ($save_pos_store_2_ibi_devis) 
             {
$id_fiche='';
			           for ($count = 0; $count < count($_POST["name"]); $count++) 
			              {
						     $save_datas = [

							'REF_PRODUCT_CODEBAR_DEVIS_PROD' =>   $_POST["article"][$count],

							'REF_DEVIS_CODE_DEVIS_PROD' =>  $save_pos_store_2_ibi_devis,

							'QUANTITE_DEVIS_PROD' => $_POST["search"][$count],

							'QUANTITE_ADD_DEVIS_PROD' =>0,

							'UNIT_DEVIS_PROD ' =>$_POST["unit"][$count],

							'PRIX_DEVIS_PROD ' =>$_POST["price"][$count],

							'ID_FICHE_DEVIS_PRO ' =>$id_fiche,

							'NAME_DEVIS_PROD ' =>$_POST["name"][$count],

							'STATUT_DEVIS_PROD ' =>0,

									];
						$this->db->insert('pos_store_2_ibi_devis_produits', $save_datas);
						//$save_pos_store_2_ibi_commande = $this->db->insert_id();			

			}

							if ($this->input->post('save_type') == 'stay') {
								$this->data['success'] = true;
								$this->data['id'] 	   = $save_pos_store_2_ibi_devis;
								$this->data['message'] = cclang('success_save_data_stay', [
									anchor('administrator/pos_store_2_ibi_devis/edit/' . $save_pos_store_2_ibi_devis, 'Edit Pos Store 2 Ibi Devis'),
									anchor('administrator/pos_store_2_ibi_devis/ibi_devis_liste_attente', ' Go back to list')
								]);
							} else {
								set_message(
									cclang('success_save_data_redirect', [
									anchor('administrator/pos_store_2_ibi_devis/edit/' . $save_pos_store_2_ibi_devis, 'Edit Pos Store 2 Ibi Devis')
								]), 'success');

			            		$this->data['success'] = true;
								$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_devis/ibi_devis_liste_attente');
							}
						} else {
							if ($this->input->post('save_type') == 'stay') {
								$this->data['success'] = false;
								$this->data['message'] = cclang('data_not_change');
							} else {
			            		$this->data['success'] = false;
			            		$this->data['message'] = cclang('data_not_change');
								$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_devis/ibi_devis_liste_attente');
							}
						}





















			     break;
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Store 2 Ibi Deviss
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('pos_store_2_ibi_devis_update');

		$this->data['pos_store_2_ibi_devis'] = $this->model_pos_store_2_ibi_devis->find($id);

		$this->template->title('Pos Store 2 Ibi Devis Update');
		$this->render('backend/standart/administrator/pos_store_2_ibi_devis/pos_store_2_ibi_devis_update', $this->data);
	}

	/**
	* Update Pos Store 2 Ibi Deviss
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('pos_store_2_ibi_devis_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('TITRE_DEVIS', 'TITRE DEVIS', 'trim|required');
		$this->form_validation->set_rules('REF_CLIENT_DEVIS', 'REF CLIENT DEVIS', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'TITRE_DEVIS' => $this->input->post('TITRE_DEVIS'),
				'CODE_DEVIS' => $this->input->post('CODE_DEVIS'),
				'REF_CLIENT_DEVIS' => $this->input->post('REF_CLIENT_DEVIS'),
				'TYPE_DEVIS' => $this->input->post('TYPE_DEVIS'),
				'DATE_CREATION_DEVIS' => $this->input->post('DATE_CREATION_DEVIS'),
				'DATE_MOD_DEVIS' => $this->input->post('DATE_MOD_DEVIS'),
				'AUTHOR_DEVIS' => $this->input->post('AUTHOR_DEVIS'),
				'COEFFICIENT_DEVIS' => $this->input->post('COEFFICIENT_DEVIS'),
				'TOTAL_DEVIS' => $this->input->post('TOTAL_DEVIS'),
				'TOTAL_FINAL_DEVIS' => $this->input->post('TOTAL_FINAL_DEVIS'),
				'TYPE_DELAY_DEVIS' => $this->input->post('TYPE_DELAY_DEVIS'),
				'TEMPS_DELAY_DEVIS' => $this->input->post('TEMPS_DELAY_DEVIS'),
				'COND_PAID_DEVIS' => $this->input->post('COND_PAID_DEVIS'),
				'PERCENT_PAID_DEVIS' => $this->input->post('PERCENT_PAID_DEVIS'),
				'PERCENT_PAID_LIVR_DEVIS' => $this->input->post('PERCENT_PAID_LIVR_DEVIS'),
				'VALID_OFFRE_DEVIS' => $this->input->post('VALID_OFFRE_DEVIS'),
				'STATUT_DEVIS' => $this->input->post('STATUT_DEVIS'),
			];

			
			$save_pos_store_2_ibi_devis = $this->model_pos_store_2_ibi_devis->change($id, $save_data);

			if ($save_pos_store_2_ibi_devis) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/pos_store_2_ibi_devis', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_devis');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_devis');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Deviss
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('pos_store_2_ibi_devis_delete');

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
            set_message(cclang('has_been_deleted', 'pos_store_2_ibi_devis'), 'success');
        } else {
            set_message(cclang('error_delete', 'pos_store_2_ibi_devis'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Store 2 Ibi Deviss
	*
	* @var $id String
	*/
	public function view($id)
	{

/*
      $champs='REF_DEVIS_CODE_DEVIS_PROD';
      $detail='pos_store_2_ibi_devis_produits';*/

		$this->is_allowed('pos_store_2_ibi_devis_view');

		$this->data['pos_store_2_ibi_devis'] = $this->model_pos_store_2_ibi_devis->getRequete($id);

		$this->template->title('Pos Store 2 Ibi Devis Detail');
		$this->render('backend/standart/administrator/pos_store_2_ibi_devis/pos_store_2_ibi_devis_view', $this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Deviss
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$pos_store_2_ibi_devis = $this->model_pos_store_2_ibi_devis->find($id);

		
		
		return $this->model_pos_store_2_ibi_devis->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('pos_store_2_ibi_devis_export');

		$this->model_pos_store_2_ibi_devis->export('pos_store_2_ibi_devis', 'pos_store_2_ibi_devis');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('pos_store_2_ibi_devis_export');

		$this->model_pos_store_2_ibi_devis->pdf('pos_store_2_ibi_devis', 'pos_store_2_ibi_devis');
	}

	public function approuver_commande($id)
	{

		$code='cb123456';
          $commande='pos_store_2_ibi_devis';
          $detail='pos_store_2_ibi_devis_produits';
          $champ='ID_DEVIS';
          $champ_detail='ID_DEVIS_PROD';
          $champ_detail_devis='REF_DEVIS_CODE_DEVIS_PROD';
          $ref_devis='';
          
         // $criteres['commande_id']=$id;
          $donnee = ['STATUT_DEVIS'=>1];
             
      
          $this->db->where($champ,$id);
          $this->db->update($commande,$donnee);


          $this->db->select('TITRE_DEVIS,REF_CATEGORIE_DEVIS,REF_CLIENT_DEVIS,TYPE_DEVIS');
					   $this->db->from($commande);
						$this->db->where($champ,$id);
						$old_value=$this->db->get();
						foreach($old_value->result() as $valeur)
						{
                            

			$save_data = [
				'TITRE_FICHE' => $valeur->TITRE_DEVIS,

				'DEVIS_CODE_FICHE' => $code,

				'NUMERO_FICHE' =>$this -> numero_fiche_travail(),

				'REF_CLIENT_FICHE' => $valeur->REF_CLIENT_DEVIS,

				'TYPE_DEVIS_FICHE'=>$valeur->TYPE_DEVIS,

				'DATE_CREATION_FICHE' =>date('Y-m-d H:i:s') ,

				'DATE_MOD_FICHE' =>date('Y-m-d H:i:s') ,

				'AUTHOR_FICHE' => get_user_data('id'),

				'REF_CATEGORIE_FICHE' =>$valeur->REF_CATEGORIE_DEVIS,

				'TOTAL_FICHE' => 0,

				'STATUT_FICHE' => 0,
			];


			      $this->db->insert('pos_store_2_ibi_fiche_travail', $save_data);
                  $id_fiche_travail = $this->db->insert_id();


                   
						}

			


        
		
                       $this->db->select('*');
					
					   $this->db->from($detail);
						$this->db->where($champ_detail_devis,$id);
						$old_value=$this->db->get();
						foreach($old_value->result() as $data)
						{


						     $save_datas = [

							'REF_PRODUCT_CODEBAR_DEVIS_PROD' => $data->REF_PRODUCT_CODEBAR_DEVIS_PROD,

							'REF_DEVIS_CODE_DEVIS_PROD' => $ref_devis,

							'QUANTITE_DEVIS_PROD' => $data->QUANTITE_DEVIS_PROD,

							'QUANTITE_ADD_DEVIS_PROD' =>$data->QUANTITE_ADD_DEVIS_PROD,

							'UNIT_DEVIS_PROD ' =>$data->UNIT_DEVIS_PROD,

							'PRIX_DEVIS_PROD ' =>$data->PRIX_DEVIS_PROD,

							'ID_FICHE_DEVIS_PRO ' =>$id_fiche_travail,

							'NAME_DEVIS_PROD ' =>$data->NAME_DEVIS_PROD,

							'STATUT_DEVIS_PROD ' =>0,

									];

               $approuver_commande= $this->db->insert('pos_store_2_ibi_devis_produits', $save_datas);


		}

			if ($approuver_commande) {

		            set_message('Approbation réussi.', 'success');

				} else {

		            set_message('Echec .', 'error');

				}



				redirect('administrator/pos_store_2_ibi_fiche_travail');




	}

	function pos_store_2_ibi_devis_printable()
 {
   // $id=$this->uri->segment(4);
   

	//$data['donne']=$this->model_project_situation_caisse->getRequete($id);
	

		$this->render('backend/standart/administrator/pos_store_2_ibi_devis/pos_store_2_ibi_devis_printable');
}

}


/* End of file pos_store_2_ibi_devis.php */
/* Location: ./application/controllers/administrator/Pos Store 2 Ibi Devis.php */