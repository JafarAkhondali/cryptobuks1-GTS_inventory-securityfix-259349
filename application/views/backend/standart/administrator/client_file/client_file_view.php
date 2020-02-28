<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script>
function myFunction() {
  window.print();
}
</script>

<script type="text/javascript">


//This page is a result of an autogenerated content made by running test.html with firefox.

function domo(){

 

   // Binding keys

   $('*').bind('keydown', 'Ctrl+e', function assets() {

      $('#btn_edit').trigger('click');

       return false;

   });



   $('*').bind('keydown', 'Ctrl+x', function assets() {

      $('#btn_back').trigger('click');

       return false;

   });

    

}





jQuery(document).ready(domo);

</script>

<!-- Content Header (Page header) -->

<section class="content-header">

   <h1>

      Fiche du client      <small><?= cclang('detail', ['Fiche']); ?> </small>

   </h1>

   <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>

      <li class=""><a  href="<?= site_url('administrator/project_client_file'); ?>">Fiche du client</a></li>

      <li class="active"><?= cclang('detail'); ?></li>

   </ol>

</section>

<!-- Main content -->

<section class="content">

  <?php

   $fiche_id=$this->uri->segment(4);

   $client_id=$this->uri->segment(5);

    /* $projet = $project_proforma->project_proforma_devis_id;
     $client = $project_proforma->project_proforma_client_id;*/

     //echo $project."/".$client; ?> 

   <div class="row" >

     

      <div class="col-md-12">

         <div class="box box-warning">

            <div class="box-body ">



               <!-- Widget: user widget style 1 -->

               <div class="box box-widget widget-user-2">


                  <div class="form-horizontal" name="form_project_client_file" id="form_project_client_file" >

                      <?php

                  $requete = $this->db->query('SELECT cf.PROFORMA_ID_CLIENT_FILE,cf.REF_CLIENT_FILE,cf.REF_PROFORMA_CODE_CLIENT_FILE,cf.NUMBER_PURCHASE_CLIENT_FILE,cf.DATE_CREATION_CLIENT_FILE,cf.FILE_PURCHASE_CLIENT_FILE,cf.COMMISSIONING_CLIENT_FILE,cf.CONTRAT_GARANTIE_CLIENT_FILE,cf.CONTRAT_MAINTENANCE_CLIENT_FILE,cf.CLOSURE_DATE_CLIENT_FILE,cf.CLOSURE_BY_CLIENT_FILE,cf.AUTHOR,c.NOM_CLIENT,c.PRENOM_CLIENT,c.TEL_CLIENT,c.EMAIL_CLIENT,c.ADRESSE_CLIENT,c.CITY_CLIENT,c.COUNTRY_CLIENT,c.COMPANY_NAME_CLIENT,cg.NAME_GROUP FROM pos_store_2_ibi_client_file cf, pos_ibi_clients c, pos_ibi_clients_groups cg, pos_store_2_ibi_proforma p WHERE p.ID_PROFORMA=cf.PROFORMA_ID_CLIENT_FILE AND c.ID_CLIENT=cf.REF_CLIENT_FILE AND c.REF_GROUP_CLIENT=cg.ID_GROUP AND cf.ID_CLIENT_FILE-"'.$fiche_id.'"');

                  // $requete=$this->db->query('SELECT f.project_client_file_id, f.project_client_file_project_client_id as client_id,c.*,ca.project_categories_name as category_name,p.personne_contact_name,p.personne_contact_tel,p.personne_contact_email,p.personne_contact_grade,p.project_id,f.project_client_file_invoice_number,f.project_client_file_date_creation,f.project_client_file_opening_status,f.project_client_file_number,f.project_client_file_purchase_number,pro.project_proforma_codes,f.project_client_file_create_by,f.project_client_file_closure_by,f.project_client_file_closure_date,f.client_file_purchase_file,f.commissioning,f.contant_garantie,f.contrat_maintenance FROM project p,project_client_file f, project_clients c,project_categories ca,project_proforma pro WHERE f.project_client_file_project_id=p.project_id AND c.project_clients_id=f.project_client_file_project_client_id AND ca.project_categories_id=p.project_id_discussion_category AND pro.project_proforma_id=f.project_client_file_proforma_code AND  f.project_client_file_project_client_id="'.$client_id.'" AND f.project_client_file_id="'.$fiche_id.'"');

                        if ($requete->num_rows() > 0) {


                          foreach ($requete->result() as $value) {

                            $client_name=$value->NOM_CLIENT.' '.$value->PRENOM_CLIENT;

                            $clients_adresse=$value->ADRESSE_CLIENT;

                            $client_tel=$value->TEL_CLIENT;

                            $client_mail=$value->EMAIL_CLIENT;

                            $group_client=$value->NAME_GROUP;

                            $client_bp='';

                            $city=$value->CITY_CLIENT;

                            $country_client=$value->COUNTRY_CLIENT;

                            $company_name=$value->COMPANY_NAME_CLIENT;

                            $client_id="";

                            $project_id="";

                            $nif="";

                            $project_commande_number=$value->NUMBER_PURCHASE_CLIENT_FILE;

                            $project_client_date=$value->DATE_CREATION_CLIENT_FILE;

                            $user=$value->AUTHOR;

                            $closure_date=$value->CLOSURE_DATE_CLIENT_FILE;

                            $closure_by=$value->CLOSURE_BY_CLIENT_FILE;

                            $opening_status="";

                            $proforma_number=$value->REF_PROFORMA_CODE_CLIENT_FILE;

                            $client_file_purchase_file=$value->FILE_PURCHASE_CLIENT_FILE;

                            $commissioning=$value->COMMISSIONING_CLIENT_FILE;

                            $contant_garantie=$value->CONTRAT_GARANTIE_CLIENT_FILE;

                            $contrat_maintenance=$value->CONTRAT_MAINTENANCE_CLIENT_FILE;

                            $date=date('d-m-Y',strtotime($value->DATE_CREATION_CLIENT_FILE));

                            /*$client_adress = ($clients_commune.' &nbsp;&nbsp;'.'Q.'.$clients_quartier. '&nbsp;&nbsp;Avenue'.'&nbsp;&nbsp;'.$client_rue.'&nbsp; '.'N°&nbsp; '.$clients_numero_maison);*/
                            
                          }
                       
                          ?>

                  <div class="row">

                    <div class="col-xs-12 col-md-12">

                      
                      <h2 class="breadcumb" align="center"><img src="<?php echo base_url() ?>asset/img/monitoring.png" width="100%" height=""></h2>

                    </div>

                  </div>
 

                <div class="content" style="padding-top: 0px;">

              <div class="row">
                  <div class="col-xs-12 col-md-12">

                  <div class="pull-left" style="padding-right: 0px;">INFORMATION DU CLIENT</div>

                  <div class="col-xs-10 col-md-10 pull-right" style="padding-right: 0px; padding-left: 0px;"><img src="<?php echo base_url() ?>asset/img/lign.png" width="100%" height="">
                  </div>
                </div>

                <div class="col-sm-6">

                <div class="form-group ">

                            <label for="client_name" class="col-sm-12 ">
                                Nom du client

                            </label>

                            <div class="col-sm-12">

                                <input type="text"readonly class="form-control" name="client_name" id="client_name" placeholder="Name of Client" value="<?php echo $client_name; ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>

                      <div class="form-group ">

                            <label for="physical_adress" class="col-sm-12 ">
                                Pays

                            </label>

                            <div class="col-sm-12">

                                <input type="text" readonly class="form-control" name="physical_adress" id="physical_adress" placeholder="Physical Adress" value="<?php echo $country_client; ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>

                      <div class="form-group ">

                            <label for="quartier" class="col-sm-12 ">
                                Groupe client
                            </label>

                            <div class="col-sm-12">

                                <input type="text" readonly class="form-control" name="quartier" id="quartier" placeholder="Quartier" value="<?php echo $group_client; ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>

                      <div class="form-group ">

                            <label for="ofice_tel" class="col-sm-12 ">
                               Tel. du bureau

                            </label>

                            <div class="col-sm-12">

                                <input type="text" readonly class="form-control" name="ofice_tel" id="ofice_tel" placeholder=" Office Tel" value="<?php echo  $client_tel; ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>
                  </div>

                  <div class="col-sm-6">

                    <div class="form-group ">

                            <label for="physical_adress" class="col-sm-12 ">
                                Adresse Physique

                            </label>

                            <div class="col-sm-12">

                                <input type="text" readonly class="form-control" name="physical_adress" id="physical_adress" placeholder="Physical Adress" value="<?php 
                                     echo'&nbsp;&nbsp;Q.&nbsp; '.$clients_adresse;
                                   ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>

                      <div class="form-group ">

                      <label for="city" class="col-sm-12 ">
                         Ville

                      </label>

                        <div class="col-sm-12">

                          <input type="text" readonly class="form-control" name="city" id="city" placeholder="City" value="<?php echo $city; ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>

                        <div class="row">

                          <div class="col-sm-6">

                            <div class="form-group ">

                            <label for="bp" class="col-sm-12 ">
                          B.P

                      </label>

                        <div class="col-sm-12">

                          <input type="text" readonly class="form-control" name="bp" id="bp" placeholder="B.P" value="<?php echo $client_bp; ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                          </div>

                          </div>

                          <div class="col-sm-6">

                            <div class="form-group ">

                            <label for="nif" class="col-sm-12 ">
                          NIF

                      </label>

                        <div class="col-sm-12">

                          <input type="text" readonly class="form-control" name="nif" id="nif" placeholder="NIF" value="<?php echo $nif; ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                          </div>

                        </div>


                      </div>

                      <div class="form-group ">

                      <label for="client_email" class="col-sm-12 ">
                          Email

                      </label>

                        <div class="col-sm-12">

                          <input type="text" readonly class="form-control" name="client_email" id="client_email" placeholder="Email" value="<?php echo $client_mail; ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>
                  </div>

              </div>

              <div class="row">
                  <div class="col-xs-12 col-md-12">

                  <div class="pull-left" style="padding-right: 0px;">DÉTAILS DE FACTURATION</div>

                  <div class="col-xs-10 col-md-10 pull-right" style="padding-right: 0px; padding-left: 0px;"><img src="<?php echo base_url() ?>asset/img/lign.png" width="100%" height="">
                  </div>
                </div>

                <div class="col-sm-6">

                <div class="form-group ">

                            <label for="proforma_number" class="col-sm-12 ">
                                Proforma

                            </label>

                            <div class="col-sm-12">

                                <input type="text" readonly class="form-control" name="project_client_file_proforma_code" id="project_client_file_proforma_code" placeholder="Proforma" value="<?php echo($proforma_number) ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>
                  </div>

                  <div class="col-sm-6">

                    <div class="form-group ">

                            <label for="purchase_order" class="col-sm-12 ">
                                Bon de commande local

                            </label>

                            <div class="col-sm-12">

                                <input type="text" readonly class="form-control" name="project_client_file_purchase_number" id="project_client_file_purchase_number" placeholder="Project Client File Purchase Number" value="<?php echo$project_commande_number; ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>
                  </div>

              </div>


              <div class="row">
                  <div class="col-xs-12 col-md-12">

                  <div class="pull-left" style="padding-right: 0px;">FICHIERS TELECHARGE</div>

                  <div class="col-xs-10 col-md-10 pull-right" style="padding-right: 0px; padding-left: 0px;"><img src="<?php echo base_url() ?>asset/img/lign.png" width="100%" height="">
                  </div>
                </div>

                <div class="col-sm-3">

                <div class="form-group ">

                            <label for="full_name" class="col-sm-12 ">
                               Bon de commande  <?php if($client_file_purchase_file!=''){ ?><span class="fa fa-check-circle" style="font-size:24px; color: #94e070;"></span> <?php } else{ ?><span class='fa fa-times-circle' style="font-size:24px; color: #f7a307;"></span> <?php } ?>

                            </label>

                            <div class="col-xs-12 col-md-12">

                                <input type="text" readonly class="form-control" name="full_name" id="full_name" placeholder="Bon de commande" value="<?php echo($client_file_purchase_file) ?>"> 

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>
                    </div>

                    <div class="col-sm-3">

                      <div class="form-group ">

                            <label for="email" class="col-xs-12 col-md-12 ">
                                Commissioning  <?php if($client_file_purchase_file!=''){?><span class="fa fa-check-circle" style="font-size:24px; color: #94e070;"></span> <?php } else{ ?><span class='fa fa-times-circle' style="font-size:24px; color: #f7a307;"></span> <?php } ?>

                            </label>

                            <div class="col-xs-12 col-md-12">

                                <input type="text" readonly class="form-control" name="email" id="email" placeholder="Commissioning" value="<?php echo $client_file_purchase_file;?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>
                  </div>
                

                  <div class="col-sm-3">

                <div class="form-group ">

                            <label for="title" class="col-sm-12 ">
                                Contrat Garantie  <?php if($contant_garantie!=''){ ?><span class="fa fa-check-circle" style="font-size:24px; color: #94e070;"></span> <?php } else{ ?><span class='fa fa-times-circle' style="font-size:24px; color: #f7a307;"></span> <?php } ?>

                            </label>

                            <div class="col-xs-12 col-md-12">

                                <input type="text" readonly class="form-control" name="title" id="title" placeholder="Contrat Garantie" value="<?php echo $contant_garantie;?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>

                    </div>

                    <div class="col-sm-3">

                      <div class="form-group ">

                            <label for="tel" class="col-xs-12 col-md-12">
                               Contrat Maintenance  <?php if($contrat_maintenance!='') { ?><span class="fa fa-check-circle" style="font-size:24px; color: #94e070;"></span> <?php } else{ ?><span class='fa fa-times-circle' style="font-size:24px; color: #f7a307;"></span> <?php } ?>

                            </label>

                            <div class="col-xs-12 col-md-12">

                                <input type="text" readonly class="form-control" name="tel" id="tel" placeholder="Contrat Maintenance " value="<?php echo $contrat_maintenance; ?>">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>
                  </div>

              </div>


              <div class="row">
                  <div class="col-xs-12 col-md-12">

                  <div class="pull-left" style="padding-right: 0px;">NOTE DE PROJET</div>

                  <div class="col-xs-10 col-md-10 pull-right" style="padding-right: 0px; padding-left: 0px;"><img src="<?php echo base_url() ?>asset/img/lign.png" width="100%" height="">
                  </div>
                </div>

                <div class="col-xs-12 col-md-6">

                <div class="col-xs-12 col-md-12" style="background-color:#000;  color: #fff;">OUVERTURE</div>

                <div class="content">

                <div class="form-group regl_div " style="">

                      

                            <label for="installation_date" class="col-xs-12 col-md-12">
                                Date de création

                            </label>

                            <div class="col-xs-12 col-md-12 opening">

                              <?php echo date('d/m/Y', strtotime($project_client_date)); ?>
                            </div>

                      </div>

                      <div class="form-group regl_div">

                            <label for="supervised_by" class="col-xs-12 col-md-12">
                                créer par

                            </label>

                            <div class="col-xs-12 col-md-12 opening"> 
                              <?php

                              $this->db->select('full_name');
                              $this->db->from('aauth_users');
                              $this->db->where('id',$user);
                              $query = $this->db->get();
                              if ($query->num_rows() > 0)  //Ensure that there is at least one result 
                              {
                                 foreach ($query->result() as $row)  //Iterate through results
                                 {
                                    echo $row->full_name;
                                 }
                              }

                              ?>
                            </div>

                      </div>

                      <div class="form-group regl_div">

                            <label for="ugnature" class="col-xs-12 col-md-12">
                                Signature

                            </label>

                            <div class="col-xs-12 col-md-12 opening"> 

                                <input type="hidden" readonly class="form-control" name="sugnature" id="sugnature" placeholder=" Sugnature" value="">

                                <small class="info help-block">

                                </small>

                            </div>
                         </div>
                      </div>
                  </div>

                  <div class="col-xs-12 col-md-6">

                <div class="col-xs-12 col-md-12" style="background-color:#000;  color: #fff;">FERMETURE</div>

                <div class="content">

                <div class="form-group regl_div " style="">

                      

                            <label for="installation_date" class="col-xs-12 col-md-12">
                                Date de fermeture

                            </label>

                            <div class="col-xs-12 col-md-12 opening"><?php echo date('d/m/Y', strtotime( $closure_date)); ?>

                            </div>

                      </div>

                      <div class="form-group regl_div">

                            <label for="supervised_by" class="col-xs-12 col-md-12">
                                Fermé par

                            </label>

                            <div class="col-xs-12 col-md-12 opening"> <?php 

                            $this->db->select('full_name');
                              $this->db->from('aauth_users');
                              $this->db->where('id',$closure_by);
                              $query = $this->db->get();
                              if ($query->num_rows() > 0)  //Ensure that there is at least one result 
                              {
                                 foreach ($query->result() as $row)  //Iterate through 
                                 {
                                    echo $row->full_name;
                                 }
                              }
                              else{ ?>

         
                                <input type="hidden" class="form-control" name="supervised_by" id="supervised_by" placeholder=" Supervised by" value="">

                                <small class="info help-block">

                                </small>

                              <?php } ?>

                            </div>

                      </div>

                      <div class="form-group regl_div">

                            <label for="ugnature" class="col-xs-12 col-md-12">
                                Signature

                            </label>

                            <div class="col-xs-12 col-md-12 opening"> <?php echo " "; ?>

                                <input type="hidden" class="form-control" name="sugnature" id="sugnature" placeholder=" Signature" value="">

                                <small class="info help-block">

                                </small>

                            </div>

                      </div>
                      </div>
                  </div>

              </div>

              <div class="row">
                  <div class="col-xs-12 col-md-12">
                    <img src="<?php echo base_url() ?>asset/img/lign.png" width="100%" height="">
                  </div>
              </div>
          </div>
                  
                    <br>

                    <div class="message"></div>
                        <div class="row-fluid col-md-7">

                           <form name="form_project_client_files" id="form_project_client_files" action="<?= base_url('administrator/project_client_file/index'); ?>">

                          <?php

                          if ($opening_status==0) { ?>

                             <button type="button" class="btn btn-flat btn-primary" name="verify" id="verify" title="Verifier actions"><i class="fa fa-check-circle"></i> Clôturer</button> 
                       
                    
                          
                          <input type="hidden" name="client_id" value="<?php echo $client_id ?>">
                          <input type="hidden" name="fiche_id" value="<?php echo $fiche_id ?>">
                          <input type="hidden" name="project_id" value="<?php echo $project_id ?>">
                          <input type="hidden" name="bulk" id="bulk" value="ok">
                         <?php  }

                         else { ?>

                          

                          <button class="btn btn-flat btn-primary" id="btn_print" onclick="myFunction()">

                            <i class="fa fa-print" ></i> Imprimer

                            </button> <?php } ?>
                           
                            <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)">
                            <i class="fa fa-undo" ></i> <?= cclang('cancel_button'); ?>
                            </a>
                            <span class="loading loading-hide">
                            <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 
                            <i><?= cclang('loading_saving_data'); ?></i>
                            </span>

                            </form>
                        </div>


                   <!-- <div class="row-fluid col-md-7">

                       
                            <button class="btn btn-flat btn-primary" id="btn_print" onclick="myFunction()">

                            <i class="fa fa-print" ></i> Imprimer

                            </button>  

                            <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)">

                            <i class="fa fa-undo" ></i> <?= cclang('cancel_button'); ?>

                            </a>

                            <span class="loading loading-hide">

                            <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 

                            <i><?= cclang('loading_saving_data'); ?></i>

                            </span>

                        </div> -->

                        <?php  } ?>
                      </div>

                     

                  </div>

               </div>

            </div>

            <!--/box body -->

         </div>

         <!--/box -->



      </div>

