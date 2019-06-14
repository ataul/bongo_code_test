<?php
function traverseArray($data, $depth){
	foreach($data as $key => $value){
		if(is_array($value)){
			echo "$key $depth<br />\n";
			traverseArray($value,$depth+1);
		}else{
			echo "$key $depth<br />\n";
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
printDepth($a);
?>