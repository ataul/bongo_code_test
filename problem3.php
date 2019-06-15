<?php
function lca($node1, $node2) {
	$ancestor1 = ancestors($node1);
	$ancestor2 = ancestors($node2);
	foreach ($ancestor1 as $value1) {
		foreach ($ancestor2 as $value2) {
			if($value1==$value2){
				echo "Least common ancestor of $node1->value and $node2->value is $value1";
				return;
			}
		}
	}
}

function ancestors($node,$ancestors = array()){
	if($node->parent==null){
		if(sizeof($ancestors)==0){
			return array($node->value);
		}else{
			return $ancestors;
		}
	}else{
		$ancestors[] = $node->parent->value;		
		return ancestors($node->parent,$ancestors);
	}
}

class Node {
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

lca($six,$seven);
?>