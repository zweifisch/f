<?php

return function(){
	$ret = 0;
	foreach(func_get_args() as $num) $ret += $num;
	return $ret;
};
