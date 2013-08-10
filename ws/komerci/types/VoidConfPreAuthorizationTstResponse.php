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
class VoidConfPreAuthorizationTstResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\VoidConfPreAuthorizationTstResult */
    public $VoidConfPreAuthorizationTstResult;

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorizationTstResult
     */
    public function getVoidConfPreAuthorizationTstResult() {
        return $this->VoidConfPreAuthorizationTstResult;
    }

    /**
     * @param \ws\komerci\types\VoidConfPreAuthorizationTstResult
     * @return VoidConfPreAuthorizationTstResponse
     */
    public function setVoidConfPreAuthorizationTstResult(\ws\komerci\types\VoidConfPreAuthorizationTstResult $param = null) {
        $this->VoidConfPreAuthorizationTstResult = $param;
        return $this;
    }

}