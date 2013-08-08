<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\SalesSummResult;

class SalesSummResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\SalesSummResult
     */
    public function getEntity() {
        return new SalesSummResult();
    }
}