<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class VoidConfPreAuthorizationResult extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var any */
    protected $Any;

    /**
     * @return any
     */
    public function getAny() {
        return $this->Any;
    }

    /**
     * @param any
     * @return VoidConfPreAuthorizationResult
     */
    public function setAny( $param = null) {
        $this->Any = $param;
        return $this;
    }

}