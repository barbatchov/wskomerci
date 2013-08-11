<?php

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;

/**
 * Description of PaymentReceipt
 *
 * @author Elias Alves Chacon
 */
class PaymentReceipt extends KomerciEntityAbstract {
	
	const DEF_COD_TRANSACAO = '201';
	
	/** @var string */
	public $data;
	
	/** @var string */
	public $transacao;
	
	/** @var string */
	public $numautor;
	
	/** @var string */
	public $numcv;
	
	/** @var string */
	public $filiacao;
	
	public function getData() {
		return $this->data;
	}

	public function setData($data) {
		$this->data = $data;
		return $this;
	}

	public function getTransacao() {
		return $this->transacao;
	}

	public function setTransacao($transacao = PaymentReceipt::DEF_COD_TRANSACAO) {
		$this->transacao = $transacao;
		return $this;
	}

	public function getNumautor() {
		return $this->numautor;
	}

	public function setNumautor($numautor) {
		$this->numautor = $numautor;
		return $this;
	}

	public function getNumcv() {
		return $this->numcv;
	}

	public function setNumcv($numcv) {
		$this->numcv = $numcv;
		return $this;
	}

	public function getFiliacao() {
		return $this->filiacao;
	}

	public function setFiliacao($filiacao) {
		$this->filiacao = $filiacao;
		return $this;
	}
}