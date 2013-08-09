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
class ConfirmTxn_ADResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\ConfirmTxn_ADResult */
    public $ConfirmTxn_ADResult;

    /**
     * @return \ws\komerci\types\ConfirmTxn_ADResult
     */
    public function getConfirmTxn_ADResult() {
        return $this->ConfirmTxn_ADResult;
    }

    /**
     * @param \ws\komerci\types\ConfirmTxn_ADResult
     * @return ConfirmTxn_ADResponse
     */
    public function setConfirmTxn_ADResult(\ws\komerci\types\ConfirmTxn_ADResult $param = null) {
        $this->ConfirmTxn_ADResult = $param;
        return $this;
    }

}