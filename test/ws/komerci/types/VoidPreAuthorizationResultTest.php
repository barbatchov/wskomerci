<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidPreAuthorizationResult;

class VoidPreAuthorizationResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidPreAuthorizationResult
     */
    public function getEntity() {
        return new VoidPreAuthorizationResult();
    }
}