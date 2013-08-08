<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxn_ADResponse;

class ConfirmTxn_ADResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxn_ADResponse
     */
    public function getEntity() {
        return new ConfirmTxn_ADResponse();
    }
}