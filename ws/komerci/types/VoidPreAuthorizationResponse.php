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
class VoidPreAuthorizationResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\VoidPreAuthorizationResult */
    public $VoidPreAuthorizationResult;

    /**
     * @return \ws\komerci\types\VoidPreAuthorizationResult
     */
    public function getVoidPreAuthorizationResult() {
        return $this->VoidPreAuthorizationResult;
    }

    /**
     * @param \ws\komerci\types\VoidPreAuthorizationResult
     * @return VoidPreAuthorizationResponse
     */
    public function setVoidPreAuthorizationResult(\ws\komerci\types\VoidPreAuthorizationResult $param = null) {
        $this->VoidPreAuthorizationResult = $param;
        return $this;
    }

}