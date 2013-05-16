<?php

use \f\F as F;

class CompTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::get();
		$comp = $f->comp($f->even , $f->inc);
		$this->assertTrue($comp(1));

		$this->assertSame([true, false], $f->map($f->comp($f->even,$f->inc), [1,2]));
	}
}
