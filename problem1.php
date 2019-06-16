<?php
function traverseArray($data, $depth){
	foreach($data as $key => $value){
		//use following line if viewed in browser
		//echo "$key $depth<br />";
		//following line is applicable for console
		echo "$key $depth\n";			
		if(is_array($value)){
			traverseArray($value,$depth+1);
		}
	}
}
function printDepth($data) {
	traverseArray($data,1);
	
}
$a = array (
	"key1" => 1,
	"key2" => array (
		"key3" => 1,
		"key4" => array (
			"key5" => 4
		),
	),
);
//uncomment following line to view the output
//printDepth($a); 
?>