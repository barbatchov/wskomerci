<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;
use \ws\komerci\decorators\KomerciValidableInterface;

class GetAuthorized_ADResult extends KomerciEntityAbstract {
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
     * @return GetAuthorized_ADResult
     */
    public function setAny( $param = null) {
        $this->Any = $param;
        return $this;
    }

}