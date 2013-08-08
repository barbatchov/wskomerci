<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ConfirmTxn_AD extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var string */
    private $Data;

     /** @var string */
    private $NumSqn;

     /** @var string */
    private $NumCV;

     /** @var string */
    private $NumAutor;

     /** @var string */
    private $Parcelas;

     /** @var string */
    private $TransOrig;

     /** @var string */
    private $Total;

     /** @var string */
    private $Filiacao;

     /** @var string */
    private $Distribuidor;

     /** @var string */
    private $NumPedido;

     /** @var string */
    private $Pax1;

     /** @var string */
    private $Pax2;

     /** @var string */
    private $Pax3;

     /** @var string */
    private $Pax4;

     /** @var string */
    private $Numdoc1;

     /** @var string */
    private $Numdoc2;

     /** @var string */
    private $Numdoc3;

     /** @var string */
    private $Numdoc4;

     /** @var string */
    private $Cod_Banco;

     /** @var string */
    private $Origem_Bin;

     /** @var string */
    private $AddData;

    /**
     * @return string
     */
    public function getData() {
        return $this->Data;
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
    public function getParcelas() {
        return $this->Parcelas;
    }

    /**
     * @return string
     */
    public function getTransOrig() {
        return $this->TransOrig;
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
    public function getNumPedido() {
        return $this->NumPedido;
    }

    /**
     * @return string
     */
    public function getPax1() {
        return $this->Pax1;
    }

    /**
     * @return string
     */
    public function getPax2() {
        return $this->Pax2;
    }

    /**
     * @return string
     */
    public function getPax3() {
        return $this->Pax3;
    }

    /**
     * @return string
     */
    public function getPax4() {
        return $this->Pax4;
    }

    /**
     * @return string
     */
    public function getNumdoc1() {
        return $this->Numdoc1;
    }

    /**
     * @return string
     */
    public function getNumdoc2() {
        return $this->Numdoc2;
    }

    /**
     * @return string
     */
    public function getNumdoc3() {
        return $this->Numdoc3;
    }

    /**
     * @return string
     */
    public function getNumdoc4() {
        return $this->Numdoc4;
    }

    /**
     * @return string
     */
    public function getCod_Banco() {
        return $this->Cod_Banco;
    }

    /**
     * @return string
     */
    public function getOrigem_Bin() {
        return $this->Origem_Bin;
    }

    /**
     * @return string
     */
    public function getAddData() {
        return $this->AddData;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setData(string $param = null) {
        $this->Data = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setNumSqn(string $param = null) {
        $this->NumSqn = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setNumCV(string $param = null) {
        $this->NumCV = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setNumAutor(string $param = null) {
        $this->NumAutor = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setParcelas(string $param = null) {
        $this->Parcelas = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setTransOrig(string $param = null) {
        $this->TransOrig = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setTotal(string $param = null) {
        $this->Total = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setFiliacao(string $param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setDistribuidor(string $param = null) {
        $this->Distribuidor = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setNumPedido(string $param = null) {
        $this->NumPedido = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setPax1(string $param = null) {
        $this->Pax1 = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setPax2(string $param = null) {
        $this->Pax2 = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setPax3(string $param = null) {
        $this->Pax3 = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setPax4(string $param = null) {
        $this->Pax4 = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setNumdoc1(string $param = null) {
        $this->Numdoc1 = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setNumdoc2(string $param = null) {
        $this->Numdoc2 = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setNumdoc3(string $param = null) {
        $this->Numdoc3 = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setNumdoc4(string $param = null) {
        $this->Numdoc4 = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setCod_Banco(string $param = null) {
        $this->Cod_Banco = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setOrigem_Bin(string $param = null) {
        $this->Origem_Bin = $param;
        return $this;
    }

    /**
     * @param string
     * @return ConfirmTxn_AD
     */
    public function setAddData(string $param = null) {
        $this->AddData = $param;
        return $this;
    }

}