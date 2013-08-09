<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfPreAuthorization;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfPreAuthorizationTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfPreAuthorization
     */
    public function getEntity() {
        return new ConfPreAuthorization();
    }
}