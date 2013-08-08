<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ConfPreAuthorization extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \string */
    protected $Filiacao;

     /** @var \string */
    protected $Distribuidor;

     /** @var \string */
    protected $Total;

     /** @var \string */
    protected $Parcelas;

     /** @var \string */
    protected $Data;

     /** @var \string */
    protected $NumAutor;

     /** @var \string */
    protected $NumCV;

     /** @var \string */
    protected $Concentrador;

     /** @var \string */
    protected $Usr;

     /** @var \string */
    protected $Pwd;

    /**
     * @return \string
     */
    public function getFiliacao() {
        return $this->Filiacao;
    }

    /**
     * @return \string
     */
    public function getDistribuidor() {
        return $this->Distribuidor;
    }

    /**
     * @return \string
     */
    public function getTotal() {
        return $this->Total;
    }

    /**
     * @return \string
     */
    public function getParcelas() {
        return $this->Parcelas;
    }

    /**
     * @return \string
     */
    public function getData() {
        return $this->Data;
    }

    /**
     * @return \string
     */
    public function getNumAutor() {
        return $this->NumAutor;
    }

    /**
     * @return \string
     */
    public function getNumCV() {
        return $this->NumCV;
    }

    /**
     * @return \string
     */
    public function getConcentrador() {
        return $this->Concentrador;
    }

    /**
     * @return \string
     */
    public function getUsr() {
        return $this->Usr;
    }

    /**
     * @return \string
     */
    public function getPwd() {
        return $this->Pwd;
    }

    /**
     * @param \string
     * @return ConfPreAuthorization
     */
    public function setFiliacao($param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfPreAuthorization
     */
    public function setDistribuidor($param = null) {
        $this->Distribuidor = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfPreAuthorization
     */
    public function setTotal($param = null) {
        $this->Total = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfPreAuthorization
     */
    public function setParcelas($param = null) {
        $this->Parcelas = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfPreAuthorization
     */
    public function setData($param = null) {
        $this->Data = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfPreAuthorization
     */
    public function setNumAutor($param = null) {
        $this->NumAutor = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfPreAuthorization
     */
    public function setNumCV($param = null) {
        $this->NumCV = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfPreAuthorization
     */
    public function setConcentrador($param = null) {
        $this->Concentrador = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfPreAuthorization
     */
    public function setUsr($param = null) {
        $this->Usr = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfPreAuthorization
     */
    public function setPwd($param = null) {
        $this->Pwd = $param;
        return $this;
    }

}