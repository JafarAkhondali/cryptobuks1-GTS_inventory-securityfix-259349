
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
       window.location.href = BASE_URL + '/administrator/Pos_ibi_fournisseurs/add';
=======
       window.location.href = BASE_URL + '/administrator/store/add';
>>>>>>> jude:application/views/backend/standart/administrator/store/store_list.php
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
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
      Fournisseurs<small><?= cclang('list_all'); ?></small>
=======
      Fournisseurs
>>>>>>> aletta:application/views/backend/standart/administrator/fournisseurs/fournisseurs_list.php
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Fournisseurs</li>
=======
      Liste des boutiques<small></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Liste des boutiques </li>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_list.php
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
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
                        <?php is_allowed('pos_ibi_fournisseurs_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="<?= cclang('add_new_button', ['Fournisseurs']); ?>  (Ctrl+a)" href="<?=  site_url('administrator/fournisseurs/add'); ?>"><i class="glyphicon glyphicon-plus" ></i> </a>
                        <?php }) ?>
                        <?php is_allowed('pos_ibi_fournisseurs_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> Pos Ibi Fournisseurs" href="<?= site_url('administrator/fournisseurs/export'); ?>"><i class="fa fa-file-excel-o" ></i> </a>
                        <?php }) ?>
                        <?php is_allowed('pos_ibi_fournisseurs_export', function(){?>
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> pdf Pos Ibi Fournisseurs" href="<?= site_url('administrator/pos_ibi_fournisseurs/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i> <?= cclang('export'); ?> PDF</a>
=======
                        <?php is_allowed('store_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="Créer un store" href="<?=  site_url('administrator/store/add'); ?>"><i class="fa fa-plus" ></i></a>
                        <?php }) ?>
                        <?php is_allowed('store_export', function(){?>
                        <a class="btn btn-flat btn-success" title="Export XLS" href="<?= site_url('administrator/store/export'); ?>"><i class="fa fa-file-excel-o" ></i></a>
                        <?php }) ?>
                        <?php is_allowed('store_export', function(){?>
                        <a class="btn btn-flat btn-success" title="Export PDF" href="<?= site_url('administrator/store/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i></a>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_list.php
=======
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> pdf Pos Ibi Fournisseurs" href="<?= site_url('administrator/fournisseurs/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i> </a>
                        <?php }) ?>
                        <?php is_allowed('pos_ibi_fournisseurs_import', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('import'); ?> pdf Pos Ibi Fournisseurs" href="<?= site_url('administrator/fournisseurs/import'); ?>"><i class=" glyphicon glyphicon-import" ></i> </a>
>>>>>>> aletta:application/views/backend/standart/administrator/fournisseurs/fournisseurs_list.php
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
                     <h3 class="widget-user-username">Fournisseurs</h3>
                     <h5 class="widget-user-desc">  <i class="label bg-yellow"><?= $fournisseurs_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
                  <form name="form_pos_ibi_fournisseurs" id="form_pos_ibi_fournisseurs" action="<?= base_url('administrator/pos_ibi_fournisseurs/index'); ?>">
=======
                     <h3 class="widget-user-username">Boutique</h3>
                     <h5 class="widget-user-desc">  <i class="label bg-yellow"><?= $store_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

                  <form name="form_store" id="form_store" action="<?= base_url('administrator/store/index'); ?>">
>>>>>>> jude:application/views/backend/standart/administrator/store/store_list.php
=======
                  <form name="form_pos_ibi_fournisseurs" id="form_pos_ibi_fournisseurs" action="<?= base_url('administrator/fournisseurs/index'); ?>">
>>>>>>> aletta:application/views/backend/standart/administrator/fournisseurs/fournisseurs_list.php
                  
<!-- gsdfgsfdgsgf -->
                  <div class="table-responsive"> 
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                           <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
                           <th>Nom Du Fournisseur</th>
                           <th>Boite Postal(BP)</th>
                           <th>Telephone</th>
                           <th>Email</th>
                           
                           <th>Desciption</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_pos_ibi_fournisseurs">
                     <?php foreach($fournisseurss as $pos_ibi_fournisseurs): ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $pos_ibi_fournisseurs->ID; ?>">
                           </td>
                           
                           <td><?= _ent($pos_ibi_fournisseurs->NOM); ?></td> 
                           <td><?= _ent($pos_ibi_fournisseurs->BP); ?></td> 
                           <td><?= _ent($pos_ibi_fournisseurs->TEL); ?></td> 
                           <td><?= _ent($pos_ibi_fournisseurs->EMAIL); ?></td> 
                           
                           <td><?= _ent($pos_ibi_fournisseurs->DESCRIPTION); ?></td> 
                           <td width="200">
                              <?php is_allowed('pos_ibi_fournisseurs_view', function() use ($pos_ibi_fournisseurs){?>
                              <a href="<?= site_url('administrator/fournisseurs/view/' . $pos_ibi_fournisseurs->ID); ?>" class="btn btn-warning btn-sm"><span  class="glyphicon glyphicon-eye-open"></span></a>
                              <?php }) ?>
                              <?php is_allowed('pos_ibi_fournisseurs_update', function() use ($pos_ibi_fournisseurs){?>
                              <a href="<?= site_url('administrator/fournisseurs/edit/' . $pos_ibi_fournisseurs->ID); ?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                              <?php }) ?>
                              <?php is_allowed('pos_ibi_fournisseurs_delete', function() use ($pos_ibi_fournisseurs){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/fournisseurs/delete/' . $pos_ibi_fournisseurs->ID); ?>" class="btn btn-danger btn-sm remove-data"><span class="glyphicon glyphicon-remove"></span></a>
                               <?php }) ?>
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($fournisseurs_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Fournisseurs data is not available
=======
                           <th>Nom de la boutique</th>
                           <th>Etat de la boutique </th>
                           <th>Aperçu</th>
                           <th>Date création</th>
                           <th>Date de modification</th>
                           <th>Auteur</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_store">
                     <?php foreach($stores as $store): ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $store->ID_STORE; ?>">
                           </td>
                           
                           <td><?= _ent($store->NAME_STORE); ?></td> 
                           <td><?= _ent($store->STATUT_STORE); ?></td> 
                           <td>
                              <?php if (!empty($store->IMAGE_STORE)): ?>
                                <?php if (is_image($store->IMAGE_STORE)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/store/' . $store->IMAGE_STORE; ?>">
                                  <img src="<?= BASE_URL . 'uploads/store/' . $store->IMAGE_STORE; ?>" class="image-responsive" alt="image store" title="IMAGE store" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/store/' . $store->IMAGE_STORE; ?>">
                                   <img src="<?= get_icon_file($store->IMAGE_STORE); ?>" class="image-responsive image-icon" alt="image store" title="IMAGE <?= $store->IMAGE_STORE; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                             
                           <td><?= _ent($store->DATE_CREATION_STORE); ?></td> 
                           <td><?= _ent($store->DATE_MOD_STORE); ?></td> 
                           <td><?= _ent($store->AUTHOR_STORE); ?></td> 
                           <td width="200">
                              <?php is_allowed('store_delete', function() use ($store){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/store/delete/' . $store->ID_STORE); ?>" title="Supprimer une boutique" class="btn btn-danger remove-data"><i class="fa fa-close"></i></a>
                               <?php }) ?>
                               <?php is_allowed('store_update', function() use ($store){?>
                              <a href="<?= site_url('administrator/store/edit/' . $store->ID_STORE); ?>" title="Editer une boutique" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                              <?php }) ?>
                              <?php is_allowed('store_view', function() use ($store){?>
                              <a href="<?= site_url('administrator/store/view/' . $store->ID_STORE); ?>" title="Accéder à la boutique" class="btn btn-success"><i class="fa fa-sign-in"></i></a>
                              <?php }) ?>
                              
                              
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($store_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Les données de la boutique ne sont pas disponibles
>>>>>>> jude:application/views/backend/standart/administrator/store/store_list.php
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
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
                            <option <?= $this->input->get('f') == 'NOM' ? 'selected' :''; ?> value="NOM">NOM</option>
                           <option <?= $this->input->get('f') == 'BP' ? 'selected' :''; ?> value="BP">BP</option>
                           <option <?= $this->input->get('f') == 'TEL' ? 'selected' :''; ?> value="TEL">TEL</option>
                           <option <?= $this->input->get('f') == 'EMAIL' ? 'selected' :''; ?> value="EMAIL">EMAIL</option>
                           <option <?= $this->input->get('f') == 'AUTHOR' ? 'selected' :''; ?> value="AUTHOR">AUTHOR</option>
                           <option <?= $this->input->get('f') == 'DESCRIPTION' ? 'selected' :''; ?> value="DESCRIPTION">DESCRIPTION</option>
=======
                            <option <?= $this->input->get('f') == 'STATUT_STORE' ? 'selected' :''; ?> value="STATUT_STORE">Etat de la boutique</option>
                           <option <?= $this->input->get('f') == 'NAME_STORE' ? 'selected' :''; ?> value="NAME_STORE">Nom de la boutique</option>
                           <option <?= $this->input->get('f') == 'IMAGE_STORE' ? 'selected' :''; ?> value="IMAGE_STORE">Aperçu</option>
                           <option <?= $this->input->get('f') == 'DATE_CREATION_STORE' ? 'selected' :''; ?> value="DATE_CREATION_STORE">Date création</option>
                           <option <?= $this->input->get('f') == 'DATE_MOD_STORE' ? 'selected' :''; ?> value="DATE_MOD_STORE">Date de modification</option>
                           <option <?= $this->input->get('f') == 'AUTHOR_STORE' ? 'selected' :''; ?> value="AUTHOR_STORE">Auteur</option>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_list.php
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/pos_ibi_fournisseurs');?>" title="<?= cclang('reset_filter'); ?>">
=======
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/store');?>" title="<?= cclang('reset_filter'); ?>">
>>>>>>> jude:application/views/backend/standart/administrator/store/store_list.php
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
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
      var serialize_bulk = $('#form_pos_ibi_fournisseurs').serialize();
=======
      var serialize_bulk = $('#form_store').serialize();
>>>>>>> jude:application/views/backend/standart/administrator/store/store_list.php

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
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_fournisseurs/pos_ibi_fournisseurs_list.php
               document.location.href = BASE_URL + '/administrator/pos_ibi_fournisseurs/delete?' + serialize_bulk;      
=======
               document.location.href = BASE_URL + '/administrator/store/delete?' + serialize_bulk;      
>>>>>>> jude:application/views/backend/standart/administrator/store/store_list.php
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