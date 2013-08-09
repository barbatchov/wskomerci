<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidConfPreAuthorizationResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidConfPreAuthorizationResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorizationResponse
     */
    public function getEntity() {
        return new VoidConfPreAuthorizationResponse();
    }
}