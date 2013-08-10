<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\SalesSummTstResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class SalesSummTstResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\SalesSummTstResponse
     */
    public function getEntity() {
        return new SalesSummTstResponse();
    }
}