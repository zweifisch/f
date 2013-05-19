<?php

use \f\F as F;

class MulTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::getInstance();
		$this->assertEquals(1, $f->mul());
		$this->assertEquals(6, $f->mul(2,3));
		$this->assertEquals(-6, $f->mul(2,3,-1));
	}
}
