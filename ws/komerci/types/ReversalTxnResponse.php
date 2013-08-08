<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ReversalTxnResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\ReversalTxnResult */
    protected $ReversalTxnResult;

    /**
     * @return \ws\komerci\types\ReversalTxnResult
     */
    public function getReversalTxnResult() {
        return $this->ReversalTxnResult;
    }

    /**
     * @param \ws\komerci\types\ReversalTxnResult
     * @return ReversalTxnResponse
     */
    public function setReversalTxnResult(\ws\komerci\types\ReversalTxnResult $param = null) {
        $this->ReversalTxnResult = $param;
        return $this;
    }

}