<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfPreAuthorizationResult;

class ConfPreAuthorizationResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfPreAuthorizationResult
     */
    public function getEntity() {
        return new ConfPreAuthorizationResult();
    }
}