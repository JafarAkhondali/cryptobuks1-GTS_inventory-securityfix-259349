
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
        Clients        <small>Edit Clients</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/pos_ibi_clients'); ?>">Clients</a></li>
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
                            <h3 class="widget-user-username">Clients</h3>
                            <h5 class="widget-user-desc">Edit Clients</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/pos_ibi_clients/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_pos_ibi_clients', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_pos_ibi_clients', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="NOM_CLIENT" class="col-sm-2 control-label">Nom 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="NOM_CLIENT" id="NOM_CLIENT" placeholder="Nom" value="<?= set_value('NOM_CLIENT', $pos_ibi_clients->NOM_CLIENT); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="PRENOM_CLIENT" class="col-sm-2 control-label">Prenom 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="PRENOM_CLIENT" id="PRENOM_CLIENT" placeholder="Prenom" value="<?= set_value('PRENOM_CLIENT', $pos_ibi_clients->PRENOM_CLIENT); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="TEL_CLIENT" class="col-sm-2 control-label">Telephone 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="TEL_CLIENT" id="TEL_CLIENT" placeholder="Telephone" value="<?= set_value('TEL_CLIENT', $pos_ibi_clients->TEL_CLIENT); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="EMAIL_CLIENT" class="col-sm-2 control-label">Email 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="EMAIL_CLIENT" id="EMAIL_CLIENT" placeholder="Email" value="<?= set_value('EMAIL_CLIENT', $pos_ibi_clients->EMAIL_CLIENT); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="DESCRIPTION_CLIENT" class="col-sm-2 control-label">Description 
                            </label>
                            <div class="col-sm-8">
                                <textarea id="DESCRIPTION_CLIENT" name="DESCRIPTION_CLIENT" rows="5" class="textarea"><?= set_value('DESCRIPTION_CLIENT', $pos_ibi_clients->DESCRIPTION_CLIENT); ?></textarea>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="DATE_NAISSANCE_CLIENT" class="col-sm-2 control-label">Date De Naissance 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="DATE_NAISSANCE_CLIENT"  placeholder="Date De Naissance" id="DATE_NAISSANCE_CLIENT" value="<?= set_value('DATE_NAISSANCE_CLIENT', $pos_ibi_clients->DATE_NAISSANCE_CLIENT); ?>">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>

                                       <div class="form-group ">
                            <label for="ADRESSE_CLIENT" class="col-sm-2 control-label">Adresse
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="ADRESSE_CLIENT" id="ADRESSE_CLIENT" placeholder="Ville" value="<?= set_value('ADRESSE_CLIENT', $pos_ibi_clients->ADRESSE_CLIENT); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="CITY_CLIENT" class="col-sm-2 control-label">Ville 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="CITY_CLIENT" id="CITY_CLIENT" placeholder="Ville" value="<?= set_value('CITY_CLIENT', $pos_ibi_clients->CITY_CLIENT); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="COUNTRY_CLIENT" class="col-sm-2 control-label">Pays 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="COUNTRY_CLIENT" id="COUNTRY_CLIENT" placeholder="Pays" value="<?= set_value('COUNTRY_CLIENT', $pos_ibi_clients->COUNTRY_CLIENT); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="COMPANY_NAME_CLIENT" class="col-sm-2 control-label">NIF Du Client 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="COMPANY_NAME_CLIENT" id="COMPANY_NAME_CLIENT" placeholder="NIF Du Client" value="<?= set_value('COMPANY_NAME_CLIENT', $pos_ibi_clients->COMPANY_NAME_CLIENT); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                         
                         
                                                <div class="form-group ">
                            <label for="REF_GROUP_CLIENT" class="col-sm-2 control-label">Assigner A Un Groupe 
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="REF_GROUP_CLIENT" id="REF_GROUP_CLIENT" data-placeholder="Select REF GROUP CLIENT" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('pos_ibi_clients_groups') as $row): ?>
                                    <option <?=  $row->ID_GROUP ==  $pos_ibi_clients->REF_GROUP_CLIENT ? 'selected' : ''; ?> value="<?= $row->ID_GROUP ?>"><?= $row->NAME_GROUP; ?></option>
                                    <?php endforeach; ?>  
                                </select>
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
<script src="<?= BASE_ASSET; ?>ckeditor/ckeditor.js"></script>
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
              window.location.href = BASE_URL + 'administrator/pos_ibi_clients';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
                    
        var form_pos_ibi_clients = $('#form_pos_ibi_clients');
        var data_post = form_pos_ibi_clients.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_pos_ibi_clients.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
            var id = $('#pos_ibi_clients_image_galery').find('li').attr('qq-file-id');
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