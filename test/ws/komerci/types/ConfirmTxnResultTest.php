<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxnResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfirmTxnResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxnResult
     */
    public function getEntity() {
        return new ConfirmTxnResult();
    }
}