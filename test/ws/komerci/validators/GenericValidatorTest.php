<?php
namespace test\ws\komerci\validators;

use ws\komerci\validators\ValidatorAbstract;

use ws\komerci\PopulableAbstract;
use ws\komerci\types\ConfirmTxn_AD;
use ws\komerci\typemaps\ConfirmTxn_ADMap;
use ws\komerci\typemaps\GenericAttributes;
use ws\komerci\typemaps\TypeMapInterface;
use ws\komerci\validators\GenericValidator;
use ws\komerci\validators\ValidableInterface;

class GenericValidatorTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @expectedException \ws\komerci\validators\GenericValidatorException
	 */
	public function testCanNotSetValidable() {
		$validator = new GenericValidator();
	}
	
	/**
	 * @expectedException ws\komerci\validators\GenericValidatorException
	 */
	public function testCanNotSetTypeMap() {
		$validable = new ConfirmTxn_AD();
		$validator = new GenericValidator($validable);
	}
	
	/**
	 * @expectedException ws\komerci\validators\GenericValidatorException
	 */
	public function testCanNotValidate() {
		$validable = new Stub_Validable201308082120();
		$typeMap = new ConfirmTxn_ADMap();
		$validator = new GenericValidator($validable, $typeMap, true);
		
		$result = $validator->isValid();
	}
	
	public function testCanNotFindCustomValidatorException() {
		$this->markTestSkipped('Autoloading is breaking on Exception class verifying...');
		$validator = new Stub_Validator201308082152();
		$validator->isValid();
	}
	
	public function testShouldValidate() {
		$validable = new ConfirmTxn_AD();
		$typeMap = new ConfirmTxn_ADMap();
		$validator = new GenericValidator($validable, $typeMap);
		
		$result = $validator->isValid();
		
		$this->assertTrue($result);
	}
	
	public function testShouldNotValidate() {
		$validable = new Stub_Validable201308082120();
		$typeMap = new ConfirmTxn_ADMap();
		$validator = new GenericValidator($validable, $typeMap);
		
		$result = $validator->isValid();
		
		$this->assertFalse($result);
	}

	public function testShouldNotValidateSize() {
		$validable = new Stub_Validable201308082126();
		$typeMap = new Stub_TypeMap201308082124();
		$validator = new GenericValidator($validable, $typeMap);
		
		$result = $validator->isValid();
		
		$this->assertFalse($result);
	}
	
}


class Stub_Validable201308082120 implements ValidableInterface {}

class Stub_Validable201308082126 extends PopulableAbstract implements ValidableInterface {
	protected $attr = 'abcd';
}

class Stub_TypeMap201308082124 implements TypeMapInterface {
	
	public function getProperty($name = '') {
			return new GenericAttributes(array('Name' => 'attr', 'Type' => 'string', 'Size' => 3)); 
	}
}

class Stub_Validator201308082152 extends ValidatorAbstract {
	
	public function __construct() {
		parent::__construct(true);
	}
	
	protected function validateIt($input = '') {
		return $this->getPattern();
	}
	
	protected function getPattern() {
		return false;
	}
}