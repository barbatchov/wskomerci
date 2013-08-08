<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedAVSResult;

class GetAuthorizedAVSResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedAVSResult
     */
    public function getEntity() {
        return new GetAuthorizedAVSResult();
    }
}