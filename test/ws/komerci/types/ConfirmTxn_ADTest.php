<?php
namespace test\ws\komerci\types;

use ws\komerci\types\ConfirmTxn_AD;

require_once ('PHPUnit/Framework/TestCase.php');

class ConfirmTxn_ADTest extends \PHPUnit_Framework_TestCase {
	
	public function _testShouldPopulate() {
		$entity = new ConfirmTxn_AD();
		
	}
	
	public function testShoudGetArray() {
		$entity = new \ws\komerci\types\ConfirmTxn_AD();
		$result = $entity->toArray();
		
		$this->assertInternalType('array', $result);
	}
	
	
}