<?php
namespace ws\komerci\decorators;

interface KomerciObservableInterface {
	public function registerObserver(KomerciObserverInterface $observer);
	public function notifyAll($args = null);
}