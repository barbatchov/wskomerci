<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidConfPreAuthorizationResponse;

class VoidConfPreAuthorizationResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorizationResponse
     */
    public function getEntity() {
        return new VoidConfPreAuthorizationResponse();
    }
}