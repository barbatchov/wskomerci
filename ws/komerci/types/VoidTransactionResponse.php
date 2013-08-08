<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class VoidTransactionResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\VoidTransactionResult */
    protected $VoidTransactionResult;

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