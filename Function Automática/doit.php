<?PHP
$QuantasLinhas = intval($_POST["QuantasLinhas"]); //Obtem quantidade de linhas
$aux = 1;
while( $aux <= $QuantasLinhas )
{
	$colunaA = "'A".$aux."'"; //Primeiro Valor 
	$colunaB = "'B".$aux."'"; //Segundo Valor
	$colunaC = "'C".$aux."'"; //Resultado
	$output .= '<br><input id="A'.$aux.'" onblur="SOMA('.$colunaA.','.$colunaB.','.$colunaC.')" style="width:70px;"> + ';
	$output .= '<input id="B'.$aux.'" onblur="SOMA('.$colunaA.','.$colunaB.','.$colunaC.')" style="width:70px;"> = ';
	$output .= '<input id="C'.$aux.'" readonly style="width:70px;">';
	
	$aux++;
}
echo $output;
?>