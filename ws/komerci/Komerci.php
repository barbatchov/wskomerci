<?php

namespace ws\komerci;

use ws\komerci\KomerciEntityAbstract;
use ws\komerci\KomerciServiceFacade;
use ws\komerci\types\GetAuthorized;
use ws\komerci\types\GetAuthorizedTst;
use ws\komerci\types\RedecardUser;
use ws\komerci\types\VoidTransaction;
use ws\komerci\types\PaymentReceipt;
use ws\komerci\PopulableAbstract;
use ws\komerci\KomerciException;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-08
 *
 */
class Komerci {

	const SERVICES_URI = 'https://ecommerce.redecard.com.br/pos_virtual/wskomerci/cap.asmx';

	const RECEIPT_URI = 'https://ecommerce.redecard.com.br/pos_virtual/cupom.asp';

	/**
	 * @var RedecardUser
	 */
	private $user;

	/**
	 * @var \ws\komerci\KomerciServiceFacade
	 */
	private $service;

	/**
	 *
	 * @param $filiation string|int
	 * @param $user string
	 * @param $password string
	 */
	public function __construct(RedecardUser $user) {
		$this->user = $user;
	}

	/**
	 *
	 * @return \ws\komerci\KomerciServiceFacade
	 */
	public function getService() {
		if ($this->service) {
			return $this->service;
		}

		try {
			xdebug_disable();
			return $this->service = new KomerciServiceFacade(self::SERVICES_URI);
		} catch (Exception $e) {
			throw new KomerciException($e);
		}
	}

	/**
	 *
	 * @param GetAuthorized $authorized
	 * @return \ws\komerci\types\Confirmation
	 */
	public function directPay(GetAuthorized $authorized) {
		$this->parseUserParams($authorized);
		$result = $this->getService()->GetAuthorized($authorized)->getGetAuthorizedResult()->getAny();

		if (!$result->getNumcv()) {
			throw new KomerciException($result->getMsgret());
		}

		return $result;
	}

	/**
	 *
	 * @param GetAuthorizedTst $authorized
	 * @return \ws\komerci\types\Confirmation
	 */
	public function directPayTest(GetAuthorizedTst $authorized) {
		$this->parseUserParams($authorized);
		$result = $this->getService()->GetAuthorizedTst($authorized)->getGetAuthorizedTstResult()->getAny();

		if (!$result->getNumcv()) {
			throw new KomerciException($result->getMsgret());
		}

		return $result;
	}

	/**
	 *
	 * @param VoidTransaction $voidTransaction
	 * @return \ws\komerci\types\VoidTransactionResponse
	 */
	public function directDebitReverse(VoidTransaction $voidTransaction) {
		$this->parseUserParams($voidTransaction);
		$result = $this->getService()->VoidTransaction($voidTransaction);
		return $result;
	}

	 /**
	  *
	  * @param PaymentReceipt $paymentReceipt
	  * @return string
	  */
	public function paymentReceipt(PaymentReceipt $paymentReceipt) {
		$this->parseUserParams($paymentReceipt);

		$curl = curl_init();
		curl_setopt_array($curl, array (
				'CURLOPT_URL' => self::RECEIPT_URI,
				'CURLOPT_POST' => true,
				'CURLOPT_POSTFIELDS' => $paymentReceipt->toArray(false, PopulableAbstract::KEY_CASE_UPPER),
				'CURLOPT_RETURNTRANSFER' => true,
				'CURLOPT_HEADER', false,
				'CURLOPT_TIMEOUT' => 30,
				'CURLOPT_SSL_VERIFYPEER' => false));

		$receipt = curl_exec($curl);
		curl_close($curl);

		$receipt = str_replace("Imagens/", "https://ecommerce.redecard.com.br/pos_virtual/Imagens/", $receipt);
		$receipt = str_replace("Css/", "https://ecommerce.redecard.com.br/pos_virtual/Css/", $receipt);
		$receipt = str_replace("Cupom.aspx", "https://ecommerce.redecard.com.br/pos_virtual/Cupom.aspx", $receipt);

		return $receipt;
	}

	/**
	 * Calls any other transaction
	 *
	 * @param KomerciEntityAbstract $entity
	 * @return KomerciEntityAbstract
	 */
	public function call(KomerciEntityAbstract $entity) {
		$this->parseUserParams($entity);

		$serviceName = get_class($entity);
		$serviceName = explode('\\', $serviceName);

		$serviceMethod = array_pop($serviceName);

		$result = $this->getService()->{$serviceMethod}($entity);
		return $result;
	}

	/**
	 * Parses the user params set on constructor
	 *
	 * @param $komerciEntity KomerciEntityAbstract
	 */
	private function parseUserParams(KomerciEntityAbstract &$komerciEntity) {
		if (method_exists($komerciEntity, 'setFiliacao')) {
			$komerciEntity->setFiliacao($this->user->getFiliation());
		}

		if (method_exists($komerciEntity, 'setUsr')) {
			$komerciEntity->setUsr($this->user->getUser());
		}

		if (method_exists($komerciEntity, 'setPwd')) {
			$komerciEntity->setPwd($this->user->getPassword());
		}
	}

}