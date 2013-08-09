<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConsFornDistrib;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConsFornDistribTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConsFornDistrib
     */
    public function getEntity() {
        return new ConsFornDistrib();
    }
}