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
class VoidPreAuthorizationTstResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\VoidPreAuthorizationTstResult */
    public $VoidPreAuthorizationTstResult;

    /**
     * @return \ws\komerci\types\VoidPreAuthorizationTstResult
     */
    public function getVoidPreAuthorizationTstResult() {
        return $this->VoidPreAuthorizationTstResult;
    }

    /**
     * @param \ws\komerci\types\VoidPreAuthorizationTstResult
     * @return VoidPreAuthorizationTstResponse
     */
    public function setVoidPreAuthorizationTstResult(\ws\komerci\types\VoidPreAuthorizationTstResult $param = null) {
        $this->VoidPreAuthorizationTstResult = $param;
        return $this;
    }

}