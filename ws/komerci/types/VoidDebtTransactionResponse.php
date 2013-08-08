<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class VoidDebtTransactionResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\VoidDebtTransactionResult */
    private $VoidDebtTransactionResult;

    /**
     * @return \ws\komerci\types\VoidDebtTransactionResult
     */
    public function getVoidDebtTransactionResult() {
        return $this->VoidDebtTransactionResult;
    }

    /**
     * @param \ws\komerci\types\VoidDebtTransactionResult
     * @return \ws\komerci\types\VoidDebtTransactionResponse
     */
    public function setVoidDebtTransactionResult(\ws\komerci\types\VoidDebtTransactionResult $param = null) {
        $this->VoidDebtTransactionResult = $param;
        return $this;
    }

}