<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class VoidConfPreAuthorizationResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\VoidConfPreAuthorizationResult */
    private $VoidConfPreAuthorizationResult;

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorizationResult
     */
    public function getVoidConfPreAuthorizationResult() {
        return $this->VoidConfPreAuthorizationResult;
    }

    /**
     * @param \ws\komerci\types\VoidConfPreAuthorizationResult
     * @return \ws\komerci\types\VoidConfPreAuthorizationResponse
     */
    public function setVoidConfPreAuthorizationResult(\ws\komerci\types\VoidConfPreAuthorizationResult $param = null) {
        $this->VoidConfPreAuthorizationResult = $param;
        return $this;
    }

}