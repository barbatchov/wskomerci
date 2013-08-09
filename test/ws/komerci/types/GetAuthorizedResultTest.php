<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedResult
     */
    public function getEntity() {
        return new GetAuthorizedResult();
    }
}