<?php

return function(){
	$fns = func_get_args();
	return function() use ($fns){
		$args = 1 == func_num_args() ? func_get_arg(0) : func_get_args();
		$len = count($fns);
		for($i=1; $i<= $len; $i++)
		{

			$args = is_array($args)
				? call_user_func_array($fns[$len - $i], $args)
				: $fns[$len - $i]($args);
		}
		return $args;
	};
};
