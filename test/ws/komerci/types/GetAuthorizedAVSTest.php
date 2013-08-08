<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedAVS;

class GetAuthorizedAVSTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedAVS
     */
    public function getEntity() {
        return new GetAuthorizedAVS();
    }
}