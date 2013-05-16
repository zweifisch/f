<?php

return function($fn, $array){
	foreach($array as $item) if(!$fn($item)) return false;
	return true;
};
