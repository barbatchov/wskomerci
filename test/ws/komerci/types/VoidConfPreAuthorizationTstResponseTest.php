<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidConfPreAuthorizationTstResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidConfPreAuthorizationTstResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorizationTstResponse
     */
    public function getEntity() {
        return new VoidConfPreAuthorizationTstResponse();
    }
}