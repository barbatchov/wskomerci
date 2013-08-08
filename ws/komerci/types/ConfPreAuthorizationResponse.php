<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ConfPreAuthorizationResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\ConfPreAuthorizationResult */
    protected $ConfPreAuthorizationResult;

    /**
     * @return \ws\komerci\types\ConfPreAuthorizationResult
     */
    public function getConfPreAuthorizationResult() {
        return $this->ConfPreAuthorizationResult;
    }

    /**
     * @param \ws\komerci\types\ConfPreAuthorizationResult
     * @return ConfPreAuthorizationResponse
     */
    public function setConfPreAuthorizationResult(\ws\komerci\types\ConfPreAuthorizationResult $param = null) {
        $this->ConfPreAuthorizationResult = $param;
        return $this;
    }

}