<?php

use \f\F as F;

class OddTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::get();
		$this->assertTrue($f->odd(1));
		$this->assertFalse($f->odd(2));
		$this->assertSame([true,false,true], $f->map($f->odd,[1,2,3]));
	}
}
