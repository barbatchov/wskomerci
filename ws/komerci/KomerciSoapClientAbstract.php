<?php
namespace ws\komerci;

/**
 *
 * @author Elias Alves Chacon
 */

abstract class KomerciSoapClientAbstract extends \SoapClient {
	
	/**
	 *
	 * @link http://www.php.net/manual/en/soapclient.soapclient.php
	 *      
	 * @param
	 *       	 wsdl
	 *       	
	 * @param
	 *       	 options[optional]
	 *       	
	 */
	public function __construct($wsdl = '', $options = array()) {
		parent::SoapClient($wsdl, $options);
	}
	
	public function __call ($function_name = '', $arguments = array()) {
		return parent::__call($function_name, $arguments);
	}
	
	public function __soapCall ($function_name = '', $arguments = array(), $options = array(), $input_headers = null, &$output_headers = array()) {
		return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
	}
	
	public function __getLastResponse() {
		
		print_r(parent::__getLastResponse());
	}
	
}