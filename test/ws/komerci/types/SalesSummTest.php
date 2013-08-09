<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\SalesSumm;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class SalesSummTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\SalesSumm
     */
    public function getEntity() {
        return new SalesSumm();
    }
}