<!DOCTYPE html>
<html>
<head> <title>Import Items</title>
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="./loader.css" />
  <!-- <script src="jquery-3.2.1.min.js"></script> -->
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.7.7/xlsx.core.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xls/0.7.4-a/xls.core.min.js"></script>
	
</head>
<body>
<div style="margin-top:50px;"></div>


 <div class="box">


    <div class="row" style="margin:10px;">
      <div class="col-md-3 col-lg-3">
        <!-- <span class="glyphicon glyphicon-import"></span>  -->
        <input type="file" class="btn btn-flat btn-info" id="excelfile1">
        <!-- <input type="button" id="viewfile" value="Export To Table" onclick="ExportToTable()" /> -->
      </div>
      <div class="col-md-3 col-lg-3"></div>
      <div class="col-md-3 col-lg-3">
        <a class="btn btn-success pull-right" id="importFile"><span class="glyphicon glyphicon-download-alt"></span>Importer</a>
      </div>
      <div class="col-md-3 col-lg-3">
        <a href="<?php echo 'http://gts.ibi-africa.com/ibi2/import/itemsToImport.csv' ?>" class="btn btn-success btn-md"><span class="glyphicon glyphicon-download-alt"></span> Example File</a>
      </div>
    </div>

    <div style="heigth: 100px;"></div>
    <div id="msg"></div>
    <div id="tableDiv" hidden class="table-responsive" style="width:100%; background-color: whiteSmoke;">
      <table class="table table-bordered table-striped dataTable" id="exceltable1">
        <thead>
          <th>NOM</th>
          <th>BP</th>
          <th>TEL</th>
          <th>EMAIL</th>
          <th>DESCRIPTION</th>
          
        </thead>
        <tbody></tbody>
      </table>
    </div>


  </div>

  <script>
    $(document).ready(function() {

  
      $("#excelfile1").on("change", function() {
        $("#importfile").removeAttr('disabled');
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv)$/;
        if (regex.test($("#excelfile1").val().toLowerCase())) {
          var reader = new FileReader();
          reader.onload = function(e) {
            var rows = e.target.result.split("\n");
            var tableRow = "";
            let errors = 0;
            for (i = 1; i < rows.length; i++) {
              // console.log("hhhhhhhhhhhhh");
              if (rows[i] !== "") {
                var uploadRow = rows[i].split(",");
                var count = uploadRow.length;
                if (count !== 5) {
                  errors += 1;
                  tableRow += "<tr class='not' style='background-color: red;'>";
                  for (k = 0; k < uploadRow.length; k++) {
                    tableRow += "<td>" + uploadRow[k] + "</td>";
                  }
                  tableRow += "</tr>";
                } else {
                  tableRow += "<tr class='notnot'><td>" + uploadRow[0] + "</td><td>" + uploadRow[1] + "</td><td>" + uploadRow[2] + "</td><td>" + uploadRow[3] + "</td><td>" + uploadRow[4] + "</td></tr>";
                }
              }
            }

            $("#exceltable1 tbody").html(tableRow);

            if (errors > 0) {
              alert("Il y a " + errors + " lignes avec des erreurs et elles sont affichees en rouges");
            }

            $('#tableDiv').removeAttr('hidden');
          }

          reader.readAsText($("#excelfile1")[0].files[0]);

        } else {
          alert("Inserez un fichier csv valide");
          $("#excelfile1").closest('div').find('div input').val();
        }
      });
});

    function getRidOfTheComma(data) {
      var toReturn = "";
      var toFilter = data.split("");
      const toMakeString = toFilter.filter(element => element !== ",");
      const times = toMakeString.length;
      for (i = 0; i < times; i++) {
        toReturn += toMakeString[i];
      }
      return toReturn;
    }

    function stringToNumber(data) {
      var toReturn = 0;
      var toMakeInt = "";
      if (data === "") {
        return toReturn;
      } else {
        toMakeInt = getRidOfTheComma(data);
        toReturn = parseFloat(toMakeInt);
        return toReturn;
      }
    }

    $("#importFile").on("click", function() {
    	

      $("#importfile").attr('disabled', 'true');
      $("#msg").html("<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a><strong>WAIT!</strong> Processing!!! </div>");

      let table = [
        [],
        [],
        [],
        [],
        []
        
      ];

      let errors = 0;

      $("#exceltable1 tr.not").each(function() {
      	console.log("Ok...parfait");
      	//Le probleme se trouve ici
        errors += 1;

      });

      if (errors > 0) {
        $("#msg").html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a><strong>Danger!</strong> Il ya des erreurs qui merite votre attention.</div>");
        return false;
      }

      $("#exceltable1 tr.notnot").each(function() {
        let i = 0;
        $(this).find('td').each(function() {
          if (i === 6 || i === 8 || i === 9) {
            let element = 0;
            if (!isNaN(Number($(this).text()))) {
              element = Number($(this).text());
            }
            table[i].push(stringToNumber($(this).text()));
          } else if (i === 10) {
            if ($(this).text().split("\n").length > 0) {
              const te = $(this).text().split("\n");
              console.log(te[0]);
              table[i].push(te[0]);
            } else {
              table[i].push($(this).text());
            }
          } else {
            table[i].push($(this).text());
          }
          i += 1;
        });
        i = 0;
      });

      const dataToPost = {
        NOM: JSON.stringify(table[0]),
        BP: JSON.stringify(table[1]),
        TEL: JSON.stringify(table[2]),
        EMAIL: JSON.stringify(table[3]),
        DESCRIPTION: JSON.stringify(table[4]),
        
      };

      const numberRegex = /\d+/g;
    

      // let location = BASE_URL + '/administrator/fournisseurs/importManagement';
      
        location = BASE_URL + 'administrator/fournisseurs/importManagement';
      
      console.log(dataToPost);
      $.ajax({
        url: BASE_URL + 'administrator/fournisseurs/importManagement',
        method: "POST",
        data: dataToPost,
        dataType: "json",
        success: function(data) {
          console.log(data);
          if (data.type === "success") {
            window.location.href = location;
          } else {
            alert(data.message);
          }
        }
      });
    });

  </script>
</body>
</html>