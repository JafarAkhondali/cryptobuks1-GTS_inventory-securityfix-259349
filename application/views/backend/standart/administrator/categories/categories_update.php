
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
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
        Categories        <small>Edit Categories</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
        <li class=""><a  href="<?= site_url('administrator/pos_ibi_categories'); ?>">Categories</a></li>
=======
        Modification de la boutique        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/store'); ?>">Liste</a></li>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
=======
        <li class=""><a  href="<?= site_url('administrator/categories'); ?>">Categories</a></li>
>>>>>>> aletta:application/views/backend/standart/administrator/categories/categories_update.php
        <li class="active">Edit</li>
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
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
                            <h3 class="widget-user-username">Categories</h3>
                            <h5 class="widget-user-desc">Edit Categories</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/categories/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_pos_ibi_categories', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_pos_ibi_categories', 
=======
                            <h3 class="widget-user-username">Boutique</h3>
                            <h5 class="widget-user-desc"></h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/store/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_store', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_store', 
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
                            <label for="NOM_CATEGORIE" class="col-sm-2 control-label">Nom De La Categorie 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
                                <input type="text" class="form-control" name="NOM_CATEGORIE" id="NOM_CATEGORIE" placeholder="Nom De La Categorie" value="<?= set_value('NOM_CATEGORIE', $pos_ibi_categories->NOM_CATEGORIE); ?>">
=======
                            <label for="STATUT" class="col-sm-2 control-label">Etat de la boutique 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select" name="STATUT" id="STATUT" data-placeholder="Selectionner l'Etat" >
                                    <option value=""></option>
                                    <option <?= $store->STATUT_STORE == "opened" ? 'selected' :''; ?> value="opened">Ouvert</option>
                                    <option <?= $store->STATUT_STORE == "close" ? 'selected' :''; ?> value="close">Fermé</option>
                                    </select>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
=======
                                <input type="text" class="form-control" name="NOM_CATEGORIE" id="NOM_CATEGORIE" placeholder="Nom De La Categorie" value="<?= set_value('NOM_CATEGORIE', $categories->NOM_CATEGORIE); ?>">
>>>>>>> aletta:application/views/backend/standart/administrator/categories/categories_update.php
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
                            <label for="PARENT_REF_ID_CATEGORIE" class="col-sm-2 control-label">Categorie Parente 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="PARENT_REF_ID_CATEGORIE" id="PARENT_REF_ID_CATEGORIE" data-placeholder="Select PARENT REF ID CATEGORIE" >
                                    <option value=""></option>
                                    <?php 
                                      $data = $this->model_categories->get_data('pos_ibi_categories','where PARENT_REF_ID_CATEGORIE=0');


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
                                <input type="text" class="form-control" name="NAME" id="NAME" placeholder="Nom" value="<?= set_value('NAME', $store->NAME_STORE); ?>">
                                <small class="info help-block"></small>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
                            <label for="DESCRIPTION_CATEGORIE" class="col-sm-2 control-label">Description 
                            </label>
                            <div class="col-sm-8">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
                                <textarea id="DESCRIPTION_CATEGORIE" name="DESCRIPTION_CATEGORIE" rows="10" cols="80"> <?= set_value('DESCRIPTION_CATEGORIE', $pos_ibi_categories->DESCRIPTION_CATEGORIE); ?></textarea>
=======
                            <label for="IMAGE" class="col-sm-2 control-label">Aperçu 
                            </label>
                            <div class="col-sm-8">
                                <div id="store_IMAGE_galery"></div>
                                <input class="data_file data_file_uuid" name="store_IMAGE_uuid" id="store_IMAGE_uuid" type="hidden" value="<?= set_value('store_IMAGE_uuid'); ?>">
                                <input class="data_file" name="store_IMAGE_name" id="store_IMAGE_name" type="hidden" value="<?= set_value('store_IMAGE_name', $store->IMAGE_STORE); ?>">
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
=======
                                <textarea id="DESCRIPTION_CATEGORIE" name="DESCRIPTION_CATEGORIE" rows="10" cols="80"> <?= set_value('DESCRIPTION_CATEGORIE', $categories->DESCRIPTION_CATEGORIE); ?></textarea>
>>>>>>> aletta:application/views/backend/standart/administrator/categories/categories_update.php
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
                            <label for="THUMB_CATEGORIE" class="col-sm-2 control-label">Apercu De La Categorie 
                            </label>
                            <div class="col-sm-8">
                                <div id="categories_THUMB_CATEGORIE_galery"></div>
                                <input class="data_file data_file_uuid" name="categories_THUMB_CATEGORIE_uuid" id="categories_THUMB_CATEGORIE_uuid" type="hidden" value="<?= set_value('categories_THUMB_CATEGORIE_uuid'); ?>">
                                <input class="data_file" name="categories_THUMB_CATEGORIE_name" id="categories_THUMB_CATEGORIE_name" type="hidden" value="<?= set_value('categories_THUMB_CATEGORIE_name', $categories->THUMB_CATEGORIE); ?>">
                                <small class="info help-block">
                                </small>
=======
                            <label for="DESCRIPTION" class="col-sm-2 control-label">Description 
                            </label>
                            <div class="col-sm-8">
                                <textarea id="DESCRIPTION" name="DESCRIPTION" rows="10" cols="80"> <?= set_value('DESCRIPTION', $store->DESCRIPTION_STORE); ?></textarea>
                                <small class="info help-block"></small>
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
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
            title: "Are you sure?",
            text: "the data that you have created will be in the exhaust!",
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
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
              window.location.href = BASE_URL + 'administrator/pos_ibi_categories';
