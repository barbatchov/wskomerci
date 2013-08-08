<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ReversalTxnResult;

class ReversalTxnResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ReversalTxnResult
     */
    public function getEntity() {
        return new ReversalTxnResult();
    }
}