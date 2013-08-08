<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfPreAuthorizationResponse;

class ConfPreAuthorizationResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfPreAuthorizationResponse
     */
    public function getEntity() {
        return new ConfPreAuthorizationResponse();
    }
}