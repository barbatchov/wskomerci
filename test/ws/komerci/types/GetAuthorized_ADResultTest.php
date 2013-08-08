<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorized_ADResult;

class GetAuthorized_ADResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorized_ADResult
     */
    public function getEntity() {
        return new GetAuthorized_ADResult();
    }
}