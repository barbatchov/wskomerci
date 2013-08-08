<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxn_AD;

class ConfirmTxn_ADTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxn_AD
     */
    public function getEntity() {
        return new ConfirmTxn_AD();
    }
}