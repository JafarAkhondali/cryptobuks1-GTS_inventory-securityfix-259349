
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
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
      Taxes      <small><?= cclang('detail', ['Taxes']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/pos_ibi_taxes'); ?>">Taxes</a></li>
      <li class="active"><?= cclang('detail'); ?></li>
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
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Taxes</h3>
                     <h5 class="widget-user-desc">Detail Taxes</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_pos_ibi_taxes" id="form_pos_ibi_taxes" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">ID TAXE </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_taxes->ID_TAXE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nom De La Taxe </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_taxes->NAME_TAXE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Description De La Taxe </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_taxes->DESCRIPTION_TAXE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Taux Imposition </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_taxes->RATE_TAXE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Auteur </label>

                        <div class="col-sm-8">
                        
                          <?php 
                              $user = $this->model_pos_ibi_fournisseurs->get_user_info('aauth_users',$pos_ibi_taxes->AUTHOR_TAXE,'id');
                              foreach ($user as $value) {
                                echo "".$value->username;
                              }
                             ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date De Creation </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_taxes->DATE_CREATION_TAXE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date De Modification </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_taxes->DATE_MOD_TAXE); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('pos_ibi_taxes_update', function() use ($pos_ibi_taxes){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit pos_ibi_taxes (Ctrl+e)" href="<?= site_url('administrator/pos_ibi_taxes/edit/'.$pos_ibi_taxes->ID_TAXE); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Pos Ibi Taxes']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/pos_ibi_taxes/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Pos Ibi Taxes']); ?></a>
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
