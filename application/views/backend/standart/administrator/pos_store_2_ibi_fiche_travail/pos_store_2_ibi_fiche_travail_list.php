
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/administrator/Pos_store_2_ibi_fiche_travail/add';
       return false;
   });

   $('*').bind('keydown', 'Ctrl+f', function assets() {
       $('#sbtn').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
       $('#reset').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+b', function assets() {

       $('#reset').trigger('click');
       return false;
   });
}

jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Fiche de travail<small></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
      <li class="active">Fiche de travail</li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row" >
      
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">
               <!-- Widget: user widget style 1 -->
               <div class="box box-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header ">
                     <div class="row pull-right">
                        <?php is_allowed('pos_store_2_ibi_fiche_travail_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="aller à l'ajout du fiche de travail" href="<?=  site_url('administrator/pos_store_2_ibi_devis/add'); ?>"><i class="fa fa-plus-square-o" ></i> Fiche de travail</a>
                        <?php }) ?>
<!--                         <?php //is_allowed('pos_store_2_ibi_fiche_travail_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?//= cclang('export'); ?> Pos Store 2 Ibi Fiche Travail" href="<?//= site_url('administrator/pos_store_2_ibi_fiche_travail/export'); ?>"><i class="fa fa-file-excel-o" ></i> <?//= cclang('export'); ?> XLS</a>
                        <?php //}) ?>
                        <?php// is_allowed('pos_store_2_ibi_fiche_travail_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?//= cclang('export'); ?> pdf Pos Store 2 Ibi Fiche Travail" href="<?//= site_url('administrator/pos_store_2_ibi_fiche_travail/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i> <?//= cclang('export'); ?> PDF</a>
                        <?php //}) ?> -->
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Fiche de travail</h3>
                     <h5 class="widget-user-desc"> Liste des fiches de travail&nbsp;&nbsp;<i class="label bg-yellow"><?= $pos_store_2_ibi_fiche_travail_counts; ?> &nbsp; Elément<?php if($pos_store_2_ibi_fiche_travail_counts > 1)echo 's'; ?></i></h5>
                  </div>

                  <form name="form_pos_store_2_ibi_fiche_travail" id="form_pos_store_2_ibi_fiche_travail" action="<?= base_url('administrator/pos_store_2_ibi_fiche_travail/index'); ?>">
                  

                  <div class="table-responsive"> 
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr style="background-color: #ccc !important;">
                           
                           <th style="text-align: center !important">&#8470; &nbsp;du fiche</th>
                           <th style="text-align: center !important">Description</th>
                           
                           <th style="text-align: center !important">Client</th>

                           <th style="text-align: center !important">Par</th>

                           <th style="text-align: center !important">Date de création</th>
                           
                           <th style="text-align: center !important">Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_pos_store_2_ibi_fiche_travail">
                     <?php foreach($pos_store_2_ibi_fiche_travails as $pos_store_2_ibi_fiche_travail): ?>
                        <tr>

                           <td style="text-align: center !important"><?= _ent($pos_store_2_ibi_fiche_travail->DEVIS_CODE_FICHE); ?>
                           
                           <td style="text-align: center !important"><?= _ent($pos_store_2_ibi_fiche_travail->TITRE_FICHE); ?></td> </td>  
                           <td style="text-align: center !important"><?= _ent($pos_store_2_ibi_fiche_travail->NOM_CLIENT); ?></td>

                           <td style="text-align: center !important"><?= _ent($pos_store_2_ibi_fiche_travail->full_name); ?></td>                           
                           <td style="text-align: center !important"><?= _ent($pos_store_2_ibi_fiche_travail->DATE_CREATION_FICHE); ?></td> 
                             
                           <td style="text-align: center !important" width="200">

                     

                             





                              <?php is_allowed('pos_store_2_ibi_fiche_travail_view', function() use ($pos_store_2_ibi_fiche_travail){?>
                              <a href="<?= site_url('administrator/pos_store_2_ibi_fiche_travail/view/' . $pos_store_2_ibi_fiche_travail->ID_FICHE); ?>" class="btn btn-warning btn-xs"><i class="fa fa-eye-slash"></i> </a>
                              <?php }) ?>


                              <?php is_allowed('pos_store_2_ibi_fiche_travail_update', function() use ($pos_store_2_ibi_fiche_travail){?>
                              <a href="<?= site_url('administrator/pos_store_2_ibi_fiche_travail/edit/' . $pos_store_2_ibi_fiche_travail->ID_FICHE); ?>" class="btn btn-info btn-xs"><i class="fa fa-edit "></i> </a>
                              <?php }) ?>
                              <?php is_allowed('pos_store_2_ibi_fiche_travail_delete', function() use ($pos_store_2_ibi_fiche_travail){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/pos_store_2_ibi_fiche_travail/delete/' . $pos_store_2_ibi_fiche_travail->ID_FICHE); ?>" class="btn btn-danger btn-xs remove-data"><i class="fa fa-close"></i></a>
                               <?php }) ?>
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($pos_store_2_ibi_fiche_travail_counts == 0) :?>
                         <tr style="color:red; text-align: center;">
                           <td colspan="100">
                             Pas du contenu à afficher
                           </td>
                         </tr>
                      <?php endif; ?>
                     </tbody>
                  </table>
                  </div>
               </div>
               <hr>
               <!-- /.widget-user -->
               <div class="row">
                  <div class="col-md-8">
                     <div class="col-sm-2 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="bulk" id="bulk" placeholder="Site Email" >
                           <option value="">Bulk</option>
                           <option value="delete">Delete</option>
                        </select>
                     </div>
                     <div class="col-sm-2 padd-left-0 ">
                        <button type="button" class="btn btn-flat" name="apply" id="apply" title="<?= cclang('apply_bulk_action'); ?>"><?= cclang('apply_button'); ?></button>
                     </div>
                     <div class="col-sm-3 padd-left-0  " >
                        <input type="text" class="form-control" name="q" id="filter" placeholder="<?= cclang('filter'); ?>" value="<?= $this->input->get('q'); ?>">
                     </div>
                     <div class="col-sm-3 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="f" id="field" >
                           <option value=""><?= cclang('all'); ?></option>
                            <option <?= $this->input->get('f') == 'TITRE_FICHE' ? 'selected' :''; ?> value="TITRE_FICHE">TITRE FICHE</option>
                           <option <?= $this->input->get('f') == 'DEVIS_CODE_FICHE' ? 'selected' :''; ?> value="DEVIS_CODE_FICHE">DEVIS CODE FICHE</option>
                           <option <?= $this->input->get('f') == 'NUMERO_FICHE' ? 'selected' :''; ?> value="NUMERO_FICHE">NUMERO FICHE</option>
                           <option <?= $this->input->get('f') == 'REF_CLIENT_FICHE' ? 'selected' :''; ?> value="REF_CLIENT_FICHE">REF CLIENT FICHE</option>
                           <option <?= $this->input->get('f') == 'TYPE_DEVIS_FICHE' ? 'selected' :''; ?> value="TYPE_DEVIS_FICHE">TYPE DEVIS FICHE</option>
                           <option <?= $this->input->get('f') == 'DATE_CREATION_FICHE' ? 'selected' :''; ?> value="DATE_CREATION_FICHE">DATE CREATION FICHE</option>
                           <option <?= $this->input->get('f') == 'DATE_MOD_FICHE' ? 'selected' :''; ?> value="DATE_MOD_FICHE">DATE MOD FICHE</option>
                           <option <?= $this->input->get('f') == 'AUTHOR_FICHE' ? 'selected' :''; ?> value="AUTHOR_FICHE">AUTHOR FICHE</option>
                           <option <?= $this->input->get('f') == 'REF_CATEGORIE_FICHE' ? 'selected' :''; ?> value="REF_CATEGORIE_FICHE">REF CATEGORIE FICHE</option>
                           <option <?= $this->input->get('f') == 'TOTAL_FICHE' ? 'selected' :''; ?> value="TOTAL_FICHE">TOTAL FICHE</option>
                           <option <?= $this->input->get('f') == 'STATUT_FICHE' ? 'selected' :''; ?> value="STATUT_FICHE">STATUT FICHE</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/pos_store_2_ibi_fiche_travail');?>" title="<?= cclang('reset_filter'); ?>">
                        <i class="fa fa-undo"></i>
                        </a>
                     </div>
                  </div>
                  </form>                  <div class="col-md-4">
                     <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate" >
                        <?= $pagination; ?>
                     </div>
                  </div>
               </div>
            </div>
            <!--/box body -->
         </div>
         <!--/box -->
      </div>
   </div>
</section>
<!-- /.content -->

<!-- Page script -->
<script>
  $(document).ready(function(){
   
    $('.remove-data').click(function(){

      var url = $(this).attr('data-href');

      swal({
          title: "<?= cclang('are_you_sure'); ?>",
          text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
          cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){
          if (isConfirm) {
            document.location.href = url;            
          }
        });

      return false;
    });


    $('#apply').click(function(){

      var bulk = $('#bulk');
      var serialize_bulk = $('#form_pos_store_2_ibi_fiche_travail').serialize();

      if (bulk.val() == 'delete') {
         swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
            cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
               document.location.href = BASE_URL + '/administrator/pos_store_2_ibi_fiche_travail/delete?' + serialize_bulk;      
            }
          });

        return false;

      } else if(bulk.val() == '')  {
          swal({
            title: "Upss",
            text: "<?= cclang('please_choose_bulk_action_first'); ?>",
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


    //check all
    var checkAll = $('#check_all');
    var checkboxes = $('input.check');

    checkAll.on('ifChecked ifUnchecked', function(event) {   
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event){
        if(checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });

  }); /*end doc ready*/
</script>