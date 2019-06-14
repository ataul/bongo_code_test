<?php
function lca($node1, $node2) {

}

class Node {
	$value;
	$parent;
	public function __construct($value,$parent) {
		$this->value = $value;
		$this->parent = $parent;
	}
}


$one	= new Node(1,null);
$two	= new Node(2,$one);
$three	= new Node(3,$one);
$four	= new Node(4,$two);
$five	= new Node(5,$two);
$six	= new Node(6,$three);
$seven	= new Node(7,$three);
$eight	= new Node(8,$four);
$nine	= new Node(9,$four);
?>