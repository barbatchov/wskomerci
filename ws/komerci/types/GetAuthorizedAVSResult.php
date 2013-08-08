<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class GetAuthorizedAVSResult extends KomerciEntityAbstract implements KomerciServiceInterface {
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
     * @return GetAuthorizedAVSResult
     */
    public function setAny( $param = null) {
        $this->Any = $param;
        return $this;
    }

}