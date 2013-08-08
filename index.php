<?php

// registering autoload
spl_autoload_register(function($c){
	require_once implode(DIRECTORY_SEPARATOR,
			array_merge(explode(DIRECTORY_SEPARATOR, realpath(__DIR__)), explode('\\', $c))) . '.php';
});