<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidDebtTransactionResult;

class VoidDebtTransactionResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidDebtTransactionResult
     */
    public function getEntity() {
        return new VoidDebtTransactionResult();
    }
}