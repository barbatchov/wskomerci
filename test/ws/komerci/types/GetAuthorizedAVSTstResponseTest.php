<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedAVSTstResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedAVSTstResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedAVSTstResponse
     */
    public function getEntity() {
        return new GetAuthorizedAVSTstResponse();
    }
}