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
class GetAuthorizedTstResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\GetAuthorizedTstResult */
    public $GetAuthorizedTstResult;

    /**
     * @return \ws\komerci\types\GetAuthorizedTstResult
     */
    public function getGetAuthorizedTstResult() {
        return $this->GetAuthorizedTstResult;
    }

    /**
     * @param \ws\komerci\types\GetAuthorizedTstResult
     * @return GetAuthorizedTstResponse
     */
    public function setGetAuthorizedTstResult(\ws\komerci\types\GetAuthorizedTstResult $param = null) {
        $this->GetAuthorizedTstResult = $param;
        return $this;
    }

}