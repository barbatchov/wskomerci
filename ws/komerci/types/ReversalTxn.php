<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ReversalTxn extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var string */
    private $Filiacao;

     /** @var string */
    private $Distribuidor;

     /** @var string */
    private $Total;

     /** @var string */
    private $Data;

     /** @var string */
    private $NumAutor;

     /** @var string */
    private $NumSqn;

     /** @var string */
    private $NumPedido;

     /** @var string */
    private $Parcelas;

     /** @var string */
    private $Usr;

     /** @var string */
    private $Pwd;

    /**
     * @return string
     */
    public function getFiliacao() {
        return $this->Filiacao;
    }

    /**
     * @return string
     */
    public function getDistribuidor() {
        return $this->Distribuidor;
    }

    /**
     * @return string
     */
    public function getTotal() {
        return $this->Total;
    }

    /**
     * @return string
     */
    public function getData() {
        return $this->Data;
    }

    /**
     * @return string
     */
    public function getNumAutor() {
        return $this->NumAutor;
    }

    /**
     * @return string
     */
    public function getNumSqn() {
        return $this->NumSqn;
    }

    /**
     * @return string
     */
    public function getNumPedido() {
        return $this->NumPedido;
    }

    /**
     * @return string
     */
    public function getParcelas() {
        return $this->Parcelas;
    }

    /**
     * @return string
     */
    public function getUsr() {
        return $this->Usr;
    }

    /**
     * @return string
     */
    public function getPwd() {
        return $this->Pwd;
    }

    /**
     * @param string
     * @return ReversalTxn
     */
    public function setFiliacao(string $param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param string
     * @return ReversalTxn
     */
    public function setDistribuidor(string $param = null) {
        $this->Distribuidor = $param;
        return $this;
    }

    /**
     * @param string
     * @return ReversalTxn
     */
    public function setTotal(string $param = null) {
        $this->Total = $param;
        return $this;
    }

    /**
     * @param string
     * @return ReversalTxn
     */
    public function setData(string $param = null) {
        $this->Data = $param;
        return $this;
    }

    /**
     * @param string
     * @return ReversalTxn
     */
    public function setNumAutor(string $param = null) {
        $this->NumAutor = $param;
        return $this;
    }

    /**
     * @param string
     * @return ReversalTxn
     */
    public function setNumSqn(string $param = null) {
        $this->NumSqn = $param;
        return $this;
    }

    /**
     * @param string
     * @return ReversalTxn
     */
    public function setNumPedido(string $param = null) {
        $this->NumPedido = $param;
        return $this;
    }

    /**
     * @param string
     * @return ReversalTxn
     */
    public function setParcelas(string $param = null) {
        $this->Parcelas = $param;
        return $this;
    }

    /**
     * @param string
     * @return ReversalTxn
     */
    public function setUsr(string $param = null) {
        $this->Usr = $param;
        return $this;
    }

    /**
     * @param string
     * @return ReversalTxn
     */
    public function setPwd(string $param = null) {
        $this->Pwd = $param;
        return $this;
    }

}