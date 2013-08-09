<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\SalesSummResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class SalesSummResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\SalesSummResponse
     */
    public function getEntity() {
        return new SalesSummResponse();
    }
}