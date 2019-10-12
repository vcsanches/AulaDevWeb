<meta charset="utf-8";
<?php

header("Content-type: application/json");
include("Filho.php");

$pessoa = new Pessoa(2.00,70,55);
//echo $pessoa;

$filho = new Filho(2.00, 70, 10);
$filho->setTimeDocoracao("Cruzeirão Cabuloso");

//echo $filho;
//echo "<br>".$Filho->getTimeDoCoracao()."<br>";

if ($filho->getTimeDoCoracao() == "Cruzeirao C"){
	http_response_code(201);
	echo json_encode($filho);

}
else{
	http_response_code(404);
	$resposta = array("message" => "Não existe");
	echo json_encode($resposta);

}


?>