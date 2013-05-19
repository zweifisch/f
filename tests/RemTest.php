<?php

use \f\F as F;

class RemTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = new F;
		$this->assertEquals(1, $f->rem(10, 3));
	}
}
