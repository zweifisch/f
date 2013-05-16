<?php

use \f\F as F;

class ValsTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::get();
		$this->assertEquals(['value'], $f->vals(['key'=>'value']));
	}
}
