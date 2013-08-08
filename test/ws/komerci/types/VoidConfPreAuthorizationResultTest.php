<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidConfPreAuthorizationResult;

class VoidConfPreAuthorizationResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorizationResult
     */
    public function getEntity() {
        return new VoidConfPreAuthorizationResult();
    }
}