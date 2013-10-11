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

	/** @var \SoapClient */
	private $soapClient;

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
	public function __construct($wsdl = '') {
		$this->soapClient = new SoapClient($wsdl,
			array(
				'trace'        => 1,
				'exceptions'   => 1,
				'style'        => SOAP_DOCUMENT,
				'use'          => SOAP_LITERAL,
				'soap_version' => SOAP_1_1,
				'encoding'     => 'UTF-8'
			)
		);
	}

	/**
	 * @param string $functionName
	 * @param \ws\komerci\KomerciEntityAbstract $arguments
	 * @return any
	 * @throws KomerciException
	 */
	protected function call($functionName = '', KomerciEntityAbstract $arguments = null) {
		try {
			$result = get_object_vars($this->soapClient->{$functionName}($arguments));
			$this->logProcess();
			return $result;

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