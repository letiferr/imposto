<?php 

$valor = $_GET['valor'];

echo "<h1>Resultado</h1>";
echo "Salário Bruto : ".$valor."<br>";

if ($valor <= 1556.94) {
	$res = $valor - ($valor*0.08);
	echo "Salário com desconto INSS  :".$res."<br>";
}
elseif ($valor<=2594.92){
	$res =$valor - ($valor*0.09);
	echo "Salário com desconto INSS :".$res."<br>";
}
elseif ($valor<=5189.82){
	$res =$valor - ($valor*0.11);
	echo "Salário com desconto INSS : ".$res."<br>";
}

else {
	$valor = $valor - 5189.82;
	$teto = 5189.82-(5189.82*0.11);
	$res = $valor+$teto;
	echo "Salário com desconto INSS : ".$res."<br>";
}


if ($res <= 1903.98){
		
	$aliquota = 0;	
	echo "<br>IRRF : ".$deducao = 0;
	echo "<br>Imposto de Renda : Isento";
    echo "<br>Salario Liquido :".$salarioLiquido = $res;
		
}
	
elseif ($res <= 2826.65){
		
	$aliquota = $res * 0.075;
	echo "<br>IRRF :".$deducao = $aliquota - 142.80;
	echo "<br>Salario Liquido :".$salarioLiquido = $res - $deducao;
		
}
	
elseif ($res <= 3751.05){
		
	$aliquota = $res * 0.15;
	echo "<br>IRRF :".$deducao = $aliquota - 354.80 ;
	echo "<br>Salario Liquido :".$salarioLiquido = $res - $deducao;
		
}
	
elseif ($res <= 4664.68){
		
	$aliquota = $res * 0.225;
	echo "<br>IRRF :".$deducao = $aliquota - 636.13 ;
	echo "<br>Salario Liquido :".$salarioLiquido = $res - $deducao;
		
}
else{
		
	$aliquota = $res * 0.275;
	echo "<br>IRRF : ".$deducao = $aliquota - 869.36 ;
	echo "<br>Salario Liquido :".$salarioLiquido = $res - $deducao;
		
}

echo "<p><a href = \"index.html\">Voltar</a>";
?>