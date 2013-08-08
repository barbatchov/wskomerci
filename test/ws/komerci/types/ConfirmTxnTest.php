<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxn;

class ConfirmTxnTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxn
     */
    public function getEntity() {
        return new ConfirmTxn();
    }
}