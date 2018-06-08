<html>
<head>
<title>Jonnathan Lincoln</title>
<link rel="stylesheet" href="bootstrap.min.css" />
<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
</head>
<body>
<input type="text" name="QuantasLinhas" id="QuantasLinhas" class="form-control" style="width:100px; float:left;">
<button type="button" onclick="obter()" class="btn btn-info" style="float:left;">OK</button>
<br>
<br>
<div id="resultado" class="table-responsive" style="float:left;"><!-- Os dados serão carregados aqui -->
 Os dados serão carregados aqui
</div>
</body>
</html>
<script language="Javascript">
function SOMA(colunaA, colunaB, colunaC){
	var colunaA = parseInt($('#'+colunaA).val());
	var colunaB = parseInt($('#'+colunaB).val());
	$('#'+colunaC).val( colunaA + colunaB ); 
}

function obter(){
	var QuantasLinhas = $('#QuantasLinhas').val();
  
	$.ajax({
		url : "doit.php", //Request send to "action.php page"
		method:"POST", //Using of Post method for send data
		data:{	
			QuantasLinhas:QuantasLinhas
		}, //action variable data has been send to server
		success:function(data){
			$('#resultado').html(data); //It will display data under div tag with id result
		}
	});
}
</script>