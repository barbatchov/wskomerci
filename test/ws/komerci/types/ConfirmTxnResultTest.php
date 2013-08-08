<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxnResult;

class ConfirmTxnResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxnResult
     */
    public function getEntity() {
        return new ConfirmTxnResult();
    }
}