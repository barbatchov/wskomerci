<?php
namespace ws\komerci;

abstract class KomerciEntityAbstract {
	
	public function __construct($data = array()) {
		
	}
	
	public function populate($data = array()) {
		$reflection = new \ReflectionObject($this);
		
		$methods = $reflection->getMethods(\ReflectionMethod::IS_PUBLIC);
		//foreach($methods as $method)
	}
	
	public function toArray() {
		return get_object_vars($this);
	}
	
	
}

?>