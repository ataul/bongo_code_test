<?php

namespace spec;

use Program1Test;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Program1TestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
    	$expected_output = "key1 1<br />key2 1<br />key3 2<br />key4 2<br />key5 3<br />";
    	$this->testPrintDepth()->shouldEqual($expected_output);        
    }
}
