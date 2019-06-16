<?php

class Program2Test
{
	public function testPrintDepth(){
		ob_start();
		require_once('problem2.php');		
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}
}
