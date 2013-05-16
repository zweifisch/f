<?php

return function($fn){
	$args = array_slice(func_get_args(), 1);
	return function() use ($args,$fn){
		$moreArgs = func_get_args();
		return call_user_func_array($fn,array_merge($args, $moreArgs));
	};
};
