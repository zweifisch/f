<?php

return function(){
	$ret = 1;
	foreach(func_get_args() as $num) $ret *= $num;
	return $ret;
};
