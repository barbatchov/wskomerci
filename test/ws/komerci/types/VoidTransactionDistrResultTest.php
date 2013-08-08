<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionDistrResult;

class VoidTransactionDistrResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionDistrResult
     */
    public function getEntity() {
        return new VoidTransactionDistrResult();
    }
}