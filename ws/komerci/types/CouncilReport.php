<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;
use \ws\komerci\decorators\KomerciValidableInterface;

class CouncilReport extends KomerciEntityAbstract {
     /** @var \string */
    protected $Filiacao;

     /** @var \string */
    protected $Distribuidor;

     /** @var \string */
    protected $Data_Inicial;

     /** @var \string */
    protected $Data_Final;

     /** @var \string */
    protected $Tipo_Trx;

     /** @var \string */
    protected $Status_Trx;

     /** @var \string */
    protected $Servico_AVS;

     /** @var \string */
    protected $Programa;

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
    public function getData_Inicial() {
        return $this->Data_Inicial;
    }

    /**
     * @return \string
     */
    public function getData_Final() {
        return $this->Data_Final;
    }

    /**
     * @return \string
     */
    public function getTipo_Trx() {
        return $this->Tipo_Trx;
    }

    /**
     * @return \string
     */
    public function getStatus_Trx() {
        return $this->Status_Trx;
    }

    /**
     * @return \string
     */
    public function getServico_AVS() {
        return $this->Servico_AVS;
    }

    /**
     * @return \string
     */
    public function getPrograma() {
        return $this->Programa;
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
     * @return CouncilReport
     */
    public function setFiliacao($param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param \string
     * @return CouncilReport
     */
    public function setDistribuidor($param = null) {
        $this->Distribuidor = $param;
        return $this;
    }

    /**
     * @param \string
     * @return CouncilReport
     */
    public function setData_Inicial($param = null) {
        $this->Data_Inicial = $param;
        return $this;
    }

    /**
     * @param \string
     * @return CouncilReport
     */
    public function setData_Final($param = null) {
        $this->Data_Final = $param;
        return $this;
    }

    /**
     * @param \string
     * @return CouncilReport
     */
    public function setTipo_Trx($param = null) {
        $this->Tipo_Trx = $param;
        return $this;
    }

    /**
     * @param \string
     * @return CouncilReport
     */
    public function setStatus_Trx($param = null) {
        $this->Status_Trx = $param;
        return $this;
    }

    /**
     * @param \string
     * @return CouncilReport
     */
    public function setServico_AVS($param = null) {
        $this->Servico_AVS = $param;
        return $this;
    }

    /**
     * @param \string
     * @return CouncilReport
     */
    public function setPrograma($param = null) {
        $this->Programa = $param;
        return $this;
    }

    /**
     * @param \string
     * @return CouncilReport
     */
    public function setUsr($param = null) {
        $this->Usr = $param;
        return $this;
    }

    /**
     * @param \string
     * @return CouncilReport
     */
    public function setPwd($param = null) {
        $this->Pwd = $param;
        return $this;
    }

}