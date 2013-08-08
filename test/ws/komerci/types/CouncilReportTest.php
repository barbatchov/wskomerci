<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\CouncilReport;

class CouncilReportTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\CouncilReport
     */
    public function getEntity() {
        return new CouncilReport();
    }
}