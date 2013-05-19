<?php

use \f\F as F;

class AddTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = new F;
		$this->assertSame(0,$f->add());
		$this->assertSame(1,$f->add(1));
		$this->assertSame(3,$f->add(1,2));
		$this->assertSame(6,$f->add(1,2,3));
	}
}
