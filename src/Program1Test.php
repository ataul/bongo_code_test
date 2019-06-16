<?php

class Program1Test
{
	public function testPrintDepth(){
		require_once('problem1.php');
		ob_start();
		printDepth($a);
		$output = ob_get_contents();
		ob_end_clean();
		return "A";
	}
}
