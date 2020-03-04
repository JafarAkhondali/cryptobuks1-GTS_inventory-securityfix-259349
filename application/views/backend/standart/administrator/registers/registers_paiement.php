<div class="modal-dialog" style="width: 98%;">
	<div class="modal-content">
		<div class="modal-body" style="padding-bottom: 0px;">
			<div class="bootbox-body">
				<h4 class="text-center">Options de la commande : <?=$commande['CODE_COMMAND']?></h4>
				<div class="row" style="border-top:solid 1px #EEE;">
					<div class="col-lg-2 col-md-2 col-sm-2" style="padding:0px;margin:0px;"><div class="list-group">
						<a style="border-radius:0;border-left:0px; border-right:0px;" id="detail" href="#" class="list-group-item active"><i class="fa fa-eye"></i> Détails</a>
						<a style="border-radius:0;border-left:0px; border-right:0px;" id="payment" href="#" class="list-group-item default"><i class="fa fa-money"></i> Paiment</a>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10 details-wrapper" style="border-left:solid 1px #EEE;">
					<div id="details">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-xs-12" style="height:445px;overflow-y: scroll;"><h5>Liste des produits</h5>
								<table class="table table-bordered table-striped">
									<thead>
									<tr><td>Nom de l'article</td>
										<td>UGS</td>
										<td>Prix Unitaire</td>
										<td>Quantité</td>
										<td>Sous-Total</td>
									</tr>
								</thead>
								<tbody>
									<?php 
									$sous_total=0;
									$remise=0;
									foreach ($getCommandes as $getCommande) {
										if($getCommande['DISCOUNT_TYPE_COMMAND_PROD'] == 'percentage'){
                                              
                                                    $remplremises = ($getCommande['DISCOUNT_PERCENT_COMMAND_PROD']);

                                                }else{
                                                    $remplremises = ($getCommande['DISCOUNT_AMOUNT_COMMAND_PROD']);
                                                }
                                                $remplremise = strrev(wordwrap(strrev($remplremises), 3, ' ', true));
                                       
										$sous_total += ($getCommande['PRIX_TOTAL_COMMAND_PROD']);
										$remise+=$remplremises;
										?>
									<tr>
										<td><?=$getCommande['NAME_COMMAND_PROD'];?></td>
										<td>NA</td>
										<td> <?=$getCommande['PRIX_COMMAND_PROD'];?> </td>
										<td><?=$getCommande['QUANTITE_COMMAND_PROD'];?></td>
										<td> <?=$getCommande['PRIX_TOTAL_COMMAND_PROD'];?> </td>
									</tr>
								<?php }

								$tva = strrev(wordwrap(strrev($commande['TVA_COMMAND']), 3, ' ', true));
								$pvtvac = $commande['TOTAL_COMMAND']+$commande['TVA_COMMAND'];
								$pvtvac = strrev(wordwrap(strrev($pvtvac), 3, ' ', true));

								?>
							        <tr><td colspan="4"><strong>Sous Total</strong> </td><td> 
							        <?=$sous_total;?> </td></tr><tr><td colspan="4"><strong>Remise (-)</strong></td><td> <?=$remise;?> </td></tr><tr><td colspan="4"><strong>TVA (+)</strong> </td><td> <?=$tva;?> </td></tr><tr><td colspan="4"><strong>Livraison</strong></td><td> 0.00 </td></tr><tr><td colspan="4"><strong>Total</strong></td><td> <?=$pvtvac;?> </td></tr><tr><td colspan="4"><strong>Payé</strong></td><td> 0.00 </td></tr><tr><td colspan="4"><strong>Reste</strong></td><td> 19,959,700.00 </td></tr></tbody>
								</table>
							</div>
							<div class="col-lg-4 col-md-4 col-xs-12"><h5>Détails sur la commande</h5><ul class="list-group"><li class="list-group-item"><strong>Auteur :</strong> francine</li><li class="list-group-item"><strong>Effectué le :</strong> 2020-03-03 12:44:59</li><li class="list-group-item"><strong>Client :</strong> ICAP</li><li class="list-group-item"><strong>Statut :</strong> Devis</li></ul>
							</div>
						</div>
					</div>
					<div id="payments" style="display: none;">
							<div class="col-lg-6">
								<h4 class="text-center">Effectuer un paiement</h4>
								<div class="input-group payment-selection">
									<span class="input-group-addon">Choisir un moyen de paiement</span>
									<select class="form-control">
										<option label="Paiement en espèces" value="string:cash">Paiement en espèces</option>
										<option label="Carte de crédit" value="string:creditcard">Carte de crédit</option>
										<option label="Chèque" value="string:cheque">Chèque</option>
										<option label="Transfert Bancaire" value="string:bank">Transfert Bancaire</option>
										<option label="Coupon" value="string:coupon">Coupon</option>
									</select>
								</div>
								<h4>
									<strong class="text-center">Reste à payer<span class="amount-to-pay"> :   500,000.00 </span>
									</strong>
								</h4>
								<div class="payment-option-box"><form><div class="input-group pay-wrapper"><span class="input-group-addon">Valeur du paiement</span><input class="form-control pay-field ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="cashPaymentAmount" ng-change="controlCashAmount()"></div>
								</form><br><input class="btn btn-primary" type="button" value="Payer" ng-disabled="paymentDisabled" ng-click="proceedPayment( &quot;cash&quot; )" disabled="disabled"><br><br></div>
								<!-- <div class="notice-wrapper alert alert-info ng-binding" ng-show="showNotice">Cette commande peut recevoir un paiement. Veuillez choisir le moyen de paiement que vous souhaitez appliquer à cette commande</div> -->
							</div>
							<div class="col-lg-6 payment-history-col" style="height:445px;overflow-y: scroll;"><h4 class="text-center">Historique des paiements</h4>
								<table class="table table-bordered">
									<thead><tr class="payment-history-thead"><td>Montant</td><td>Caissier</td><td>Mode de Paiement</td><td>Date</td></tr></thead>
								<tbody class="payment-history"></tbody></table>
							</div>
						    <!-- <my-spinner namespace="spinner"><div class="ibi-overlay" style="width: 100%; height: 100%; background: rgba(255, 255, 255, 0.9); z-index: 5000; position: absolute; top: 0px; left: 0px;"><i class="fa fa-refresh fa-spin ibi-refresh-icon" style="color: rgb(0, 0, 0); font-size: 50px; position: absolute; top: 50%; left: 50%; margin-top: -25px; margin-left: -25px; width: 44px; height: 50px;"></i></div>
						    </my-spinner> -->
									
					</div>
				</div>
			</div>
		</div>
	</div>
        <div class="modal-footer">
		    <button data-bb-handler="ok" type="button" class="btn btn-primary">OK</button>
		</div>
								<div class="grandSpinnerWrapper">
									<!-- <grand-spinner><div ng-show="showGrandSpinner" class="ibi-overlay ng-hide" style="width: 100%; height: 100%; background: rgba(255, 255, 255, 0.9); z-index: 5000; position: absolute; top: 0px; left: 0px;"><i class="fa fa-refresh fa-spin ibi-refresh-icon" style="color: rgb(0, 0, 0); font-size: 50px; position: absolute; top: 50%; left: 50%; margin-top: -25px; margin-left: -25px; width: 44px; height: 50px;"></i></div>
									</grand-spinner> -->
								</div>
   </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#detail').on('click',function(){
        $('#details').show();
        $('#payments').hide();
      });
      $('#payment').on('click',function(){
        $('#details').hide();
        $('#payments').show();
      });
	});
</script>