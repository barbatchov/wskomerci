<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedAVSTstResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedAVSTstResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedAVSTstResult
     */
    public function getEntity() {
        return new GetAuthorizedAVSTstResult();
    }
}