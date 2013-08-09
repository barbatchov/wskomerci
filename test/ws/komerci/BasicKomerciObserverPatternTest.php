<?php
namespace test\ws\komerci;

use ws\komerci\decorators\KomerciObservableAbstract;
use ws\komerci\decorators\KomerciObserverInterface;

class BasicKomerciObserverPatternTest extends \PHPUnit_Framework_TestCase {

	public function testShouldRegister() {
		$subject = new Stub_SubjectObservable201308082301();
		$observerA = new Stub_Observer201308082258();
		$observerB = new Stub_Observer201308082258();
		$observerC = new Stub_Observer201308082258();
		
		$subject
			->registerObserver($observerA)
			->registerObserver($observerB);
		
		$subject->notifyAll('Ok');

		$this->assertEquals('Ok', $observerA->status);
		$this->assertEquals('Ok', $observerB->status);
		$this->assertNull($observerC->status);
	}
}

class Stub_Observer201308082258 implements KomerciObserverInterface {
	public $status;
	
	public function notify($args = nulll) {
		 $this->status = $args;
	}
}

class Stub_SubjectObservable201308082301 extends KomerciObservableAbstract {}