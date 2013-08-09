<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidPreAuthorization;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidPreAuthorizationTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidPreAuthorization
     */
    public function getEntity() {
        return new VoidPreAuthorization();
    }
}