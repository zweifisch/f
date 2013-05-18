<?php

return function($fn, $args){
	$count = count($args);
	return
		(1 == $count ? $fn($args[0]) :
		(2 == $count ? $fn($args[0], $args[1]) :
		(3 == $count ? $fn($args[0], $args[1], $args[2]) : call_user_func_array($fn, $args))));
};
