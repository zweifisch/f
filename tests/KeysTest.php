<?php

use \f\F as F;

class KeysTest extends PHPUnit_Framework_TestCase
{
	function test()
	{
		$f = F::getInstance();
		$this->assertEquals(['key'], $f->keys(['key'=>'value']));
	}
}
