<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidPreAuthorizationResponse;

class VoidPreAuthorizationResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidPreAuthorizationResponse
     */
    public function getEntity() {
        return new VoidPreAuthorizationResponse();
    }
}