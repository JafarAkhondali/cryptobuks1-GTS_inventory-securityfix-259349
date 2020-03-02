
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
        Pos Store 2 Ibi Devis        <small>Edit Pos Store 2 Ibi Devis</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/pos_store_2_ibi_devis'); ?>">Pos Store 2 Ibi Devis</a></li>
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
                            <h3 class="widget-user-username">Pos Store 2 Ibi Devis</h3>
                            <h5 class="widget-user-desc">Edit Pos Store 2 Ibi Devis</h5>
                            <hr>
                        </div>
                        <?= form_open(base_url('administrator/pos_store_2_ibi_devis/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_pos_store_2_ibi_devis', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_pos_store_2_ibi_devis', 
                            'method'  => 'POST'
                            ]); ?>
                         
                                                <div class="form-group ">
                            <label for="TITRE_DEVIS" class="col-sm-2 control-label">TITRE DEVIS 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="TITRE_DEVIS" id="TITRE_DEVIS" placeholder="TITRE DEVIS" value="<?= set_value('TITRE_DEVIS', $pos_store_2_ibi_devis->TITRE_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="CODE_DEVIS" class="col-sm-2 control-label">CODE DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="CODE_DEVIS" id="CODE_DEVIS" placeholder="CODE DEVIS" value="<?= set_value('CODE_DEVIS', $pos_store_2_ibi_devis->CODE_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="REF_CLIENT_DEVIS" class="col-sm-2 control-label">REF CLIENT DEVIS 
                            <i class="required">*</i>
                            </label>
                            <div class="col-sm-8">
                                <select  class="form-control chosen chosen-select-deselect" name="REF_CLIENT_DEVIS" id="REF_CLIENT_DEVIS" data-placeholder="Select REF CLIENT DEVIS" >
                                    <option value=""></option>
                                    <?php foreach (db_get_all_data('pos_ibi_clients') as $row): ?>
                                    <option <?=  $row->ID_CLIENT ==  $pos_store_2_ibi_devis->REF_CLIENT_DEVIS ? 'selected' : ''; ?> value="<?= $row->ID_CLIENT ?>"><?= $row->NOM_CLIENT; ?></option>
                                    <?php endforeach; ?>  
                                </select>
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>

                                                 
                                                <div class="form-group ">
                            <label for="TYPE_DEVIS" class="col-sm-2 control-label">TYPE DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="TYPE_DEVIS" id="TYPE_DEVIS" placeholder="TYPE DEVIS" value="<?= set_value('TYPE_DEVIS', $pos_store_2_ibi_devis->TYPE_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="DATE_CREATION_DEVIS" class="col-sm-2 control-label">DATE CREATION DEVIS 
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="DATE_CREATION_DEVIS"  placeholder="DATE CREATION DEVIS" id="DATE_CREATION_DEVIS" value="<?= set_value('DATE_CREATION_DEVIS', $pos_store_2_ibi_devis->DATE_CREATION_DEVIS); ?>">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="DATE_MOD_DEVIS" class="col-sm-2 control-label">DATE MOD DEVIS 
                            </label>
                            <div class="col-sm-6">
                            <div class="input-group date col-sm-8">
                              <input type="text" class="form-control pull-right datetimepicker" name="DATE_MOD_DEVIS"  placeholder="DATE MOD DEVIS" id="DATE_MOD_DEVIS" value="<?= set_value('DATE_MOD_DEVIS', $pos_store_2_ibi_devis->DATE_MOD_DEVIS); ?>">
                            </div>
                            <small class="info help-block">
                            </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="AUTHOR_DEVIS" class="col-sm-2 control-label">AUTHOR DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="AUTHOR_DEVIS" id="AUTHOR_DEVIS" placeholder="AUTHOR DEVIS" value="<?= set_value('AUTHOR_DEVIS', $pos_store_2_ibi_devis->AUTHOR_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="COEFFICIENT_DEVIS" class="col-sm-2 control-label">COEFFICIENT DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="COEFFICIENT_DEVIS" id="COEFFICIENT_DEVIS" placeholder="COEFFICIENT DEVIS" value="<?= set_value('COEFFICIENT_DEVIS', $pos_store_2_ibi_devis->COEFFICIENT_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="TOTAL_DEVIS" class="col-sm-2 control-label">TOTAL DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="TOTAL_DEVIS" id="TOTAL_DEVIS" placeholder="TOTAL DEVIS" value="<?= set_value('TOTAL_DEVIS', $pos_store_2_ibi_devis->TOTAL_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="TOTAL_FINAL_DEVIS" class="col-sm-2 control-label">TOTAL FINAL DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="TOTAL_FINAL_DEVIS" id="TOTAL_FINAL_DEVIS" placeholder="TOTAL FINAL DEVIS" value="<?= set_value('TOTAL_FINAL_DEVIS', $pos_store_2_ibi_devis->TOTAL_FINAL_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="TYPE_DELAY_DEVIS" class="col-sm-2 control-label">TYPE DELAY DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="TYPE_DELAY_DEVIS" id="TYPE_DELAY_DEVIS" placeholder="TYPE DELAY DEVIS" value="<?= set_value('TYPE_DELAY_DEVIS', $pos_store_2_ibi_devis->TYPE_DELAY_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="TEMPS_DELAY_DEVIS" class="col-sm-2 control-label">TEMPS DELAY DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="TEMPS_DELAY_DEVIS" id="TEMPS_DELAY_DEVIS" placeholder="TEMPS DELAY DEVIS" value="<?= set_value('TEMPS_DELAY_DEVIS', $pos_store_2_ibi_devis->TEMPS_DELAY_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="COND_PAID_DEVIS" class="col-sm-2 control-label">COND PAID DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="COND_PAID_DEVIS" id="COND_PAID_DEVIS" placeholder="COND PAID DEVIS" value="<?= set_value('COND_PAID_DEVIS', $pos_store_2_ibi_devis->COND_PAID_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="PERCENT_PAID_DEVIS" class="col-sm-2 control-label">PERCENT PAID DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="PERCENT_PAID_DEVIS" id="PERCENT_PAID_DEVIS" placeholder="PERCENT PAID DEVIS" value="<?= set_value('PERCENT_PAID_DEVIS', $pos_store_2_ibi_devis->PERCENT_PAID_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="PERCENT_PAID_LIVR_DEVIS" class="col-sm-2 control-label">PERCENT PAID LIVR DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="PERCENT_PAID_LIVR_DEVIS" id="PERCENT_PAID_LIVR_DEVIS" placeholder="PERCENT PAID LIVR DEVIS" value="<?= set_value('PERCENT_PAID_LIVR_DEVIS', $pos_store_2_ibi_devis->PERCENT_PAID_LIVR_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="VALID_OFFRE_DEVIS" class="col-sm-2 control-label">VALID OFFRE DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="VALID_OFFRE_DEVIS" id="VALID_OFFRE_DEVIS" placeholder="VALID OFFRE DEVIS" value="<?= set_value('VALID_OFFRE_DEVIS', $pos_store_2_ibi_devis->VALID_OFFRE_DEVIS); ?>">
                                <small class="info help-block">
                                </small>
                            </div>
                        </div>
                                                 
                                                <div class="form-group ">
                            <label for="STATUT_DEVIS" class="col-sm-2 control-label">STATUT DEVIS 
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="STATUT_DEVIS" id="STATUT_DEVIS" placeholder="STATUT DEVIS" value="<?= set_value('STATUT_DEVIS', $pos_store_2_ibi_devis->STATUT_DEVIS); ?>">
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
              window.location.href = BASE_URL + 'administrator/pos_store_2_ibi_devis';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_pos_store_2_ibi_devis = $('#form_pos_store_2_ibi_devis');
        var data_post = form_pos_store_2_ibi_devis.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_pos_store_2_ibi_devis.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
            var id = $('#pos_store_2_ibi_devis_image_galery').find('li').attr('qq-file-id');
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