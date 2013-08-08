<?php
namespace test\ws\komerci;

use \ws\komerci\KomerciEntityAbstract;

abstract class BasicEntityTestCase extends \PHPUnit_Framework_TestCase {
	/** @var return \ws\komerci\KomerciEntityAbstract */
	private $entity;
	
	/**
	 * 
	 * @param string|null $name
	 * @param array $data
	 * @param string|any $dataName
	 */
	public function __construct($name = null, array $data = array(), $dataName = '') {
		parent::__construct($name, $data, $dataName);
		
		$this->entity = $this->getEntity();
	}
	
	/**
	 * @return \ws\komerci\KomerciEntityAbstract
	 */
	abstract public function getEntity();
	
	/**
	 * Test should get the array form
	 */
	public function testBasicToArrayVoid() {
		$result = $this->entity->toArray(true);
		
		$this->assertInternalType('array', $result);
		$this->assertTrue(sizeof($result) > 0);
	}
	
	/**
	 * Test should populate with a filled array
	 */
	public function testBasicPopulate() {
		$class = get_class($this->entity);
		$array = $this->entity->toArray(true);
		$filled = $this->fillArray($array);
		
		$entity = new $class($filled);
		$result = $entity->toArray();
		
		$this->assertEquals($filled, $result);
	}
	
	/**
	 * Test should getAll with a filled array
	 */
	public function testGetAll() {
		$class = get_class($this->entity);
		$array = $this->entity->toArray(true);
		$filled = $this->fillArray($array);
		$entity = new $class($filled);
		
		$result = array();
		foreach ($filled as $attr => $val){
			$entity->{'set' . $attr}($val);
			$result[$attr] = $entity->{'get' . $attr}();
		}
		
		$this->assertEquals($filled, $result);
	}
	
	/**
	 * Fill array with properties
	 * 
	 * @param array $array
	 */
	private function fillArray($array) {
		$result = array();
		foreach ($array as $attr => $val) {
			$setMethod = 'set' . ucfirst($attr);
			$returnType = $this->getReturnTypeOfSetMethod($setMethod);
			if ($returnType) {
				$result[$attr] = new $returnType(); 
			} else {
				$result[$attr] = 'abc';
			}
		}
		
		return $result;
	}
	
	/**
	 * Return the type by doc
	 * 
	 * @param string $method
	 * @return string
	 */
	private function getReturnTypeOfSetMethod($method = '') {
		$reflection = new \ReflectionMethod(get_class($this->entity), $method);
		$reflectionClass = $reflection->getDeclaringClass();
			
		$docComment = array_values(array_filter(explode(PHP_EOL, str_replace("    ", '', $reflection->getDocComment())),
				create_function('$v', 'return preg_match(\'/@param/\', $v) && !preg_match(\'/(?:[Aa]ny|string)/\', $v);')));
		$returnByDoc = null;
		
		if (!empty($docComment)) {
			$returnByDoc = trim(preg_replace('/.*?@param (.*?)$/', '$1', $docComment[0]));
		}
		
		return $returnByDoc;
	}
	
}