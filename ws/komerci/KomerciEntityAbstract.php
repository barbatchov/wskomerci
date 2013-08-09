<?php
namespace ws\komerci;

use ws\komerci\validators\ValidableInterface;
use ws\komerci\validators\GenericValidator;
use ws\komerci\typemaps\TypeMapInterface;

/**
 * 
 * @author Elias Alves Chacon
 * 
 */
abstract class KomerciEntityAbstract extends PopulableAbstract implements KomerciServiceInterface, ValidableInterface {
	
	public function __construct($data = array()) {
		parent::__construct($data);
		
		$exploded = explode('\\', get_class($this));
		$classMap = '\ws\komerci\typemaps\\' . array_pop($exploded) . 'Map';

		$map = new $classMap();
		
		$validator = new GenericValidator($this, $map, true);
		$validator->isValid();
		
	}
}