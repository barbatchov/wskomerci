<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxn;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfirmTxnTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxn
     */
    public function getEntity() {
        return new ConfirmTxn();
    }
}