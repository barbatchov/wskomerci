<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class SalesSummResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\SalesSummResult */
    private $SalesSummResult;

    /**
     * @return \ws\komerci\types\SalesSummResult
     */
    public function getSalesSummResult() {
        return $this->SalesSummResult;
    }

    /**
     * @param \ws\komerci\types\SalesSummResult
     * @return \ws\komerci\types\SalesSummResponse
     */
    public function setSalesSummResult(\ws\komerci\types\SalesSummResult $param = null) {
        $this->SalesSummResult = $param;
        return $this;
    }

}