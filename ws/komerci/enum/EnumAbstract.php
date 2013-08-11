<?php
namespace ws\komerci\enum;

abstract class EnumAbstract {
	private $values;
	private $names;
	private $valuesAsNames;
	
	public function __construct() {
		$reflection = new \ReflectionObject($this);
		$this->values = $reflection->getConstants();
		
		$names = array_keys($this->values);
		$this->names = array_combine($names, $names);
		
		$this->valuesAsNames = array_combine($this->value, $names);
	}
	
	public function getValue($name = '') {
		return (isset($this->values[$name]) ? $this->values[$name] : '');
	}
	
	public function getName($value = '') {
		return (isset($this->valuesAsNames[$value]) ? $this->valuesAsNames[$value] : '');
	}
	
	public function getNames() {
		return $this->names;
	}
}