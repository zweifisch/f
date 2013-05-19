<?php

$setup = function(){
	return [100000, [0,1,2,3,4,5,6,7,8,9], \f\F::getInstance()];
};

run('map', $setup, function($args){
	list($n,$array,$f) = $args;
	for($i=0; $i<$n; $i++){
		$f->map($f->inc, $array);
	}
});

run('array_map', $setup, function($args){
	list($n,$array,$f) = $args;
	for($i=0; $i<$n; $i++){
		array_map($f->inc, $array);
	}
});
