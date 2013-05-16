<?php

return function($fn){
	return function() use ($fn){
		return !call_user_func_array($fn, func_get_args());
	};
};
