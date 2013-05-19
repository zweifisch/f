<?php

$setup = function($additional){
	return function() use ($additional){
		return [100000, [0,1,2,3,4,5,6,7,8,9], $additional];
	};
};

class Foo{
	static function inc($val){
		return $val + 1;
	}
}

// Foo::$inc = function($val){
// 	return $val + 1;
// }
// 
class Bar{
	function inc($val){
		return $val + 1;
	}
}

$bar = new Bar;

class Attr{
	function __construct(){
		$this->inc = function($val){return $val + 1;};
	}
}

$attr = new Attr;

$inc = function($val){
	return $val + 1;
};

function inc($val){
	return $val + 1;
}

$test = function($args){
	list($n,$array,$inc) = $args;
	for($i=0; $i<$n; $i++){
		array_map($inc,$array);
	}
};

run('object method', $setup(array('Bar','inc')), $test);
run('function', $setup('inc'), $test);
run('object attribute', $setup($attr->inc), $test);
run('closure', $setup($inc), $test);
run('object method', $setup(array($bar,'inc')), $test);
run('static', $setup('Foo::inc'), $test);
run('static', $setup(array('Foo','inc')), $test);
// run('static', $setup(Foo::inc, $test);

# static > object method > closure > object attr > function
