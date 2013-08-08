<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class VoidTransactionDistr extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var string */
    private $Total;

     /** @var string */
    private $Filiacao;

     /** @var string */
    private $Data;

     /** @var string */
    private $NumCV;

     /** @var string */
    private $NumAutor;

     /** @var string */
    private $Concentrador;

     /** @var string */
    private $Distribuidor;

     /** @var string */
    private $Usr;

     /** @var string */
    private $Pwd;

    /**
     * @return string
     */
    public function getTotal() {
        return $this->Total;
    }

    /**
     * @return string
     */
    public function getFiliacao() {
        return $this->Filiacao;
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
    public function getNumCV() {
        return $this->NumCV;
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
    public function getConcentrador() {
        return $this->Concentrador;
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
     * @return VoidTransactionDistr
     */
    public function setTotal(string $param = null) {
        $this->Total = $param;
        return $this;
    }

    /**
     * @param string
     * @return VoidTransactionDistr
     */
    public function setFiliacao(string $param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param string
     * @return VoidTransactionDistr
     */
    public function setData(string $param = null) {
        $this->Data = $param;
        return $this;
    }

    /**
     * @param string
     * @return VoidTransactionDistr
     */
    public function setNumCV(string $param = null) {
        $this->NumCV = $param;
        return $this;
    }

    /**
     * @param string
     * @return VoidTransactionDistr
     */
    public function setNumAutor(string $param = null) {
        $this->NumAutor = $param;
        return $this;
    }

    /**
     * @param string
     * @return VoidTransactionDistr
     */
    public function setConcentrador(string $param = null) {
        $this->Concentrador = $param;
        return $this;
    }

    /**
     * @param string
     * @return VoidTransactionDistr
     */
    public function setDistribuidor(string $param = null) {
        $this->Distribuidor = $param;
        return $this;
    }

    /**
     * @param string
     * @return VoidTransactionDistr
     */
    public function setUsr(string $param = null) {
        $this->Usr = $param;
        return $this;
    }

    /**
     * @param string
     * @return VoidTransactionDistr
     */
    public function setPwd(string $param = null) {
        $this->Pwd = $param;
        return $this;
    }

}