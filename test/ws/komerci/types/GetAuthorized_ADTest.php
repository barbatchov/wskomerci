<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorized_AD;

class GetAuthorized_ADTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorized_AD
     */
    public function getEntity() {
        return new GetAuthorized_AD();
    }
}