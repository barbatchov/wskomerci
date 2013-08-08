<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class VoidPreAuthorizationResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\VoidPreAuthorizationResult */
    protected $VoidPreAuthorizationResult;

    /**
     * @return \ws\komerci\types\VoidPreAuthorizationResult
     */
    public function getVoidPreAuthorizationResult() {
        return $this->VoidPreAuthorizationResult;
    }

    /**
     * @param \ws\komerci\types\VoidPreAuthorizationResult
     * @return VoidPreAuthorizationResponse
     */
    public function setVoidPreAuthorizationResult(\ws\komerci\types\VoidPreAuthorizationResult $param = null) {
        $this->VoidPreAuthorizationResult = $param;
        return $this;
    }

}