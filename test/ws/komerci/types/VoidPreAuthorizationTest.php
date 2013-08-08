<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidPreAuthorization;

class VoidPreAuthorizationTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidPreAuthorization
     */
    public function getEntity() {
        return new VoidPreAuthorization();
    }
}