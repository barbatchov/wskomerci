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
class ConfPreAuthorizationTstResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\ConfPreAuthorizationTstResult */
    public $ConfPreAuthorizationTstResult;

    /**
     * @return \ws\komerci\types\ConfPreAuthorizationTstResult
     */
    public function getConfPreAuthorizationTstResult() {
        return $this->ConfPreAuthorizationTstResult;
    }

    /**
     * @param \ws\komerci\types\ConfPreAuthorizationTstResult
     * @return ConfPreAuthorizationTstResponse
     */
    public function setConfPreAuthorizationTstResult(\ws\komerci\types\ConfPreAuthorizationTstResult $param = null) {
        $this->ConfPreAuthorizationTstResult = $param;
        return $this;
    }

}