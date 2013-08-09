<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidConfPreAuthorization;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidConfPreAuthorizationTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorization
     */
    public function getEntity() {
        return new VoidConfPreAuthorization();
    }
}