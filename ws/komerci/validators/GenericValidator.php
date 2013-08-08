<?php

namespace ws\komerci\validators;

use ws\komerci\typemaps\TypeMapInterface;
use ws\komerci\validators\ValidatorAbstract;

class GenericValidator extends ValidatorAbstract {

	/** @var ValidableInterface */
	private $validable;

	/** @var TypeMapInterface */
	private $typemap;
	
	public function __construct(ValidableInterface $validable = null, TypeMapInterface $typemap = null, $throwable = false) {
		parent::__construct($throwable);
		
		$this->setValidable($validable);
		
	}
	
	/**
	 * @param ValidableInterface $validable
	 * @throws GenericValidatorException
	 * @return \ws\komerci\validators\GenericValidator
	 */
	public function setValidable(ValidableInterface $validable = null) {
		if (null === $validable) throw new GenericValidatorException('The validable object cant be null!');
		
		$this->validable = $validable;
		
		return $this;
	}
	
	/**
	 * @param TypeMapInterface $typemap
	 * @throws GenericValidatorException
	 * @return \ws\komerci\validators\GenericValidator
	 */
	public function setTypeMap(TypeMapInterface $typemap = null) {
		if (null === $typemap) throw new GenericValidatorException('The type map object cant be null!');
		
		$this->typemap = $typemap;
		
		return $this;
	}
	
	protected function validateIt($input = '') {
		$map = $this->getPattern();
		$validableAttrs = get_object_vars($this->validable);
		
		foreach ($validableAttrs as $attr => $val) {
			$pattern = $map->getProperty($attr);
			// TODO validacao
		}
	}
	
	/**
	 * @return \ws\komerci\typemaps\TypeMapInterface
	 */
	protected function getPattern() {
		return $this->typemap;
	}
}

class GenericValidatorException extends ValidatorAbstractException {}