
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/administrator/client_file/add';
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
      Pos Store 2 Ibi Client File<small><?= cclang('list_all'); ?></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pos Store 2 Ibi Client File</li>
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
                        <?php is_allowed('client_file_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="<?= cclang('add_new_button', ['Pos Store 2 Ibi Client File']); ?>  (Ctrl+a)" href="<?=  site_url('administrator/client_file/add'); ?>"><i class="fa fa-plus-square-o" ></i> <?= cclang('add_new_button', ['Pos Store 2 Ibi Client File']); ?></a>
                        <?php }) ?>
                        <?php is_allowed('client_file_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> Pos Store 2 Ibi Client File" href="<?= site_url('administrator/client_file/export'); ?>"><i class="fa fa-file-excel-o" ></i> <?= cclang('export'); ?> XLS</a>
                        <?php }) ?>
                        <?php is_allowed('client_file_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> pdf Pos Store 2 Ibi Client File" href="<?= site_url('administrator/client_file/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i> <?= cclang('export'); ?> PDF</a>
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Pos Store 2 Ibi Client File</h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', ['Pos Store 2 Ibi Client File']); ?>  <i class="label bg-yellow"><?= $client_file_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

                  <form name="form_client_file" id="form_client_file" action="<?= base_url('administrator/client_file/index'); ?>">
                  

                  <div class="table-responsive"> 
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                           <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                           <th>PROFORMA ID CLIENT FILE</th>
                           <th>REF CLIENT FILE</th>
                           <th>REF PROFORMA CODE CLIENT FILE</th>
                           <th>NUMBER PURCHASE CLIENT FILE</th>
                           <th>FILE PURCHASE CLIENT FILE</th>
                           <th>COMMISSIONING CLIENT FILE</th>
                           <th>CONTRAT GARANTIE CLIENT FILE</th>
                           <th>CONTRAT MAINTENANCE CLIENT FILE</th>
                           <th>INVOICE NUMBER CLIENT FILE</th>
                           <th>DATE CREATION CLIENT FILE</th>
                           <th>DATE MODIFICATION CLIENT FILE</th>
                           <th>OPERATING STATUT</th>
                           <th>APPROUVE BY</th>
                           <th>CLOSURE DATE CLIENT FILE</th>
                           <th>CLOSURE BY CLIENT FILE</th>
                           <th>AUTHOR</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_client_file">
                     <?php foreach($client_files as $client_file): ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $client_file->ID_CLIENT_FILE; ?>">
                           </td>
                           
                           <td><?= _ent($client_file->PROFORMA_ID_CLIENT_FILE); ?></td> 
                           <td><?= _ent($client_file->REF_CLIENT_FILE); ?></td> 
                           <td><?= _ent($client_file->REF_PROFORMA_CODE_CLIENT_FILE); ?></td> 
                           <td><?= _ent($client_file->NUMBER_PURCHASE_CLIENT_FILE); ?></td> 
                           <td>
                              <?php if (!empty($client_file->FILE_PURCHASE_CLIENT_FILE)): ?>
                                <?php if (is_image($client_file->FILE_PURCHASE_CLIENT_FILE)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/client_file/' . $client_file->FILE_PURCHASE_CLIENT_FILE; ?>">
                                  <img src="<?= BASE_URL . 'uploads/client_file/' . $client_file->FILE_PURCHASE_CLIENT_FILE; ?>" class="image-responsive" alt="image client_file" title="FILE_PURCHASE_CLIENT_FILE client_file" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/client_file/' . $client_file->FILE_PURCHASE_CLIENT_FILE; ?>">
                                   <img src="<?= get_icon_file($client_file->FILE_PURCHASE_CLIENT_FILE); ?>" class="image-responsive image-icon" alt="image client_file" title="FILE_PURCHASE_CLIENT_FILE <?= $client_file->FILE_PURCHASE_CLIENT_FILE; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td>
                              <?php if (!empty($client_file->COMMISSIONING_CLIENT_FILE)): ?>
                                <?php if (is_image($client_file->COMMISSIONING_CLIENT_FILE)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/client_file/' . $client_file->COMMISSIONING_CLIENT_FILE; ?>">
                                  <img src="<?= BASE_URL . 'uploads/client_file/' . $client_file->COMMISSIONING_CLIENT_FILE; ?>" class="image-responsive" alt="image client_file" title="COMMISSIONING_CLIENT_FILE client_file" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/client_file/' . $client_file->COMMISSIONING_CLIENT_FILE; ?>">
                                   <img src="<?= get_icon_file($client_file->COMMISSIONING_CLIENT_FILE); ?>" class="image-responsive image-icon" alt="image client_file" title="COMMISSIONING_CLIENT_FILE <?= $client_file->COMMISSIONING_CLIENT_FILE; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td>
                              <?php if (!empty($client_file->CONTRAT_GARANTIE_CLIENT_FILE)): ?>
                                <?php if (is_image($client_file->CONTRAT_GARANTIE_CLIENT_FILE)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/client_file/' . $client_file->CONTRAT_GARANTIE_CLIENT_FILE; ?>">
                                  <img src="<?= BASE_URL . 'uploads/client_file/' . $client_file->CONTRAT_GARANTIE_CLIENT_FILE; ?>" class="image-responsive" alt="image client_file" title="CONTRAT_GARANTIE_CLIENT_FILE client_file" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/client_file/' . $client_file->CONTRAT_GARANTIE_CLIENT_FILE; ?>">
                                   <img src="<?= get_icon_file($client_file->CONTRAT_GARANTIE_CLIENT_FILE); ?>" class="image-responsive image-icon" alt="image client_file" title="CONTRAT_GARANTIE_CLIENT_FILE <?= $client_file->CONTRAT_GARANTIE_CLIENT_FILE; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td>
                              <?php if (!empty($client_file->CONTRAT_MAINTENANCE_CLIENT_FILE)): ?>
                                <?php if (is_image($client_file->CONTRAT_MAINTENANCE_CLIENT_FILE)): ?>
                                <a class="fancybox" rel="group" href="<?= BASE_URL . 'uploads/client_file/' . $client_file->CONTRAT_MAINTENANCE_CLIENT_FILE; ?>">
                                  <img src="<?= BASE_URL . 'uploads/client_file/' . $client_file->CONTRAT_MAINTENANCE_CLIENT_FILE; ?>" class="image-responsive" alt="image client_file" title="CONTRAT_MAINTENANCE_CLIENT_FILE client_file" width="40px">
                                </a>
                                <?php else: ?>
                                  <a href="<?= BASE_URL . 'administrator/file/download/client_file/' . $client_file->CONTRAT_MAINTENANCE_CLIENT_FILE; ?>">
                                   <img src="<?= get_icon_file($client_file->CONTRAT_MAINTENANCE_CLIENT_FILE); ?>" class="image-responsive image-icon" alt="image client_file" title="CONTRAT_MAINTENANCE_CLIENT_FILE <?= $client_file->CONTRAT_MAINTENANCE_CLIENT_FILE; ?>" width="40px"> 
                                 </a>
                                <?php endif; ?>
                              <?php endif; ?>
                           </td>
                            
                           <td><?= _ent($client_file->INVOICE_NUMBER_CLIENT_FILE); ?></td> 
                           <td><?= _ent($client_file->DATE_CREATION_CLIENT_FILE); ?></td> 
                           <td><?= _ent($client_file->DATE_MODIFICATION_CLIENT_FILE); ?></td> 
                           <td><?= _ent($client_file->OPERATING_STATUT); ?></td> 
                           <td><?= _ent($client_file->APPROUVE_BY); ?></td> 
                           <td><?= _ent($client_file->CLOSURE_DATE_CLIENT_FILE); ?></td> 
                           <td><?= _ent($client_file->CLOSURE_BY_CLIENT_FILE); ?></td> 
                           <td><?= _ent($client_file->AUTHOR); ?></td> 
                           <td width="200">
                              <?php is_allowed('client_file_view', function() use ($client_file){?>
                              <a href="<?= site_url('administrator/client_file/view/' . $client_file->ID_CLIENT_FILE); ?>" class="label-default"><i class="fa fa-newspaper-o"></i> <?= cclang('view_button'); ?>
                              <?php }) ?>
                              <?php is_allowed('client_file_update', function() use ($client_file){?>
                              <a href="<?= site_url('administrator/client_file/edit/' . $client_file->ID_CLIENT_FILE); ?>" class="label-default"><i class="fa fa-edit "></i> <?= cclang('update_button'); ?></a>
                              <?php }) ?>
                              <?php is_allowed('client_file_delete', function() use ($client_file){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/client_file/delete/' . $client_file->ID_CLIENT_FILE); ?>" class="label-default remove-data"><i class="fa fa-close"></i> <?= cclang('remove_button'); ?></a>
                               <?php }) ?>
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($client_file_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Pos Store 2 Ibi Client File data is not available
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
                            <option <?= $this->input->get('f') == 'PROFORMA_ID_CLIENT_FILE' ? 'selected' :''; ?> value="PROFORMA_ID_CLIENT_FILE">PROFORMA ID CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'REF_CLIENT_FILE' ? 'selected' :''; ?> value="REF_CLIENT_FILE">REF CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'REF_PROFORMA_CODE_CLIENT_FILE' ? 'selected' :''; ?> value="REF_PROFORMA_CODE_CLIENT_FILE">REF PROFORMA CODE CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'NUMBER_PURCHASE_CLIENT_FILE' ? 'selected' :''; ?> value="NUMBER_PURCHASE_CLIENT_FILE">NUMBER PURCHASE CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'FILE_PURCHASE_CLIENT_FILE' ? 'selected' :''; ?> value="FILE_PURCHASE_CLIENT_FILE">FILE PURCHASE CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'COMMISSIONING_CLIENT_FILE' ? 'selected' :''; ?> value="COMMISSIONING_CLIENT_FILE">COMMISSIONING CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'CONTRAT_GARANTIE_CLIENT_FILE' ? 'selected' :''; ?> value="CONTRAT_GARANTIE_CLIENT_FILE">CONTRAT GARANTIE CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'CONTRAT_MAINTENANCE_CLIENT_FILE' ? 'selected' :''; ?> value="CONTRAT_MAINTENANCE_CLIENT_FILE">CONTRAT MAINTENANCE CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'INVOICE_NUMBER_CLIENT_FILE' ? 'selected' :''; ?> value="INVOICE_NUMBER_CLIENT_FILE">INVOICE NUMBER CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'DATE_CREATION_CLIENT_FILE' ? 'selected' :''; ?> value="DATE_CREATION_CLIENT_FILE">DATE CREATION CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'DATE_MODIFICATION_CLIENT_FILE' ? 'selected' :''; ?> value="DATE_MODIFICATION_CLIENT_FILE">DATE MODIFICATION CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'OPERATING_STATUT' ? 'selected' :''; ?> value="OPERATING_STATUT">OPERATING STATUT</option>
                           <option <?= $this->input->get('f') == 'APPROUVE_BY' ? 'selected' :''; ?> value="APPROUVE_BY">APPROUVE BY</option>
                           <option <?= $this->input->get('f') == 'CLOSURE_DATE_CLIENT_FILE' ? 'selected' :''; ?> value="CLOSURE_DATE_CLIENT_FILE">CLOSURE DATE CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'CLOSURE_BY_CLIENT_FILE' ? 'selected' :''; ?> value="CLOSURE_BY_CLIENT_FILE">CLOSURE BY CLIENT FILE</option>
                           <option <?= $this->input->get('f') == 'AUTHOR' ? 'selected' :''; ?> value="AUTHOR">AUTHOR</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/client_file');?>" title="<?= cclang('reset_filter'); ?>">
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
      var serialize_bulk = $('#form_client_file').serialize();

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
               document.location.href = BASE_URL + '/administrator/client_file/delete?' + serialize_bulk;      
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