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
class ConfirmTxnTst extends KomerciEntityAbstract {
     /** @var \string */
    public $Data;

     /** @var \string */
    public $NumSqn;

     /** @var \string */
    public $NumCV;

     /** @var \string */
    public $NumAutor;

     /** @var \string */
    public $Parcelas;

     /** @var \string */
    public $TransOrig;

     /** @var \string */
    public $Total;

     /** @var \string */
    public $Filiacao;

     /** @var \string */
    public $Distribuidor;

     /** @var \string */
    public $NumPedido;

     /** @var \string */
    public $Pax1;

     /** @var \string */
    public $Pax2;

     /** @var \string */
    public $Pax3;

     /** @var \string */
    public $Pax4;

     /** @var \string */
    public $Numdoc1;

     /** @var \string */
    public $Numdoc2;

     /** @var \string */
    public $Numdoc3;

     /** @var \string */
    public $Numdoc4;

     /** @var \string */
    public $AddData;

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
    public function getAddData() {
        return $this->AddData;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setData($param = null) {
        $this->Data = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setNumSqn($param = null) {
        $this->NumSqn = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setNumCV($param = null) {
        $this->NumCV = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setNumAutor($param = null) {
        $this->NumAutor = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setParcelas($param = null) {
        $this->Parcelas = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setTransOrig($param = null) {
        $this->TransOrig = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setTotal($param = null) {
        $this->Total = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setFiliacao($param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setDistribuidor($param = null) {
        $this->Distribuidor = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setNumPedido($param = null) {
        $this->NumPedido = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setPax1($param = null) {
        $this->Pax1 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setPax2($param = null) {
        $this->Pax2 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setPax3($param = null) {
        $this->Pax3 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setPax4($param = null) {
        $this->Pax4 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setNumdoc1($param = null) {
        $this->Numdoc1 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setNumdoc2($param = null) {
        $this->Numdoc2 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setNumdoc3($param = null) {
        $this->Numdoc3 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setNumdoc4($param = null) {
        $this->Numdoc4 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return ConfirmTxnTst
     */
    public function setAddData($param = null) {
        $this->AddData = $param;
        return $this;
    }

}