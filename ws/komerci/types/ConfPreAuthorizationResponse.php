<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ConfPreAuthorizationResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\ConfPreAuthorizationResult */
    private $ConfPreAuthorizationResult;

    /**
     * @return \ws\komerci\types\ConfPreAuthorizationResult
     */
    public function getConfPreAuthorizationResult() {
        return $this->ConfPreAuthorizationResult;
    }

    /**
     * @param \ws\komerci\types\ConfPreAuthorizationResult
     * @return \ws\komerci\types\ConfPreAuthorizationResponse
     */
    public function setConfPreAuthorizationResult(\ws\komerci\types\ConfPreAuthorizationResult $param = null) {
        $this->ConfPreAuthorizationResult = $param;
        return $this;
    }

}