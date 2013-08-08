<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConsFornDistribResult;

class ConsFornDistribResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConsFornDistribResult
     */
    public function getEntity() {
        return new ConsFornDistribResult();
    }
}