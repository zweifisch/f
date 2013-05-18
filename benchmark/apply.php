<?php

define('N',100000);

$setup = function(){
	return new \f\F;
};

run('apply 1', $setup, function($f){
	for($i=0; $i<N; $i++){
		$f->apply($f->add, [1]);
	}
});

run('call_user_func_array 1', $setup, function($f){
	for($i=0; $i<N; $i++){
		call_user_func_array($f->add, [1]);
	}
});

run('apply 2', $setup, function($f){
	for($i=0; $i<N; $i++){
		$f->apply($f->add, [1, 2]);
	}
});

run('call_user_func_array 2', $setup, function($f){
	for($i=0; $i<N; $i++){
		call_user_func_array($f->add, [1, 2]);
	}
});

run('apply 3', $setup, function($f){
	for($i=0; $i<N; $i++){
		$f->apply($f->add, [1, 2, 3]);
	}
});

run('call_user_func_array 3', $setup, function($f){
	for($i=0; $i<N; $i++){
		call_user_func_array($f->add, [1, 2, 3]);
	}
});

run('apply 4', $setup, function($f){
	for($i=0; $i<N; $i++){
		$f->apply($f->add, [1, 2, 3, 4]);
	}
});

run('call_user_func_array 4', $setup, function($f){
	for($i=0; $i<N; $i++){
		call_user_func_array($f->add, [1, 2, 3, 4]);
	}
});
