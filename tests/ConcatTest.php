<?php

use \f\F as F;

class ConcatTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::get();
		$this->assertSame([], $f->concat());
		$this->assertSame([], $f->concat([]));
		$this->assertSame([], $f->concat([],[]));
		$this->assertSame([1, 2, 3], $f->concat([1],[2, 3]));
		$this->assertSame([1, 2, 3, 4, 5], $f->concat([1],[2, 3],[4, 5]));
	}
}
