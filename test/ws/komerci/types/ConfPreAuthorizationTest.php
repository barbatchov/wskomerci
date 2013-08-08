<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfPreAuthorization;

class ConfPreAuthorizationTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfPreAuthorization
     */
    public function getEntity() {
        return new ConfPreAuthorization();
    }
}