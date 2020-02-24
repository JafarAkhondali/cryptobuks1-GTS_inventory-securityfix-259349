
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
        Point de vente        <small> Modification </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class=""><a  href="<?= site_url('administrator/registers'); ?>">Point de vente</a></li>
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
                      
                        <?= form_open(base_url('administrator/registers/edit_save/'.$this->uri->segment(4)), [
                            'name'    => 'form_registers', 
                            'class'   => 'form-horizontal', 
                            'id'      => 'form_registers', 
                            'method'  => 'POST'
                            ]); ?>

                            <div class="row">

                            <div class="col-sm-12">
                            
                              
                              <div class="col-sm-6">

                                <div class="form-group ">

                            <label class="col-sm-3">Client 

                            <i class="required">*</i>

                            </label>

                            <div class="col-sm-9">

                                <select  class="form-control chosen chosen-select-deselect" name="ref_client" id="ref_client" data-placeholder="Selectionner le Client" >
                                  <option value=""></option>
                                    <?php foreach (db_get_all_data('pos_ibi_clients') as $row): ?>
                                    <option <?=  $row->ID_CLIENT ==  $registers['REF_CLIENT_COMMAND'] ? 'selected' : ''; ?> value="<?= $row->ID_CLIENT ?>"><?= $row->NOM_CLIENT; ?></option>
                                    <?php endforeach; ?>  

                                </select>

                            </div>

                        </div>

                        </div>

                              <div class="col-sm-6">

                                 <div class="form-group ">
                         
                                     <label class="radio-inline"><input type="radio" value="is_commande_client" id="checkentente" name="optradio">En attente</label>
                                     <label class="radio-inline"><input type="radio" value="is_proforma_client" id="proformaclient" name="optradio">Proforma</label>
            

                        </div>

                              
                     </div>

                  </div>
                </div>
                <div class="modal fade bd-example-modal-lg" id="proformaclientModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                         
                          <div class="row">

                            <div class="col-sm-12">

                              <legend style="font-size: 1.2em;">Termes/Conditions du proforma</legend>
                            
                              
                              <div class="col-sm-6">

                                <div class="form-group ">

                            <label class="col-sm-3">Délais</label>

                            <div class="col-sm-9">

                                <div class="input-group">
                                         <span class="input-group-addon">
                                           <select name="temps" id="temps">
                                             <option value="">--choisir--</option>
                                             <option value="1">jour</option>
                                             <option value="2">semaine</option>
                                           </select>
                                         </span>
                                                <select name="delai" class="form-control delai" id="delai">
                                                  <option value="">Stock en vente</option>
                                                </select>
                                                <input type="number" name="delai" class="form-control delai" id="delai1" style="display: none;">
                                          </div>

                            </div>

                        </div>

                        <div class="form-group ">

                            <label class="col-sm-3">Intitulé du proforma</label>

                            <div class="col-sm-9">

                                <input type="text" class="form-control" name="titreproforma" placeholder="Intitulé du proforma" value="<?= set_value('titreproforma'); ?>">

                            </div>

                        </div>
                              </div>

                              <div class="col-sm-6">

                                 <div class="form-group ">

                            <label class="col-sm-4">Validité d'offre</label>

                            <div class="col-sm-8">

                                <div class="input-group">
                                             <span class="input-group-addon">
                                               <select type="text" name="tempsvalid" id="tempsvalid">
                                                 <option value="1" selected>jour</option>
                                                 <option value="2">semaine</option>
                                               </select>
                                             </span>
                                                    <input type="number" name="validOff" class="form-control delai" id="validOff" value="3">
                                              </div>

                            </div>

                        </div>                 

                        <div class="form-group">

                            <label class="col-sm-4">Condition de payement</label>

                            <div class="col-sm-8">
