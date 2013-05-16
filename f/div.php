<?php

return function($num){
	$len = count($nums = func_get_args());
	if(1 == $len) return 1 / $num;
	for($i=1; $i<$len; $i++) $num = $num / $nums[$i];
	return $num;
};
