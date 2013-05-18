<?php

require 'vendor/autoload.php';

function run($msg,$block)
{
	$param = null;
	if(func_num_args() > 2)
	{
		$args = func_get_args();
		for($i= 1; $i < func_num_args() - 1; $i++)
		{
			$param = $args[$i]($param);
		}
		$block = end($args);
	}
	usleep(500);
	echo str_pad($msg, 60, '.', STR_PAD_RIGHT); 

	$start = - microtime(true);
	$block($param);
	echo str_pad(number_format(microtime(true) + $start, 5), 20, '.', STR_PAD_LEFT), "\n";
}

if($argc > 1)
{
	require $argv[1];
}
