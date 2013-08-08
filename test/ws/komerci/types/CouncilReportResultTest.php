<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\CouncilReportResult;

class CouncilReportResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\CouncilReportResult
     */
    public function getEntity() {
        return new CouncilReportResult();
    }
}