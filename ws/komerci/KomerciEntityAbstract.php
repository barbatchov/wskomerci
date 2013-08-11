<?php

namespace ws\komerci;

use ws\komerci\validators\ValidableInterface;
use ws\komerci\validators\GenericValidator;

/**
 * 
 * @author Elias Alves Chacon
 * 
 */
abstract class KomerciEntityAbstract extends PopulableAbstract implements KomerciServiceInterface, ValidableInterface {

    public function __construct($data = null) {
        parent::__construct($data);

        $exploded = explode('\\', get_class($this));
        $classMap = '\ws\komerci\typemaps\\' . array_pop($exploded) . 'Map';

        if (class_exists($classMap)) {
            $map = new $classMap();

            $validator = new GenericValidator($this, $map, true);
            $validator->isValid();
        }
    }

}