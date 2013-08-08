<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class GetAuthorizedAVSResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\GetAuthorizedAVSResult */
    protected $GetAuthorizedAVSResult;

    /**
     * @return \ws\komerci\types\GetAuthorizedAVSResult
     */
    public function getGetAuthorizedAVSResult() {
        return $this->GetAuthorizedAVSResult;
    }

    /**
     * @param \ws\komerci\types\GetAuthorizedAVSResult
     * @return GetAuthorizedAVSResponse
     */
    public function setGetAuthorizedAVSResult(\ws\komerci\types\GetAuthorizedAVSResult $param = null) {
        $this->GetAuthorizedAVSResult = $param;
        return $this;
    }

}