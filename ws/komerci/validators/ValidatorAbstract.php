<?php
namespace ws\komerci\validators;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07
 *
 */
abstract class ValidatorAbstract {
	
	protected $exeptionName;
	protected $throwable;
	protected $messages;
	
	/**
	 * Construtor
	 * 
	 * @param boolean $thowable
	 */
	public function __construct($thowable = false){
		$this->messages = array();
		$this->throwable = $thowable;
		$this->exeptionName = get_class($this) . 'Exception';
	}
	
	/**
	 * Do validation
	 * 
	 * @param any $input
	 * @throws ValidatorAbstractException
	 * 
	 * @return boolean
	 */
	public function isValid($input = ''){
		$isValid = (boolean) $this->validateIt($input);
		
		if($this->throwable && !$isValid && class_exists($this->exeptionName)){
			$msg = implode('; ' . PHP_EOL, $this->messages);
			
			throw new $this->exeptionName(($msg == '' ? 'Inconclusive validation.' : $msg));
			
		} elseif ($this->throwable && !class_exists($this->exeptionName)){
			$msg = $this->exeptionName . ' is missing.';
			throw new ValidatorAbstractException($msg);
		}
		
		return $isValid;
	}
	
	
	protected abstract function validateIt($input = '');
	protected abstract function getPattern();
}

class ValidatorAbstractException extends \Exception{}