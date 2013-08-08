<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class GetAuthorized_ADResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\GetAuthorized_ADResult */
    private $GetAuthorized_ADResult;

    /**
     * @return \ws\komerci\types\GetAuthorized_ADResult
     */
    public function getGetAuthorized_ADResult() {
        return $this->GetAuthorized_ADResult;
    }

    /**
     * @param \ws\komerci\types\GetAuthorized_ADResult
     * @return \ws\komerci\types\GetAuthorized_ADResponse
     */
    public function setGetAuthorized_ADResult(\ws\komerci\types\GetAuthorized_ADResult $param = null) {
        $this->GetAuthorized_ADResult = $param;
        return $this;
    }

}