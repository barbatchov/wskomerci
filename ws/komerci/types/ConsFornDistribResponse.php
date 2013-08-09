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
class ConsFornDistribResponse extends KomerciEntityAbstract {
     /** @var \ws\komerci\types\ConsFornDistribResult */
    public $ConsFornDistribResult;

    /**
     * @return \ws\komerci\types\ConsFornDistribResult
     */
    public function getConsFornDistribResult() {
        return $this->ConsFornDistribResult;
    }

    /**
     * @param \ws\komerci\types\ConsFornDistribResult
     * @return ConsFornDistribResponse
     */
    public function setConsFornDistribResult(\ws\komerci\types\ConsFornDistribResult $param = null) {
        $this->ConsFornDistribResult = $param;
        return $this;
    }

}