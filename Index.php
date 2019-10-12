<?php

header("Content-type: application/json");
include("Filho.php");

$pessoa = new Pessoa(2.00,70,55);
//echo $pessoa;

$filho = new Filho(2.00, 70, 10);
$filho->setTimeDocoracao("Cruzeirão Cabuloso");

//echo $filho;
//echo "<br>".$Filho->getTimeDocCoracao()."<br>";

echo json_encode($pessoa);

?>