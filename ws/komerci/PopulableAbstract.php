<?php

namespace ws\komerci;

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
			$upper = strtoupper($attr);

			// nao existe nenhum
			if (!isset($data[$attr]) && !isset($data[$upper])) {
				continue;
			}

			// existe o atributo em upercase
			if (!isset($data[$attr]) && isset($data[$upper])) {
				$expectedValue = $data[$upper];

				$this->{'set' . ucfirst(strtolower($attr))}($expectedValue);
				continue;
			}

			// existe o atributo como veio
			if (isset($data[$attr])) {
				//$expectedValue = $data[$attr];
				$expectedValue = (class_exists($attr)) ? new $attr($data[$attr]) : $data[$attr];
				$this->{'set' . ucfirst($attr)}($expectedValue);
			}
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
			$upper = strtoupper($attr);

			// nao existe nenhum
			if (!isset($stdObject->{$attr}) && !isset($stdObject->{$upper})) {
				continue;
			}

			// existe o atributo em upercase
			if (!isset($stdObject->{$attr}) && isset($stdObject->{$upper})) {
				$expectedValue = $stdObject->{$upper};

				$this->{'set' . ucfirst(strtolower($attr))}($expectedValue);
				continue;
			}

			// existe o atributo como veio
			if (isset($stdObject->{$attr})) {
				$expectedValue = $stdObject->{$attr};

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