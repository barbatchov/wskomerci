<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ConfirmTxn_ADResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\ConfirmTxn_ADResult */
    protected $ConfirmTxn_ADResult;

    /**
     * @return \ws\komerci\types\ConfirmTxn_ADResult
     */
    public function getConfirmTxn_ADResult() {
        return $this->ConfirmTxn_ADResult;
    }

    /**
     * @param \ws\komerci\types\ConfirmTxn_ADResult
     * @return ConfirmTxn_ADResponse
     */
    public function setConfirmTxn_ADResult(\ws\komerci\types\ConfirmTxn_ADResult $param = null) {
        $this->ConfirmTxn_ADResult = $param;
        return $this;
    }

}