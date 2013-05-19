<?php

use \f\F as F;

class LastTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::getInstance();
		$this->assertSame(false, $f->last([]));
		$this->assertEquals(2, $f->last([1,2]));
	}
}
