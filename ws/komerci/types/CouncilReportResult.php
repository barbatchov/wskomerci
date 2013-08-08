<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class CouncilReportResult extends KomerciEntityAbstract implements KomerciServiceInterface {
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
     * @return CouncilReportResult
     */
    public function setany( $param = null) {
        $this->any = $param;
        return $this;
    }

}