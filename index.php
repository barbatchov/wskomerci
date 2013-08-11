<?php

//registering autoload

function findClassPhpFile($directory = '', $class) {
	if ($directory == '') return;
	$iterator = new RecursiveIteratorIterator(
			new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS),
			RecursiveIteratorIterator::SELF_FIRST);
	$paths = array();
	foreach ($iterator as $path => $dir) {
		if ($dir->isDir() && !strpos($path, DIRECTORY_SEPARATOR . '.')) {
			$file = $path . DIRECTORY_SEPARATOR . $class . '.php';
			if (file_exists($file)) {
				set_include_path(get_include_path() . PATH_SEPARATOR . $path);
				return $file;
			}
		}
	}
}

function autoloader($c) {
	$root = realpath(__DIR__);
	$f = implode(DIRECTORY_SEPARATOR,
			array_merge(explode(DIRECTORY_SEPARATOR, $root), explode('\\', $c))) . '.php';
	
	if (!file_exists($f)) {
		$includePaths = explode(PATH_SEPARATOR, get_include_path());
		foreach($includePaths as $directory) {
			$file = findClassPhpFile(realpath($directory), $c);
			if ($file) { 
				require_once $f;
				return;
			}
			
		}
	}
	
	if (file_exists($f)) {
		require_once $f;
	}
}

spl_autoload_register('autoloader');