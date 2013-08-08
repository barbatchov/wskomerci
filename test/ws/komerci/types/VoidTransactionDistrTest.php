<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionDistr;

class VoidTransactionDistrTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionDistr
     */
    public function getEntity() {
        return new VoidTransactionDistr();
    }
}