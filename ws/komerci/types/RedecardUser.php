<?php
namespace ws\komerci\types;

use \InvalidArgumentException;

class RedecardUser {
	const ERROR_FILIATION = 'Filiation not found or not a number!';
	const ERROR_USER = 'User not found or not a number!';
	const ERROR_PASSWORD = 'Password not found!';
	
	private $filiation;
	private $user;
	private $password;
	
	/**
	 * @param string|int $filiation
	 * @param string $user
	 * @param string $password
	 */
	public function __construct($filiation = '', $user = '', $password = '') {
		$this
		->setFiliation($filiation)
		->setPassword($password)
		->setUser($user);
	}
	
	/**
	 * Sets the filiation number
	 *
	 * @param string $filiation
	 * @throws InvalidArgumentException
	 * @return \ws\komerci\types\RedecardUser
	 */
	public function setFiliation($filiation = '') {
		if (!is_numeric($filiation)) {
			throw new InvalidArgumentException(self::ERROR_FILIATION);
		}
		$this->filiation = $filiation;
	
		return $this;
	}
	
	/**
	 * Sets the password
	 *
	 * @param string $password
	 * @throws InvalidArgumentException
	 * @return \ws\komerci\types\RedecardUser
	 */
	public function setPassword($password = '') {
		if (empty($password)) {
			throw new InvalidArgumentException(self::ERROR_PASSWORD);
		}
		$this->password = $password;
	
		return $this;
	}
	
	/**
	 * Sets the user
	 *
	 * @param int|string $user
	 * @throws InvalidArgumentException
	 * @return \ws\komerci\types\RedecardUser
	 */
	public function setUser($user = '') {
		if (!is_numeric($user)) {
			throw new InvalidArgumentException(self::ERROR_USER);
		}
		$this->user = $user;
	
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getFiliation() {
		return $this->filiation;
	}
	
	/**
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}
	
	/**
	 * @return string
	 */
	public function getUser() {
		return $this->user;
	}

}