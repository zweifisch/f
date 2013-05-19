<?php

use \f\F as F;

class FilterTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = new F;
		$this->assertSame([],$f->filter($f->odd, []));
		$this->assertSame([1],$f->filter($f->odd, [0,1,2]));
		$this->assertSame([0, 2],$f->filter($f->complement($f->odd), [0,1,2]));
	}
}
