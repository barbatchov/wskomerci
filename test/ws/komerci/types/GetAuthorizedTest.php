<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorized;

class GetAuthorizedTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorized
     */
    public function getEntity() {
        return new GetAuthorized();
    }
}