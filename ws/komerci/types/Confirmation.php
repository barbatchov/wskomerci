<?php
namespace ws\komerci\types;

use ws\komerci\KomerciEntityAbstract;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-11
 *       
 */
class Confirmation extends KomerciEntityAbstract {

	public $codret;

	public $msgret;

	public $numpedido;

	public $data;

	public $numautor;

	public $numcv;

	public $numautent;

	public $numqn;

	public $origem_bin;

	public $confcodret;

	public $confmsgret;

	public function __construct($data = null) {
		parent::__construct($data);
	}

	/**
	 *
	 * @return $codret
	 */
	public function getCodret() {
		return $this->codret;
	}

	/**
	 *
	 * @return $msgret
	 */
	public function getMsgret() {
		return $this->msgret;
	}

	/**
	 *
	 * @param $codret field_type       	
	 * @return Confirmation
	 */
	public function setCodret($codret) {
		$this->codret = $codret;
		
		return $this;
	}

	/**
	 *
	 * @param $msgret field_type       	
	 * @return Confirmation
	 */
	public function setMsgret($msgret) {
		$this->msgret = $msgret;
		
		return $this;
	}

	public function getNumpedido() {
		return $this->numpedido;
	}

	public function setNumpedido($numpedido) {
		$this->numpedido = $numpedido;
		return $this;
	}

	public function getData() {
		return $this->data;
	}

	public function setData($data) {
		$this->data = $data;
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

	public function getNumautent() {
		return $this->numautent;
	}

	public function setNumautent($numautent) {
		$this->numautent = $numautent;
		return $this;
	}

	public function getNumqn() {
		return $this->numqn;
	}

	public function setNumqn($numqn) {
		$this->numqn = $numqn;
		return $this;
	}

	public function getOrigem_bin() {
		return $this->origem_bin;
	}

	public function setOrigem_bin($origem_bin) {
		$this->origem_bin = $origem_bin;
		return $this;
	}

	public function getConfcodret() {
		return $this->confcodret;
	}

	public function setConfcodret($confcodret) {
		$this->confcodret = $confcodret;
		return $this;
	}

	public function getConfmsgret() {
		return $this->confmsgret;
	}

	public function setConfmsgret($confmsgret) {
		$this->confmsgret = $confmsgret;
		return $this;
	}
}