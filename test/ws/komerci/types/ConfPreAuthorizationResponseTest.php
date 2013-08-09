<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfPreAuthorizationResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfPreAuthorizationResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfPreAuthorizationResponse
     */
    public function getEntity() {
        return new ConfPreAuthorizationResponse();
    }
}