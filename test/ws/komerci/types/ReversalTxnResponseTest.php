<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ReversalTxnResponse;

class ReversalTxnResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ReversalTxnResponse
     */
    public function getEntity() {
        return new ReversalTxnResponse();
    }
}