</section>

<script>
    $(document).ready(function(){
                   
      $('#btn_cancel').click(function(){
        swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
              window.location.href = BASE_URL + 'administrator/project_client_file/client_file_pendding';
            }
          });
    
        return false;
      }); /*end btn cancel*/

    
    $('#verify').click(function(){

      avoid_multi_click_btn('verify', 10000);

      var bulk = $('#bulk');

      var serialize_bulk = $('#form_project_client_files').serialize();



      if (bulk.val() == 'ok') {
 
         swal({

            title: "Voulez-vous clôturer?",

            /*text: "Voulez vous Vérifier vraiment?",*/

            type: "warning",

            showCancelButton: true,

            confirmButtonColor: "#DD6B55",

            confirmButtonText: "Oui",

            cancelButtonText: "Non",

            closeOnConfirm: true,

            closeOnCancel: true

          },

          function(isConfirm){

            if (isConfirm) {

              //alert(serialize_bulk);

              document.location.href = BASE_URL + '/administrator/project_client_file/update_user_closed?' + serialize_bulk;

               //document.location.href = BASE_URL + '/administrator/project/update_projet?' + serialize_bulk;      

            }

          });



        return false;



      } else if(bulk.val() == '')  {

          swal({

            title: "Upss",

            text: "Please choose bulk action first!",

            type: "warning",

            showCancelButton: false,

            confirmButtonColor: "#DD6B55",

            confirmButtonText: "Okay!",

            closeOnConfirm: true,

            closeOnCancel: true

          });



        return false;

      }

      return false;



    });/*end appliy click*/

    
    }); /*end doc ready*/
