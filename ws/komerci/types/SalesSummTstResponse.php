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
class SalesSummTstResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\SalesSummTstResult */
    public $SalesSummTstResult;

    /**
     * @return \ws\komerci\types\SalesSummTstResult
     */
    public function getSalesSummTstResult() {
        return $this->SalesSummTstResult;
    }

    /**
     * @param \ws\komerci\types\SalesSummTstResult
     * @return SalesSummTstResponse
     */
    public function setSalesSummTstResult(\ws\komerci\types\SalesSummTstResult $param = null) {
        $this->SalesSummTstResult = $param;
        return $this;
    }

}