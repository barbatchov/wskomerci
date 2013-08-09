<?php
namespace ws\komerci\decorators;

interface KomerciObserverInterface {
	public function notify($args = null);
}