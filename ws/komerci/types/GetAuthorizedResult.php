<?PHP

namespace ws\komerci\types;

use \ws\komerci\KomerciEntityAbstract;
use \ws\komerci\types\Confirmation;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedResult extends KomerciEntityAbstract {
     /** @var any */
    public $any;

    /**
     * @return Confirmation|any
     */
    public function getAny() {
        return $this->any;
    }

    /**
     * @param any
     * @return GetAuthorizedResult
     */
    public function setAny($param = null) {
        $this->any = $this->parseXmlResultToConfirmation($param);
        return $this;
    }

}