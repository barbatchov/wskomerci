<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxn_ADResult;

class ConfirmTxn_ADResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxn_ADResult
     */
    public function getEntity() {
        return new ConfirmTxn_ADResult();
    }
}