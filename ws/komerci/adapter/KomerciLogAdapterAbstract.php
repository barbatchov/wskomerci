<?php

namespace ws\komerci\adapter;

/**
 * 
 * @author Elias Alves Chacon <elias.chacon@gmail.com.br>
 * 
 */
abstract class KomerciLogAdapterAbstract {
	private $logFileName = '';

	/**
	 * Sets the log file name
	 * 
	 * @param string $filename
	 * @return \ws\komerci\adapter\KomerciLogAdapterAbstract
	 */
	public function setLogFileName ($filename = '') {
		if (!empty($filename)) {
			$this->logFileName = $filename;
		}
		
		return $this;
	}
	
	/**
	 * Returns the log filename
	 * 
	 * @return string
	 */
	protected function getLogFileName () {
		if (!empty($this->logFileName)) {
			return $this->logFileName;
		}
	}

	public abstract function log ($level = '', $message = '', $throwable = false);
	public abstract function info ($message = '', $throwable = false);
	public abstract function warning ($message = '', $throwable = false);
	public abstract function error ($message = '', $throwable = false);
	public abstract function critical ($message = '', $throwable = false);
}
