<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConsFornDistribResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConsFornDistribResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConsFornDistribResult
     */
    public function getEntity() {
        return new ConsFornDistribResult();
    }
}