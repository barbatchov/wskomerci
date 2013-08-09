<?php

// registering autoload
spl_autoload_register(function($c){
	$root = realpath(__DIR__);
	$f = implode(DIRECTORY_SEPARATOR,
			array_merge(explode(DIRECTORY_SEPARATOR, $root), explode('\\', $c))) . '.php';
	
	if (!file_exists($f)) {
		$iterator = new RecursiveIteratorIterator(
						new RecursiveDirectoryIterator($root, RecursiveDirectoryIterator::SKIP_DOTS),
						RecursiveIteratorIterator::SELF_FIRST);
		$paths = array();
		foreach ($iterator as $path => $dir) {
			if ($dir->isDir() && !strpos($path, DIRECTORY_SEPARATOR . '.')) {
				$file = $path . DIRECTORY_SEPARATOR . $c . '.php';
				if (file_exists($file)) {
					require_once $file;
					return;
				}
			}			
		}
	}
	
	require_once $f;
});