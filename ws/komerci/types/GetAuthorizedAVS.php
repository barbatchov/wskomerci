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
class GetAuthorizedAVS extends KomerciEntityAbstract {
     /** @var \string */
    public $Total;

     /** @var \string */
    public $Transacao;

     /** @var \string */
    public $Parcelas;

     /** @var \string */
    public $Filiacao;

     /** @var \string */
    public $NumPedido;

     /** @var \string */
    public $Nrcartao;

     /** @var \string */
    public $CVC2;

     /** @var \string */
    public $Mes;

     /** @var \string */
    public $Ano;

     /** @var \string */
    public $Portador;

     /** @var \string */
    public $CPF;

     /** @var \string */
    public $Endereco;

     /** @var \string */
    public $Num1;

     /** @var \string */
    public $Complemento;

     /** @var \string */
    public $Cep1;

     /** @var \string */
    public $Cep2;

     /** @var \string */
    public $IATA;

     /** @var \string */
    public $Distribuidor;

     /** @var \string */
    public $Concentrador;

     /** @var \string */
    public $TaxaEmbarque;

     /** @var \string */
    public $Entrada;

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

    /**
     * @return \string
     */
    public function getTotal() {
        return $this->Total;
    }

    /**
     * @return \string
     */
    public function getTransacao() {
        return $this->Transacao;
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
    public function getFiliacao() {
        return $this->Filiacao;
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
    public function getNrcartao() {
        return $this->Nrcartao;
    }

    /**
     * @return \string
     */
    public function getCVC2() {
        return $this->CVC2;
    }

    /**
     * @return \string
     */
    public function getMes() {
        return $this->Mes;
    }

    /**
     * @return \string
     */
    public function getAno() {
        return $this->Ano;
    }

    /**
     * @return \string
     */
    public function getPortador() {
        return $this->Portador;
    }

    /**
     * @return \string
     */
    public function getCPF() {
        return $this->CPF;
    }

    /**
     * @return \string
     */
    public function getEndereco() {
        return $this->Endereco;
    }

    /**
     * @return \string
     */
    public function getNum1() {
        return $this->Num1;
    }

    /**
     * @return \string
     */
    public function getComplemento() {
        return $this->Complemento;
    }

    /**
     * @return \string
     */
    public function getCep1() {
        return $this->Cep1;
    }

    /**
     * @return \string
     */
    public function getCep2() {
        return $this->Cep2;
    }

    /**
     * @return \string
     */
    public function getIATA() {
        return $this->IATA;
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
    public function getConcentrador() {
        return $this->Concentrador;
    }

    /**
     * @return \string
     */
    public function getTaxaEmbarque() {
        return $this->TaxaEmbarque;
    }

    /**
     * @return \string
     */
    public function getEntrada() {
        return $this->Entrada;
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
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setTotal($param = null) {
        $this->Total = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setTransacao($param = null) {
        $this->Transacao = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setParcelas($param = null) {
        $this->Parcelas = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setFiliacao($param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setNumPedido($param = null) {
        $this->NumPedido = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setNrcartao($param = null) {
        $this->Nrcartao = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setCVC2($param = null) {
        $this->CVC2 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setMes($param = null) {
        $this->Mes = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setAno($param = null) {
        $this->Ano = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setPortador($param = null) {
        $this->Portador = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setCPF($param = null) {
        $this->CPF = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setEndereco($param = null) {
        $this->Endereco = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setNum1($param = null) {
        $this->Num1 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setComplemento($param = null) {
        $this->Complemento = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setCep1($param = null) {
        $this->Cep1 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setCep2($param = null) {
        $this->Cep2 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setIATA($param = null) {
        $this->IATA = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setDistribuidor($param = null) {
        $this->Distribuidor = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setConcentrador($param = null) {
        $this->Concentrador = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setTaxaEmbarque($param = null) {
        $this->TaxaEmbarque = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setEntrada($param = null) {
        $this->Entrada = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setPax1($param = null) {
        $this->Pax1 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setPax2($param = null) {
        $this->Pax2 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setPax3($param = null) {
        $this->Pax3 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setPax4($param = null) {
        $this->Pax4 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setNumdoc1($param = null) {
        $this->Numdoc1 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setNumdoc2($param = null) {
        $this->Numdoc2 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setNumdoc3($param = null) {
        $this->Numdoc3 = $param;
        return $this;
    }

    /**
     * @param \string
     * @return GetAuthorizedAVS
     */
    public function setNumdoc4($param = null) {
        $this->Numdoc4 = $param;
        return $this;
    }

}