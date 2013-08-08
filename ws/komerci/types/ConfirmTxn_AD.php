<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ConfirmTxn_AD extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \string */
    protected $Data;

     /** @var \string */
    protected $NumSqn;

     /** @var \string */
    protected $NumCV;

     /** @var \string */
    protected $NumAutor;

     /** @var \string */
    protected $Parcelas;

     /** @var \string */
    protected $TransOrig;

     /** @var \string */
    protected $Total;

     /** @var \string */
    protected $Filiacao;

     /** @var \string */
    protected $Distribuidor;

     /** @var \string */
    protected $NumPedido;

     /** @var \string */
    protected $Pax1;

     /** @var \string */
    protected $Pax2;

     /** @var \string */
    protected $Pax3;

     /** @var \string */
    protected $Pax4;

     /** @var \string */
    protected $Numdoc1;

     /** @var \string */
    protected $Numdoc2;

     /** @var \string */
    protected $Numdoc3;

     /** @var \string */
    protected $Numdoc4;

     /** @var \string */
    protected $Cod_Banco;

     /** @var \string */
    protected $Origem_Bin;

     /** @var \string */
    protected $AddData;

    /**
     * @return \string
     */
    public function getData() {
        return $this->Data;
    }

    /**
     * @return \string
     */
    public function getNumSqn() {
        return $this->NumSqn;
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
    public function getNumAutor() {
        return $this->NumAutor;
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
    public function getTransOrig() {
        return $this->TransOrig;
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
    public function getNumPedido() {
        return $this->NumPedido;
    }

    /**
     * @return \string
     */
    public function getPax1() {
        return $this->Pax1;
    }

    /**
     * @return \string
     */
    public function getPax2() {
        return $this->Pax2;
    }

    /**
     * @return \string
     */
    public function getPax3() {
        return $this->Pax3;
    }

    /**
     * @return \string
     */
    public function getPax4() {
        return $this->Pax4;
    }

    /**
     * @return \string
     */
    public function getNumdoc1() {
        return $this->Numdoc1;
    }

    /**
     * @return \string
     */
    public function getNumdoc2() {
        return $this->Numdoc2;
    }

    /**
     * @return \string
     */
    public function getNumdoc3() {
        return $this->Numdoc3;
    }

    /**
     * @return \string
     */
    public function getNumdoc4() {
        return $this->Numdoc4;
    }

    /**
     * @return \string
     */
    public function getCod_Banco() {
        return $this->Cod_Banco;
    }

    /**
     * @return \string
     */
    public function getOrigem_Bin() {
        return $this->Origem_Bin;
    }

    /**
     * @return \string
     */
    public function getAddData() {
        return $this->AddData;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setData($param = null) {
        $this->Data = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setNumSqn($param = null) {
        $this->NumSqn = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setNumCV($param = null) {
        $this->NumCV = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setNumAutor($param = null) {
        $this->NumAutor = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setParcelas($param = null) {
        $this->Parcelas = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setTransOrig($param = null) {
        $this->TransOrig = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setTotal($param = null) {
        $this->Total = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setFiliacao($param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setDistribuidor($param = null) {
        $this->Distribuidor = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setNumPedido($param = null) {
        $this->NumPedido = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setPax1($param = null) {
        $this->Pax1 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setPax2($param = null) {
        $this->Pax2 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setPax3($param = null) {
        $this->Pax3 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setPax4($param = null) {
        $this->Pax4 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setNumdoc1($param = null) {
        $this->Numdoc1 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setNumdoc2($param = null) {
        $this->Numdoc2 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setNumdoc3($param = null) {
        $this->Numdoc3 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setNumdoc4($param = null) {
        $this->Numdoc4 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setCod_Banco($param = null) {
        $this->Cod_Banco = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setOrigem_Bin($param = null) {
        $this->Origem_Bin = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxn_AD
     */
    public function setAddData($param = null) {
        $this->AddData = $param;
        return $this;
    }

}