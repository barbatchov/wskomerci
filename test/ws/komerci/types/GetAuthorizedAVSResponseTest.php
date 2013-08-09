<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedAVSResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedAVSResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedAVSResponse
     */
    public function getEntity() {
        return new GetAuthorizedAVSResponse();
    }
}