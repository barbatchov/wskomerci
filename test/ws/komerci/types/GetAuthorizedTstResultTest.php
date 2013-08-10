<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedTstResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedTstResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedTstResult
     */
    public function getEntity() {
        return new GetAuthorizedTstResult();
    }
}