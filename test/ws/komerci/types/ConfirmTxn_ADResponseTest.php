<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxn_ADResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfirmTxn_ADResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxn_ADResponse
     */
    public function getEntity() {
        return new ConfirmTxn_ADResponse();
    }
}