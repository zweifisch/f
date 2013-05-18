<?php

return function($fn,$_){
	if(3 == func_num_args())
	{
		list($fn,$val,$array) = func_get_args();
	}
	else
	{
		$array = func_get_arg(1);
		if(0 == count($array))
		{
			return $fn();
		}
		$val = array_shift($array);
	}
	if(0 == count($array))
	{
		return $fn($val);
	}
	foreach($array as $item)
	{
		$val = $fn($val, $item);
	}
	return $val;
};
