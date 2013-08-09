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
class ConfPreAuthorizationResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\ConfPreAuthorizationResult */
    public $ConfPreAuthorizationResult;

    /**
     * @return \ws\komerci\types\ConfPreAuthorizationResult
     */
    public function getConfPreAuthorizationResult() {
        return $this->ConfPreAuthorizationResult;
    }

    /**
     * @param \ws\komerci\types\ConfPreAuthorizationResult
     * @return ConfPreAuthorizationResponse
     */
    public function setConfPreAuthorizationResult(\ws\komerci\types\ConfPreAuthorizationResult $param = null) {
        $this->ConfPreAuthorizationResult = $param;
        return $this;
    }

}