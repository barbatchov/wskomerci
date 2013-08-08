<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ReversalTxn;

class ReversalTxnTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ReversalTxn
     */
    public function getEntity() {
        return new ReversalTxn();
    }
}