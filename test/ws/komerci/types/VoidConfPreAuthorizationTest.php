<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidConfPreAuthorization;

class VoidConfPreAuthorizationTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorization
     */
    public function getEntity() {
        return new VoidConfPreAuthorization();
    }
}