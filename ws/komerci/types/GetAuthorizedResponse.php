<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class GetAuthorizedResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\GetAuthorizedResult */
    protected $GetAuthorizedResult;

    /**
     * @return \ws\komerci\types\GetAuthorizedResult
     */
    public function getGetAuthorizedResult() {
        return $this->GetAuthorizedResult;
    }

    /**
     * @param \ws\komerci\types\GetAuthorizedResult
     * @return GetAuthorizedResponse
     */
    public function setGetAuthorizedResult(\ws\komerci\types\GetAuthorizedResult $param = null) {
        $this->GetAuthorizedResult = $param;
        return $this;
    }

}