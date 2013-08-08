<?php
namespace ws\komerci\typemaps;

use ws\komerci\PopulableAbstract;

class GenericAttributes extends PopulableAbstract{
	
	private $type;
	private $name;
	private $size;
	
	public function __construct($data = array()) {
		parent::__construct($data);
	}
	
	/**
	 * @param any $type
	 * @return \ws\komerci\typemaps\GenericAttributes
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}
	
	/**
	 * @param any $name
	 * @return \ws\komerci\typemaps\GenericAttributes
	 */
	public function setName($name = '') {
		$this->name = $name;
		return $this;
	}
	
	/**
	 * @param any $size
	 * @return \ws\komerci\typemaps\GenericAttributes
	 */
	public function setSize($size) {
		$this->size = $size;
		return $this;
	}
	
	public function getType() {
		return $this->type;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getSize() {
		return $this->size;
	}
	
}