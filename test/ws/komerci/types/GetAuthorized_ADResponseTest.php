<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorized_ADResponse;

class GetAuthorized_ADResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorized_ADResponse
     */
    public function getEntity() {
        return new GetAuthorized_ADResponse();
    }
}