<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\CouncilReportResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class CouncilReportResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\CouncilReportResponse
     */
    public function getEntity() {
        return new CouncilReportResponse();
    }
}