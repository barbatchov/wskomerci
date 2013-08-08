<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConsFornDistrib;

class ConsFornDistribTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConsFornDistrib
     */
    public function getEntity() {
        return new ConsFornDistrib();
    }
}