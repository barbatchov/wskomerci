<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidDebtTransactionResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidDebtTransactionResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidDebtTransactionResponse
     */
    public function getEntity() {
        return new VoidDebtTransactionResponse();
    }
}