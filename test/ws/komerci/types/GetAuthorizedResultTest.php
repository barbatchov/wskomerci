<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedResult;

class GetAuthorizedResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedResult
     */
    public function getEntity() {
        return new GetAuthorizedResult();
    }
}