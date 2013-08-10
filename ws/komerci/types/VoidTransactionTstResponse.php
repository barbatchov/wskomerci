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
class VoidTransactionTstResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\VoidTransactionTstResult */
    public $VoidTransactionTstResult;

    /**
     * @return \ws\komerci\types\VoidTransactionTstResult
     */
    public function getVoidTransactionTstResult() {
        return $this->VoidTransactionTstResult;
    }

    /**
     * @param \ws\komerci\types\VoidTransactionTstResult
     * @return VoidTransactionTstResponse
     */
    public function setVoidTransactionTstResult(\ws\komerci\types\VoidTransactionTstResult $param = null) {
        $this->VoidTransactionTstResult = $param;
        return $this;
    }

}