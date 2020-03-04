
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
        Pos Store 2 Ibi Fiche Travail        <small>Edit Pos Store 2 Ibi Fiche Travail</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
        <li class=""><a  href="<?= site_url('administrator/pos_store_2_ibi_fiche_travail'); ?>">Pos Store 2 Ibi Fiche Travail</a></li>
=======
        <li class=""><a  href="<?= site_url('administrator/clients_groups'); ?>">Groups</a></li>
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
        <li class="active">Edit</li>
    </ol>
</section>
<!-- Main content   -->
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
                            <h3 class="widget-user-username">Pos Store 2 Ibi Fiche Travail</h3>
                            <h5 class="widget-user-desc">Edit Pos Store 2 Ibi Fiche Travail</h5>
                            <hr>
                        </div>
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
                        <?= form_open(base_url('administrator/pos_store_2_ibi_fiche_travail/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_pos_store_2_ibi_fiche_travail', 
=======
                        <?= form_open(base_url('administrator/clients_groups/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_pos_ibi_clients_groups', 
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_pos_store_2_ibi_fiche_travail', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="TITRE_FICHE" class="col-sm-2 control-label">TITRE FICHE 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
                                <input type="text" class="form-control" name="TITRE_FICHE" id="TITRE_FICHE" placeholder="TITRE FICHE" value="<?= set_value('TITRE_FICHE', $pos_store_2_ibi_fiche_travail->TITRE_FICHE); ?>">
=======
                                <input type="text" class="form-control" name="NAME_GROUP" id="NAME_GROUP" placeholder="Nom" value="<?= set_value('NAME_GROUP', $clients_groups->NAME_GROUP); ?>">
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="DEVIS_CODE_FICHE" class="col-sm-2 control-label">DEVIS CODE FICHE 
                            </label>
                            <div class="col-sm-8">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
                                <input type="text" class="form-control" name="DEVIS_CODE_FICHE" id="DEVIS_CODE_FICHE" placeholder="DEVIS CODE FICHE" value="<?= set_value('DEVIS_CODE_FICHE', $pos_store_2_ibi_fiche_travail->DEVIS_CODE_FICHE); ?>">
=======
                                <textarea id="DESCRIPTION_GROUP" name="DESCRIPTION_GROUP" rows="10" cols="80"> <?= set_value('DESCRIPTION_GROUP', $clients_groups->DESCRIPTION_GROUP); ?></textarea>
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="NUMERO_FICHE" class="col-sm-2 control-label">NUMERO FICHE 
                            </label>
                            <div class="col-sm-8">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
                                <input type="text" class="form-control" name="NUMERO_FICHE" id="NUMERO_FICHE" placeholder="NUMERO FICHE" value="<?= set_value('NUMERO_FICHE', $pos_store_2_ibi_fiche_travail->NUMERO_FICHE); ?>">
=======
                                <select  class="form-control chosen chosen-select-deselect" name="DISCOUNT_TYPE_GROUP" id="DISCOUNT_TYPE_GROUP" data-placeholder="Select DISCOUNT TYPE GROUP" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('remise') as $row): ?>
                                    <option <?=  $row->ID ==  $clients_groups->DISCOUNT_TYPE_GROUP ? 'selected' : ''; ?> value="<?= $row->ID ?>"><?= $row->type_remise; ?></option>
                                    <?php endforeach; ?>  
                                </select>
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="REF_CLIENT_FICHE" class="col-sm-2 control-label">REF CLIENT FICHE 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
                                <select  class="form-control chosen chosen-select-deselect" name="REF_CLIENT_FICHE" id="REF_CLIENT_FICHE" data-placeholder="Select REF CLIENT FICHE" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('pos_ibi_clients') as $row): ?>
                                    <option <?=  $row->ID_CLIENT ==  $pos_store_2_ibi_fiche_travail->REF_CLIENT_FICHE ? 'selected' : ''; ?> value="<?= $row->ID_CLIENT ?>"><?= $row->NOM_CLIENT; ?></option>
                                    <?php endforeach; ?>  
                                </select>
=======
                                <input type="number" class="form-control" name="DISCOUNT_PERCENT_GROUP" id="DISCOUNT_PERCENT_GROUP" placeholder="Pourcentange De Remise" value="<?= set_value('DISCOUNT_PERCENT_GROUP', $clients_groups->DISCOUNT_PERCENT_GROUP); ?>">
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="TYPE_DEVIS_FICHE" class="col-sm-2 control-label">TYPE DEVIS FICHE 
                            </label>
                            <div class="col-sm-8">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
                                <input type="text" class="form-control" name="TYPE_DEVIS_FICHE" id="TYPE_DEVIS_FICHE" placeholder="TYPE DEVIS FICHE" value="<?= set_value('TYPE_DEVIS_FICHE', $pos_store_2_ibi_fiche_travail->TYPE_DEVIS_FICHE); ?>">
=======
                                <input type="number" class="form-control" name="DISCOUNT_AMOUNT_GROUP" id="DISCOUNT_AMOUNT_GROUP" placeholder="Montant De Remise" value="<?= set_value('DISCOUNT_AMOUNT_GROUP', $clients_groups->DISCOUNT_AMOUNT_GROUP); ?>">
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="DATE_CREATION_FICHE" class="col-sm-2 control-label">DATE CREATION FICHE 
                            </label>
                            <div class="col-sm-6">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="DATE_CREATION_FICHE"  placeholder="DATE CREATION FICHE" id="DATE_CREATION_FICHE" value="<?= set_value('DATE_CREATION_FICHE', $pos_store_2_ibi_fiche_travail->DATE_CREATION_FICHE); ?>">
                            </div>
                            <small class="info help-block">
                            </small>
=======
                                <div class="col-md-2 padding-left-0">
                                    <label>
                                        <input type="radio" class="flat-red" name="DISCOUNT_ENABLE_SCHEDULE_GROUP" id="DISCOUNT_ENABLE_SCHEDULE_GROUP"  value="yes" <?= $clients_groups->DISCOUNT_ENABLE_SCHEDULE_GROUP == "yes" ? "checked" : ""; ?>>
                                        Yes
                                    </label>
                                </div>
                                <div class="col-md-14">
                                    <label>
                                        <input type="radio" class="flat-red" name="DISCOUNT_ENABLE_SCHEDULE_GROUP" id="DISCOUNT_ENABLE_SCHEDULE_GROUP"  value="no" <?= $clients_groups->DISCOUNT_ENABLE_SCHEDULE_GROUP == "no" ? "checked" : ""; ?>>
                                        No
                                    </label>
                                </div>
                                <small class="info help-block">
                                </small>
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="DATE_MOD_FICHE" class="col-sm-2 control-label">DATE MOD FICHE 
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
                              <input type="text" class="form-control pull-right datetimepicker" name="DATE_MOD_FICHE"  placeholder="DATE MOD FICHE" id="DATE_MOD_FICHE" value="<?= set_value('DATE_MOD_FICHE', $pos_store_2_ibi_fiche_travail->DATE_MOD_FICHE); ?>">
=======
                              <input type="text" class="form-control pull-right datetimepicker" name="DISCOUNT_START_GROUP"  placeholder="Debut De La Planification" id="DISCOUNT_START_GROUP" value="<?= set_value('DISCOUNT_START_GROUP', $clients_groups->DISCOUNT_START_GROUP); ?>">
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                                                 
                         
                                                <div class="form-group ">
                            <label for="REF_CATEGORIE_FICHE" class="col-sm-2 control-label">REF CATEGORIE FICHE 
                            </label>
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="REF_CATEGORIE_FICHE" id="REF_CATEGORIE_FICHE" placeholder="REF CATEGORIE FICHE" value="<?= set_value('REF_CATEGORIE_FICHE', $pos_store_2_ibi_fiche_travail->REF_CATEGORIE_FICHE); ?>">
                                <small class="info help-block">
                                </small>
=======
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="DISCOUNT_END_GROUP"  placeholder="Fin De La Planification" id="DISCOUNT_END_GROUP" value="<?= set_value('DISCOUNT_END_GROUP', $clients_groups->DISCOUNT_END_GROUP); ?>">
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="TOTAL_FICHE" class="col-sm-2 control-label">TOTAL FICHE 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="TOTAL_FICHE" id="TOTAL_FICHE" placeholder="TOTAL FICHE" value="<?= set_value('TOTAL_FICHE', $pos_store_2_ibi_fiche_travail->TOTAL_FICHE); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="STATUT_FICHE" class="col-sm-2 control-label">STATUT FICHE 
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="STATUT_FICHE" id="STATUT_FICHE" placeholder="STATUT FICHE" value="<?= set_value('STATUT_FICHE', $pos_store_2_ibi_fiche_travail->STATUT_FICHE); ?>">
                                <small class="info help-block">
                                </small>
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
<!-- Page script -->
<script>
    $(document).ready(function(){
      
             
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
<<<<<<< HEAD:application/views/backend/standart/administrator/pos_store_2_ibi_fiche_travail/pos_store_2_ibi_fiche_travail_update.php
              window.location.href = BASE_URL + 'administrator/pos_store_2_ibi_fiche_travail';
=======
              window.location.href = BASE_URL + 'administrator/clients_groups';
>>>>>>> aletta:application/views/backend/standart/administrator/clients_groups/clients_groups_update.php
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_pos_store_2_ibi_fiche_travail = $('#form_pos_store_2_ibi_fiche_travail');
        var data_post = form_pos_store_2_ibi_fiche_travail.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_pos_store_2_ibi_fiche_travail.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
            var id = $('#pos_store_2_ibi_fiche_travail_image_galery').find('li').attr('qq-file-id');
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
      
       
       
           
    
    }); /*end doc ready*/
</script>