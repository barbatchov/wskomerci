<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransaction;

class VoidTransactionTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransaction
     */
    public function getEntity() {
        return new VoidTransaction();
    }
}