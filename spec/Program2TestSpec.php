<?php

namespace spec;

use Program1Test;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Program2TestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
    	$expected_output = "key1 1<br />key2 1<br />key3 2<br />key4 2<br />key5 3<br />User 3<br />first_name 4<br />last_name 4<br />father 4<br />first_name 5<br />last_name 5<br />father 5<br />";
    	$this->testPrintDepth()->shouldEqual($expected_output);        
    }
}
