<?php

use \f\F as F;

class MinusTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::get();
		$this->assertSame(-1,$f->minus(1));
		$this->assertSame(1,$f->minus(3,2));
		$this->assertSame(0,$f->minus(3,2,1));
	}
}
