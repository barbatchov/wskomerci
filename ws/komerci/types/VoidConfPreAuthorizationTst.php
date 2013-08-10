<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;
use \ws\komerci\decorators\KomerciValidableInterface;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidConfPreAuthorizationTst extends KomerciEntityAbstract {
     /** @var \string */
    public $Filiacao;

     /** @var \string */
    public $Distribuidor;

     /** @var \string */
    public $Total;

     /** @var \string */
    public $Data;

     /** @var \string */
    public $NumAutor;

     /** @var \string */
    public $NumCV;

     /** @var \string */
    public $Concentrador;

     /** @var \string */
    public $Usr;

     /** @var \string */
    public $Pwd;

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
     * @return VoidConfPreAuthorizationTst
     */
    public function setFiliacao($param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param \string
     * @return VoidConfPreAuthorizationTst
     */
    public function setDistribuidor($param = null) {
        $this->Distribuidor = $param;
        return $this;
    }

    /**
     * @param \string
     * @return VoidConfPreAuthorizationTst
     */
    public function setTotal($param = null) {
        $this->Total = $param;
        return $this;
    }

    /**
     * @param \string
     * @return VoidConfPreAuthorizationTst
     */
    public function setData($param = null) {
        $this->Data = $param;
        return $this;
    }

    /**
     * @param \string
     * @return VoidConfPreAuthorizationTst
     */
    public function setNumAutor($param = null) {
        $this->NumAutor = $param;
        return $this;
    }

    /**
     * @param \string
     * @return VoidConfPreAuthorizationTst
     */
    public function setNumCV($param = null) {
        $this->NumCV = $param;
        return $this;
    }

    /**
     * @param \string
     * @return VoidConfPreAuthorizationTst
     */
    public function setConcentrador($param = null) {
        $this->Concentrador = $param;
        return $this;
    }

    /**
     * @param \string
     * @return VoidConfPreAuthorizationTst
     */
    public function setUsr($param = null) {
        $this->Usr = $param;
        return $this;
    }

    /**
     * @param \string
     * @return VoidConfPreAuthorizationTst
     */
    public function setPwd($param = null) {
        $this->Pwd = $param;
        return $this;
    }

}