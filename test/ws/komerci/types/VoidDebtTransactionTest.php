<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidDebtTransaction;

class VoidDebtTransactionTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidDebtTransaction
     */
    public function getEntity() {
        return new VoidDebtTransaction();
    }
}