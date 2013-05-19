<?php

use \f\F as F;

class SubTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = new F;
		$this->assertSame(-1,$f->sub(1));
		$this->assertSame(1,$f->sub(3,2));
		$this->assertSame(0,$f->sub(3,2,1));
	}
}
