<?php

global $Options;
$this->load->config( 'rest' );
 $this->CI = & get_instance();
            $userId = $this->CI->session->userdata('id');
    $store=store_prefix();
    $storeuri  =   'stores/' . $this->uri->segment( 3, 0 ) . '/';
?>
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
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<div class="row">
        <div class="col-md-4">
            <div class="info-box bg-purple"> <span class="info-box-icon"><i class="fa fa-random"></i></span>
                <div class="info-box-content"> <a href="" id="commandes"><span class="info-box-text"><h4 style="color: white">
                    COMMANDES       </h4></span></a>
                    <div class="progress">
                        <div class="progress-bar" style="width: 0%"></div>
                    </div>
                    <span class="progress-description"></span> </div>
            </div>
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-4">
            <div class="info-box bg-red"> <span class="info-box-icon"><i class="fa fa-cog"></i></span>
                <div class="info-box-content"> <a href="" id="gammes"><span class="info-box-text"><h4 style="color: white">
                    GAMMES         </h4></span></a>
                    <div class="progress">
                        <div class="progress-bar" style="width: 0%"></div>
                    </div>
                    <span class="progress-description"></span> </div>
            </div>
        </div>
    </div>
<div id="nu-commandes" hidden>    
<form method="post" id="insert_form1">
<div class="row">
  <div class="col-md-8">
          <div class="form-group">
            <input type="hidden" name="userId" value="<?=$userId?>"> 
            <div class="input-group">
                       <span class="input-group-addon"><?php echo __( 'Description de l\'article', 'ibi' );?></span>
                              <input type="text" id="titre" name="titre" class="form-control titre">

                        </div>
              </div>
          </div>
          <div class="col-md-4">
          <div class="form-group">
            <div class="input-group">
                       <span class="input-group-addon"><?php echo __( 'Categorie', 'ibi' );?></span>
                        <select type="text" name="categorie" id="categorie" class="selectpicker form-control categorie" data-show-subtext="true" data-live-search="true"  placeholder="Selectionner une categorie">
                          <option value=""><?php echo __( 'Selectionner une categorie' );?></option>
                          <?php
                          $getCategorie=$this->db->query("SELECT * FROM pos5_".store_prefix() ."ibi_categories WHERE PARENT_REF_ID=0");
                          foreach ( $getCategorie->result() as $categorie) { ?>
                              <option value="<?=$categorie->ID ?>"><?php echo $categorie->NOM; ?></option>
                            
                        <?php }
                          ?>
                      </select>

                        </div>
              </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
            <div class="input-group">
                       <span class="input-group-addon"><?php echo __( 'Client', 'ibi' );?></span>
                                      <select type="text" name="client" id="client" class="selectpicker form-control client" data-show-subtext="true" data-live-search="true">
                                  <option value="">--- choisir un client---</option>
                                <?php
                                  $getClient=$this->db->query("SELECT ID,NOM,PRENOM FROM pos5_".store_prefix().'ibi_clients');
                                  foreach ( $getClient->result() as $clients) { ?>
                                ?>
                                <option value="<?=$clients->ID?>"><?php echo $clients->NOM.' '.$clients->PRENOM;?></option> 
                              <?php } ?>
                              </select>

                        </div>
              </div>
            </div>
            <div class="col-md-6">
               <label class="radio-inline"><input type="radio" value="is_gamme" name="optradio" checked>Gamme de l'entreprise</label>
               <label class="radio-inline" onclick="commandeclient()"><input type="radio" value="is_commande" name="optradio">Commande du client</label>
            </div>
    <div class="col-md-12">
      <div class="row">
            <div class="box-header">
              <?php

              $p='pos5_';

              $getProduit=$this->db->query("SELECT * FROM ".$p.store_prefix() .'ibi_articles');
              ?>
      
              <div id="comboboxDiv" hidden>
                <select type="text" class="form-control combobox" placeholder="Rechercher le nom du produit">
                          <option value=""><?php echo __( 'Rechercher le nom du produit' );?></option>
                          <?php
                          foreach ( $getProduit->result() as $articles) { ?>
                              <option class="articleOption" value="<?=$articles->ID ?> prix=<?=$articles->PRIX_DE_VENTE ?> "><?php echo $articles->DESIGN; ?></option>
                            
                        <?php }
                          ?>

                      </select>


              </div>
                <input type="text" id="myInput" class="search-input form-control input-lg" placeholder="<?php echo __( 'Rechercher le nom du produit', 'ibi' );?>">
                <div id="list" hidden>
                  <ul id="myUL">
                         <?php
                          foreach ( $getProduit->result() as $articles) { ?>


                            
                            <li><a class="articleOption" articleId="<?=$articles->ID ?>" id="<?=$articles->CODEBAR ?>" quantRest="<?=$articles->QUANTITE_RESTANTE ?>"  unit="<?=$articles->POIDS ?>" price="<?=$articles->PRIX_DE_VENTE ?>"><?php echo $articles->DESIGN; ?></a>



                            </li>
                        <?php }
                        ?>
                      </ul>
                </div>
            </div>
          </div>
      
      <div><input type="hidden" name="store" value="<?=$store?>"></div> 
      <div><input type="hidden" name="storeuri" value="<?=$storeuri?>"></div> 

            <caption><span id="error"></span></caption>
            <div class="box">
                <div class="box-header" style="text-align: center"><?php echo __( 'Liste des articles', 'stock-manager' );?></div>
                <div class="box-body no-padding">
                    <table class="table table-bordered table-striped" id="tableId">
                      
                        <thead>
                            <tr>
                                <td width="400"><?php echo __( 'Article', 'stock-manager' );?></td>
                                <td width="150"><?php echo __( 'Prix', 'stock-manager' );?></td>
                                <td width="150"><?php echo __( 'Quantité', 'stock-manager' );?></td>
                                <td width="100"><?php echo __( 'Unité', 'stock-manager' );?></td>
                                <td width="150"><?php echo __( 'Total', 'stock-manager' );?></td>
                                <td width="50"></td>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                      <!-- <div>Total price: $<span class="total-cart"></span></div> -->
                    </div>
                  <div class="box-footer">
                    <button type="submit"  class="btn btn-primary"><?php echo __( 'Enregistrer et retourner à la liste','ibi');?></button>
                  </div>
            </div>
          </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="commandeclient" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                          <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group">
                                         <span class="input-group-addon"><?php echo __( 'Délai', 'ibi' );?>
                                           <select type="text" name="temps" id="temps">
                                             <option value="">--choisir--</option>
                                             <option value="1">jour</option>
                                             <option value="2">semaine</option>
                                           </select>
                                         </span>
                                                <select type="text" name="delai" class="form-control delai" id="delai">
                                                  <option value="">Stock en vente</option>
                                                </select>
                                                <input type="number" name="delai" class="form-control delai" id="delai1" style="display: none;">
                                          </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <div class="input-group">
                                           <span class="input-group-addon"><?php echo __( 'Condition de paiement', 'ibi' );?>
                                           </span>
                                          <select type="text" name="condPayer" id="condPayer" class="selectpicker form-control condPayer" data-show-subtext="true" data-live-search="true">
                                                    <option value="1" selected>Commande</option>
                                                    <option value="2">Customiser</option>
                                                  </select>
                                     </div>
                                  </div>
                              </div>
                            </div>
                            <div class="row">
            <?php $auth=$this->db->query('SELECT AUG.group_id,AG.name FROM pos5_aauth_user_to_group AUG,pos5_aauth_groups AG WHERE AUG.group_id=AG.id AND  AUG.user_id='.$userId.'');
            foreach ($auth->result() as $kvalue) {
            $in_group=$kvalue->name;
            }
            if($in_group=='master' OR $in_group=='administrator'){
            ?>
                              <div class="col-md-6">
                                <div class="form-group">
                                          <div class="input-group">
                                             <span class="input-group-addon"><?php echo __( 'validite offre', 'ibi' );?>
                                               <select type="text" name="tempsvalid" id="tempsvalid">
                                                 <option value="1" selected>jour</option>
                                                 <option value="2">semaine</option>
                                               </select>
                                             </span>
                                                    <input type="number" name="validOff" class="form-control delai" id="validOff" value="3">
                                              </div>
                                    </div>
                                </div>
                                <?php }else{?>
                                  <div class="col-md-4" hidden>
                                    <div class="form-group">
                                          <div class="input-group">
                                             <span class="input-group-addon"><?php echo __( 'validite offre', 'ibi' );?>
                                               <select type="text" name="tempsvalid" id="tempsvalid">
                                                 <option value="1" selected>jour</option>
                                                 <option value="2">semaine</option>
                                               </select>
                                             </span>
                                                    <input type="number" name="validOff" class="form-control delai" id="validOff" value="3">
                                              </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="col-md-6" id="customer" style="display: none;">
                                  <div class="form-group">
                                            <div class="input-group"><span class="input-group-addon">a la commande</span><input type="number" id="typeCond" name="typeCond1" class="form-control"></div><div class="input-group"><span class="input-group-addon">a la livraison</span><input type="number" id="typeCond" name="typeCond2" class="form-control"></div>
                                  </div>
                                </div>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                        </div>
                      </div>
                    </div>
                  </div>
   </form>
<!-- content -->
 </div>
<!-- content -->


 <!-- GAMME -->
<div id="nu-gammes" hidden>
  <form method="post" id="insert_form2">
            <input type="hidden" name="store" id="store" value="<?=$store?>">
            <input type="hidden" name="storeuri" value="<?=$storeuri?>">
            <input type="hidden" name="userId" value="<?=$userId?>"> 
    <div class="row">
      <caption><span id="error"></span></caption>
      <div class="col-md-8">
          <div class="form-group">
            <div class="input-group">
                       <span class="input-group-addon"><?php echo __( 'Description de l\'article', 'ibi' );?></span>
                              <select id="code_gamme" name="code_gamme" class="selectpicker form-control client" data-show-subtext="true" data-live-search="true">
                                    <option value="">--Selectionner la gamme--</option>
                                    <?php 
                                         $queryBDA = $this->db->query("SELECT TITRE,CODE,ID FROM pos5_".store_prefix()."ibi_devis_gammes");
                                        foreach ($queryBDA->result() as $key) {
                                        ?>
                                  <option value="<?=$key->CODE?>"><?=$key->TITRE?></option>
                                    <?php  
                                       } ?> 
                              </select>
                        </div>
                 </div>
          </div>
        <div class="col-md-4">
            <div class="form-group">
            <div class="input-group">
                       <span class="input-group-addon"><?php echo __( 'Client', 'ibi' );?></span>
                                      <select type="text" name="client" id="client12" class="selectpicker form-control" data-show-subtext="true" data-live-search="true">
                                  <option value="">--- choisir un client---</option>
                                <?php
                                  $getClient=$this->db->query("SELECT ID,NOM,PRENOM FROM pos5_".store_prefix().'ibi_clients');
                                  foreach ( $getClient->result() as $clients) { ?>
                                ?>
                                <option value="<?=$clients->ID?>"><?php echo $clients->NOM.' '.$clients->PRENOM;?></option> 
                              <?php } ?>
                              </select>

                        </div>
              </div>
          </div>
     </div>
<div class="row">
    <div class="col-md-12">
      <caption><span id="error"></span></caption>
            <div class="box">
                <div class="box-header" style="text-align: center"><?php echo __( 'Liste des articles', 'stock-manager' );?></div>
                <div class="box-body no-padding">
                    <table class="table table-bordered table-striped" id="tableId">
                      
                        <thead>
                            <tr>
                                <td width="400"><?php echo __( 'Article', 'stock-manager' );?></td>
                                <td width="150"><?php echo __( 'Prix', 'stock-manager' );?></td>
                                <td width="150"><?php echo __( 'Quantité', 'stock-manager' );?></td>
                                <td width="100"><?php echo __( 'Unité', 'stock-manager' );?></td>
                                <td width="150"><?php echo __( 'Total', 'stock-manager' );?></td>
                                <td width="50"></td>
                            </tr>
                        </thead>
                        <tbody id='test'>
                        </tbody>
                      </table>
                    </div>
                  <div class="box-footer">
                    <button type="submit"  class="btn btn-primary"><?php echo __( 'Enregistrer et retourner à la liste','ibi');?></button>
                  </div>
            </div>
        </div>
    </div>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function(){
       $('#commandes').on('click',function(){
            $('#nu-commandes').show();
            $('#nu-gammes').hide();
       });
       $('#gammes').on('click',function(){
            $('#nu-commandes').hide();
            $('#nu-gammes').show();
       });
    });
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

  function toDelete(data){
    $(data).closest('tr').remove();
    const idex = articleTable.indexOf($(data).closest('tr').attr("id"));
    articleTable.splice(idex, 1);
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
    const quantRest = $(data).closest('tr').find("td.quantRest").text();
    const initial = stringToNumber($(data).closest('tr').find('td div input').val());
    const price = stringToNumber($(data).closest('tr').find('td.price').text());
    const qty = initial + 1;
    // alert "$quantRest";
    if(qty>quantRest){
      alert("La quantité restante du produit n'est pas suffisante.");
    }else{
      $(data).closest('tr').find('td div input').val(qty);
      $(data).closest('tr').find('td.total').text(price * qty);
    }
  }
  function search(data){
    const quantRest = $(data).closest('tr').find("td.quantRest").text();
    const initial = stringToNumber($(data).closest('tr').find('td div input').val());
    const price = stringToNumber($(data).closest('tr').find('td.price').text());
 
    if(quantRest<initial){
      alert("La quantité restante du produit n'est pas suffisante.");
      $(data).closest('tr').find('td div input').val(quantRest);
      $(data).closest('tr').find('td.total').text(price * quantRest);
    }else{
      $(data).closest('tr').find('td div input').val(initial);
      $(data).closest('tr').find('td.total').text(price * initial);
    }
    }
    function commandeclient(){
      $("#commandeclient").modal();
    }
 

    $(document).ready(function(){
     
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
      const articleId = $(this).attr("articleId");
      const price = $(this).attr("price");
       const unit = $(this).attr("unit");
       const codebar = $(this).attr("id");
      const name = $(this).text();
      if(articleTable.indexOf(name) > -1){
        alert("Cet produit existe deja dans le tableau");
      }else {
        const quantRest = $(this).attr("quantRest");

      if(quantRest<1){
        swal('Attention!','Impossible d\'ajouter ce produit, car son stock est épuisé.')
      }else{
      $("#list").attr("hidden", 'true');
        let row = "<tr id="+articleId+">";
        row += '<td style="line-height: 35px;" class="article"><input type="hidden" name="article[]" value="'+codebar+'"/><input type="hidden" name="name[]" value="'+name+'"/>'+name+'</td>';
        row += '<td style="line-height: 35px;" class="quantRest" hidden><input type="hidden" name="quantRest[]" value="'+quantRest+'"/>'+quantRest+'</td>';
        row += '<td style="line-height: 35px;" class="price"><input type="hidden" name="price[]" value="'+price+'"/>'+price+'</td>'
        row += '<td><div class="input-group inpuut-group-sm">';
        row += '<span class="input-group-btn">';
        row += '<button type="button" class="btn btn-default moins" onclick="moins(this)"><i class="fa fa-minus"></i></button>';
        row += '</span>';
        row += '<input type="text" name="search[]" class="form-control search" onkeyup="search(this)" value="1"/>';
        row += '<span class="input-group-btn">';
        row += '<button  type="button" class="btn btn-default plus" onclick="plus(this)">';
        row += '<i class="fa fa-plus"></i>';
        row += '</button>';
        row += '</span>';
         row += '<td style="line-height: 25px;"><input type="hidden" class="unit" name="unit[]" value="'+unit+'" size="8" required>'+unit+'</td>'
        row += '</div>';
        row += '</td>';
        row += '<td style="line-height: 35px;" class="total">'+price+'</td>';
        row += '<td width="50">';
        row += '<a class="btn btn-sm btn-danger" onclick="toDelete(this)">';
        row += '<i class="fa fa-remove"></i>';
        row += '</a>';
        row += '</td>';
        row += "</tr>";
        //rows +="<tr><td colspan='3' class='sumTotal'>Total</td><td>"+price+"</td></tr>";
        
        // if($("#tableId").append('')){
          $("#tableId").append(row);
          $("#myInput").val("");
          articleTable.push(name);
          
        // }else{
        //   $("#tableId").text("No item has been added");
        // }
        
      }
        
      }
  

    });


        $('#insert_form1').on('submit', function (event) {
             event.preventDefault();
             
            var error = '';
            $('.titre').each(function () {
                // var titre = $('#titre');
                if ($(this).val() == '') {
                    error += "<p>Entrer la description du devis...</p>";
                    return false;
                }
            });
            $('#categorie').each(function () {
                // var titre = $('#titre');
                if ($(this).val() == '') {
                    error += "<p>Entrer sa categorie...</p>";
                    return false;
                }
            });
            $('#client').each(function () {
                // var titre = $('#titre');
                if ($(this).val() == '') {
                    error += "<p>Entrer le client...</p>";
                    return false;
                }
            });

             var form_data = $(this).serialize();
              
             if (error == '') {  
                
                $.ajax({ 
                    url: "http://gts.ibi-africa.com/ibi2/test/devis40.php",
                    method: "POST",
                    data: form_data,
                    dataType: 'json',
                    success: function (data) {
                      if (data.message === "success") {
                        $('#error').html('<div class="alert alert-success">Enregistrement du devis fait avec success</div>');
                         window.location.href = data.redirect;
                        } else {
                          alert(data.message);
                        }
                    }
                });
            }
            else {
                $('#error').html('<div class="alert alert-danger">' + error + '</div>');
            }
        /*insert form submit*/
        });
      /*is gamme*/
        $('#code_gamme').on('change',function(){
            var code_gamme=$('#code_gamme').val();
            var qte=1;
            var store=$('#store').val();
            //const quantRest = $(this).attr("quantRest");
            $.ajax({
                url: 'http://gts.ibi-africa.com/ibi2/test/devisgamme.php',
                method:'POST',
                data:{code_gamme:code_gamme,qte:qte,store:store},
                dataType:'json',

                success:function(data){ 
                        $('#test').html(data.tableau);
                }
            });
        });
        $('#insert_form2').on('submit',function(event){
                  var code_gamme=$('#code_gamme').val();
                  var client=$('#client12').val();
                  if(code_gamme==''){
                      swal("Attention!", "Selectionner la description de l'article")
                   }else if(client==''){
                      swal("Attention!", "Selectionner le client")
                   }else{
                    event.preventDefault();
                    var errors = '';

                    var form_data = $(this).serialize(); 
                  if (errors == '') {  
                    
                    $.ajax({
                    url: "http://gts.ibi-africa.com/ibi2/test/devisgamme.php",
                    method: "POST",
                    data: form_data,
                    dataType: 'json',
                    success: function (data) {
                      if (data.message === "success") {
                        $('#error').html('<div class="alert alert-success">La gamme effectuer avec success</div>');
                         window.location.href = data.redirect;
                        } else {
                          alert(data.message);
                        }
                    }
                });
                
                  }
                  else {
                      $('#error').html('<div class="alert alert-danger">' + errors + '</div>');
                    }
                  }
                });


      /*document ready*/
    });
</script>