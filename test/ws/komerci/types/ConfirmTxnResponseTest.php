<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxnResponse;

class ConfirmTxnResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxnResponse
     */
    public function getEntity() {
        return new ConfirmTxnResponse();
    }
}