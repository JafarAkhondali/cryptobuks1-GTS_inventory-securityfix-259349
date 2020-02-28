<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
*| --------------------------------------------------------------------------
*| Pos Store Ibi Commandes Controller
*| --------------------------------------------------------------------------
*| Pos Store Ibi Commandes site
*|
*/
class Registers extends Admin	
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_registers');
	}

	/**
	* show all Pos Store Ibi Commandess
	*
	* @var $offset String
	*/
	public function index($offset = 0)
	{
		$this->is_allowed('registers_list');

		$filter = $this->input->get('q');
		$field 	= $this->input->get('f');

		$this->data['registerss'] = $this->model_registers->get($filter, $field, $this->limit_page, $offset);
		$this->data['registers_counts'] = $this->model_registers->count_all($filter, $field);

		$config = [
			'base_url'     => 'administrator/registers/index/',
			'total_rows'   => $this->model_registers->count_all($filter, $field),
			'per_page'     => $this->limit_page,
			'uri_segment'  => 4,
		];

		$this->data['pagination'] = $this->pagination($config);

		$this->template->title('Liste de commandes');
		$this->render('backend/standart/administrator/registers/registers_list', $this->data);
	}
	
	/**
	* Add new registerss
	*
	*/
	public function add()
	{
		$this->is_allowed('registers_add');
        $this->data['getProduit'] = $this->model_registers->getList('pos_store_2_ibi_articles');
		$this->template->title('Effectuer une vente');
		$this->render('backend/standart/administrator/registers/registers_add', $this->data);
	}

	/**
	* Add New Pos Store Ibi Commandess
	*
	* @return JSON
	*/
	public function add_save()
	{
		if (!$this->is_allowed('registers_add', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
        if($this->input->post('optradio') == 'is_proforma_client'){
       
       $this->form_validation->set_rules('titreproforma', 'Intitule proforma', 'trim|required|max_length[30]');

        }else{
    
       $this->form_validation->set_rules('titrecommande', 'Intitule command', 'trim|required|max_length[30]');
        }
		$this->form_validation->set_rules('ref_client', 'customer', 'trim|required|max_length[11]');
		
		
		if ($this->form_validation->run()) {

            $ref_client=$this->input->post('ref_client');
            $article=$this->input->post('article');
            $quantite=$this->input->post('search');
            $price=$this->input->post('price');
            $temps=$this->input->post('temps');
            $delai=$this->input->post('delai');
            $remise=$this->input->post('remise');
            $name  = $this->input->post('name');

            $condPayer=$this->input->post('condPayer');
            $typeCond1=$this->input->post('typeCond1');

			$typeCond2=$this->input->post('typeCond2');
			$validOff=$this->input->post('validOff');
			$tempsvalid=$_POST['tempsvalid'];
			if($tempsvalid=='1'){
			    $validOffrr= ''.$validOff.' jour(s)';
			}elseif($tempsvalid=='2'){
			    $validOffrr=  ''.$validOff.' semaine(s)';
			}

			if($this->input->post('optradio') == 'is_proforma_client'){
                
                $titre=$this->input->post('titreproforma');
				$code = $this->model_registers->shuffle_code();

				$total = 0;

	        for ($i=0; $i < count($article); $i++) { 

	        	$prixtotal=$price[$i]*$quantite[$i];
	        	$rem=str_replace('%', '@%', $remise[$i]);
	        	$rems=explode('@', $rem);
                if($rems[1]=='%'){
                    $remiseht=$prixtotal*$rems[0]/100;
                    $prixtotalht=$prixtotal-$remiseht;
                    $discount_type='percentage';
                    $discount_amount='0';
                    $discount_percent=$remiseht;
                }else{
                	$remiseht=$rems[0];
                	$prixtotalht=$prixtotal-$remiseht;
                	$discount_type='flat';
                	$discount_amount=$remiseht;
                    $discount_percent='0';
                }

                $save_data1 = [
					'REF_PRODUCT_CODEBAR_PROFORMA_PROD' => $article[$i],
					'REF_PROFORMA_CODE_PROD' => $code,
					'QUANTITE_PROFORMA_PROD' => $quantite[$i],
					'PRIX_PROFORMA_PROD' =>$price[$i],
					'PRIX_TOTAL_PROFORMA_PROD' =>$prixtotalht,
					'DISCOUNT_TYPE_PROFORMA_PROD' =>$discount_type,
					'DISCOUNT_AMOUNT_PROFORMA_PROD' =>$discount_amount,
					'DISCOUNT_PERCENT_PROFORMA_PROD' =>$discount_percent,
					'NAME_PROFORMA_PROD' =>$name[$i],
								
				];
            $total +=$prixtotalht;
		    $save_proforma_produits = $this->model_registers->insert('pos_store_2_ibi_proforma_produits',$save_data1);

		    }
		    $table = "pos_store_2_ibi_proforma";
            $tva=$total * 0.18;
		    $save_data = [
				'TITRE_PROFORMA' => $titre,
				'CODE_PROFORMA' => $code,
				'REF_CLIENT_PROFORMA' => $ref_client,
				'TYPE_PROFORMA' => 'ibi_proforma_pv',
				'DATE_CREATION_PROFORMA' => date('Y-m-d H:i:s'),
				'AUTHOR_PROFORMA' => get_user_data('id'),
				'TOTAL_PROFORMA' => $total,
				'TVA_PROFORMA' => $tva,
				'TYPE_DELAY_PROFORMA' => $temps,
				'TEMPS_DELAY_PROFORMA' => $delai,
				'COND_PAID_PROFORMA' => $condPayer,
				'PERCENT_PAID_PROFORMA' => $typeCond1,
				'PERCENT_PAID_LIVR_PROFORMA' => $typeCond2,
				'VALID_OFFRE_PROFORMA' => $validOffrr,
							
			];
          
			}else{
				$titre=$this->input->post('titrecommande');
				$code = $this->model_registers->random_code();

				$total = 0;

	        for ($i=0; $i < count($article); $i++) { 

	        	$prixtotal=$price[$i]*$quantite[$i];
	        	$rem=str_replace('%', '@%', $remise[$i]);
	        	$rems=explode('@', $rem);
                if($rems[1]=='%'){
                    $remiseht=$prixtotal*$rems[0]/100;
                    $prixtotalht=$prixtotal-$remiseht;
                    $discount_type='percentage';
                    $discount_amount='0';
                    $discount_percent=$remiseht;
                }else{
                	$remiseht=$rems[0];
                	$prixtotalht=$prixtotal-$remiseht;
                	$discount_type='flat';
                	$discount_amount=$remiseht;
                    $discount_percent='0';
                }

                $save_data1 = [
					'REF_PRODUCT_CODEBAR_COMMAND_PROD' => $article[$i],
					'REF_COMMAND_CODE_PROD' => $code,
					'QUANTITE_COMMAND_PROD' => $quantite[$i],
					'PRIX_COMMAND_PROD' =>$price[$i],
					'PRIX_TOTAL_COMMAND_PROD' =>$prixtotalht,
					'DISCOUNT_TYPE_COMMAND_PROD' =>$discount_type,
					'DISCOUNT_AMOUNT_COMMAND_PROD' =>$discount_amount,
					'DISCOUNT_PERCENT_COMMAND_PROD' =>$discount_percent,
					'NAME_COMMAND_PROD' =>$name[$i],
								
				];
            $total +=$prixtotalht;
		    $save_proforma_produits = $this->model_registers->insert('pos_store_2_ibi_commandes_produits',$save_data1);

		    }
		    $table = "pos_store_2_ibi_commandes";
            $tva=$total * 0.18;
		    $save_data = [
				'TITRE_COMMAND' => $titre,
				'CODE_COMMAND' => $code,
				'REF_CLIENT_COMMAND' => $ref_client,
				'TYPE_COMMAND' => 'ibi_order_attente',
				'DATE_CREATION_COMMAND' => date('Y-m-d H:i:s'),
				'AUTHOR_COMMAND' => get_user_data('id'),
				'TOTAL_COMMAND' => $total,
				'TVA_COMMAND' => $tva,
							
			];

			}
		    
			$save = $this->model_registers->insert($table,$save_data);

			if ($save) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/registers/edit/' . $save, 'Edit Pos Store Ibi Commandes'),
						anchor('administrator/registers', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/registers/edit/' . $save, 'Edit Pos Store Ibi Commandes')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/registers');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/registers');
				}
			}

		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	
		/**
	* Update view Pos Store Ibi Commandess
	*
	* @var $id String
	*/
	public function edit($id)
	{
		$this->is_allowed('registers_update');

		$commandes = $this->model_registers->getOne('pos_store_2_ibi_commandes',array('ID_COMMAND'=>$id));
		$this->data['type'] = $commandes['TYPE_COMMAND'];
		$this->data['titre'] = $commandes['TITRE_COMMAND'];
		$this->data['ref_client'] = $commandes['REF_CLIENT_COMMAND'];
		$this->data['code_commande'] = $commandes['CODE_COMMAND'];
		$this->data['getposProduit'] = $this->model_registers->getList('pos_store_2_ibi_commandes_produits',array('REF_COMMAND_CODE_PROD'=>$commandes['CODE_COMMAND']));
		$this->data['registers'] = $commandes;
        $this->data['getProduit'] = $this->model_registers->getList('pos_store_2_ibi_articles','CODEBAR_ARTICLE NOT IN (SELECT REF_PRODUCT_CODEBAR_COMMAND_PROD FROM pos_store_2_ibi_commandes_produits WHERE REF_COMMAND_CODE_PROD= "'.$commandes['CODE_COMMAND'].'")', NULL, FALSE);

		$this->template->title('Modifier une commande');
		$this->render('backend/standart/administrator/registers/registers_update', $this->data);
	}
	public function delete_produit_cart(){
		$id = $this->input->post('id');
	
		if($this->input->post('checkedRadio') == 'is_proforma_client'){
		$link = "proforma";
		$criteres['REF_PRODUCT_CODEBAR_PROFORMA_PROD'] = $this->input->post('ref_code_produit');
		$criteres['REF_PROFORMA_CODE_PROD'] = $this->input->post('code_command');
		$table = "pos_store_2_ibi_proforma_produits";

		}else{

        $link = "registers";
		$criteres['REF_PRODUCT_CODEBAR_COMMAND_PROD'] = $this->input->post('ref_code_produit');
		$criteres['REF_COMMAND_CODE_PROD'] = $this->input->post('code_command');
		$table = "pos_store_2_ibi_commandes_produits";
	   }
	  
		$delete_cart = $this->model_registers->delete($table,$criteres);
		
		if ($delete_cart) {
			$this->data['message'] = 'success';
			$this->data['redirect'] = base_url('administrator/'.$link.'/edit/'.$id.'');
		}
		echo json_encode($this->data);

	}
	public function edit_save($id)
	{
		if (!$this->is_allowed('registers_update', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
	
		if($this->input->post('optradio') == 'is_proforma_client'){
       
       $this->form_validation->set_rules('titreproforma', 'Intitule proforma', 'trim|required|max_length[30]');

        }else{
    
       $this->form_validation->set_rules('titrecommande', 'Intitule command', 'trim|required|max_length[30]');
        }
		$this->form_validation->set_rules('ref_client', 'customer', 'trim|required|max_length[11]');
		
		
		if ($this->form_validation->run()) {

			$ref_client=$this->input->post('ref_client');
            $article=$this->input->post('article');
            $quantite=$this->input->post('search');
            $price=$this->input->post('price');
            $temps=$this->input->post('temps');
            $delai=$this->input->post('delai');
            $remise=$this->input->post('remise');
            $name  = $this->input->post('name');

            $condPayer=$this->input->post('condPayer');
            $typeCond1=$this->input->post('typeCond1');

			$typeCond2=$this->input->post('typeCond2');
			$validOff=$this->input->post('validOff');
			$tempsvalid=$_POST['tempsvalid'];
			if($tempsvalid=='1'){
			    $validOffrr= ''.$validOff.' jour(s)';
			}elseif($tempsvalid=='2'){
			    $validOffrr=  ''.$validOff.' semaine(s)';
			}

			if($this->input->post('optradio') == 'is_proforma_client'){
                
                $titre=$this->input->post('titreproforma');
                $link='proforma';
			$proformas = $this->model_registers->getOne('pos_store_2_ibi_proforma',array('ID_PROFORMA'=>$id));

			$total=0;

			for ($i=0; $i < count($article) ; $i++) {

             	$prixtotal=$price[$i]*$quantite[$i];
	        	$rem=str_replace('%', '@%', $remise[$i]);
	        	$rems=explode('@', $rem);
                if($rems[1]=='%'){
                    $remiseht=$prixtotal*$rems[0]/100;
                    $prixtotalht=$prixtotal-$remiseht;
                    $discount_type='percentage';
                    $discount_amount='0';
                    $discount_percent=$remiseht;
                }else{
                	$remiseht=$rems[0];
                	$prixtotalht=$prixtotal-$remiseht;
                	$discount_type='flat';
                	$discount_amount=$remiseht;
                    $discount_percent='0';
                }
            $produit_count = $this->model_registers->record_countsome('pos_store_2_ibi_proforma_produits',array('REF_PRODUCT_CODEBAR_PROFORMA_PROD'=>$article[$i],'REF_PROFORMA_CODE_PROD'=>$proformas['CODE_PROFORMA']));
            if($produit_count < 1){

            	$save_data = [
					'REF_PRODUCT_CODEBAR_PROFORMA_PROD' => $article[$i],
					'REF_PROFORMA_CODE_PROD' => $proformas['CODE_PROFORMA'],
					'QUANTITE_PROFORMA_PROD' => $quantite[$i],
					'PRIX_PROFORMA_PROD' =>$price[$i],
					'PRIX_TOTAL_PROFORMA_PROD' =>$prixtotalht,
					'DISCOUNT_TYPE_PROFORMA_PROD' =>$discount_type,
					'DISCOUNT_AMOUNT_PROFORMA_PROD' =>$discount_amount,
					'DISCOUNT_PERCENT_PROFORMA_PROD' =>$discount_percent,
					'NAME_PROFORMA_PROD' =>$name[$i],
								
				];
		    $save_proforma_produits = $this->model_registers->insert('pos_store_2_ibi_proforma_produits',$save_data);
                
            }else{
            	$criteres['REF_PRODUCT_CODEBAR_PROFORMA_PROD'] = $article[$i];
            	$criteres['REF_PROFORMA_CODE_PROD'] = $proformas['CODE_PROFORMA'];
            	$save_data1 = [
					'QUANTITE_PROFORMA_PROD' => $quantite[$i],
					'PRIX_PROFORMA_PROD' =>$price[$i],
					'PRIX_TOTAL_PROFORMA_PROD' =>$prixtotalht,
					'DISCOUNT_TYPE_PROFORMA_PROD' =>$discount_type,
					'DISCOUNT_AMOUNT_PROFORMA_PROD' =>$discount_amount,
					'DISCOUNT_PERCENT_PROFORMA_PROD' =>$discount_percent,				
				];
		    $update_proforma_produits = $this->model_registers->update('pos_store_2_ibi_proforma_produits',$criteres,$save_data1);
            }
            $total +=$prixtotalht; 
           }

           $table = "pos_store_2_ibi_proforma";
           $critereCommande['CODE_PROFORMA'] = $proformas['CODE_PROFORMA'];
           $tva=$total * 0.18;
		   $update_data = [
				'TITRE_PROFORMA' => $titre,
				'REF_CLIENT_PROFORMA' => $ref_client,
				'TYPE_PROFORMA' => 'ibi_proforma_pv',
				'DATE_MOD_PROFORMA' => date('Y-m-d H:i:s'),
				'AUTHOR_PROFORMA' => get_user_data('id'),
				'TOTAL_PROFORMA' => $total,
				'TVA_PROFORMA' => $tva,
							
			];

            }else{

            $titre=$this->input->post('titrecommande');
            $link='registers';
			$commandes = $this->model_registers->getOne('pos_store_2_ibi_commandes',array('ID_COMMAND'=>$id));

			$total=0;

			for ($i=0; $i < count($article) ; $i++) {

             	$prixtotal=$price[$i]*$quantite[$i];
	        	$rem=str_replace('%', '@%', $remise[$i]);
	        	$rems=explode('@', $rem);
                if($rems[1]=='%'){
                    $remiseht=$prixtotal*$rems[0]/100;
                    $prixtotalht=$prixtotal-$remiseht;
                    $discount_type='percentage';
                    $discount_amount='0';
                    $discount_percent=$remiseht;
                }else{
                	$remiseht=$rems[0];
                	$prixtotalht=$prixtotal-$remiseht;
                	$discount_type='flat';
                	$discount_amount=$remiseht;
                    $discount_percent='0';
                }
            $produit_count = $this->model_registers->record_countsome('pos_store_2_ibi_commandes_produits',array('REF_PRODUCT_CODEBAR_COMMAND_PROD'=>$article[$i],'REF_COMMAND_CODE_PROD'=>$commandes['CODE_COMMAND']));
            if($produit_count < 1){

            	$save_data = [
					'REF_PRODUCT_CODEBAR_COMMAND_PROD' => $article[$i],
					'REF_COMMAND_CODE_PROD' => $commandes['CODE_COMMAND'],
					'QUANTITE_COMMAND_PROD' => $quantite[$i],
					'PRIX_COMMAND_PROD' =>$price[$i],
					'PRIX_TOTAL_COMMAND_PROD' =>$prixtotalht,
					'DISCOUNT_TYPE_COMMAND_PROD' =>$discount_type,
					'DISCOUNT_AMOUNT_COMMAND_PROD' =>$discount_amount,
					'DISCOUNT_PERCENT_COMMAND_PROD' =>$discount_percent,
					'NAME_COMMAND_PROD' =>$name[$i],
								
				];
		    $save_commandes_produits = $this->model_registers->insert('pos_store_2_ibi_commandes_produits',$save_data);
                
            }else{
            	$criteres['REF_PRODUCT_CODEBAR_COMMAND_PROD'] = $article[$i];
            	$criteres['REF_COMMAND_CODE_PROD'] = $commandes['CODE_COMMAND'];
            	$save_data1 = [
					'QUANTITE_COMMAND_PROD' => $quantite[$i],
					'PRIX_COMMAND_PROD' =>$price[$i],
					'PRIX_TOTAL_COMMAND_PROD' =>$prixtotalht,
					'DISCOUNT_TYPE_COMMAND_PROD' =>$discount_type,
					'DISCOUNT_AMOUNT_COMMAND_PROD' =>$discount_amount,
					'DISCOUNT_PERCENT_COMMAND_PROD' =>$discount_percent,				
				];
		    $update_commandes_produits = $this->model_registers->update('pos_store_2_ibi_commandes_produits',$criteres,$save_data1);
            }
            $total +=$prixtotalht; 
           }

           $table = "pos_store_2_ibi_commandes";
           $critereCommande['CODE_COMMAND'] = $commandes['CODE_COMMAND'];
           $tva=$total * 0.18;
		   $update_data = [
				'TITRE_COMMAND' => $titre,
				'REF_CLIENT_COMMAND' => $ref_client,
				'TYPE_COMMAND' => 'ibi_order_attente',
				'DATE_MOD_COMMAND' => date('Y-m-d H:i:s'),
				'AUTHOR_COMMAND' => get_user_data('id'),
				'TOTAL_COMMAND' => $total,
				'TVA_COMMAND' => $tva,
							
			];

		}

			$save_registers = $this->model_registers->update($table,$critereCommande,$update_data);

			if ($save_registers) {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $id;
					$this->data['message'] = cclang('success_update_data_stay', [
						anchor('administrator/'.$link.'', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_update_data_redirect', [
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/'.$link.'');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/'.$link.'');
				}
			}
		} else {
			$this->data['success'] = false;
			$this->data['message'] = validation_errors();
		}

		echo json_encode($this->data);
	}
	public function generate_commande(){

		$this->is_allowed('registers_generate');
	
        $this->data['getProforma'] = $this->model_registers->getList('pos_store_2_ibi_proforma','STATUT_PROFORMA !=2');
        
		$this->template->title('Effectuer une commande');
		$this->render('backend/standart/administrator/registers/registers_generate', $this->data);
	}
	public function generate_commande_post(){

		$code_proforma = $this->input->post('code_proforma');
		$ref_client = $this->input->post('ref_client');

		$getproformaProduit = $this->model_registers->getList('pos_store_2_ibi_proforma_produits', array('REF_PROFORMA_CODE_PROD'=>$code_proforma));

		$table['tableau'] = '<input type="hidden" name="code_proforma" value="'.$code_proforma.'"><input type="hidden" name="ref_client" value="'.$ref_client.'">';

		foreach ($getproformaProduit as $value) {

			if($value['DISCOUNT_TYPE_PROFORMA_PROD'] == 'percentage'){

                              $remiseht = $value['DISCOUNT_PERCENT_PROFORMA_PROD'] * 100 / $value['PRIX_PROFORMA_PROD'].'%';
                      
                            }elseif($value['DISCOUNT_TYPE_PROFORMA_PROD'] == 'flat'){
                              $remiseht = $value['DISCOUNT_AMOUNT_PROFORMA_PROD'];
                            }else{
                              $remiseht = '';
                            }

                    $table['tableau'] .= '<table><tr><td hidden><input type="hidden" name="article[]" value="'.$value['REF_PRODUCT_CODEBAR_PROFORMA_PROD'].'"><div id="article">'.$value['REF_PRODUCT_CODEBAR_PROFORMA_PROD'].'</div></td>
                    <td><input type="hidden" name="name[]" value="'.$value['NAME_PROFORMA_PROD'].'"><div id="name">'.$value['NAME_PROFORMA_PROD'].'</div></td>
                    <td style="line-height: 35px;" class="price"><input type="hidden" name="price[]" value="'.$value['PRIX_PROFORMA_PROD'].'"/>'.$value['PRIX_PROFORMA_PROD'].'</td>
                    <td>
                        <div class="input-group inpuut-group-sm" style="line-height: 35px;">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default moins" onclick="moins(this)"><i class="fa fa-minus"></i>
                            </button>
                        </span>
                        <input type="text" name="search[]" class="form-control search" onkeyup="search(this)" value="'.$value['QUANTITE_PROFORMA_PROD'].'">
                        <span class="input-group-btn"><button type="button" class="btn btn-default plus" onclick="plus(this)"><i class="fa fa-plus"></i></button>
                        </span>
                        </div>
                    </td>
                    <td style="line-height: 35px;"><input type="hidden" name="remise[]" value="'.$remiseht.'" size="8">'.$remiseht.'</td>
                    <td style="line-height: 35px;" class="total">'.$value['PRIX_TOTAL_PROFORMA_PROD'].'</td>
                     <td style="line-height: 25px;"><input type="hidden" class="unit" name="unit[]" value="" size="8" required>Kg</td>
                    </tr></table>';
                   
              }
              echo json_encode($table);
	}
	function generate_commande_add_save(){

		if (!$this->is_allowed('registers_generate', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}
			$code_proforma=$this->input->post('code_proforma');
		    $ref_client=$this->input->post('ref_client');
            $article=$this->input->post('article');
            $quantite=$this->input->post('search');
            $price=$this->input->post('price');
            $remise=$this->input->post('remise');
            $name  = $this->input->post('name');

		    $code = $this->model_registers->random_code();

		    $total = 0;

	        for ($i=0; $i < count($article); $i++) {

	        	$prixtotal=$price[$i]*$quantite[$i];
	        	$rem=str_replace('%', '@%', $remise[$i]);
	        	$rems=explode('@', $rem);
                if($rems[1]=='%'){
                    $remiseht=$prixtotal*$rems[0]/100;
                    $prixtotalht=$prixtotal-$remiseht;
                    $discount_type='percentage';
                    $discount_amount='0';
                    $discount_percent=$remiseht;
                }else{
                	$remiseht=$rems[0];
                	$prixtotalht=$prixtotal-$remiseht;
                	$discount_type='flat';
                	$discount_amount=$remiseht;
                    $discount_percent='0';
                }

                $save_data1 = [
					'REF_PRODUCT_CODEBAR_COMMAND_PROD' => $article[$i],
					'REF_COMMAND_CODE_PROD' => $code,
					'QUANTITE_COMMAND_PROD' => $quantite[$i],
					'PRIX_COMMAND_PROD' =>$price[$i],
					'PRIX_TOTAL_COMMAND_PROD' =>$prixtotalht,
					'DISCOUNT_TYPE_COMMAND_PROD' =>$discount_type,
					'DISCOUNT_AMOUNT_COMMAND_PROD' =>$discount_amount,
					'DISCOUNT_PERCENT_COMMAND_PROD' =>$discount_percent,
					'NAME_COMMAND_PROD' =>$name[$i],
								
				];
            $total +=$prixtotalht;
		    $save_proforma_produits = $this->model_registers->insert('pos_store_2_ibi_commandes_produits',$save_data1);

		    }
		    $table = "pos_store_2_ibi_commandes";
            $tva=$total * 0.18;
		    $save_data = [
				'TITRE_COMMAND' => 'Non Défini',
				'CODE_COMMAND' => $code,
				'REF_CLIENT_COMMAND' => $ref_client,
				'TYPE_COMMAND' => 'ibi_order_attente',
				'DATE_CREATION_COMMAND' => date('Y-m-d H:i:s'),
				'AUTHOR_COMMAND' => get_user_data('id'),
				'TOTAL_COMMAND' => $total,
				'TVA_COMMAND' => $tva,
							
			];

			$save = $this->model_registers->insert($table,$save_data);

			if ($save) {

				$table = 'pos_store_2_ibi_proforma';
				$update_proforma = $this->model_registers->update($table,array(' 	CODE_PROFORMA'=>$this->input->post('code_proforma')),array('STATUT_PROFORMA' => 2));

				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = true;
					$this->data['id'] 	   = $save;
					$this->data['message'] = cclang('success_save_data_stay', [
						anchor('administrator/registers/edit/' . $save, 'Edit Pos Store Ibi Commandes'),
						anchor('administrator/registers', ' Go back to list')
					]);
				} else {
					set_message(
						cclang('success_save_data_redirect', [
						anchor('administrator/registers/edit/' . $save, 'Edit Pos Store Ibi Commandes')
					]), 'success');

            		$this->data['success'] = true;
					$this->data['redirect'] = base_url('administrator/registers');
				}
			} else {
				if ($this->input->post('save_type') == 'stay') {
					$this->data['success'] = false;
					$this->data['message'] = cclang('data_not_change');
				} else {
            		$this->data['success'] = false;
            		$this->data['message'] = cclang('data_not_change');
					$this->data['redirect'] = base_url('administrator/registers');
				}
			}

		echo json_encode($this->data);

	}
	public function generate_facture($id){

		if (!$this->is_allowed('registers_list', false)) {
			echo json_encode([
				'success' => false,
				'message' => cclang('sorry_you_do_not_have_permission_to_access')
				]);
			exit;
		}

		$commande = $this->model_registers->getOne('pos_store_2_ibi_commandes',array('ID_COMMAND'=>$id));

		if($commande['STATUT_COMMAND'] == 'is_invoice'){

			 set_message('Vous avez déjà créer une facture sur cette commande', 'error');

		}else{
         
		    $save_data = [
				'NUMERO_FACTURE' => $this->model_registers->generate_invoice(),
				'REF_CODE_COMMAND_FACTURE' => $commande['CODE_COMMAND'],
				'STORE_BY_FACTURE' => 2,
				'DATE_CREATION_FACTURE' => date('Y-m-d H:i:s'),
				'AUTHOR_FACTURE' => get_user_data('id'),
							
			];

			$save = $this->model_registers->insert('pos_ibi_facture',$save_data);

			$table = 'pos_store_2_ibi_commandes';
		    $update = $this->model_registers->update($table,array('CODE_COMMAND'=>$commande['CODE_COMMAND']),array('STATUT_COMMAND' => 'is_invoice'));

			if ($save and $update) {

	            set_message('Facture faite avec succès', 'success');

	        } else {
	            set_message('Impossible de faire la facture, Contactez l\'administrateur', 'error');
	        }
	    }

		    redirect_back();

	} 
	
	/**
	* delete Pos Store Ibi Commandess
	*
	* @var $id String
	*/
	public function delete($id = null)
	{
		$this->is_allowed('registers_delete');

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
            set_message(cclang('has_been_deleted', 'registers'), 'success');
        } else {
            set_message(cclang('error_delete', 'registers'), 'error');
        }

		redirect_back();
	}

		/**
	* View view Pos Store Ibi Commandess
	*
	* @var $id String
	*/
	public function view($id)
	{
		$this->is_allowed('registers_view');

		$this->data['registers'] = $this->model_registers->join_avaiable()->filter_avaiable()->find($id);

		$this->template->title('Historique d\'une commande');
		$this->render('backend/standart/administrator/registers/registers_view', $this->data);
	}
	
	/**
	* delete Pos Store Ibi Commandess
	*
	* @var $id String
	*/
	private function _remove($id)
	{
		$registers = $this->model_registers->find($id);

		
		
		return $this->model_registers->remove($id);
	}
	
	
	/**
	* Export to excel
	*
	* @return Files Excel .xls
	*/
	public function export()
	{
		$this->is_allowed('registers_export');

		$this->model_registers->export('registers', 'registers');
	}

	/**
	* Export to PDF
	*
	* @return Files PDF .pdf
	*/
	public function export_pdf()
	{
		$this->is_allowed('registers_export');

		$this->model_registers->pdf('registers', 'registers');
	}
}


/* End of file registers.php */
/* Location: ./application/controllers/administrator/Pos Store Ibi Commandes.php */