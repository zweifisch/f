<?php

return function($num){
	$len = count($nums = func_get_args());
	if ($len <= 1) return -$num;
	for($i=1; $i<$len; $i++) $num -= $nums[$i];
	return $num;
};
