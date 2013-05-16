<?php

return function($fn, $array){
	$ret = [];
	foreach($array as $item) if($fn($item)) $ret[] = $item;
	return $ret;
};
