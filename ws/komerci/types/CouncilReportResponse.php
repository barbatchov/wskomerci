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
class CouncilReportResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\CouncilReportResult */
    public $CouncilReportResult;

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