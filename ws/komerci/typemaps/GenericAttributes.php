<?php
namespace ws\komerci\typemaps;

use ws\komerci\PopulableAbstract;

class GenericAttributes extends PopulableAbstract{
	
	protected $Type;
	protected $Name;
	protected $Size;
	
	public function __construct($data = array()) {
		parent::__construct($data);
	}
	
	/**
	 * @param any $type
	 * @return \ws\komerci\typemaps\GenericAttributes
	 */
	public function setType($type) {
		$this->Type = $type;
		return $this;
	}
	
	/**
	 * @param any $name
	 * @return \ws\komerci\typemaps\GenericAttributes
	 */
	public function setName($name = '') {
		$this->Name = $name;
		return $this;
	}
	
	/**
	 * @param any $size
	 * @return \ws\komerci\typemaps\GenericAttributes
	 */
	public function setSize($size) {
		$this->Size = $size;
		return $this;
	}
	
	public function getType() {
		return $this->Type;
	}
	
	public function getName() {
		return $this->Name;
	}
	
	public function getSize() {
		return $this->Size;
	}
	
}