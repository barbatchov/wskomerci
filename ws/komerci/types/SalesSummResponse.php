<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;
use \ws\komerci\decorators\KomerciValidableInterface;

class SalesSummResponse extends KomerciEntityAbstract implements KomerciServiceInterface, KomerciValidableInterface {
     /** @var \ws\komerci\types\SalesSummResult */
    protected $SalesSummResult;

    /**
     * @return \ws\komerci\types\SalesSummResult
     */
    public function getSalesSummResult() {
        return $this->SalesSummResult;
    }

    /**
     * @param \ws\komerci\types\SalesSummResult
     * @return SalesSummResponse
     */
    public function setSalesSummResult(\ws\komerci\types\SalesSummResult $param = null) {
        $this->SalesSummResult = $param;
        return $this;
    }

}