<!-- class="form-control chosen chosen-select-deselect" -->
                                <select type="text" name="condPayer" id="condPayer" class=" form-control condPayer">
                                                    <option value="1" selected>Commande</option>
                                                    <option value="2">Customiser</option>
                                                  </select>

                            </div>

                        </div>
                        <div id="customer" style="display: none;">
                          <div class="form-group">
                              <label class="col-sm-4">A la commande</label>
                              <div class="col-sm-8">
                                  <input type="number" class="form-control" name="typeCond1" id="typeCond">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-4">A la livraison</label>
                              <div class="col-sm-8">
                                  <input type="number" class="form-control" name="typeCond1" id="typeCond">
                              </div>
                          </div>
                      </div>
                                
                     </div>

                  </div>

              </div>    
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" type="button" class="btn btn-default">Fermer</button>
                            <button data-bb-handler="confirm" type="button" class="btn btn-primary btn_save btn_action btn_save_back" id="btn_save" data-stype='back'>Mettre en attente du proforma</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade" id="MettreententeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title">Mettre en attente</h4>
                      </div>
                      <div class="modal-body" style="overflow-x: hidden;">
                          <div class="bootbox-body">
                            <div class="saveboxwrapper">
                              <div class="row"><div class="col-lg-12"><div class="input-group group-content"><span class="input-group-addon">Intitulé de la commande</span><input class="form-control" name="titrecommande" value="<?= set_value('titrecommande'); ?>" placeholder="Nom de la commande"></div></div></div><br><div class="alert alert-info"><p>Vous êtes sur le point de sauvegarder cette commande</p></div>
                              <table class="table table-bordered cart-status-for-save">
                                <thead>
                                  <tr>
                                    <td>Détails du panier</td><td>Montant</td>
                                  </tr>
                                </thead>
                                <tbody class="cart-status-fs-tbody">
                                  <tr>
                                    <td>Valeur du panier</td><td><strong></strong></td>
                                  </tr>
                                  <tr>
                                    <td>Net à payer</td><td><strong></strong></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button data-dismiss="modal" type="button" class="btn btn-default">Fermer</button><button data-bb-handler="confirm" type="button" class="btn btn-info btn_save btn_action btn_save_back" id="btn_save" data-stype='back'>Mettre en attente</button></div>
                  </div>
                </div>
              </div>

              <div class="row-fluid">
    <div class="col-md-12">
            <div class="form-group">
              <div id="comboboxDiv" hidden>
                <select name="article_codebar" type="text" class="form-control combobox" placeholder="Rechercher le nom du produit">
                          <option value="">Rechercher le nom du produit, la reference</option>
                          <?php
                          foreach ( $getProduit as $articles) { ?>
                               <option class="articleOption" value="<?=$articles['CODEBAR_ARTICLE'] ?> prix=<?=$articles['PRIX_DE_VENTE_ARTICLE'] ?>"><?php echo $articles['DESIGN_ARTICLE'];?></option>
                            
                        <?php }
                          ?>

                      </select>


              </div>
                <input type="text" id="myInput" class="search-input form-control input-lg" placeholder="Rechercher le nom du produit, la reference">
                <div id="list" hidden>
                  <ul id="myUL">
                        <?php
                          foreach ( $getProduit as $articles) { 
                            ?>
                            <li><a class="articleOption" articleId="<?=$articles['ID_ARTICLE'] ?>" id="<?=$articles['CODEBAR_ARTICLE'] ?>" quantRest="<?=$articles['QUANTITE_RESTANTE_ARTICLE'] ?>" price="<?=$articles['PRIX_DE_VENTE_ARTICLE']?>" design="<?=$articles['DESIGN_ARTICLE']?>"><?php echo $articles['DESIGN_ARTICLE'].' - Réf: '.$articles['SKU_ARTICLE']; ?></a></li>
                        <?php }
                        ?>
                      </ul>
                </div>
            </div>
      </div> 
    </div>
    <div class="row">
    <div class="col-md-12">
            <caption><span id="error"></span></caption>

            <div class="box">
                <div class="box-header" style="text-align: center">Liste</div>
                <div class="box-body no-padding"><input type="hidden" class="rowcount">
                    <table class="table table-bordered table-striped" id="tableId">
                      
                        <thead>
                            <tr>
                                <td>Nom de l'article</td>
                                <td>Prix</td>
                                <td width="150">Quantité</td>
                                <td width="200">Total</td>
                                <td width="50">Remise</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                <div class="modal fade" id="remiseId">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                          <h4 class="text-center">Appliquer une remise : <span id="discount_type"><span class="label label-primary">au pourcentage</span></span></h4>
                          <span id="discount_price" style="display: none;"></span>
                          <span id="discount_initial" style="display: none;"></span>
                          <span id="discount_idart" style="display: none;"></span>
                          <div class="input-group input-group-lg">
                            <span class="input-group-btn">
                              <button class="btn btn-default percentage_discount active" id="percentage_discount" type="button">Pourcentage</button>
                            </span>
                            <input type="number" class="form-control discount_value" id="discount_value" value="0" placeholder="Définir le montant ou le pourcentage ici...">
                            <span class="input-group-btn">
                              <button class="btn btn-default flat_discount" id="flat_discount" type="button">Espèces</button>
                            </span>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" onclick="save_discount(this);">OK</button>
                          <!-- <button type="button" class="btn btn-primary save_discount">OK</button> -->
                        </div>
                      </div>
                    </div>
                  </div>

                        </tbody>
                      </table>
                      <!-- <div>Total price: $<span class="total-cart"></span></div> -->
                



                    </div>
                  </div>
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
              window.location.href = BASE_URL + 'administrator/registers';
            }
          });
    
        return false;
      }); /*end btn cancel*/
    
      $('.btn_save').click(function(){
        $('.message').fadeOut();
            
        var form_registers = $('#form_registers');
        var data_post = form_registers.serializeArray();
        var save_type = $(this).attr('data-stype');
        data_post.push({name: 'save_type', value: save_type});
    
        $('.loading').show();
    
        $.ajax({
          url: form_registers.attr('action'),
          type: 'POST',
          dataType: 'json',
          data: data_post,
        })
        .done(function(res) {
          if(res.success) {
            var id = $('#registers_image_galery').find('li').attr('qq-file-id');
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