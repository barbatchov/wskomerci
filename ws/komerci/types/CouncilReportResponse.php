<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class CouncilReportResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\CouncilReportResult */
    private $CouncilReportResult;

    /**
     * @return \ws\komerci\types\CouncilReportResult
     */
    public function getCouncilReportResult() {
        return $this->CouncilReportResult;
    }

    /**
     * @param \ws\komerci\types\CouncilReportResult
     * @return \ws\komerci\types\CouncilReportResponse
     */
    public function setCouncilReportResult(\ws\komerci\types\CouncilReportResult $param = null) {
        $this->CouncilReportResult = $param;
        return $this;
    }

}