<?php

namespace ws\komerci;

/**
 * Description of AuthorizingError
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 */
class AuthorizingError {
	//const TRANSACTION_APPROVED = array('o', 0);

	private $errors = array(
		//'TRANSACTION_APPROVED' => array('o', 0),

		'TRANSACTION_NOT_AUTHORIZED' => array(
			51, 92, 98),
		'TRANSACTION_INVALID' => array(
			53),
		'TRANSACTION_RETRY' => array(
			56, 76, 86),
		'CARD_PROBLEM' => array(
			58, 63, 65, 69, 72, 77, 96),
		'CARD_PROBLEM' => array(
			58, 63, 65, 69, 72, 77, 96),
		'VALUE_INVALID' => array(
			60),
		'COMUNICATION_INVALID' => array(
			74),
		'BANK_INVALID' => array(
			74),
		'ESTABLISHMENT_INVALID' => array(
			50, 52, 54, 55, 57, 59, 61, 62, 64,
			66, 67, 68, 70, 71, 73, 75, 78, 79,
			80, 82, 83, 84, 85, 87, 89, 90, 91,
			93, 94, 95, 97, 99)
	);

	/**
	 *
	 * @param type $num
	 * @return type
	 */
	public function getError($num = 0) {
		foreach ($this->errors as $n => $v) {
			foreach ($v as $cod) {
				if ($cod == $num) {
					return $n;
				}
			}
		}
	}
}
