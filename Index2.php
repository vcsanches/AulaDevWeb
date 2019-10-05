<?php

class Pessoa {

	private $altura = "1.67";
	private $olhos = "Castanhos";
	private $Cabelo = "Castanho escuro";
	public $CPF;
	
	public function setAltura($altura){
		
		$this->altura = $altura ;
	}
	
	public function getAltura(){
		
		return $this->altura ;
	}
	
	public function setOlhos($olhos){
		
	$this->olhos = $olhos;
	}
	
	public function getolhos(){
		
		return $this->olhos ;
	}
	
	
	
	
	
	public function __construct($altura, $olhos){
		$this->setAltura($altura);
		$this->setOlhos($olhos);
	}
}



$obj = new Pessoa("1.80", "Azuis");



var_dump($obj);

echo "<br>";
echo "<br>";

echo $obj->getAltura() * 2;
echo "<br>";
echo "<br>";

$obj->setAltura("2.00");

echo "<br>";
echo "<br>";


echo $obj->getOlhos();
echo "<br>";
echo "<br>";

$obj2 = new Pessoa("1.60", "Pretos");

	
echo $obj2->getOlhos();
echo "<br>";
echo "<br>";

$obj2->setOlhos("Olhos castanhos");


echo $obj2->getOlhos();
echo "<br>";
echo "<br>";