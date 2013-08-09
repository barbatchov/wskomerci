<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;
use \ws\komerci\decorators\KomerciValidableInterface;

class GetAuthorized_ADResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\GetAuthorized_ADResult */
    protected $GetAuthorized_ADResult;

    /**
     * @return \ws\komerci\types\GetAuthorized_ADResult
     */
    public function getGetAuthorized_ADResult() {
        return $this->GetAuthorized_ADResult;
    }

    /**
     * @param \ws\komerci\types\GetAuthorized_ADResult
     * @return GetAuthorized_ADResponse
     */
    public function setGetAuthorized_ADResult(\ws\komerci\types\GetAuthorized_ADResult $param = null) {
        $this->GetAuthorized_ADResult = $param;
        return $this;
    }

}