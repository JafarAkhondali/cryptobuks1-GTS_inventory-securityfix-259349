<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Commande Controller
*| --------------------------------------------------------------------------
*| Pos Store 2 Ibi Commande site
*|
*/
class Pos_store_2_ibi_commande extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_pos_store_2_ibi_commande');
	}

	/**
	* show all Pos Store 2 Ibi Commandes
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('pos_store_2_ibi_commande_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_store_2_ibi_commandes'] = $this->model_pos_store_2_ibi_commande->get($filter, $field, $this->limit_page, $offset);
		$this->data['pos_store_2_ibi_commande_counts'] = $this->model_pos_store_2_ibi_commande->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_store_2_ibi_commande/index/',
			'total_rows'   => $this->model_pos_store_2_ibi_commande->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Pos Store 2 Ibi Commande List');
		$this->render('backend/standart/administrator/pos_store_2_ibi_commande/pos_store_2_ibi_commande_list', $this->data);
	}


	public function pos_store_2_ibi_commande_list_approuver($offset = 0)
	{
		$this->is_allowed('pos_store_2_ibi_commande_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['pos_store_2_ibi_commandes'] = $this->model_pos_store_2_ibi_commande->get_approuver($filter, $field, $this->limit_page, $offset);
		$this->data['pos_store_2_ibi_commande_counts'] = $this->model_pos_store_2_ibi_commande->count_all_approuver($filter, $field);

		$config = [
			'base_url'     => 'administrator/pos_store_2_ibi_commande/index/',
			'total_rows'   => $this->model_pos_store_2_ibi_commande->count_all_approuver($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Pos Store 2 Ibi Commande List');
		$this->render('backend/standart/administrator/pos_store_2_ibi_commande/pos_store_2_ibi_commande_list_approuver', $this->data);
	}
	
	
	/**
	* Add new pos_store_2_ibi_commandes
	*
	*/
	public function add()
	{
		//$this->is_allowed('pos_store_2_ibi_commande_add');

		$this->template->title('Pos Store 2 Ibi Commande New');
		$this->render('backend/standart/administrator/pos_store_2_ibi_commande/pos_store_2_ibi_commande_add', $this->data);
	}

	   public function numero_fiche_travail()

  {                 $this->db->select('fiche_id');
                         $this->db->from(' pos_store_2_ibi_fiche_travail');
                        $this->db->order_by('fiche_id','desc');
                       $this->db->limit('1');
                         $query = $this->db->get();

             if($query->num_rows()>0)
                {
                      foreach($query->result() as $row){
                           $job_card_id = (int)$row->fiche_id;
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

  {                 $this->db->select('commande_id');
                         $this->db->from('pos_store_2_ibi_commande');
                        $this->db->order_by('commande_id','desc');
                       $this->db->limit('1');
                         $query = $this->db->get();

             if($query->num_rows()>0)
                {
                      foreach($query->result() as $row){
                           $job_card_id = (int)$row->commande_id;
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
	* Add New Pos Store 2 Ibi Commandes
	*
	* @return JSON
	*/
	public function add_save()
	{
	/*	if (!$this->is_allowed('pos_store_2_ibi_commande_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}*/
/*
		$this->form_validation->set_rules('commande_numero', 'Commande Numero', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('commande_article', 'Commande Article', 'trim|required');
		$this->form_validation->set_rules('commande_client_id', 'Commande Client Id', 'trim|required');
		$this->form_validation->set_rules('commande_categorie_id', 'Commande Categorie Id', 'trim|required');
		$this->form_validation->set_rules('commande_unite', 'Commande Unite', 'trim|required');
		$this->form_validation->set_rules('delai', 'Delai', 'trim|required');
		$this->form_validation->set_rules('validite', 'Validite', 'trim|required');
		$this->form_validation->set_rules('a_la_commande', 'A La Commande', 'trim|required');
		$this->form_validation->set_rules('a_la_livraison', 'A La Livraison', 'trim|required');
		*/
		$verifier=1;
		if ($verifier==1) {

		//if ($this->form_validation->run()) {
		

		$position= $this->input->post('optradio');

		
switch ($position) {
    case "is_gamme":



			$save_data = [
				'fiche_numero' => $this->numero_fiche_travail(),
				'fiche_description_article' => $this->input->post('description_article'),
				'fiche_article_categorie_id'=>$this->input->post('categorie'), 
				'fiche_client_id' => $this->input->post('client_id'),
				'fiche_user_id' => get_user_data('id'),
				'fiche_stutus'=>0,
				'fiche_suppresion_status'=>1,				
				'fiche_date' => date('Y-m-d H:i:s'),
				'fiche_date_modification' => date('Y-m-d H:i:s'),
			];

			
     $this->db->insert('pos_store_2_ibi_fiche_travail', $save_data);
     $id_fiche_travail=$this->db->insert_id();



for ($count = 0; $count < count($_POST["name"]); $count++) 
{


			$save_datas = [

				'id_fiche' => $id_fiche_travail,

				'fiche_article' => $_POST["name"][$count],

				'fiche_prix' => $_POST["price"][$count],

				'fiche_quantite' =>$_POST["search"][$count],

				'fiche_unite ' =>$_POST["unit"][$count],

						];
			$this->db->insert('pos_store_2_ibi_fiche_travail_detail', $save_datas);
			//$save_pos_store_2_ibi_commande = $this->db->insert_id();			

}


			if ($id_fiche_travail) {

			if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id_fiche_travail;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/pos_store_2_ibi_fiche_travail/edit/' . $id_fiche_travail, 'Edit Pos Store 2 Ibi Fiche Travail'),
						anchor('administrator/pos_store_2_ibi_fiche_travail', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/pos_store_2_ibi_fiche_travail/edit/' . $id_fiche_travail, 'Edit Pos Store 2 Ibi Fiche Travail')
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
				'commande_numero' => $this->numero_commande(),
				'commande_article_decription' => $this->input->post('description_article'),
				'commande_client_id' => $this->input->post('client_id'),
				'commande_user_id' => get_user_data('id'),
				'commande_categorie_id' => $this->input->post('categorie'),
				'delai' => $this->input->post('delais'),
				'delai_value' => $this->input->post('delai_value'),
				'validite' => $this->input->post('validites'),
				'validite_value' => $this->input->post('validite_value'),
				'a_la_commande' => $this->input->post('typeCond1'),
				'a_la_livraison' => $this->input->post('typeCond2'),
				'condition_payement'=> $this->input->post('condition_payement'),
				'commande_status'=>0,
				'commande_suppression_status'=>1,
				'commande_date' =>  date('Y-m-d H:i:s'),
				'commande_date_modification' =>  date('Y-m-d H:i:s'),
			];


     $this->db->insert('pos_store_2_ibi_commande', $save_data);
     $save_pos_store_2_ibi_commande=$this->db->insert_id();



for ($count = 0; $count < count($_POST["name"]); $count++) 
{


			$save_datas = [

				'id_commandes' => $save_pos_store_2_ibi_commande,

				'commande_article' => $_POST["name"][$count],

				'commande_prix' => $_POST["price"][$count],

				'commande_quantite' =>$_POST["search"][$count],

				'commande_unite ' =>$_POST["unit"][$count],

						];
			$this->db->insert('pos_store_2_ibi_commande_detail', $save_datas);
			//$save_pos_store_2_ibi_commande = $this->db->insert_id();			

}









			if ($save_pos_store_2_ibi_commande) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save_pos_store_2_ibi_commande;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/pos_store_2_ibi_commande/edit/' . $save_pos_store_2_ibi_commande, 'Edit Pos Store 2 Ibi Commande'),
						anchor('administrator/pos_store_2_ibi_commande', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/pos_store_2_ibi_commande/edit/' . $save_pos_store_2_ibi_commande, 'Edit Pos Store 2 Ibi Commande')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_commande');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_commande');
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
	* Update view Pos Store 2 Ibi Commandes
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('pos_store_2_ibi_commande_update');

		$this->data['pos_store_2_ibi_commande'] = $this->model_pos_store_2_ibi_commande->find($id);

		$this->template->title('Pos Store 2 Ibi Commande Update');
		$this->render('backend/standart/administrator/pos_store_2_ibi_commande/pos_store_2_ibi_commande_update', $this->data);
	}

	/**
	* Update Pos Store 2 Ibi Commandes
	*
	* @var $id String
	*/
	public function edit_save($id)
	{
		if (!$this->is_allowed('pos_store_2_ibi_commande_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
		
		$this->form_validation->set_rules('commande_numero', 'Commande Numero', 'trim|required|max_length[11]');
		$this->form_validation->set_rules('commande_article', 'Commande Article', 'trim|required');
		$this->form_validation->set_rules('commande_client_id', 'Commande Client Id', 'trim|required');
		$this->form_validation->set_rules('commande_categorie_id', 'Commande Categorie Id', 'trim|required');
		$this->form_validation->set_rules('commande_unite', 'Commande Unite', 'trim|required');
		$this->form_validation->set_rules('delai', 'Delai', 'trim|required');
		$this->form_validation->set_rules('validite', 'Validite', 'trim|required');
		$this->form_validation->set_rules('a_la_commande', 'A La Commande', 'trim|required');
		$this->form_validation->set_rules('a_la_livraison', 'A La Livraison', 'trim|required');
		
		if ($this->form_validation->run()) {
		
			$save_data = [
				'commande_numero' => $this->input->post('commande_numero'),
				'commande_article' => $this->input->post('commande_article'),
				'commande_client_id' => $this->input->post('commande_client_id'),
				'commande_user_id' => get_user_data('id'),				'commande_categorie_id' => $this->input->post('commande_categorie_id'),
				'commande_unite' => $this->input->post('commande_unite'),
				'delai' => $this->input->post('delai'),
				'validite' => $this->input->post('validite'),
				'a_la_commande' => $this->input->post('a_la_commande'),
				'a_la_livraison' => $this->input->post('a_la_livraison'),
				'commande_date' => $this->input->post('commande_date'),
				'commande_date_modification' => $this->input->post('commande_date_modification'),
			];

			
			$save_pos_store_2_ibi_commande = $this->model_pos_store_2_ibi_commande->change($id, $save_data);

			if ($save_pos_store_2_ibi_commande) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/pos_store_2_ibi_commande', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_commande');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/pos_store_2_ibi_commande');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Commandes
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('pos_store_2_ibi_commande_delete');

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
            set_message(cclang('has_been_deleted', 'pos_store_2_ibi_commande'), 'success');
        } else {
            set_message(cclang('error_delete', 'pos_store_2_ibi_commande'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Store 2 Ibi Commandes
	*
	* @var $id String
	*/



public function approuver_commande($id)
	{

		
          $commande='pos_store_2_ibi_commande';
          $detail='pos_store_2_ibi_commande_detail';
          $champ='commande_id';
          $champs='id_commandes';
          
         // $criteres['commande_id']=$id;
          $donnee = ['commande_status'=>1];
             
      
          $this->db->where($champ,$id);
          $this->db->update($commande,$donnee);


          $this->db->select('commande_article_decription,commande_categorie_id,commande_client_id');
					   $this->db->from($commande);
						$this->db->where($champ,$id);
						$old_value=$this->db->get();
						foreach($old_value->result() as $valeur)
						{
                            

                 $save_data = [
				'fiche_numero' => $this->numero_fiche_travail(),
				'fiche_description_article' =>$valeur->commande_article_decription,
				'fiche_article_categorie_id'=>$valeur->commande_categorie_id, 
				'fiche_client_id' => $valeur->commande_client_id,
				'fiche_user_id' => get_user_data('id'),
				'fiche_stutus'=>0,
				'fiche_suppresion_status'=>1,				
				'fiche_date' => date('Y-m-d H:i:s'),
				'fiche_date_modification' => date('Y-m-d H:i:s'),
			        ];  

			      $this->db->insert('pos_store_2_ibi_fiche_travail', $save_data);
                  $id_fiche_travail = $this->db->insert_id();


                   
						}

			


        
		
                       $this->db->select('*');
					
					   $this->db->from($detail);
						$this->db->where($champs,$id);
						$old_value=$this->db->get();
						foreach($old_value->result() as $data)
						{

      			$save_datas = [

				'id_fiche' => $id_fiche_travail,

				'fiche_article' => $data->commande_article,

				'fiche_prix' => $data->commande_prix,

				'fiche_quantite' =>$data->commande_quantite,

				'fiche_unite ' =>$data->commande_unite,

						];

               $approuver_commande= $this->db->insert('pos_store_2_ibi_fiche_travail_detail', $save_datas);


		}

			if ($approuver_commande) {

		            set_message('Approbation réussi.', 'success');

				} else {

		            set_message('Echec .', 'error');

				}



				redirect('administrator/pos_store_2_ibi_fiche_travail');




	}
/*public function approuver_commande($id)
	{

		
          $commande='pos_store_2_ibi_commande';
          $detail='pos_store_2_ibi_commande_detail';
          $champ='commande_id';
          $champs='id_commandes';
          
          $criteres['commande_id']=$id;
          $donnee = ['commande_status'=>1];
             
        $this->model_pos_store_2_ibi_commande->update($commande, $criteres, $donnee);


      $this->data['pos_store_2_ibi_commande'] = $this->model_pos_store_2_ibi_commande->getRequete($id,$commande,$champ);

		foreach ($pos_store_2_ibi_commande as $data_selected) { 

			

				$save_data = [
				'fiche_numero' => $this->numero_fiche_travail(),
				'fiche_description_article' =>$data_selected['commande_article_decription'],
				'fiche_article_categorie_id'=>$data_selected['commande_categorie_id'], 
				'fiche_client_id' => $data_selected['commande_client_id'],
				'fiche_user_id' => get_user_data('id'),
				'fiche_stutus'=>0,
				'fiche_suppresion_status'=>1,				
				'fiche_date' => date('Y-m-d H:i:s'),
				'fiche_date_modification' => date('Y-m-d H:i:s'),
			];
        $id_fiche_travail = $this->model_pos_store_2_ibi_commande->insert_last_id($commande, $save_data);
		}




		$this->data['pos_store_2_ibi_commandes'] = $this->model_pos_store_2_ibi_commande->getRequete($id,$detail,$champs);

		foreach ($pos_store_2_ibi_commandes as $data) { 




      			$save_datas = [

				'id_fiche' => $id_fiche_travail,

				'fiche_article' => $data["commande_article"],

				'fiche_prix' => $data["commande_prix"],

				'fiche_quantite' =>$data["commande_quantite"],

				'fiche_unite ' =>$data["commande_unite"],

						];


       $this->model_pos_store_2_ibi_commande->create($detail, $save_datas);

		}


	}*/













	public function view($id)
	{
		
$champs='id_commandes';
$detail='pos_store_2_ibi_commande_detail';
		$this->is_allowed('pos_store_2_ibi_commande_view');

		$this->data['pos_store_2_ibi_commande'] = $this->model_pos_store_2_ibi_commande->getRequete($id,$detail,$champs);

		$this->template->title('Pos Store 2 Ibi Commande Detail');
		$this->render('backend/standart/administrator/pos_store_2_ibi_commande/pos_store_2_ibi_commande_view', $this->data);
	}
	
	/**
	* delete Pos Store 2 Ibi Commandes
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$pos_store_2_ibi_commande = $this->model_pos_store_2_ibi_commande->find($id);

		
		
		return $this->model_pos_store_2_ibi_commande->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('pos_store_2_ibi_commande_export');

		$this->model_pos_store_2_ibi_commande->export('pos_store_2_ibi_commande', 'pos_store_2_ibi_commande');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('pos_store_2_ibi_commande_export');

		$this->model_pos_store_2_ibi_commande->pdf('pos_store_2_ibi_commande', 'pos_store_2_ibi_commande');
	}


 function printable_commande()
 {
   // $id=$this->uri->segment(4);
   

	//$data['donne']=$this->model_project_situation_caisse->getRequete($id);
	

		$this->render('backend/standart/administrator/pos_store_2_ibi_commande/printable_commande');
}



}


/* End of file pos_store_2_ibi_commande.php */
/* Location: ./application/controllers/administrator/Pos Store 2 Ibi Commande.php */