
<!-- Fine Uploader Gallery CSS file
    ====================================================================== -->
<link href="<?= BASE_ASSET; ?>/fine-upload/fine-uploader-gallery.min.css" rel="stylesheet">
<!-- Fine Uploader jQuery JS file
    ====================================================================== -->
<script src="<?= BASE_ASSET; ?>/fine-upload/jquery.fine-uploader.js"></script>
<?php $this->load->view('core_template/fine_upload'); ?>
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
    function domo(){
     
       // Binding keys
       $('*').bind('keydown', 'Ctrl+s', function assets() {
          $('#btn_save').trigger('click');
           return false;
       });
    
       $('*').bind('keydown', 'Ctrl+x', function assets() {
          $('#btn_cancel').trigger('click');
           return false;
       });
    
      $('*').bind('keydown', 'Ctrl+d', function assets() {
          $('.btn_save_back').trigger('click');
           return false;
       });
        
    }
    
    jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
        Categories        <small><?= cclang('new', ['Categories']); ?> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/pos_ibi_categories'); ?>">Categories</a></li>
=======
        Créer une nouvelle boutique       <small> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/store'); ?>">Liste</a></li>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
        <li class="active"><?= cclang('new'); ?></li>
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
                            <div class="widget-user-image">
                                <img class="img-circle" src="<?= BASE_ASSET; ?>/img/add2.png" alt="User Avatar">
                            </div>
                            <!-- /.widget-user-image -->
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
                            <h3 class="widget-user-username">Categories</h3>
                            <h5 class="widget-user-desc"><?= cclang('new', ['Categories']); ?></h5>
                            <hr>
                        </div>
                        <?= form_open('', [
                            'name'    => 'form_pos_ibi_categories', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_pos_ibi_categories', 
=======
                            <h3 class="widget-user-username">Boutique</h3>
                            <h5 class="widget-user-desc"></h5>
                            <hr>
                        </div>
                        <?= form_open('', [
                            'name'    => 'form_store', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_store', 
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
                            'enctype' => 'multipart/form-data', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
                            <label for="NOM_CATEGORIE" class="col-sm-2 control-label">Nom de la categorie 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="NOM_CATEGORIE" id="NOM_CATEGORIE" placeholder="Nom De La Categorie" value="<?= set_value('NOM_CATEGORIE'); ?>">
=======
                            <label for="STATUT" class="col-sm-2 control-label">Etat de la boutique 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="STATUT" id="STATUT" data-placeholder="Selectionner l'Etat" >
                                    <option value=""></option>
                                    <option value="opened">Ouvert</option>
                                    <option value="close">Fermé</option>
                                    </select>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
                            <label for="PARENT_REF_ID_CATEGORIE" class="col-sm-2 control-label">Categorie Parente 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="PARENT_REF_ID_CATEGORIE" id="PARENT_REF_ID_CATEGORIE" data-placeholder="Select PARENT REF ID CATEGORIE" >
                                    <option value=""></option>
                                    <?php 
                                      $data = $this->model_pos_ibi_categories->get_data('pos_ibi_categories','where PARENT_REF_ID_CATEGORIE=0');


                                    foreach ($data as $row): ?>
                                    <option value="<?= $row->ID_CATEGORIE ?>"><?= $row->NOM_CATEGORIE; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
=======
                            <label for="NAME" class="col-sm-2 control-label">Nom de la boutique
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="NAME" id="NAME" placeholder="Nom" value="<?= set_value('NAME'); ?>">
                                <small class="info help-block"></small>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
                            <label for="DESCRIPTION_CATEGORIE" class="col-sm-2 control-label">Description 
                            </label>
                            <div class="col-sm-8">
                                <textarea id="DESCRIPTION_CATEGORIE" name="DESCRIPTION_CATEGORIE" rows="5" cols="80"><?= set_value('DESCRIPTION CATEGORIE'); ?></textarea>
=======
                            <label for="IMAGE" class="col-sm-2 control-label">Aperçu 
                            </label>
                            <div class="col-sm-8">
                                <div id="store_IMAGE_galery"></div>
                                <input class="data_file" name="store_IMAGE_uuid" id="store_IMAGE_uuid" type="hidden" value="<?= set_value('store_IMAGE_uuid'); ?>">
                                <input class="data_file" name="store_IMAGE_name" id="store_IMAGE_name" type="hidden" value="<?= set_value('store_IMAGE_name'); ?>">
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
                            <label for="THUMB_CATEGORIE" class="col-sm-2 control-label">Apercu de la categorie 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <div id="pos_ibi_categories_THUMB_CATEGORIE_galery"></div>
                                <input class="data_file" name="pos_ibi_categories_THUMB_CATEGORIE_uuid" id="pos_ibi_categories_THUMB_CATEGORIE_uuid" type="hidden" value="<?= set_value('pos_ibi_categories_THUMB_CATEGORIE_uuid'); ?>">
                                <input class="data_file" name="pos_ibi_categories_THUMB_CATEGORIE_name" id="pos_ibi_categories_THUMB_CATEGORIE_name" type="hidden" value="<?= set_value('pos_ibi_categories_THUMB_CATEGORIE_name'); ?>">
                                <small class="info help-block">
                                </small>
=======
                            <label for="DESCRIPTION" class="col-sm-2 control-label">Description
                            </label>
                            <div class="col-sm-8">
                                <textarea id="DESCRIPTION" name="DESCRIPTION" rows="5" cols="80"><?= set_value('DESCRIPTION'); ?></textarea>
                                <small class="info help-block"></small>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
                            </div>
                        </div>
                                                 
                         
                        
                        <div class="message"></div>
                        <div class="row-fluid col-md-7">
                           <button class="btn btn-flat btn-primary btn_save btn_action" id="btn_save" data-stype='stay' title="<?= cclang('save_button'); ?> (Ctrl+s)">
                            <i class="fa fa-save" ></i> <?= cclang('save_button'); ?>
                            </button>
                            <a class="btn btn-flat btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back' title="<?= cclang('save_and_go_the_list_button'); ?> (Ctrl+d)">
                            <i class="ion ion-ios-list-outline" ></i> <?= cclang('save_and_go_the_list_button'); ?>
                            </a>
                            <a class="btn btn-flat btn-default btn_action" id="btn_cancel" title="<?= cclang('cancel_button'); ?> (Ctrl+x)">
                            <i class="fa fa-undo" ></i> <?= cclang('cancel_button'); ?>
                            </a>
                            <span class="loading loading-hide">
                            <img src="<?= BASE_ASSET; ?>/img/loading-spin-primary.svg"> 
                            <i><?= cclang('loading_saving_data'); ?></i>
                            </span>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
                <!--/box body -->
            </div>
            <!--/box -->
        </div>
    </div>
</section>
<!-- /.content -->
<script src="<?= BASE_ASSET; ?>ckeditor/ckeditor.js"></script>
<!-- Page script -->
<script>
    $(document).ready(function(){
            CKEDITOR.replace('DESCRIPTION_CATEGORIE'); 
      var DESCRIPTION_CATEGORIE = CKEDITOR.instances.DESCRIPTION_CATEGORIE;
                   
      $('#btn_cancel').click(function(){
        swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            cancelButtonText: "No!",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
              window.location.href = BASE_URL + 'administrator/pos_ibi_categories';
=======
              window.location.href = BASE_URL + 'administrator/store';
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
        $('#DESCRIPTION_CATEGORIE').val(DESCRIPTION_CATEGORIE.getData());
                    
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
        var form_pos_ibi_categories = $('#form_pos_ibi_categories');
        var data_post = form_pos_ibi_categories.serializeArray();
=======
        var form_store = $('#form_store');
        var data_post = form_store.serializeArray();
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
        var save_type = $(this).attr('data-stype');

        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
          url: BASE_URL + '/administrator/pos_ibi_categories/add_save',
=======
          url: BASE_URL + '/administrator/store/add_save',
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
            var id_THUMB_CATEGORIE = $('#pos_ibi_categories_THUMB_CATEGORIE_galery').find('li').attr('qq-file-id');
=======
            var id_IMAGE = $('#store_IMAGE_galery').find('li').attr('qq-file-id');
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
            
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
            resetForm();
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
            if (typeof id_THUMB_CATEGORIE !== 'undefined') {
                    $('#pos_ibi_categories_THUMB_CATEGORIE_galery').fineUploader('deleteFile', id_THUMB_CATEGORIE);
=======
            if (typeof id_IMAGE !== 'undefined') {
                    $('#store_IMAGE_galery').fineUploader('deleteFile', id_IMAGE);
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
                }
            $('.chosen option').prop('selected', false).trigger('chosen:updated');
            DESCRIPTION_CATEGORIE.setData('');
                
          } else {
            $('.message').printMessage({message : res.message, type : 'warning'});
          }
    
        })
        .fail(function() {
          $('.message').printMessage({message : 'Error save data', type : 'warning'});
        })
        .always(function() {
          $('.loading').hide();
          $('html, body').animate({ scrollTop: $(document).height() }, 2000);
        });
    
        return false;
      }); /*end btn save*/
      
              var params = {};
       params[csrf] = token;

<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
       $('#pos_ibi_categories_THUMB_CATEGORIE_galery').fineUploader({
          template: 'qq-template-gallery',
          request: {
              endpoint: BASE_URL + '/administrator/pos_ibi_categories/upload_THUMB_CATEGORIE_file',
=======
       $('#store_IMAGE_galery').fineUploader({
          template: 'qq-template-gallery',
          request: {
              endpoint: BASE_URL + '/administrator/store/upload_IMAGE_file',
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
              params : params
          },
          deleteFile: {
              enabled: true, 
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
              endpoint: BASE_URL + '/administrator/pos_ibi_categories/delete_THUMB_CATEGORIE_file',
=======
              endpoint: BASE_URL + '/administrator/store/delete_IMAGE_file',
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
          },
          thumbnails: {
              placeholders: {
                  waitingPath: BASE_URL + '/asset/fine-upload/placeholders/waiting-generic.png',
                  notAvailablePath: BASE_URL + '/asset/fine-upload/placeholders/not_available-generic.png'
              }
          },
          multiple : false,
          validation: {
              allowedExtensions: ["*"],
              sizeLimit : 0,
                        },
          showMessage: function(msg) {
              toastr['error'](msg);
          },
          callbacks: {
              onComplete : function(id, name, xhr) {
                if (xhr.success) {
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
                   var uuid = $('#pos_ibi_categories_THUMB_CATEGORIE_galery').fineUploader('getUuid', id);
                   $('#pos_ibi_categories_THUMB_CATEGORIE_uuid').val(uuid);
                   $('#pos_ibi_categories_THUMB_CATEGORIE_name').val(xhr.uploadName);
=======
                   var uuid = $('#store_IMAGE_galery').fineUploader('getUuid', id);
                   $('#store_IMAGE_uuid').val(uuid);
                   $('#store_IMAGE_name').val(xhr.uploadName);
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
                } else {
                   toastr['error'](xhr.error);
                }
              },
              onSubmit : function(id, name) {
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_add.php
                  var uuid = $('#pos_ibi_categories_THUMB_CATEGORIE_uuid').val();
                  $.get(BASE_URL + '/administrator/pos_ibi_categories/delete_THUMB_CATEGORIE_file/' + uuid);
              },
              onDeleteComplete : function(id, xhr, isError) {
                if (isError == false) {
                  $('#pos_ibi_categories_THUMB_CATEGORIE_uuid').val('');
                  $('#pos_ibi_categories_THUMB_CATEGORIE_name').val('');
=======
                  var uuid = $('#store_IMAGE_uuid').val();
                  $.get(BASE_URL + '/administrator/store/delete_IMAGE_file/' + uuid);
              },
              onDeleteComplete : function(id, xhr, isError) {
                if (isError == false) {
                  $('#store_IMAGE_uuid').val('');
                  $('#store_IMAGE_name').val('');
>>>>>>> jude:application/views/backend/standart/administrator/store/store_add.php
                }
              }
          }
      }); /*end THUMB_CATEGORIE galery*/
              
 
       
    
    
    }); /*end doc ready*/
</script>