=======
              window.location.href = BASE_URL + 'administrator/store';
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
=======
              window.location.href = BASE_URL + 'administrator/categories';
>>>>>>> aletta:application/views/backend/standart/administrator/categories/categories_update.php
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
        $('#DESCRIPTION_CATEGORIE').val(DESCRIPTION_CATEGORIE.getData());
                    
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
        var form_pos_ibi_categories = $('#form_pos_ibi_categories');
        var data_post = form_pos_ibi_categories.serializeArray();
=======
        var form_store = $('#form_store');
        var data_post = form_store.serializeArray();
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
          url: form_pos_ibi_categories.attr('action'),
=======
          url: form_store.attr('action'),
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
            var id = $('#pos_ibi_categories_image_galery').find('li').attr('qq-file-id');
=======
            var id = $('#store_image_galery').find('li').attr('qq-file-id');
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
            if (save_type == 'back') {
              window.location.href = res.redirect;
              return;
            }
    
            $('.message').printMessage({message : res.message});
            $('.message').fadeIn();
            $('.data_file_uuid').val('');
    
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

<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
       $('#pos_ibi_categories_THUMB_CATEGORIE_galery').fineUploader({
          template: 'qq-template-gallery',
          request: {
              endpoint: BASE_URL + '/administrator/pos_ibi_categories/upload_THUMB_CATEGORIE_file',
=======
       $('#store_IMAGE_galery').fineUploader({
          template: 'qq-template-gallery',
          request: {
              endpoint: BASE_URL + '/administrator/store/upload_IMAGE_file',
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
=======
       $('#categories_THUMB_CATEGORIE_galery').fineUploader({
          template: 'qq-template-gallery',
          request: {
              endpoint: BASE_URL + '/administrator/categories/upload_THUMB_CATEGORIE_file',
>>>>>>> aletta:application/views/backend/standart/administrator/categories/categories_update.php
              params : params
          },
          deleteFile: {
              enabled: true, // defaults to false
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
              endpoint: BASE_URL + '/administrator/pos_ibi_categories/delete_THUMB_CATEGORIE_file'
=======
              endpoint: BASE_URL + '/administrator/store/delete_IMAGE_file'
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
=======
              endpoint: BASE_URL + '/administrator/categories/delete_THUMB_CATEGORIE_file'
>>>>>>> aletta:application/views/backend/standart/administrator/categories/categories_update.php
          },
          thumbnails: {
              placeholders: {
                  waitingPath: BASE_URL + '/asset/fine-upload/placeholders/waiting-generic.png',
                  notAvailablePath: BASE_URL + '/asset/fine-upload/placeholders/not_available-generic.png'
              }
          },
           session : {
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
             endpoint: BASE_URL + 'administrator/pos_ibi_categories/get_THUMB_CATEGORIE_file/<?= $pos_ibi_categories->ID_CATEGORIE; ?>',
=======
             endpoint: BASE_URL + 'administrator/store/get_IMAGE_file/<?= $store->ID_STORE; ?>',
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
=======
             endpoint: BASE_URL + 'administrator/categories/get_THUMB_CATEGORIE_file/<?= $categories->ID_CATEGORIE; ?>',
>>>>>>> aletta:application/views/backend/standart/administrator/categories/categories_update.php
             refreshOnRequest:true
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
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
                   var uuid = $('#pos_ibi_categories_THUMB_CATEGORIE_galery').fineUploader('getUuid', id);
                   $('#pos_ibi_categories_THUMB_CATEGORIE_uuid').val(uuid);
                   $('#pos_ibi_categories_THUMB_CATEGORIE_name').val(xhr.uploadName);
=======
                   var uuid = $('#store_IMAGE_galery').fineUploader('getUuid', id);
                   $('#store_IMAGE_uuid').val(uuid);
                   $('#store_IMAGE_name').val(xhr.uploadName);
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
=======
                   var uuid = $('#categories_THUMB_CATEGORIE_galery').fineUploader('getUuid', id);
                   $('#categories_THUMB_CATEGORIE_uuid').val(uuid);
                   $('#categories_THUMB_CATEGORIE_name').val(xhr.uploadName);
>>>>>>> aletta:application/views/backend/standart/administrator/categories/categories_update.php
                } else {
                   toastr['error'](xhr.error);
                }
              },
              onSubmit : function(id, name) {
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_ibi_categories/pos_ibi_categories_update.php
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
>>>>>>> jude:application/views/backend/standart/administrator/store/store_update.php
=======
                  var uuid = $('#categories_THUMB_CATEGORIE_uuid').val();
                  $.get(BASE_URL + '/administrator/categories/delete_THUMB_CATEGORIE_file/' + uuid);
              },
              onDeleteComplete : function(id, xhr, isError) {
                if (isError == false) {
                  $('#categories_THUMB_CATEGORIE_uuid').val('');
                  $('#categories_THUMB_CATEGORIE_name').val('');
>>>>>>> aletta:application/views/backend/standart/administrator/categories/categories_update.php
                }
              }
          }
      }); /*end THUMB_CATEGORIE galey*/
              
       
           
    
    }); /*end doc ready*/
</script>