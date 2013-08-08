<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\SalesSummResponse;

class SalesSummResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\SalesSummResponse
     */
    public function getEntity() {
        return new SalesSummResponse();
    }
}