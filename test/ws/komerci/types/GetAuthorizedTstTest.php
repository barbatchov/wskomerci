<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorizedTst;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorizedTstTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorizedTst
     */
    public function getEntity() {
        return new GetAuthorizedTst();
    }
}