<style type="text/css">
  #myUL {
    /* Remove default list styling */
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  #myUL li a {
    border: 1px solid #ddd; /* Add a border to all links */
    margin-top: -1px; /* Prevent double borders */
    background-color: #f6f6f6; /* Grey background color */
    padding: 12px; /* Add some padding */
    text-decoration: none; /* Remove default text underline */
    font-size: 18px; /* Increase the font-size */
    color: black; /* Add a black text color */
    display: block; /* Make it into a block element to fill the whole list */
  }
  
  #myUL li a:hover:not(.header) {
    background-color: #eee; /* Add a hover effect to all links, except for headers */
  }
</style>
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
                                <input type="text" name="store_prefix" value="store_<?=$this->uri->segment(4)?>">
                                <input type="text" name="store_uri" value="<?=$this->uri->segment(4)?>">
                                <select  class="form-control chosen chosen-select-deselect" name="ref_client" id="ref_client" data-placeholder="Selectionner le Client" >
                                  <option value=""></option>
                                    <?php foreach (db_get_all_data('pos_ibi_clients') as $row): ?>
                                    <option <?=  $row->ID_CLIENT ==  $ref_client ? 'selected' : ''; ?> value="<?= $row->ID_CLIENT ?>"><?= $row->NOM_CLIENT; ?></option>
                                    <?php endforeach; ?>  

                                </select>

                            </div>

                        </div>

                        </div>

                              <div class="col-sm-6">

                                 <div class="form-group ">
                                  <?php  
                                  $checked="";
                                  $checkeds="";
                                  if($type == 'ibi_order_attente'){
                                    $checked = "checked";
                                    $checkedtype = "is_commande_client";
                                  }else{
                                    $checkeds = "checked";
                                    $checkedtype = "is_proforma_client";
                                  }
                                    ?>
                                     <label class="radio-inline"><input type="radio" value="is_commande_client" id="checkentente" <?=$checked?> name="optradio">En attente</label>
                                     <label class="radio-inline"><input type="radio" value="is_proforma_client" id="proformaclient" <?=$checkeds?> name="optradio">Proforma</label>
                                     <input type="hidden" class="checkedRadio" value="<?=$checkedtype?>">
            

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

                                <input type="text" class="form-control" name="titreproforma" placeholder="Intitulé du proforma" value="<?= set_value('$titre', $titre); ?>">

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
                              <div class="row"><div class="col-lg-12"><div class="input-group group-content"><span class="input-group-addon">Intitulé de la commande</span><input class="form-control" name="titrecommande" value="<?= set_value('$titre', $titre); ?>" placeholder="Nom de la commande"></div></div></div><br><div class="alert alert-info"><p>Vous êtes sur le point de sauvegarder cette commande</p></div>
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
                <input type="text" id="myInput" class="search-input form-control input-lg" placeholder="Rechercher le nom du produit, le code barre">
                <div id="list" hidden>
                  <ul id="myUL">
                        <?php
                          foreach ( $getProduit as $articles) { 
                            ?>
                            <li><a class="articleOption" articleId="<?=$articles['ID_ARTICLE'] ?>" id="<?=$articles['CODEBAR_ARTICLE'] ?>" quantRest="<?=$articles['QUANTITE_RESTANTE_ARTICLE'] ?>" price="<?=$articles['PRIX_DE_VENTE_ARTICLE']?>" design="<?=$articles['DESIGN_ARTICLE']?>"><?php echo $articles['DESIGN_ARTICLE'].' - '.$articles['CODEBAR_ARTICLE']; ?></a></li>
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
                        <?php 
                            foreach ($getposProduit as $getgetposProduits) {

                              if($type == 'ibi_order_attente'){

                      $ref_produit_codebar = $getgetposProduits['REF_PRODUCT_CODEBAR_COMMAND_PROD'];
                      $name = $getgetposProduits['NAME_COMMAND_PROD'];
                      $prix = $getgetposProduits['PRIX_COMMAND_PROD'];
                      $quantite = $getgetposProduits['QUANTITE_COMMAND_PROD'];
                      $total = $getgetposProduits['PRIX_TOTAL_COMMAND_PROD'];

                      if($getgetposProduits['DISCOUNT_TYPE_COMMAND_PROD'] == 'percentage'){

                              $rPourc = $getgetposProduits['DISCOUNT_PERCENT_COMMAND_PROD'] * 100 / $getgetposProduits['PRIX_COMMAND_PROD'].'%';
                      
                            }elseif($getgetposProduits['DISCOUNT_TYPE_COMMAND_PROD'] == 'flat'){
                              $rPourc = $getgetposProduits['DISCOUNT_AMOUNT_COMMAND_PROD'];
                            }

                          }else{

                      $ref_produit_codebar = $getgetposProduits['REF_PRODUCT_CODEBAR_PROFORMA_PROD'];
                      $name = $getgetposProduits['NAME_PROFORMA_PROD'];
                      $prix = $getgetposProduits['PRIX_PROFORMA_PROD'];
                      $quantite = $getgetposProduits['QUANTITE_PROFORMA_PROD'];
                      $total = $getgetposProduits['PRIX_TOTAL_PROFORMA_PROD'];

                          if($getgetposProduits['DISCOUNT_TYPE_PROFORMA_PROD'] == 'percentage'){

                              $rPourc = $getgetposProduits['DISCOUNT_PERCENT_PROFORMA_PROD'] * 100 / $getgetposProduits['PRIX_PROFORMA_PROD'].'%';
                      
                            }elseif($getgetposProduits['DISCOUNT_TYPE_PROFORMA_PROD'] == 'flat'){
                              $rPourc = $getgetposProduits['DISCOUNT_AMOUNT_PROFORMA_PROD'];
                            }

                          }
                                  
                            ?>
                      <tr id="<?=$ref_produit_codebar?>">
                          <td style='line-height: 35px;'>
                            <input type='hidden' name='article[]' value='<?=$ref_produit_codebar?>'><input type='hidden' name='name[]' value='<?=$name?>'><?=$name?> - <?=$ref_produit_codebar?>
                          </td>
                          <td style='line-height: 35px;' class='price'><input type='hidden' name='price[]' value='<?=$prix?>'><?=$prix?>
                          </td>
                          <td>
                            <div class='input-group inpuut-group-sm'>
                              <span class='input-group-btn'><button type='button' class='btn btn-default moins' onclick='moins(this)'><i class='fa fa-minus'></i></button></span><input type='text' name='search[]' class='form-control search' onkeyup='search(this)' value='<?=$quantite?>'><span class='input-group-btn'><button type='button' class='btn btn-default plus' onclick='plus(this)'><i class='fa fa-plus'></i></button></span>
                            </div>
                          </td>
                          <td style='line-height: 35px;' class='total'><?=$total?></td>
                          <td style='line-height: 28px;'><span class='btn btn-default btn-sm' onclick='toRemise(this)' id='remise<?=$ref_produit_codebar?>'><?=$rPourc?></span><input type='hidden' class='remise<?=$ref_produit_codebar?>' name='remise[]' value='<?=$rPourc?>'></td>
                          <!-- <td width='50'><button type='button' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#exampleModal<?=$ref_produit_codebar?>'><i class='fa fa-remove'></i></button></td> -->
                          <td width='50'><a class='btn btn-sm btn-danger' onclick='toDeleteModal(this)'><i class='fa fa-remove'></i></a></td>
                        </tr>
                      <?php } ?>
                <div class="modal fade" id="remiseId">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                          <h4 class="text-center">Appliquer une remise : <span id="discount_type"><span class="label label-primary">au pourcentage</span></span></h4>
                          <span id="discount_price" style="display: none"></span>
                          <span id="discount_initial" style="display: none"></span>
                          <span id="discount_idart" style="display: none"></span>
                          <input type="hidden" class="discount_idart">
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

                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          Etes-vous sur de vouloir supprimer ce produit dans la commande faite?
                          <input type="hidden" class="ref_code_produit">
                          <input type="hidden" class="code_command" value="<?=$code_commande?>">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-danger delete">Supprimer</button>
                        </div>
                      </div>
                    </div>
                  </div>

                        </tbody>
                      </table>
                      <!-- <div>Total price: $<span class="total-cart"></span></div> -->

      <div class="modal fade" id="myModalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body" style="overflow-x: hidden;">
                          <div class="bootbox-body">
                            <div class="saveboxwrapper">
                              <table class="table table-bordered cart-status-for-save">
                                <thead>
                                  <tr>
                                    <td>Détails de l'article</td><td>Libellé</td>
                                  </tr>
                                </thead>
                                <tbody class="cart-status-fs-tbody">
                                  <tr>
                                    <td>Stock en vente</td><td><strong></strong></td>
                                  </tr>
                                  <tr>
                                    <td>Stock reservé</td><td><strong></strong></td>
                                  </tr>
                                  <tr>
                                    <td>Quantité en stock</td><td><strong><span id="quantRestDetail"></span></strong></td>
                                  </tr>
                                  <tr>
                                    <td>Prix de vente</td><td><strong><span id="priceDetail"></span></strong></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-shopping-cart default"></i></button>
                    </div>
                  </div>
                </div>
              </div>
                



                    </div>
                  </div>
            </div>
          </div>
                         
                                                

                                                 
                         
                        
                        <div class="message"></div>
                        <!-- <div class="row-fluid col-md-7">
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
                        </div> -->
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
<script type="text/javascript">
  var articleTable = [];
  
  function getRidOfTheComma(data){
      var toReturn = "";
      var toFilter = data.split("");
      const toMakeString = toFilter.filter(element => element !== ",");
      const times = toMakeString.length;
      for(i=0; i<times; i++){
          toReturn += toMakeString[i];
      }
      return toReturn;
  }

  function stringToNumber(data){
      var toReturn = 0;
      var toMakeInt = "";
      if(data === ""){
          return toReturn;
      } else {
          toMakeInt = getRidOfTheComma(data);
          toReturn = parseFloat(toMakeInt);
          return toReturn;
      }
  }
  function toRemise(data){
    $("#remiseId").modal();
    const initial = stringToNumber($(data).closest('tr').find('td div input').val());
    const price = stringToNumber($(data).closest('tr').find('td.price').text());
    const idart = ($(data).closest('tr').attr('id'));
   
    document.getElementById('discount_price').innerHTML = price;
    document.getElementById('discount_initial').innerHTML = initial;
    // document.getElementById('discount_idart').innerHTML = idart;
    $('.discount_idart').val(idart);
  }
  function toDelete(data){
    $(data).closest('tr').remove();
    const idex = articleTable.indexOf($(data).closest('tr').attr("id"));
    articleTable.splice(idex, 1);
  }
  function toDeleteModal(data){
    const idart = ($(data).closest('tr').attr('id'));
    $(".ref_code_produit").val(idart);
    $('#myModal').modal('show');
  }
  function moins(data){
    const initial = stringToNumber($(data).closest('tr').find('td div input').val());
    const price = stringToNumber($(data).closest('tr').find('td.price').text());
    const qty = initial - 1;
    if(qty <= 0){
      $(data).closest('tr').remove();
      const idex = articleTable.indexOf($(data).closest('tr').attr("id"));
      articleTable.splice(idex, 1);
    } else {
      $(data).closest('tr').find('td div input').val(qty);
      $(data).closest('tr').find('td.total').text(price * qty);
    }
  }

  function plus(data){
    const initial = stringToNumber($(data).closest('tr').find('td div input').val());
    const price = stringToNumber($(data).closest('tr').find('td.price').text());
    const qty = initial + 1;
  
    $(data).closest('tr').find('td div input').val(qty);
    $(data).closest('tr').find('td.total').text(price * qty);


  }
  function search(data){
    const quantRest = $(data).closest('tr').find("td.quantRest").text();
    const initial = stringToNumber($(data).closest('tr').find('td div input').val());
    const price = stringToNumber($(data).closest('tr').find('td.price').text());
 
      $(data).closest('tr').find('td div input').val(initial);
      $(data).closest('tr').find('td.total').text(price * initial);
    
    }
    function save_discount(data){
       const discount_type = document.getElementById("discount_type").innerHTML;
       const discount_price = document.getElementById("discount_price").innerHTML;
       const discount_initial = document.getElementById("discount_initial").innerHTML;
       // const discount_idart = document.getElementById("discount_idart").innerHTML;
       const discount_idart = $('.discount_idart').val();
       const discount_value = $('.discount_value').val();

      if(discount_type == 'Espèces'){
      
        // if(discount_value = discount_price){
        //       alert('La remise fixe ne peut pas excéder la valeur actuelle du panier. Le montant de la remise à été réduite à la valeur du panier.');
        //       document.getElementById('remise'+discount_idart+'').innerHTML = discount_price;
        //       $('#remiseId').modal('hide');
        // }else 
        if(discount_value == ''){
                // document.getElementById('remise'+discount_idart+'').innerHTML = 0;
                $('#remise'+discount_idart+'').text(0);
                $('.remise'+discount_idart+'').val(0);
                $('#remiseId').modal('hide');
          }else{
           const price = discount_price * discount_initial - discount_value;
           // document.getElementById('remise'+discount_idart+'').innerHTML = discount_value;
           $('#remise'+discount_idart+'').text(discount_value);
           $(data).closest('tr').find('td.total').text(price);
           $('.remise'+discount_idart+'').val(discount_value);
           $('#remiseId').modal('hide');
        }
           
        }else if(discount_type == 'Pourcentage'){
          if(discount_value>100){
                // document.getElementById('remise'+discount_idart+'').innerHTML = 100+'%';
                $('#remise'+discount_idart+'').text(100+'%');
                $('.remise'+discount_idart+'').val(100+'%');
                $('#remiseId').modal('hide');
          }else if(discount_value == ''){
                $('#remise'+discount_idart+'').text(0+'%');
                $('.remise'+discount_idart+'').val(0+'%');
                $('#remiseId').modal('hide');
          }else{
               // document.getElementById('remise'+discount_idart+'').innerHTML = discount_value+'%';
               $('#remise'+discount_idart+'').text(discount_value+'%');
               $('.remise'+discount_idart+'').val(discount_value+'%');
               $('#remiseId').modal('hide');
          }
           
        }else{
          if(discount_value>100){
                // document.getElementById('remise'+discount_idart+'').innerHTML = 100+'%';
                $('#remise'+discount_idart+'').text(100+'%');
                $('.remise'+discount_idart+'').val(100+'%');
                $('#remiseId').modal('hide');
          }else if(discount_value == ''){
                $('#remise'+discount_idart+'').text(0+'%');
                $('.remise'+discount_idart+'').val(0+'%');
                $('#remiseId').modal('hide');
          }else{
               // document.getElementById('remise'+discount_idart+'').innerHTML = discount_value+'%';
               $('#remise'+discount_idart+'').text(discount_value+'%');
               $('.remise'+discount_idart+'').val(discount_value+'%');
               $('#remiseId').modal('hide');
          }
        }
    }
    $(document).ready(function(){

         let rows = [];
      
      $('.flat_discount').on('click',function(){
        document.getElementById('discount_type').innerHTML = 'Espèces';
      });
      $('.percentage_discount').on('click',function(){
        document.getElementById('discount_type').innerHTML = 'Pourcentage';
      });

      $('#temps').on('change',function(){
             var temps =$('#temps').val();
             if(temps===''){
              $('#delai1').hide();$('#delai').show();
             }else{
             $('#delai1').show();
             $('#delai').hide(); }
      });
      $('#condPayer').on('change',function(){
        var condPayer=$('#condPayer').val(); 
        if(condPayer=='1'){
          $('#customer').hide();
        }else{
           $('#customer').show();
        }
            
      });

    var combobox = document.getElementById("combobox");
    var articleOption = document.getElementsByClassName("articleOption");
    
    $("#myInput").on('keyup', function(){
      var input, filter, ul, li, a, i, txtValue;

      input = document.getElementById('myInput');
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName('li'); 

      if(input.value === ""){
        $("#list").attr("hidden", 'true');
      } else {
        $("#list").removeAttr("hidden");
        for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          txtValue = a.textContent || a.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
          } else {
            li[i].style.display = "none";
          }
        }
      }
    });

    $(".articleOption").on("click", function(){

      const quantRest = $(this).attr("quantRest");
      const articleId = $(this).attr("id");
      const codebar = $(this).attr("id");
      const price = $(this).attr("price");
      const name = $(this).text();
      const remise = '0%';

      $('#quantRestDetail').text(quantRest);
      $('#priceDetail').text(price);
      $('#myModalDetail').modal('show');


      if(articleTable.indexOf(name) > -1){
        alert("Cet produit existe deja dans le tableau");
      }else {
      $("#list").attr("hidden", 'true');
        let row = "<tr id="+articleId+">";
        row += '<td style="line-height: 35px;"><input type="hidden" name="article[]" value="'+codebar+'"><input type="hidden" name="name[]" value="'+name+'">'+name+'</td>';
        row += '<td style="line-height: 35px;" class="price"><input type="hidden" name="price[]" value="'+price+'">'+price+'</td>'
        row += '<td><div class="input-group inpuut-group-sm">';
        row += '<span class="input-group-btn">';
        row += '<button type="button" class="btn btn-default moins" onclick="moins(this)"><i class="fa fa-minus"></i></button>';
        row += '</span>';
        row += '<input type="text" name="search[]" class="form-control search" onkeyup="search(this)" value="1">';
        row += '<span class="input-group-btn">';
        row += '<button  type="button" class="btn btn-default plus" onclick="plus(this)">';
        row += '<i class="fa fa-plus"></i>';
        row += '</button>';
        row += '</span>';
        row += '</div>';
        row += '</td>';
        row += '<td style="line-height: 35px;" class="total">'+price+'</td>';
        row += '<td style="line-height: 28px;"><span class="btn btn-default btn-sm" onclick="toRemise(this)" id="remise'+articleId+'">'+remise+'</span><input type="hidden" class="remise'+articleId+'" name="remise[]" value="'+remise+'"></td>';
        row += '<td width="50">';
        row += '<a class="btn btn-sm btn-danger" onclick="toDelete(this)">';
        row += '<i class="fa fa-remove"></i>';
        row += '</a>';
        row += '</td>';
        row += "</tr>";
        //rows +="<tr><td colspan='3' class='sumTotal'>Total</td><td>"+price+"</td></tr>";
        
        // $("#tableId").append(rows);
        $("#tableId").append(row);
        $("#myInput").val("");
        articleTable.push(name);
      }
  

    });

    $('.delete').on('click', function () {

          const ref_code_produit = $('.ref_code_produit').val();
          const code_command = $('.code_command').val();
          const id = '<?=$this->uri->segment(4)?>';
          const checkedRadio = $('.checkedRadio').val();
   
          $.ajax({
                    url: '<?=base_url()?>/administrator/registers/delete_produit_cart',
                    method: "POST",
                    data: {ref_code_produit:ref_code_produit,code_command,code_command,id:id,checkedRadio:checkedRadio},
                    dataType: "JSON",
                    success: function (data) {
                    if (data.message == 'success') {
                      $('#myModalDetail').modal('hide');
                      window.location.href = data.redirect;
                      }else{
                        alert("#ERROR");
                      }
                    }
                });
         });

    $('#checkentente').on('click', function () {
      
      const rowcount = $(".rowcount").val();

      // if(rowcount == ""){
      //   swal("Attention!","Vous ne pouvez pas sauvegarder une commande qui ne contient aucun produit.")
      //   document.getElementById("checkentente").checked = false;
      // }else{
        $("#MettreententeModal").modal();
      // }
    });
    $('#proformaclient').on('click', function () {
      // const rowcount = $(".rowcount").val();

      // if(rowcount == ""){
      //   swal("Attention!","Vous ne pouvez pas sauvegarder un proforma qui ne contient aucun produit.")
      //   document.getElementById("proformaclient").checked = false;
      // }else{
        $("#proformaclientModal").modal();
      // }
    });

  /*document ready*/
});

        
    

   

</script>