
        <!DOCTYPE html>
        <html>

        <head>
            <title>Order ID &mdash; Ibi Shop Receipt <?=$CODE_COMMAND_FACTURE;?></title>
            <link rel="stylesheet" href="style.css" />
        </head>
        <style>
        .page-header, .page-header-space {
            height: 253px;
        }
        .page-footer, .page-footer-space {
            height: 170px;
        }
        .page-footer_old {
            
            /*background: white;*/
        }
        .page-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
        }
        .page-header {
            position: fixed;
            top: 0mm;
            width: 100%;
            /*border-bottom: 4px solid black;*/
            background: white;
        }

        .page {
            page-break-after: always;
        }

        /*! Invoice Templates @author: Invoicebus @email: info@invoicebus.com @web: https://invoicebus.com @version: 1.0.0 @updated: 2015-02-27 16:02:34 @license: Invoicebus */
/* Reset styles */
/*@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=cyrillic,cyrillic-ext,latin,greek-ext,greek,latin-ext,vietnamese");*/
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}
html {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

/*table {
  border-collapse: collapse;
  border-spacing: 0;
}*/

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q, blockquote {
  quotes: none;
}
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

/* Invoice styles */
/**
 * DON'T override any styles for the <html> and <body> tags, as this may break the layout.
 * Instead wrap everything in one main <div id="container"> element where you may change
 * something like the font or the background of the invoice
 */
html, body {
  /* MOVE ALONG, NOTHING TO CHANGE HERE! */
}

/** 
 * IMPORTANT NOTICE: DON'T USE '!important' otherwise this may lead to broken print layout.
 * Some browsers may require '!important' in oder to work properly but be careful with it.
 */
 .clearfix {
  display: block;
  clear: both;
}

.hidden {
  display: none;
}

b, strong, .bold {
  font-weight: bold;
}
#container {
    font: normal 12px/1.3em 'Open Sans', Sans-serif;
    /*margin: 0 auto;*/
    /*min-height: 870px;*/
    /*background: white url("http://production.ibi-africa.com/quotation/bg.png") 0 0 no-repeat;*/
    background-size: 100% auto;
    /*color: #5B6165;*/
    /*position: relative;*/
    font-family: calibri;
}
table {
    table-layout: fixed;
}
#memo {
    /*padding-top: 20px;*/
    margin: 0 30px 0 30px;
    /*height: 105px;*/
    /* background: yellow; */
}
#lemo .logo {
    width: 220px;
    height: 100px;
    opacity: 1;
    /*margin: 40px 2px 0px 30px;*/
    margin: 0px 0px 0px 32px;

}
#memo .company-info {
    margin-right: 6px;
    float: right;
    text-align: right;
}
#memo .company-info>div:first-child {
    margin-top: 10px;
    line-height: 1px;
    font-weight: bold;
    font-size: 25px;
    color: rgba(145, 145, 145);
}
#memo .company-info .clientDiv {
    margin-top: 5px;
    margin-bottom: -15px;
    font-weight: bold;
    font-size: 15px;
    color: #B32C39;
}
#memo .company-info span {
    font-size: 13px;
    display: inline-block;
    min-width: 20px;
}
#memo:after {
    content: ;
    display: block;
    clear: both;
}
#invoice-title-number {
    font-weight: bold;
    margin: 10px 0;
}
#invoice-title-number span {
    line-height: 0.88em;
    display: inline-block;
    min-width: 20px;
}
#invoice-title-number #title {
    text-transform: uppercase;
    padding: 0px 2px 0px 80px;
    font-size: 55px;
    background: rgba(145, 145, 145);
    color: white;
}
#invoice-number-date #number {
    margin-right: auto;
    font-size: 15px;
    padding: 0px 2px 0px 30px;
    /* margin-bottom: 10px; */
}
#client-info {
    float: left;
    margin: 60px 2px 0px 30px;
    min-width: 220px;
}
#client-info>div {
    margin-bottom: 0px;
    min-width: 20px;
}
#client-info span {
    padding: 0 0 0 0;
    display: inline-block;
    font-size: 12px;
    /* display: block; */
    min-width: 20px;
}
#client-info>span {
    /* text-transform: uppercase; */
}
#items {
    margin: 0px 32px 10px 30px;
    position: static;
    max-height: 100%;
    /*overflow: auto;*/
    /*page-break-after: always;*/
}
#items table {
    border-collapse: separate;
    width: 100%;
}
#items .first-cell,
#items table th:first-child,
#items table td:first-child {
    width: 30px !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
    text-align: right;
}
#items table th {
    font-weight: bold;
    padding: 5px 5px;
    text-align: right;
    background: rgba(145, 145, 145);
    color: white;
    text-transform: uppercase;
}
#items table th:nth-child(2) {
    width: 50%;
    text-align: left;
}
#items table th:last-child {
    text-align: right;
}
#items table td {
    padding: 5px 8px;
    text-align: right;
    border-bottom: 1px solid #ddd;
}
#items table td:nth-child(2) {
    text-align: left;
}
.sums {
    margin: 0px 30px 0 0;
    background: url("../img/total-stripe-firebrick.png") right bottom no-repeat;
}
.sums table {
    float: right;
}
.sums table tr {
    margin: 10px 0 10px 0;
}
.sums table tr th,
.sums table tr td {
    min-width: 100px;
    padding: 9px 8px;
    text-align: right;
}
.sums table tr th {
    font-weight: bold;
    text-align: left;
    padding-right: 35px;
}
/* #invoice-info {
    float: left;
    margin: 100px 40px 0 32px;
}
#invoice-info>div>span {
    display: inline-block;
    min-width: 20px;
    min-height: 18px;
    margin-bottom: 3px;
}
#invoice-info>div>span:first-child {
    color: black;
    font-weight: bold;
}
#invoice-info>div>span:last-child {
    color: rgba(53, 53, 53);
}

#invoice-info:after {
    content: '';
    display: block;
    clear: both;
} */
@page {
    margin: 20mm
}
@media print {
    thead {display: table-header-group;} 
    tfoot {display: table-footer-group;}
            
    button {display: none;}
            
    body {margin: 1;}
}

