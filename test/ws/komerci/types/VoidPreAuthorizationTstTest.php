<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidPreAuthorizationTst;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidPreAuthorizationTstTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidPreAuthorizationTst
     */
    public function getEntity() {
        return new VoidPreAuthorizationTst();
    }
}