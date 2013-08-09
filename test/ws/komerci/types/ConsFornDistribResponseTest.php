<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConsFornDistribResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConsFornDistribResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConsFornDistribResponse
     */
    public function getEntity() {
        return new ConsFornDistribResponse();
    }
}