</script>

<script>
  function avoid_multi_click_btn(btn_id, period) {
    $('#' + btn_id).attr('disabled', true);

    var my_interval = setInterval(function() {

      $('#' + btn_id).attr('disabled', false);

      clearInterval(my_interval);

    }, period);
  }
</script>
<!-- /.content -->

<style type="text/css">

  .regl_div{

    padding-top: 0px;padding-bottom: 0px;
    margin-bottom: 0px;
   text-align: center;

  }

  .opening{

    border-bottom: 1px solid;
    border-top: 1px solid;

  }
  
  .prof_header{
    background:#54555e; color: #FFF !important;
  }
  .td_dio{
    background: #34d2eb; color: #fff !important;
  }
   #tab{
            padding-left: 2% !important;
          }

  .watermark{
    position: absolute;
    color:#34d2eb;
    opacity:0.9;
    width: 100%;
   /* top: 36%;
    left: 60%;
    float: right;*/
    z-index: 5;
    font-size: 1.1em;
    /*line-height: 70px;*/

  }
</style>

 <style media="screen, print">
        @media print {

          .prof_header{
            background-color:#54555e !important;
            color: #FFF !important;
          }
          .td_dio{
            background-color: #34d2eb !important;
            color: #000 !important;
          }

          #btn_print,#btn_cancel,.main-footer{
            display: none !important;
          }
          .table{
            border: 1px solid !important;
            background: #876!important;
          }

          #tab{
            padding-left: 3% !important;
          }

        }
</style>
