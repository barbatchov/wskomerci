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
class VoidConfPreAuthorizationTstResult extends KomerciEntityAbstract {
     /** @var any */
    public $any;

    /**
     * @return any
     */
    public function getAny() {
        return $this->any;
    }

    /**
     * @param any
     * @return VoidConfPreAuthorizationTstResult
     */
    public function setAny( $param = null) {
        $this->any = $param;
        return $this;
    }

}