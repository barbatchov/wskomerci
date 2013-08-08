<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConsFornDistribResponse;

class ConsFornDistribResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConsFornDistribResponse
     */
    public function getEntity() {
        return new ConsFornDistribResponse();
    }
}