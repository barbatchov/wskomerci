<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionDistrResponse;

class VoidTransactionDistrResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionDistrResponse
     */
    public function getEntity() {
        return new VoidTransactionDistrResponse();
    }
}