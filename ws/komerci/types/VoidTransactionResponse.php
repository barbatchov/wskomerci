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
class VoidTransactionResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\VoidTransactionResult */
    public $VoidTransactionResult;

    /**
     * @return \ws\komerci\types\VoidTransactionResult
     */
    public function getVoidTransactionResult() {
        return $this->VoidTransactionResult;
    }

    /**
     * @param \ws\komerci\types\VoidTransactionResult
     * @return VoidTransactionResponse
     */
    public function setVoidTransactionResult(\ws\komerci\types\VoidTransactionResult $param = null) {
        $this->VoidTransactionResult = $param;
        return $this;
    }

}