<?php

namespace f;

class F
{
	use Fallback;

	private static $instance;

	static function getInstance()
	{
		if(empty(self::$instance))
		{
			self::$instance = new F;
		}
		return self::$instance;
	}
	
	
	public function add(){
		$ret = 0;
		foreach(func_get_args() as $num) $ret += $num;
		return $ret;
	}
	
	public function apply($fn, $args){
		$count = count($args);
		return
			(1 == $count ? $fn($args[0]) :
			(2 == $count ? $fn($args[0], $args[1]) :
			(3 == $count ? $fn($args[0], $args[1], $args[2]) : call_user_func_array($fn, $args))));
	}
	
	public function comp(){
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
	}
	
	public function complement($fn){
		return function() use ($fn){
			return !call_user_func_array($fn, func_get_args());
		};
	}
	
	public function concat(){
		$args = func_get_args();
		$ret = [];
		foreach($args as $array)
			foreach($array as $item)
				$ret[] = $item;
		return $ret;
	}
	
	public function dec($num){
		return $num - 1;
	}
	
	public function div($num){
		$len = count($nums = func_get_args());
		if(1 == $len) return 1 / $num;
		for($i=1; $i<$len; $i++) $num = $num / $nums[$i];
		return $num;
	}
	
	public function even($num){
		return 0 == $num % 2;
	}
	
	public function every($fn, $array){
		foreach($array as $item) if(!$fn($item)) return false;
		return true;
	}
	
	public function filter($fn, $array){
		$ret = [];
		foreach($array as $item) if($fn($item)) $ret[] = $item;
		return $ret;
	}
	
	public function first($array){
		return reset($array);
	}
	
	public function get($key,$array){
		return isset($array[$key]) ? $array[$key] : null;
	}
	
	public function inc($num){
		return $num + 1;
	}
	
	public function keys($array){
		return array_keys($array);
	}
	
	public function last($array){
		return end($array);
	}
	
	public function map($fn,$coll){
		$colls = array_slice(func_get_args(), 1);
		$ret = [];
		foreach($coll as $idx=>$value)
		{
			$args = [];
			foreach($colls as $c) $args[] = $c[$idx];
			$ret[] = call_user_func_array($fn, $args);
		}
		return $ret;
	}
	
	public function mul(){
		$ret = 1;
		foreach(func_get_args() as $num) $ret *= $num;
		return $ret;
	}
	
	public function odd($num){
		return 1 == $num % 2;
	}
	
	public function partial($fn){
		$args = array_slice(func_get_args(), 1);
		return function() use ($args,$fn){
			$moreArgs = func_get_args();
			return call_user_func_array($fn,array_merge($args, $moreArgs));
		};
	}
	
	public function reduce($fn,$_){
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
	}
	
	public function rem($num, $div){
		return $num % $div;
	}
	
	public function some($fn, $array){
		foreach($array as $item) if($fn($item)) return $item;
	}
	
	public function sub($num){
		$len = count($nums = func_get_args());
		if ($len <= 1) return -$num;
		for($i=1; $i<$len; $i++) $num -= $nums[$i];
		return $num;
	}
	
	public function vals($array){
		return array_values($array);
	}
}
