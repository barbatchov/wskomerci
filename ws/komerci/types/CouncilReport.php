<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class CouncilReport extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var string */
    private $Filiacao;

     /** @var string */
    private $Distribuidor;

     /** @var string */
    private $Data_Inicial;

     /** @var string */
    private $Data_Final;

     /** @var string */
    private $Tipo_Trx;

     /** @var string */
    private $Status_Trx;

     /** @var string */
    private $Servico_AVS;

     /** @var string */
    private $Programa;

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
    public function getData_Inicial() {
        return $this->Data_Inicial;
    }

    /**
     * @return string
     */
    public function getData_Final() {
        return $this->Data_Final;
    }

    /**
     * @return string
     */
    public function getTipo_Trx() {
        return $this->Tipo_Trx;
    }

    /**
     * @return string
     */
    public function getStatus_Trx() {
        return $this->Status_Trx;
    }

    /**
     * @return string
     */
    public function getServico_AVS() {
        return $this->Servico_AVS;
    }

    /**
     * @return string
     */
    public function getPrograma() {
        return $this->Programa;
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
     * @return CouncilReport
     */
    public function setFiliacao(string $param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param string
     * @return CouncilReport
     */
    public function setDistribuidor(string $param = null) {
        $this->Distribuidor = $param;
        return $this;
    }

    /**
     * @param string
     * @return CouncilReport
     */
    public function setData_Inicial(string $param = null) {
        $this->Data_Inicial = $param;
        return $this;
    }

    /**
     * @param string
     * @return CouncilReport
     */
    public function setData_Final(string $param = null) {
        $this->Data_Final = $param;
        return $this;
    }

    /**
     * @param string
     * @return CouncilReport
     */
    public function setTipo_Trx(string $param = null) {
        $this->Tipo_Trx = $param;
        return $this;
    }

    /**
     * @param string
     * @return CouncilReport
     */
    public function setStatus_Trx(string $param = null) {
        $this->Status_Trx = $param;
        return $this;
    }

    /**
     * @param string
     * @return CouncilReport
     */
    public function setServico_AVS(string $param = null) {
        $this->Servico_AVS = $param;
        return $this;
    }

    /**
     * @param string
     * @return CouncilReport
     */
    public function setPrograma(string $param = null) {
        $this->Programa = $param;
        return $this;
    }

    /**
     * @param string
     * @return CouncilReport
     */
    public function setUsr(string $param = null) {
        $this->Usr = $param;
        return $this;
    }

    /**
     * @param string
     * @return CouncilReport
     */
    public function setPwd(string $param = null) {
        $this->Pwd = $param;
        return $this;
    }

}