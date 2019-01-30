<?php

class Monster{
	private $name;
	private $lastname;
	private $age;
	private $color;

	function _construct($colorp,$agep,$namep,$lastnamep,$typep,$lifep,$strengthp){
		$this -> color = $colorp;
		$this -> age = $agep;
		$this -> name = $namep;
		$this -> lastname = $lastnamep;
		$this -> type = $typep;
		$this -> life = $lifep;
		$this -> strength = $strengthp;



	}
	function getage(){ // à faire pour chaque attribut
		return $this -> age;
		
	}
	function getname(){
		return $this -> name;
	}

	function getlastname(){
		return $this -> lastname;
	}
	
	function getcolor(){
		return $this -> color;
	}

	function gettype(){
		return $this -> type;
	}

	function getlife(){
		return $this -> life;
	}

	function getstrength(){
		return $this -> strength;
	}
	
}






var_dump($monster1,$monster2,$monster3);


