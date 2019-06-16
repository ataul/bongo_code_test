<?php

namespace spec;

use Program1Test;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Program1TestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
    	$expected_output = "key1 1
key2 1
key3 2
key4 2
key5 3";
		$this->testPrintDepth()->shouldEqual("A");        
    }
}
