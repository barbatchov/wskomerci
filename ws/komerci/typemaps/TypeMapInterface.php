<?php
namespace ws\komerci\typemaps;

interface TypeMapInterface {
	/**
	 * @return \ws\komerci\typemaps\GenericAttributes
	 */
	public function getProperty($name = '');
}