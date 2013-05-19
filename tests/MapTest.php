<?php

use \f\F as F;

class MapTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::getInstance();
		$this->assertSame([4,7], $f->map($f->add, [1,2], [3,5]));
		$this->assertSame([2,3], $f->map($f->inc, [1,2]));
	}
}
