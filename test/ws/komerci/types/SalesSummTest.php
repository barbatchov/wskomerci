<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\SalesSumm;

class SalesSummTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\SalesSumm
     */
    public function getEntity() {
        return new SalesSumm();
    }
}