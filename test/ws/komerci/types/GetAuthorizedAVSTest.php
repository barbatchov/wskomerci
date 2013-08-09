<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedAVS;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedAVSTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedAVS
     */
    public function getEntity() {
        return new GetAuthorizedAVS();
    }
}