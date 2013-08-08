<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\KomerciServiceInterface;

class ConsFornDistribResponse extends KomerciEntityAbstract implements KomerciServiceInterface {
     /** @var \ws\komerci\types\ConsFornDistribResult */
    private $ConsFornDistribResult;

    /**
     * @return \ws\komerci\types\ConsFornDistribResult
     */
    public function getConsFornDistribResult() {
        return $this->ConsFornDistribResult;
    }

    /**
     * @param \ws\komerci\types\ConsFornDistribResult
     * @return \ws\komerci\types\ConsFornDistribResponse
     */
    public function setConsFornDistribResult(\ws\komerci\types\ConsFornDistribResult $param = null) {
        $this->ConsFornDistribResult = $param;
        return $this;
    }

}