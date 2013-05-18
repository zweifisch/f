<?php

use \f\F as F;

class ApplyTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::get();
		$this->assertSame(6, $f->apply($f->add,[1,2,3]));
		$this->assertSame(0, $f->apply($f->add,[]));
	}
}
