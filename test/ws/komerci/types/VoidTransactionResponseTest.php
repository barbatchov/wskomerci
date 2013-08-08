<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionResponse;

class VoidTransactionResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionResponse
     */
    public function getEntity() {
        return new VoidTransactionResponse();
    }
}