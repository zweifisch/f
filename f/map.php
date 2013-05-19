<?php

return function($fn,$coll){
	return call_user_func_array('array_map',func_get_args());
};
