<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ConsFornDistribResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\ConsFornDistribResult */
    protected $ConsFornDistribResult;

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