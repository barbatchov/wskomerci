<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\SalesSummTst;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class SalesSummTstTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\SalesSummTst
     */
    public function getEntity() {
        return new SalesSummTst();
    }
}