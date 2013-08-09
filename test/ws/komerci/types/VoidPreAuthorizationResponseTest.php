<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidPreAuthorizationResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidPreAuthorizationResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidPreAuthorizationResponse
     */
    public function getEntity() {
        return new VoidPreAuthorizationResponse();
    }
}