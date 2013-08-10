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
class CouncilReportTstResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\CouncilReportTstResult */
    public $CouncilReportTstResult;

    /**
     * @return \ws\komerci\types\CouncilReportTstResult
     */
    public function getCouncilReportTstResult() {
        return $this->CouncilReportTstResult;
    }

    /**
     * @param \ws\komerci\types\CouncilReportTstResult
     * @return CouncilReportTstResponse
     */
    public function setCouncilReportTstResult(\ws\komerci\types\CouncilReportTstResult $param = null) {
        $this->CouncilReportTstResult = $param;
        return $this;
    }

}