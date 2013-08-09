<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidTransactionResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionResponse
     */
    public function getEntity() {
        return new VoidTransactionResponse();
    }
}