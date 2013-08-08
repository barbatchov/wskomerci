<?php
namespace ws\komerci;

class PopulableAbstract {
	/**
	 * Constructor used to populate data
	 *
	 * @param array $data
	 */
	public function __construct($data = array()) {
		$this->populate($data);
	}
	
	/**
	 * Populates the object with a given array
	 *
	 * @param array $data
	 */
	public function populate($data = array()) {
		$objectVars = get_object_vars($this);
	
		foreach ($objectVars as $attr => $value) {
			$attr = ucfirst($attr);
			(!isset($data[$attr])) ? null : $this->{'set' . $attr}($data[$attr]);
		}
	}
	
	/**
	 * Returns an array
	 *
	 * @return array
	 */
	public function toArray($returnVoid = false) {
		if ($returnVoid) {
			return get_object_vars($this);
		}
	
		return array_filter(get_object_vars($this), create_function('$v', 'return null != $v;'));
	}
}