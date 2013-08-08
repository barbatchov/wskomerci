<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedResponse;

class GetAuthorizedResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedResponse
     */
    public function getEntity() {
        return new GetAuthorizedResponse();
    }
}