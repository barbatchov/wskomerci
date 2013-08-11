<?php
namespace ws\komerci\decorators;

use ws\komerci\decorators\KomerciObservableInterface;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-09
 *
 */
abstract class KomerciObservableAbstract implements KomerciObservableInterface {
	
	private $observerList;
	
	public function __construct() {
		$this->observerList = array();
	}
	
	/**
	 * @return ws\komerci\decorators\KomerciObservableAbstract
	 */
	public function registerObserver(KomerciObserverInterface $observer) {
		$this->observerList[spl_object_hash($observer)] = $observer;
		return $this;
	}
	
	public function notifyAll($args = null) {
		foreach ($this->observerList as $hash => $observer) {
			$observer->notify($args);
		}
	}
}