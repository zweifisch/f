<?php

return function($fn,$coll){
	$colls = array_slice(func_get_args(), 1);
	$ret = [];
	foreach($coll as $idx=>$value)
	{
		$args = [];
		foreach($colls as $c) $args[] = $c[$idx];
		$ret[] = call_user_func_array($fn, $args);
	}
	return $ret;
};
