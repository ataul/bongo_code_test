<?php

class Program1Test
{
	public function testPrintDepth(){
		ob_start();
		require_once('problem1.php');		
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
}
