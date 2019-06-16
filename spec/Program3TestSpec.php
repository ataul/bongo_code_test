<?php

namespace spec;

use Program1Test;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Program3TestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
    	$lca_between_six_and_seven = 3;
    	$this->testLCABetweenSixAndSeven()->shouldEqual($lca_between_six_and_seven);

    	$lca_between_eight_and_five = 2;
    	$this->testLCABetweenEightAndFive()->shouldEqual($lca_between_eight_and_five);

    	$lca_between_five_and_six = 1;
    	$this->testLCABetweenFiveAndSix()->shouldEqual($lca_between_five_and_six);        
    }
}
