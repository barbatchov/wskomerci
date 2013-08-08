<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\CouncilReportResponse;

class CouncilReportResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\CouncilReportResponse
     */
    public function getEntity() {
        return new CouncilReportResponse();
    }
}