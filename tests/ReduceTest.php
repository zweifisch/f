<?php

use \f\F as F;

class ReduceTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = new F;
		$this->assertEquals(0, $f->reduce($f->add, []));
		$this->assertEquals(1, $f->reduce($f->add, [1]));
		$this->assertEquals(2, $f->reduce($f->add, 1, [1]));
		$this->assertEquals(3, $f->reduce($f->add, 1, [1, 1]));
	}
}
