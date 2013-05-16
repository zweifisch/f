<?php

return function($key,$array){
	return isset($array[$key]) ? $array[$key] : null;
};
