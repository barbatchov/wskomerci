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
class ConfirmTxnResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\ConfirmTxnResult */
    public $ConfirmTxnResult;

    /**
     * @return \ws\komerci\types\ConfirmTxnResult
     */
    public function getConfirmTxnResult() {
        return $this->ConfirmTxnResult;
    }

    /**
     * @param \ws\komerci\types\ConfirmTxnResult
     * @return ConfirmTxnResponse
     */
    public function setConfirmTxnResult(\ws\komerci\types\ConfirmTxnResult $param = null) {
        $this->ConfirmTxnResult = $param;
        return $this;
    }

}