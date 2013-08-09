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
class SalesSummResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\SalesSummResult */
    public $SalesSummResult;

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