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
class GetAuthorizedResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\GetAuthorizedResult */
    public $GetAuthorizedResult;

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