<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorized_AD;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorized_ADTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorized_AD
     */
    public function getEntity() {
        return new GetAuthorized_AD();
    }
}