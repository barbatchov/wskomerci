<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidDebtTransactionResponse;

class VoidDebtTransactionResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidDebtTransactionResponse
     */
    public function getEntity() {
        return new VoidDebtTransactionResponse();
    }
}