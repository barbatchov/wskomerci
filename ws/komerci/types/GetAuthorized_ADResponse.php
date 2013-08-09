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
class GetAuthorized_ADResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\GetAuthorized_ADResult */
    public $GetAuthorized_ADResult;

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