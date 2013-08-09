<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorized_ADResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorized_ADResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorized_ADResponse
     */
    public function getEntity() {
        return new GetAuthorized_ADResponse();
    }
}