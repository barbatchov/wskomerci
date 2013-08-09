<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedAVSResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedAVSResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedAVSResult
     */
    public function getEntity() {
        return new GetAuthorizedAVSResult();
    }
}