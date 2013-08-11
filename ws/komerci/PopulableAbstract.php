<?php

namespace ws\komerci;

use ws\komerci\types\Confirmation;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-06
 *
 */
class PopulableAbstract {

	const KEY_CASE_UPPER = 'upper';

	const KEY_CASE_UCFIRST = 'ucfirst';

	/**
	 * Constructor used to populate data
	 *
	 * @param $data stdObject|array       	
	 */
	public function __construct($data = null) {
		if (is_array($data)) {
			$this->populate($data);
		} else {
			$this->cast($data);
		}
	}

	/**
	 * Populates the object with a given array
	 *
	 * @param $data array       	
	 */
	public function populate($data = array()) {
		$objectVars = get_object_vars($this);
		
		foreach ($objectVars as $attr => $value) {
			(! isset($data[$attr])) ? null : $this->{'set' . ucfirst($attr)}($data[$attr]);
		}
	}

	/**
	 * Populates the object with a given stdClass object
	 *
	 * @param $stdObject stdClass       	
	 */
	public function cast($stdObject = null) {
		$objectVars = get_object_vars($this);
		
		foreach ($objectVars as $attr => $value) {
			if (isset($stdObject->{$attr})) {
				$expectedValue = $stdObject->{$attr};
				
				if ($attr == 'any') {
					$expectedValue = new Confirmation(json_decode(json_encode(simplexml_load_string($stdObject->{$attr})))->root);
				}
				
				$this->{'set' . ucfirst($attr)}($expectedValue);
			}
		}
	}

	/**
	 * Returns an array
	 *
	 * @return array
	 */
	public function toArray($returnVoid = false, $keyCaseType = null) {
		if ($returnVoid) {
			return $this->changeArrayKeysCase(get_object_vars($this), $keyCaseType);
		}
		
		return $this->changeArrayKeysCase(array_filter(get_object_vars($this), create_function('$v', 'return null != $v;')), $keyCaseType);
	}

	/**
	 * Changes the array keys case
	 * @param array $array
	 * @param string $caseType
	 */
	private function changeArrayKeysCase($array, $caseType = null) {
		$new = array ();
		switch ($caseType) {
			case self::KEY_CASE_UCFIRST :
				foreach ($array as $key => $value) {
					$new[ucfirst($key)] = $value;
				}
				return $new;
				break;
			
			case self::KEY_CASE_UPPER :
				foreach ($array as $key => $value) {
					$new[strtoupper($key)] = $value;
				}
				return $new;
				break;
			
			default :
				return $array;
		}
	}

}