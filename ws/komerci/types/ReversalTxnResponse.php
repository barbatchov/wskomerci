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
class ReversalTxnResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\ReversalTxnResult */
    public $ReversalTxnResult;

    /**
     * @return \ws\komerci\types\ReversalTxnResult
     */
    public function getReversalTxnResult() {
        return $this->ReversalTxnResult;
    }

    /**
     * @param \ws\komerci\types\ReversalTxnResult
     * @return ReversalTxnResponse
     */
    public function setReversalTxnResult(\ws\komerci\types\ReversalTxnResult $param = null) {
        $this->ReversalTxnResult = $param;
        return $this;
    }

}