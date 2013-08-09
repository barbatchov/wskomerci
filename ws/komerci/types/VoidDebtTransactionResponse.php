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
class VoidDebtTransactionResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\VoidDebtTransactionResult */
    public $VoidDebtTransactionResult;

    /**
     * @return \ws\komerci\types\VoidDebtTransactionResult
     */
    public function getVoidDebtTransactionResult() {
        return $this->VoidDebtTransactionResult;
    }

    /**
     * @param \ws\komerci\types\VoidDebtTransactionResult
     * @return VoidDebtTransactionResponse
     */
    public function setVoidDebtTransactionResult(\ws\komerci\types\VoidDebtTransactionResult $param = null) {
        $this->VoidDebtTransactionResult = $param;
        return $this;
    }

}