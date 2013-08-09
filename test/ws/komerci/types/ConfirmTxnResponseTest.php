<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxnResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfirmTxnResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxnResponse
     */
    public function getEntity() {
        return new ConfirmTxnResponse();
    }
}