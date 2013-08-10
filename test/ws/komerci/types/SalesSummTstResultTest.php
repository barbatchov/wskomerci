<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\SalesSummTstResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class SalesSummTstResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\SalesSummTstResult
     */
    public function getEntity() {
        return new SalesSummTstResult();
    }
}