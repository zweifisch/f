<?php

use \f\F as F;

class PartialTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::get();
		$getName = $f->partial($f->get, 'name');
		$this->assertEquals('Alice', $getName(['name'=> 'Alice']));
		$this->assertEquals(['Bob', null], $f->map($getName, [['name'=>'Bob'],null]));
	}
}
