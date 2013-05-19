<?php

namespace f;

trait Fallback
{
	function __call($name, $args)
	{
		$closure = isset($this->$name) ? $this->$name : $this->__get($name);
		$count = count($args);
		return
			(1 == $count ? $closure($args[0]) :
			(2 == $count ? $closure($args[0], $args[1]) :
			(3 == $count ? $closure($args[0], $args[1], $args[2]) : call_user_func_array($closure, $args))));
	}

	function __get($name)
	{
		$path = __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';
		if (is_readable($path))
		{
			$closure = require $path;
			if (1 === $closure){
				throw new \Exception("closure not returned: $path");
			}
			$this->$name = $closure;
			return $closure;
		}
		throw new \Exception("closure not found: $name");
	}
}
