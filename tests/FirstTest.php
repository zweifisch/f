<?php

use \f\F as F;

class FirstTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::get();
		$this->assertSame(false, $f->first([]));
		$this->assertSame(1, $f->first([1,2]));
	}
}
