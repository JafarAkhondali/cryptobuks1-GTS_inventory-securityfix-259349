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

    $("#importFile").on("click", function() {
    	alert("ok");
    	  $.ajax({
   url:"fournisseurs/employee.csv",
   dataType:"text",
   success:function(data)
   {
    var employee_data = data.split(/\r?\n|\r/);
    var table_data = '<table class="table table-bordered table-striped">';
    for(var count = 0; count<employee_data.length; count++)
    {
     var cell_data = employee_data[count].split(",");
     table_data += '<tr>';
     for(var cell_count=0; cell_count<cell_data.length; cell_count++)
     {
      if(count === 0)
      {
       table_data += '<th>'+cell_data[cell_count]+'</th>';
      }
      else
      {
       table_data += '<td>'+cell_data[cell_count]+'</td>';
      }
     }
     table_data += '</tr>';
    }
    table_data += '</table>';
    $('#employee_table').html(table_data);
   }
  });

    	


    });
});
  </script>
</body>
</html>