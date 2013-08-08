<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;
use \ws\komerci\decorators\KomerciValidableInterface;

class VoidConfPreAuthorizationResponse extends KomerciEntityAbstract implements KomerciServiceInterface, KomerciValidableInterface {
     /** @var \ws\komerci\types\VoidConfPreAuthorizationResult */
    protected $VoidConfPreAuthorizationResult;

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorizationResult
     */
    public function getVoidConfPreAuthorizationResult() {
        return $this->VoidConfPreAuthorizationResult;
    }

    /**
     * @param \ws\komerci\types\VoidConfPreAuthorizationResult
     * @return VoidConfPreAuthorizationResponse
     */
    public function setVoidConfPreAuthorizationResult(\ws\komerci\types\VoidConfPreAuthorizationResult $param = null) {
        $this->VoidConfPreAuthorizationResult = $param;
        return $this;
    }

}