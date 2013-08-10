<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedAVSTst;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedAVSTstTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedAVSTst
     */
    public function getEntity() {
        return new GetAuthorizedAVSTst();
    }
}