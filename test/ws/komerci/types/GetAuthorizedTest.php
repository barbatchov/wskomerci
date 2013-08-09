<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorized;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorized
     */
    public function getEntity() {
        return new GetAuthorized();
    }
}