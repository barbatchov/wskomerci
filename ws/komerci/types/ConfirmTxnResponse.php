<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ConfirmTxnResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\ConfirmTxnResult */
    protected $ConfirmTxnResult;

    /**
     * @return \ws\komerci\types\ConfirmTxnResult
     */
    public function getConfirmTxnResult() {
        return $this->ConfirmTxnResult;
    }

    /**
     * @param \ws\komerci\types\ConfirmTxnResult
     * @return ConfirmTxnResponse
     */
    public function setConfirmTxnResult(\ws\komerci\types\ConfirmTxnResult $param = null) {
        $this->ConfirmTxnResult = $param;
        return $this;
    }

}