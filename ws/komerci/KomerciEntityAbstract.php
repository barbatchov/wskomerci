<?php

namespace ws\komerci;

use ws\komerci\validators\ValidableInterface;
use ws\komerci\validators\GenericValidator;
use ws\komerci\types\Confirmation;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07
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

    /**
	 * Changes the keys to lower and creates the new confirmation object
	 * 
     * @return \ws\komerci\types\Confirmation|any
     */
	protected function parseXmlResultToConfirmation($param) {
		$any = $param;

		if (preg_match('/<.*?>/', $param)) {
			$new = new \stdClass();
			$obj = json_decode(json_encode(simplexml_load_string($param)));

			if (isset($obj->root)) {
				foreach ($obj->root as $attr => $value){
					$new->{strtolower($attr)} = (is_string($value)) ? trim("$value") : $value;
				}

				$any = new Confirmation($new);

			} else {
				foreach ($obj as $attr => $value){
					$new->{strtolower($attr)} = (is_string($value)) ? trim("$value") : $value;
				}

				$any = new Confirmation($obj);
			}
		}

        return $any;
	}

}