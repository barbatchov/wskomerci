<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;
use \ws\komerci\decorators\KomerciValidableInterface;

class CouncilReportResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\CouncilReportResult */
    protected $CouncilReportResult;

    /**
     * @return \ws\komerci\types\CouncilReportResult
     */
    public function getCouncilReportResult() {
        return $this->CouncilReportResult;
    }

    /**
     * @param \ws\komerci\types\CouncilReportResult
     * @return CouncilReportResponse
     */
    public function setCouncilReportResult(\ws\komerci\types\CouncilReportResult $param = null) {
        $this->CouncilReportResult = $param;
        return $this;
    }

}