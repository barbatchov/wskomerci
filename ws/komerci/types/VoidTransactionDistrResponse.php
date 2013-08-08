<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class VoidTransactionDistrResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\VoidTransactionDistrResult */
    protected $VoidTransactionDistrResult;

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