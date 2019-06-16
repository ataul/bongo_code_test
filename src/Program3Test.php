<?php
require_once('problem3.php');
class Program3Test
{
	public function __construct() {	
		$this->one	= new Node(1,null);
		$this->two	= new Node(2,$this->one);
		$this->three	= new Node(3,$this->one);
		$this->four	= new Node(4,$this->two);
		$this->five	= new Node(5,$this->two);
		$this->six	= new Node(6,$this->three);
		$this->seven	= new Node(7,$this->three);
		$this->eight	= new Node(8,$this->four);
		$this->nine	= new Node(9,$this->four);
	}	
	public function testLCABetweenSixAndSeven(){		
		return lca($this->six,$this->seven);
	}

	public function testLCABetweenEightAndFive(){
		return lca($this->eight,$this->five);
	}
	public function testLCABetweenFiveAndSix(){
		return lca($this->five,$this->six);		
	}
}
