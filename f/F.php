<?php

namespace f;

class F
{
	private $closures = [];
	private static $instance;

	static function get()
	{
		if(empty(self::$instance))
		{
			self::$instance = new F;
		}
		return self::$instance;
	}

	function __call($name, $args)
	{
		$closure = $this->__get($name);
		return call_user_func_array($closure, $args);
	}

	function __get($name)
	{
		if (!isset($this->closures[$name]))
		{
			$path = __DIR__ . DIRECTORY_SEPARATOR . $name . '.php';
			if (is_readable($path))
			{
				$closure = require $path;
				if (1 === $closure){
					throw new \Exception("closure not returned: $path");
				}
				$this->closures[$name] = $closure;
			}
			else
			{
				throw new \Exception("closure not found: $name");
			}
		}
		return $this->closures[$name];
	}
}
