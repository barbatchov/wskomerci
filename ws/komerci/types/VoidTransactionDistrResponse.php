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
class VoidTransactionDistrResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\VoidTransactionDistrResult */
    public $VoidTransactionDistrResult;

    /**
     * @return \ws\komerci\types\VoidTransactionDistrResult
     */
    public function getVoidTransactionDistrResult() {
        return $this->VoidTransactionDistrResult;
    }

    /**
     * @param \ws\komerci\types\VoidTransactionDistrResult
     * @return VoidTransactionDistrResponse
     */
    public function setVoidTransactionDistrResult(\ws\komerci\types\VoidTransactionDistrResult $param = null) {
        $this->VoidTransactionDistrResult = $param;
        return $this;
    }

}