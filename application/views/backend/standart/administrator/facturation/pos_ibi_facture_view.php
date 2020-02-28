
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
      Facture      <small><?= cclang('detail', ['Facture']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/pos_ibi_facture'); ?>">Facture</a></li>
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
                     <h3 class="widget-user-username">Facture</h3>
                     <h5 class="widget-user-desc">Detail Facture</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_pos_ibi_facture" id="form_pos_ibi_facture" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">ID FACTURE </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_facture->ID_FACTURE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">NUMERO FACTURE </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_facture->NUMERO_FACTURE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">REF CODE COMMAND FACTURE </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_facture->REF_CODE_COMMAND_FACTURE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">STORE BY FACTURE </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_facture->STORE_BY_FACTURE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">DATE CREATION FACTURE </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_facture->DATE_CREATION_FACTURE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">AUTHOR FACTURE </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_facture->AUTHOR_FACTURE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">STATUT FACTURE </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_ibi_facture->STATUT_FACTURE); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('pos_ibi_facture_update', function() use ($pos_ibi_facture){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit pos_ibi_facture (Ctrl+e)" href="<?= site_url('administrator/pos_ibi_facture/edit/'.$pos_ibi_facture->ID_FACTURE); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Pos Ibi Facture']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/pos_ibi_facture/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Pos Ibi Facture']); ?></a>
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
