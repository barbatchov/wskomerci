<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidConfPreAuthorizationTst;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidConfPreAuthorizationTstTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorizationTst
     */
    public function getEntity() {
        return new VoidConfPreAuthorizationTst();
    }
}