</style>

    <body>
<div id="container">
<div class="page-header">
                <section id="memo">
                    <div class="company-info">
                        <section id="invoice-title-number">
                          <span id="title">FACTURE</span>
                        </section>
                <section id="invoice-number-date">
                    <span id="number">N° : <?=$NUMBER_FACTURE?> <?php $origDate = $DATE_CREATION_FACTURE; $newDate = date("d/m/Y", strtotime($origDate));
                      ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $newDate; ?></span>
                <?php 
                $this->db->select('NAME_STORE');
                    $this->db->from('pos_ibi_stores');
                    $this->db->where('ID_STORE', $STORE_BY_FACTURE);
                    $query = $this->db->get();
                    if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {
                            $store_name=$row->NAME_STORE;
                        }
                    }
                            ?>
                    <br /><span style="margin: 0px 0px 0px 0px;">Provenant de : <b><?=$store_name?></b></span>
                </section>
    
                        <span>Info@gts-burundi.com, www.gts-burundi.com</span><br />
                        <span>Centre fiscal : DGC ; Forme juridique : SA</span><br />
                        <span>Secteur d'activites : COMMERCIAL</span><br />
                        <span>NIF : 4000003261 ; RC : 34324</span><br />
                        <span>Tél : 22244746 / 22244747</span><br />
                        <span>Bujumbura - Burundi, </span><br />
                        <span>NTAHANGWA Q Industriel,</span><br />
                        <span>Avenue de l'OUA N° 15, B.P. 2283</span><br />


                        <span>Assujeti a la TVA : OUI<input type="checkbox" name="oui" checked disabled/>&nbsp; NON<input type="checkbox" name="non"  disabled /></span>
                        <br />

                    </div>

                </section>
                <section id="lemo">
                <div class="logo"><img style="" src=""></div>
                    <section id="client-info">
                    <?php
                    $this->db->select('*');
                    $this->db->from('pos_ibi_clients');
                    $this->db->where('ID_CLIENT', $REF_CLIENT);
                    $query = $this->db->get();
                    if ($query->num_rows() > 0) {
                        foreach ($query->result() as $row) {

                            $client = $row->NOM_CLIENT;
                            $address = $row->ADRESSE_CLIENT;
                            $email = $row->EMAIL_CLIENT;
                            $telephone = $row->TEL_CLIENT;
                            $nif = $row->STATE_CLIENT;
                        }
                    }
                            ?>
                            <span class="bold"><?= $client ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />
                            <span>NIF : <?= $nif ?></span><br />
                            <span>Resident a : <?= $address ?></span><br />
                            <span>Telephone : <?= $telephone ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
                            <span>e-mail : <?= $email ?></span><br />
                            <span>Assujeti a la TVA : OUI<input type="checkbox" name="oui" checked />&nbsp; NON<input type="checkbox" name="non" /></span></section>
                </section>
                <div class="clearfix"></div>
                <button type="button" onClick="window.print()" style="background: pink">
                    IMPRIMER !
                </button>
            </div>
    <div class="page-footer">
         <section id="invoice-info" style="margin: 0px 32px 0 32px; bottom: 0;">
                                    <div>
                                        <?php $typepaim = $PAYMENT_TYPE_COMMAND; 
                                        $input="";
                                        $input1='';
                                        if($typepaim == 'ibi_order_comptant'){
                                            $pos5paiements=$this->db->query('SELECT PAYMENT_TYPE_PAIEMENT FROM pos_store_2_ibi_commandes_paiements WHERE REF_COMMAND_CODE_PAIEMENT="'.$CODE_COMMAND_FACTURE.'"')->result_array();
                                            
                                            if($pos5paiements[0]['PAYMENT_TYPE_PAIEMENT'] == 'cash'){
                                                $typepaiement='Cash';
                                            }elseif($pos5paiements[0]['PAYMENT_TYPE_PAIEMENT'] == 'cheque'){
                                                $typepaiement='Chèque';
                                                $input='<span>N° du document : </span> <span><input type="text"></span>';
                                                
                                            }else{
                                                $typepaiement='Aucun type de paiement';
                                            }
                                            
                                        }elseif($typepaim == 'ibi_order_devis'){
                                            $typepaiement='Bon de Commande';
                                            $input='<span>N° du document : </span> <span><input style="border: none; padding: 2px; width: calc(20% - 10px); border-bottom: 1px dotted black;" type="text"></span>';

                                            $input1='<span><b> A verser sur le compte N° <input type="text" style="border: none; padding: 2px; width: calc(15% - 10px); box-sizing: border-box; border-bottom: 1px dotted black;"> ouvert à <input type="text" style="border: none; padding: 2px; width: calc(10% - 10px); box-sizing: border-box; border-bottom: 1px dotted black;"> au nom de GTS s.a ou par chèque au nom de GTS s.a. </b></span>';
                                        }else{
                                            $typepaiement='Aucun type de paiement';
                                        }
                                        ?>
                                        <span>Paiement : </span> <span><?=$typepaiement?> </span><?php echo $input?>
                                    </div>
                                    <div style="text-align: center; margin: 5px 0px 5px 0px;">
                                        <?php echo $input1?>
                                    </div>
                                    <div><span>Agent commercial :</span>
                                                  <?php $this->db->select('*');
                                        $this->db->from('aauth_users');
                                        $this->db->where('id',$AUTHOR_FACTURE);
                                        $query = $this->db->get();
                                        if ($query->num_rows() > 0)  //Ensure that there is at least one result 
                                        {
                                           foreach ($query->result() as $row)  //Iterate through results
                                           {

                                              echo $row->username;
                                             
                                           }
                                        }
                                        ?> 
                    
                                    </div>
                                </section>
                                <section style="margin-left:30px;">
                                    <div id="footer">
                                        <span style="font-size: 8px;"><p>En accusant réception de la facture, vous acceptez ipso facto les conditions suivantes: <br /></p>
                                            <p style="margin-bottom: -1em; word-spacing: -1px;">1. Toute facture non payée à l'échéance portera sans sommation ni mise en demeure un intérêt de 20% et sera augmentée d'une indemnité de de 15% du montant dû pour les frais de contentieux.</p>
                                            <p style="margin-bottom: -1em; word-spacing: -1px;">2. Les marchandises, même expédiées franco, voyagent aux risques et périls du destinataire. Pour être valable, toute réclamation doit se faire, par écrit, endéans les 24 heures après la livraison.</p>
                                            <p style="margin-bottom: -1em; word-spacing: -1px;">3. En cas de contestation, le tribunal de commerce de Bujumbura est seul compétent.</p>
                                            <p style="word-spacing: -1px;">4. Les marchandises vendues restent la propriété de GTS jusqu'au règlement intégrale du montant de la facture. <br /></p>
                                        </span>
                                    </div>
                                </section>
        <table style="margin:auto; width: 90%; border:0px solid;">
          <tr>
            <td><img src="" style="width: 100%; margin-left:-50px;"></td>
            <!-- <td><img src="http://production.ibi-africa.com/quotation/public/img/pictograms in line BLACK&WHITE.jpg" style="width: 60px;"></td>
            <td><img src="http://production.ibi-africa.com/quotation/public/img/motors B&W.jpg" style="width: 60px;"></td>
            <td><img src="http://production.ibi-africa.com/quotation/public/img/power B&W.jpg" style="width: 60px;"></td>
            <td><img src="http://production.ibi-africa.com/quotation/public/img/fire&securiry B&W.jpg" style="width: 60px;"></td>
            <td><img src="http://production.ibi-africa.com/quotation/public/img/cool B&W.jpg" style="width: 60px;"></td> -->
          </tr>
        </table>
      </div> 
            <table>
                <thead>
                    <tr>
                        <td>
                        <div class="page-header-space"></div>
                        </td>
                    </tr>
                </thead>

               <tbody>
                    <tr>
                        <td>
                            <div class="page">
                                <section id="items">
                                    <table cellpadding="0" cellspacing="0" style="max-height: 500px;">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nature de l'article ou service</th>
                                                <th>Quantité</th>
                                                <th>PU</th>
                                                <th>PV-HTVA</th>
                                            </tr>
                                        </thead>
                                        <tbody style="border-bottom: 5px blue;">
                                            <?php
                                            $total_global    =    0;
                                            $total_unitaire    =    0;
                                            $total_quantite    =    0;
                                            $total_discount     =   0;
                                            $i = 0;

                                            $remise=0;

                                            foreach ($commande_produits as $_produit) {
                                                $i++;
                                                // $total_global        +=    __floatval($_produit[ 'PRIX_TOTAL' ]);
                                                $total_unitaire         +=    ($_produit['PRIX_COMMAND_PROD']);
                                                $total_quantite         +=    ($_produit['QUANTITE_COMMAND_PROD']);
                                                $total_global           += ($_produit['PRIX_COMMAND_PROD']);
                                                ?>
                                                <?php
                                                $n = str_replace(',', '', $_produit['PRIX_COMMAND_PROD']);
                                                $rempl = strrev(wordwrap(strrev($n), 3, ' ', true));
                                                $nn = str_replace(',', '', number_format($_produit['PRIX_TOTAL_COMMAND_PROD']));
                                                $rempltotal = strrev(wordwrap(strrev($nn), 3, ' ', true));
                                                if($_produit['DISCOUNT_TYPE_COMMAND_PROD'] == 'percentage'){
                                                    $remplremises = ($_produit['PRIX_COMMAND_PROD']*$_produit['DISCOUNT_PERCENT_COMMAND_PROD'])/100;

                                                }else{
                                                    $remplremises = ($_produit['DISCOUNT_AMOUNT_COMMAND_PROD']);
                                                }
                                                $remplremise = strrev(wordwrap(strrev(str_replace(',', '', number_format($remplremises))), 3, ' ', true));
                                                    $pvhtva = str_replace(',', '', number_format($_produit['PRIX_TOTAL_COMMAND_PROD']-$remplremises));
                                                    $remplpvhtva = strrev(wordwrap(strrev($pvhtva), 3, ' ', true));
                                                    $tva = str_replace(',', '', number_format(($_produit['PRIX_TOTAL_COMMAND_PROD']-$remplremises)*0.18));
                                                    $rempltva = strrev(wordwrap(strrev($tva), 3, ' ', true));
                                                    $pvtvac = strrev(wordwrap(strrev($pvhtva+$tva), 3, ' ', true));
                                                ?>
                                                <tr data-iterate="item">
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $_produit['NAME_COMMAND_PROD']; ?></td>
                                                    <td><?php echo $_produit['QUANTITE_COMMAND_PROD']; ?></td>
                                                    <td><?php echo $rempl; ?></td>
                                                    <td><?php echo $rempltotal; ?></td>
                                                </tr>
                                            <?php

                                        $remise+=$remplremises;
                                        }
                                        if($i<=12){
                                            for ($a=0; $a < 12-$i ; $a++) {
                                         ?>
                                            <tr data-iterate="item" style="height: 25px;">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        <?php } }else{ 
                                            for ($a=0; $a < 24-$i ; $a++) {?>
                                                <tr data-iterate="item" style="height: 25px;">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        <?php } } ?>
                                          
                                               
                                            
                                        <!-- </tbody> -->
                                        <!-- <tfoot style="font: normal 12px/1.3em 'Open Sans', Sans-serif"> -->
                            <tr>
                                <td colspan=3 class="" style="text-align: left;">
                                    PV-HTVA
                                </td>
                               <td class="" style="text-align: right"></td>
                                <td class="text-right">
                                    <?php $pvhtva = ($total_global);
                                  
                           
                            $remplpvhtva = str_replace(',', '', $pvhtva);
                            echo strrev(wordwrap(strrev($remplpvhtva), 3, ' ', true));
                                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=2 class="" style="text-align: left;">
                                    Remise
                                </td>
                               <td class="" style="text-align: right">(-)</td>
                                <td class="text-right"></td>
                                <td class="text-right">
                                    <?php 

                                    echo strrev(wordwrap(strrev($remise), 3, ' ', true));
                                                ?>
                                </td>
                            </tr>

                            <tr>
                                <td colspan=2 class="" style="text-align: left;">
                                    Net Hors Taxe
                                </td>
                               <td class="" style="text-align: right">(=)</td>
                                <td class="text-right"></td>
                                <td class="text-right">
                                    <?php $remiseGPrix = $remplpvhtva-$remise;
                            $nethtaxe = str_replace(',', '', $remiseGPrix);
                            echo strrev(wordwrap(strrev($nethtaxe), 3, ' ', true));
                                                ?>
                                </td>
                            </tr>
    
                          
                            <tr>
                                <td colspan=2 class="" style="text-align: left; border-top: 2px solid #ddd;">
                                    TVA 
                                    </td>

                                <td class="" style="text-align: right; border-top: 2px solid #ddd;">(+)</td>
                                <td class="text-right" style="border-top: 2px solid #ddd;"></td>
                                <td class="text-right" style="border-top: 2px solid #ddd;">
                                              <?php
                                                $tva = str_replace(',', '', number_format($TVA_COMMAND));
                                                $rempltvatotaltot = strrev(wordwrap(strrev($tva), 3, ' ', true));

                                                echo $rempltvatotaltot; ?></td>
                                
                            </tr>
                                                <tr>
                                                    <td colspan=2 class="bold" style="text-align: left;">TOTAL</td>
                                        
                                                    <td class="bold" style="text-align: right;"></td>
                                                    <td class="bold"></td>
                                                    <td class="bold">
                                                        <?php 
                                                        $totaltvac = ( $TOTAL_COMMAND );
                                                       
                                                        $ttvac = str_replace(',', '', $totaltvac);
                                                        $rempltotaltvac = strrev(wordwrap(strrev($ttvac), 3, ' ', true));
                                                        
                                                       echo $rempltotaltvac;

                                                        ?>
                                                    </td>
                                                </tr>

                                        </tbody>
                                    </table>
                                </section>
                                <section style="margin: 0px 32px 0 32px; bottom: 0;">
                                    <div>
                                        <span>Nous disons:</span>
                                        <span>
                                            <?php
                                            /* CONVERT NUMBER TO WORDS */
                                            function convertNumberToWord($num = false)
                                            {
                                                $num = str_replace(array(',', ' '), '', trim($num));
                                                if (!$num) {
                                                    return false;
                                                }
                                                $num = (int)$num;
                                                $words = array();
                                                $list1 = array(
                                                    '', 'un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'onze',
                                                    'douze', 'treize', 'quatorze', 'quinze', 'seize', 'dix-sept', 'dix-huit', 'dix-neuf'
                                                );
                                                $list2 = array('', 'dix', 'vingt', 'trente', 'quarante', 'cinquante', 'soixante', 'septante', 'quatre-vingts', 'nonante', 'cent');
                                                $list3 = array(
                                                    '', 'mille', 'million', 'milliard', 'billion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
                                                    'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
                                                    'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
                                                );
                                                $num_length = strlen($num);
                                                $levels = (int)(($num_length + 2) / 3);
                                                $max_length = $levels * 3;
                                                $num = substr('00' . $num, -$max_length);
                                                $num_levels = str_split($num, 3);
                                                for ($i = 0; $i < count($num_levels); $i++) {
                                                    $levels--;
                                                    $hundreds = (int)($num_levels[$i] / 100);
                                                    $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' cent' . ' ' : '');
                                                    $tens = (int)($num_levels[$i] % 100);
                                                    $singles = '';
                                                    if ($tens < 20) {
                                                        $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '');
                                                    } else {
                                                        $tens = (int)($tens / 10);
                                                        $tens = ' ' . $list2[$tens] . ' ';
                                                        $singles = (int)($num_levels[$i] % 10);
                                                        $singles = ' ' . $list1[$singles] . ' ';
                                                    }
                                                    $words[] = $hundreds . $tens . $singles . (($levels && ( int )($num_levels[$i])) ? ' ' . $list3[$levels] . ' ' : '');
                                                } //end for loop
                                                $commas = count($words);
                                                if ($commas > 1) {
                                                    $commas = $commas - 1;
                                                }
                                                return implode(' ', $words);
                                            }
                                            echo convertNumberToWord($TOTAL_COMMAND) . 'FBU';


                                            ?> </span>
                                    </div>
                                </section>
                                <section style="margin-left:30px;">
                                    <div class="company-info" style="float: right; text-align: left; margin: 15px 150px 0px 32px;" align="center"><br><br><br>------------------------------<br>Pour G.T.S sa</div>
                                </section>


          </div>
        </td>
      </tr>
    </tbody>

                <tfoot>
                <tr>
                    <td>
                    <!--place holder for the fixed-position footer-->
                    <!-- <div class="page-footer-space"></div> -->
                    </td>
                </tr>
                </tfoot>

            </table>
            
            <!-- container -->
        </div>

    <br/>
  </body>
</html>