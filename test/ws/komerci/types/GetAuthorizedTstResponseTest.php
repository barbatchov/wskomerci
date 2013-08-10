<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedTstResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedTstResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedTstResponse
     */
    public function getEntity() {
        return new GetAuthorizedTstResponse();
    }
}