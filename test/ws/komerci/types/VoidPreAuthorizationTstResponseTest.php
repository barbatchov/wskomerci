<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidPreAuthorizationTstResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidPreAuthorizationTstResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidPreAuthorizationTstResponse
     */
    public function getEntity() {
        return new VoidPreAuthorizationTstResponse();
    }
}