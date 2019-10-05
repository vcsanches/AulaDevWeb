<?php

class Pessoa {

	private $altura = "1.67";
	
	public function setAltura($altura){
		
		$this->altura = $altura ;
	}
	
	public function getAltura(){
		
		return $this->altura ;
	}
		
}



$obj = new Pessoa;

var_dump($obj);

echo "<br>";
echo "<br>";

echo $obj->getAltura() * 2;


$obj->setAltura("2.00");

echo "<br>";
echo "<br>";

echo $obj->getAltura();