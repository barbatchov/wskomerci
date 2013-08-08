<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class SalesSumm extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var string */
    private $Filiacao;

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
     * @return SalesSumm
     */
    public function setFiliacao(string $param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param string
     * @return SalesSumm
     */
    public function setUsr(string $param = null) {
        $this->Usr = $param;
        return $this;
    }

    /**
     * @param string
     * @return SalesSumm
     */
    public function setPwd(string $param = null) {
        $this->Pwd = $param;
        return $this;
    }

}