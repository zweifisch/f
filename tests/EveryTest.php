<?php

use \f\F as F;

class EveryTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = new F;
		$this->assertTrue($f->even(2));
		$this->assertTrue($f->every($f->even, []));
		$this->assertTrue($f->every($f->even, [2]));
	}
}
