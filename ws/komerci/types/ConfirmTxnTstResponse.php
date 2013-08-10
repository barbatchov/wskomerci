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
class ConfirmTxnTstResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\ConfirmTxnTstResult */
    public $ConfirmTxnTstResult;

    /**
     * @return \ws\komerci\types\ConfirmTxnTstResult
     */
    public function getConfirmTxnTstResult() {
        return $this->ConfirmTxnTstResult;
    }

    /**
     * @param \ws\komerci\types\ConfirmTxnTstResult
     * @return ConfirmTxnTstResponse
     */
    public function setConfirmTxnTstResult(\ws\komerci\types\ConfirmTxnTstResult $param = null) {
        $this->ConfirmTxnTstResult = $param;
        return $this;
    }

}