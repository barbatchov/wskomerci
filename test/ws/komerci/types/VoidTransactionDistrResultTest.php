<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionDistrResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidTransactionDistrResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionDistrResult
     */
    public function getEntity() {
        return new VoidTransactionDistrResult();
    }
}