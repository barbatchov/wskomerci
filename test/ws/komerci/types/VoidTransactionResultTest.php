<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionResult;

class VoidTransactionResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionResult
     */
    public function getEntity() {
        return new VoidTransactionResult();
    }
}