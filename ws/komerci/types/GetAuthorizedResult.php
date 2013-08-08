<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class GetAuthorizedResult extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var any */
    private $any;

    /**
     * @return any
     */
    public function getany() {
        return $this->any;
    }

    /**
     * @param any
     * @return GetAuthorizedResult
     */
    public function setany( $param = null) {
        $this->any = $param;
        return $this;
    }

}