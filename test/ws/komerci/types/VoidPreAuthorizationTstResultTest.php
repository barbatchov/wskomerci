<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidPreAuthorizationTstResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidPreAuthorizationTstResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidPreAuthorizationTstResult
     */
    public function getEntity() {
        return new VoidPreAuthorizationTstResult();
    }
}