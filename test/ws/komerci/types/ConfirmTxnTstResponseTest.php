<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxnTstResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfirmTxnTstResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxnTstResponse
     */
    public function getEntity() {
        return new ConfirmTxnTstResponse();
    }
}