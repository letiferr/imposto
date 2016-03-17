<?php 

$valor = $_GET['valor'];

if ($valor <= 1556.94) {
	$res = $valor - ($valor*0.08);
}
elseif ($valor<=2594.92){
	$res =$valor - ($valor*0.09);
}
elseif ($valor<=5189.82){
	$res =$valor - ($valor*0.11);
}

else {
	$valor = $valor - 5189.82;
	$teto = 5189.82-(5189.82*0.11);
	$res = $valor+$teto;
}


if ($res <=1903.98){
	echo "Isento";
}
elseif ($res<=2826.65){
	$valor = (($valor*0.075) - 142.80 );
}

elseif ($res<=4664.68){
	$valor = (($valor*0.15) - 354.80 );
}

elseif ($res<=2826.66){
	$valor = (($valor*0.225) - 142.80 );
}
else{
	$valor = (($valor*0.275) - 869.36);
}

?>
