<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;
use \ws\komerci\decorators\KomerciValidableInterface;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedAVSResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\GetAuthorizedAVSResult */
    public $GetAuthorizedAVSResult;

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