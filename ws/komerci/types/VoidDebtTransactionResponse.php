<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;
use \ws\komerci\decorators\KomerciValidableInterface;

class VoidDebtTransactionResponse extends KomerciEntityAbstract implements KomerciServiceInterface, KomerciValidableInterface {
     /** @var \ws\komerci\types\VoidDebtTransactionResult */
    protected $VoidDebtTransactionResult;

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