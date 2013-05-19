<?php

return function($fn,$coll){
	$colls = func_get_args();
	array_shift($colls);
	$ret = [];
	foreach($coll as $idx=>$value)
	{
		$args = [];
		foreach($colls as $c) $args[] = $c[$idx];
		$ret[] = 1 == count($args)
			? $fn($args[0])
			: call_user_func_array($fn, $args);
	}
	return $ret;
};
