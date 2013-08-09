<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\SalesSummResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class SalesSummResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\SalesSummResult
     */
    public function getEntity() {
        return new SalesSummResult();
    }
}