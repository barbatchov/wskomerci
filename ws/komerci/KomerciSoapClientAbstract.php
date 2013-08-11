<?php
namespace ws\komerci;

use \SoapClient;
use \ws\komerci\KomerciEntityAbstract;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07
 *
 */
abstract class KomerciSoapClientAbstract extends SoapClient {
	
	/**
	 *
	 * @link http://www.php.net/manual/en/soapclient.soapclient.php
	 *      
	 * @param wsdl
	 *       	
	 * @param options[optional]
	 *       	
	 */
	public function __construct($wsdl = '', $options = array()) {
		parent::SoapClient($wsdl, $options);
	}
	
	protected function call($functionName = '', KomerciEntityAbstract $arguments, $options = array(), $inputHeaders = null, &$outputHeaders = array()) {
		$args = $arguments->toArray();
		$result = get_object_vars(parent::__soapCall($functionName, $args, $options, $inputHeaders, $outputHeaders));
		//return parent::__call($functionName, $args); //deprecated
		
		foreach ($result as $fc => $r) {
			$cn = '\ws\komerci\types\\' . $fc;
			var_dump(new $cn($r)); die();
		}
		
	}
}