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
class VoidConfPreAuthorizationResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\VoidConfPreAuthorizationResult */
    public $VoidConfPreAuthorizationResult;

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorizationResult
     */
    public function getVoidConfPreAuthorizationResult() {
        return $this->VoidConfPreAuthorizationResult;
    }

    /**
     * @param \ws\komerci\types\VoidConfPreAuthorizationResult
     * @return VoidConfPreAuthorizationResponse
     */
    public function setVoidConfPreAuthorizationResult(\ws\komerci\types\VoidConfPreAuthorizationResult $param = null) {
        $this->VoidConfPreAuthorizationResult = $param;
        return $this;
    }

}