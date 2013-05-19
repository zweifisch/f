<?php

use \f\F as F;

class DivTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::getInstance();
		$this->assertEquals($f->div(2), 0.5);
		$this->assertEquals($f->div(3,2), 1.5);
		$this->assertEquals($f->div(10,2,5), 1);
	}
}
