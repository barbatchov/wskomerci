<?php

namespace ws\komerci;

use \SoapClient;
use \SoapFault;
use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciException;
use \ws\komerci\adapter\KomerciLogAdapterAbstract;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07
 *
 */
abstract class KomerciSoapClientAbstract extends SoapClient {

	/** @var \ws\komerci\adapter\KomerciLogAdapterAbstract */
	private $logger;

	/**
	 *
	 * @link http://www.php.net/manual/en/soapclient.soapclient.php
	 *
	 * @param wsdl
	 *
	 * @param options[optional]
	 *
	 */
	public function __construct($wsdl = '', $options = array('trace' => 1), KomerciLogAdapterAbstract $logger = null) {
		parent::SoapClient($wsdl, $options);

		$this->setLogger($logger);
	}

	protected function call($functionName = '', KomerciEntityAbstract $arguments = null, $options = array(), 
			$inputHeaders = null, &$outputHeaders = array()) {

		try {
			$args = $arguments->toArray();
			$result = get_object_vars(parent::__soapCall($functionName, $args, $options, $inputHeaders, $outputHeaders));

			$this->logProcess();

			return $result;
			//return parent::__call($functionName, $args); //deprecated
			
		} catch (SoapFault $e) {
			$this->logProcess();
			throw new KomerciException($e);
		}
	}

	/**
	 * Set a logger for log the call process
	 * 
	 * @param \ws\komerci\adapter\KomerciLogAdapterAbstract $logger
	 * @return \ws\komerci\KomerciSoapClientAbstract
	 */
	public function setLogger(KomerciLogAdapterAbstract $logger = null) {
		if ($logger !== null && $logger instanceof KomerciLogAdapterAbstract) {
			$this->logger = $logger;
		}

		return $this;
	}

	/**
	 * Release a log
	 */
	private function logProcess() {
		if ($this->logger) {
			$this->logger->setLogFileName(__CLASS__);

			$this->logger->info($this->__getLastRequest());
			$this->logger->info($this->__getLastResponse());
		}
	}
}