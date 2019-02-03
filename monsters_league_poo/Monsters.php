<?php

class Monster{
	public $name;
	public $type;
	public $life;
	public $strength;

	function __construct($name,$strength,$life,$type){
		$this ->name = $name;
		$this ->type = $type;
		$this ->life = $life;
		$this ->strength = $strength;



	}
	
	function getname(){

		return $this->name;
	}

	function gettype(){
		return $this->type;
	}

	function getlife(){
		return $this->life;
	}

	function getstrength(){
		return $this->strength;
	}

}
?>







