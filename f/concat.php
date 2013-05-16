<?php

return function(){
	$args = func_get_args();
	$ret = [];
	foreach($args as $array)
		foreach($array as $item)
			$ret[] = $item;
	return $ret;
};
