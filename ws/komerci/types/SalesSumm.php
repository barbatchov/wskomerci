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
class SalesSumm extends KomerciEntityAbstract {
     /** @var \string */
    public $Filiacao;

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
     * @return SalesSumm
     */
    public function setFiliacao($param = null) {
        $this->Filiacao = $param;
        return $this;
    }

    /**
     * @param \string
     * @return SalesSumm
     */
    public function setUsr($param = null) {
        $this->Usr = $param;
        return $this;
    }

    /**
     * @param \string
     * @return SalesSumm
     */
    public function setPwd($param = null) {
        $this->Pwd = $param;
        return $this;
    }

}