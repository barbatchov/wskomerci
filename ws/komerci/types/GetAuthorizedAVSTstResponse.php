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
class GetAuthorizedAVSTstResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\GetAuthorizedAVSTstResult */
    public $GetAuthorizedAVSTstResult;

    /**
     * @return \ws\komerci\types\GetAuthorizedAVSTstResult
     */
    public function getGetAuthorizedAVSTstResult() {
        return $this->GetAuthorizedAVSTstResult;
    }

    /**
     * @param \ws\komerci\types\GetAuthorizedAVSTstResult
     * @return GetAuthorizedAVSTstResponse
     */
    public function setGetAuthorizedAVSTstResult(\ws\komerci\types\GetAuthorizedAVSTstResult $param = null) {
        $this->GetAuthorizedAVSTstResult = $param;
        return $this;
    }

}