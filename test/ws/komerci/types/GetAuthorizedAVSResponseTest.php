<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedAVSResponse;

class GetAuthorizedAVSResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedAVSResponse
     */
    public function getEntity() {
        return new GetAuthorizedAVSResponse();
    }
}