
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
        Articles        <small>Edit Articles</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/pos_store_2_ibi_articles'); ?>">Articles</a></li>
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
                            <h3 class="widget-user-username">Articles</h3>
                            <h5 class="widget-user-desc">Edit Articles</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/pos_store_2_ibi_articles/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_pos_store_2_ibi_articles', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_pos_store_2_ibi_articles', 
                            'method'  => 'POST'
                            ]); ?>
                                            <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#identification">Identification</a></li>
  <li><a data-toggle="tab" href="#inventaire">Inventaire</a></li>
  <li><a data-toggle="tab" href="#prix">Prix</a></li>
  <li><a data-toggle="tab" href="#caracteristiques">Caracteristiques</a></li>
</ul>

<div class="tab-content">
                         <div id="identification" class="tab-pane fade in active">
                                               <p>
                                                <div class="form-group ">
                            <label for="DESIGN" class="col-sm-2 control-label">Nom Du Produit 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="DESIGN" id="DESIGN" placeholder="Nom Du Produit" value="<?= set_value('DESIGN', $pos_store_2_ibi_articles->DESIGN); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="REF_RAYON" class="col-sm-2 control-label">Emplacement 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="REF_RAYON" id="REF_RAYON" data-placeholder="Select REF RAYON" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('emplacement') as $row): ?>
                                    <option <?=  $row->id_emplacement ==  $pos_store_2_ibi_articles->REF_RAYON ? 'selected' : ''; ?> value="<?= $row->id_emplacement ?>"><?= $row->Nom_emplacement; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="REF_CATEGORIE" class="col-sm-2 control-label">Categorie 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="REF_CATEGORIE" id="REF_CATEGORIE" data-placeholder="Select REF CATEGORIE" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('pos_ibi_categories') as $row): ?>
                                    <option <?=  $row->ID_CATEGORIE ==  $pos_store_2_ibi_articles->REF_CATEGORIE ? 'selected' : ''; ?> value="<?= $row->ID_CATEGORIE ?>"><?= $row->NOM_CATEGORIE; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="REF_SOUS_CATEGORIE" class="col-sm-2 control-label">REF SOUS CATEGORIE 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="REF_SOUS_CATEGORIE" id="REF_SOUS_CATEGORIE" data-placeholder="Select REF SOUS CATEGORIE" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('pos_ibi_categories') as $row): ?>
                                    <option <?=  $row->ID_CATEGORIE ==  $pos_store_2_ibi_articles->REF_SOUS_CATEGORIE ? 'selected' : ''; ?> value="<?= $row->ID_CATEGORIE ?>"><?= $row->NOM_CATEGORIE; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="REF_PROVIDER" class="col-sm-2 control-label">Part N0 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="REF_PROVIDER" id="REF_PROVIDER" placeholder="Part N0" value="<?= set_value('REF_PROVIDER', $pos_store_2_ibi_articles->REF_PROVIDER); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>

                        </p>
                        </div>

                        <div id="inventaire" class="tab-pane fade">
                        <p>
                                                 
                                                <div class="form-group ">
                            <label for="TYPE" class="col-sm-2 control-label">Type Articles 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-6">
                                <div class="col-md-2 padding-left-0">
                                    <label>
                                        <input type="radio" class="flat-red" name="TYPE" id="TYPE"  value="yes" <?= $pos_store_2_ibi_articles->TYPE == "yes" ? "checked" : ""; ?>>
                                        Yes
                                    </label>
                                </div>
                                <div class="col-md-14">
                                    <label>
                                        <input type="radio" class="flat-red" name="TYPE" id="TYPE"  value="no" <?= $pos_store_2_ibi_articles->TYPE == "no" ? "checked" : ""; ?>>
                                        No
                                    </label>
                                </div>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="STATUS" class="col-sm-2 control-label">Etat 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-6">
                                <div class="col-md-2 padding-left-0">
                                    <label>
                                        <input type="radio" class="flat-red" name="STATUS" id="STATUS"  value="yes" <?= $pos_store_2_ibi_articles->STATUS == "yes" ? "checked" : ""; ?>>
                                        Yes
                                    </label>
                                </div>
                                <div class="col-md-14">
                                    <label>
                                        <input type="radio" class="flat-red" name="STATUS" id="STATUS"  value="no" <?= $pos_store_2_ibi_articles->STATUS == "no" ? "checked" : ""; ?>>
                                        No
                                    </label>
                                </div>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="STOCK_ENABLED" class="col-sm-2 control-label">Gestion De Stock 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-6">
                                <div class="col-md-2 padding-left-0">
                                    <label>
                                        <input type="radio" class="flat-red" name="STOCK_ENABLED" id="STOCK_ENABLED"  value="yes" <?= $pos_store_2_ibi_articles->STOCK_ENABLED == "yes" ? "checked" : ""; ?>>
                                        Yes
                                    </label>
                                </div>
                                <div class="col-md-14">
                                    <label>
                                        <input type="radio" class="flat-red" name="STOCK_ENABLED" id="STOCK_ENABLED"  value="no" <?= $pos_store_2_ibi_articles->STOCK_ENABLED == "no" ? "checked" : ""; ?>>
                                        No
                                    </label>
                                </div>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                       </p>
                                   </div>  

                                  <div id="prix" class="tab-pane fade">
                        <p>            
                                                <div class="form-group ">
                            <label for="PRIX_DE_VENTE" class="col-sm-2 control-label">Prix De Vente 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="PRIX_DE_VENTE" id="PRIX_DE_VENTE" placeholder="Prix De Vente" value="<?= set_value('PRIX_DE_VENTE', $pos_store_2_ibi_articles->PRIX_DE_VENTE); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="SHADOW_PRICE" class="col-sm-2 control-label">Prix Fictif 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="SHADOW_PRICE" id="SHADOW_PRICE" placeholder="Prix Fictif" value="<?= set_value('SHADOW_PRICE', $pos_store_2_ibi_articles->SHADOW_PRICE); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="PRIX_PROMOTIONEL" class="col-sm-2 control-label">Prix Promotionnel 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="PRIX_PROMOTIONEL" id="PRIX_PROMOTIONEL" placeholder="Prix Promotionnel" value="<?= set_value('PRIX_PROMOTIONEL', $pos_store_2_ibi_articles->PRIX_PROMOTIONEL); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="SPECIAL_PRICE_START_DATE" class="col-sm-2 control-label">Debut De La Promotion 
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="SPECIAL_PRICE_START_DATE"  placeholder="Debut De La Promotion" id="SPECIAL_PRICE_START_DATE" value="<?= set_value('SPECIAL_PRICE_START_DATE', $pos_store_2_ibi_articles->SPECIAL_PRICE_START_DATE); ?>">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>




                                                 
                                                <div class="form-group ">
                            <label for="SPECIAL_PRICE_END_DATE" class="col-sm-2 control-label">Fin De La Promotion 
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="SPECIAL_PRICE_END_DATE"  placeholder="Fin De La Promotion" id="SPECIAL_PRICE_END_DATE" value="<?= set_value('SPECIAL_PRICE_END_DATE', $pos_store_2_ibi_articles->SPECIAL_PRICE_END_DATE); ?>">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                        </p>
                        </div>
                                                 
                               <div id="caracteristiques" class="tab-pane fade">
                        <p> 
                                                 
                                                <div class="form-group ">
                            <label for="TAILLE" class="col-sm-2 control-label">Taille 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="TAILLE" id="TAILLE" placeholder="Taille" value="<?= set_value('TAILLE', $pos_store_2_ibi_articles->TAILLE); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="POIDS" class="col-sm-2 control-label">Unite 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="POIDS" id="POIDS" placeholder="Unite" value="<?= set_value('POIDS', $pos_store_2_ibi_articles->POIDS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="COULEUR" class="col-sm-2 control-label">Couleur 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="COULEUR" id="COULEUR" placeholder="Couleur" value="<?= set_value('COULEUR', $pos_store_2_ibi_articles->COULEUR); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="HAUTEUR" class="col-sm-2 control-label">Hauteur 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="HAUTEUR" id="HAUTEUR" placeholder="Hauteur" value="<?= set_value('HAUTEUR', $pos_store_2_ibi_articles->HAUTEUR); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="LARGEUR" class="col-sm-2 control-label">Largeur 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="LARGEUR" id="LARGEUR" placeholder="Largeur" value="<?= set_value('LARGEUR', $pos_store_2_ibi_articles->LARGEUR); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="DESCRIPTION" class="col-sm-2 control-label">Description 
                            </label>
                            <div class="col-sm-8">
                                <textarea id="DESCRIPTION" name="DESCRIPTION" rows="10" cols="80"> <?= set_value('DESCRIPTION', $pos_store_2_ibi_articles->DESCRIPTION); ?></textarea>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="APERCU" class="col-sm-2 control-label">Apercu 
                            </label>
                            <div class="col-sm-8">
                                <div id="pos_store_2_ibi_articles_APERCU_galery"></div>
                                <input class="data_file data_file_uuid" name="pos_store_2_ibi_articles_APERCU_uuid" id="pos_store_2_ibi_articles_APERCU_uuid" type="hidden" value="<?= set_value('pos_store_2_ibi_articles_APERCU_uuid'); ?>">
                                <input class="data_file" name="pos_store_2_ibi_articles_APERCU_name" id="pos_store_2_ibi_articles_APERCU_name" type="hidden" value="<?= set_value('pos_store_2_ibi_articles_APERCU_name', $pos_store_2_ibi_articles->APERCU); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                           </p>
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
      
      CKEDITOR.replace('DESCRIPTION'); 
      var DESCRIPTION = CKEDITOR.instances.DESCRIPTION;
                   
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
              window.location.href = BASE_URL + 'administrator/pos_store_2_ibi_articles';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
        $('#DESCRIPTION').val(DESCRIPTION.getData());
                    
        var form_pos_store_2_ibi_articles = $('#form_pos_store_2_ibi_articles');
        var data_post = form_pos_store_2_ibi_articles.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_pos_store_2_ibi_articles.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
            var id = $('#pos_store_2_ibi_articles_image_galery').find('li').attr('qq-file-id');
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

       $('#pos_store_2_ibi_articles_APERCU_galery').fineUploader({
          template: 'qq-template-gallery',
          request: {
              endpoint: BASE_URL + '/administrator/pos_store_2_ibi_articles/upload_APERCU_file',
              params : params
          },
          deleteFile: {
              enabled: true, // defaults to false
              endpoint: BASE_URL + '/administrator/pos_store_2_ibi_articles/delete_APERCU_file'
          },
          thumbnails: {
              placeholders: {
                  waitingPath: BASE_URL + '/asset/fine-upload/placeholders/waiting-generic.png',
                  notAvailablePath: BASE_URL + '/asset/fine-upload/placeholders/not_available-generic.png'
              }
          },
           session : {
             endpoint: BASE_URL + 'administrator/pos_store_2_ibi_articles/get_APERCU_file/<?= $pos_store_2_ibi_articles->ID; ?>',
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
                   var uuid = $('#pos_store_2_ibi_articles_APERCU_galery').fineUploader('getUuid', id);
                   $('#pos_store_2_ibi_articles_APERCU_uuid').val(uuid);
                   $('#pos_store_2_ibi_articles_APERCU_name').val(xhr.uploadName);
                } else {
                   toastr['error'](xhr.error);
                }
              },
              onSubmit : function(id, name) {
                  var uuid = $('#pos_store_2_ibi_articles_APERCU_uuid').val();
                  $.get(BASE_URL + '/administrator/pos_store_2_ibi_articles/delete_APERCU_file/' + uuid);
              },
              onDeleteComplete : function(id, xhr, isError) {
                if (isError == false) {
                  $('#pos_store_2_ibi_articles_APERCU_uuid').val('');
                  $('#pos_store_2_ibi_articles_APERCU_name').val('');
                }
              }
          }
      }); /*end APERCU galey*/
              
       
           
    
    }); /*end doc ready*/
</script>