<?php

use \f\F as F;

class SomeTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::get();
		$this->assertEquals($f->some($f->even, [1,2,3]), 2);
		$this->assertNull($f->some($f->even, [1,5,3]));
	}
}
