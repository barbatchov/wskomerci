<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfPreAuthorizationTst;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfPreAuthorizationTstTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfPreAuthorizationTst
     */
    public function getEntity() {
        return new ConfPreAuthorizationTst();
    }
}