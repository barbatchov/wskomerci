<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfPreAuthorizationTstResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfPreAuthorizationTstResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfPreAuthorizationTstResponse
     */
    public function getEntity() {
        return new ConfPreAuthorizationTstResponse();
    }
}