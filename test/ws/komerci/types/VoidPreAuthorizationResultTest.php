<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidPreAuthorizationResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidPreAuthorizationResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidPreAuthorizationResult
     */
    public function getEntity() {
        return new VoidPreAuthorizationResult();
    }
}