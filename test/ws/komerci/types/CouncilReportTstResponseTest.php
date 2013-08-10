<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\CouncilReportTstResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class CouncilReportTstResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\CouncilReportTstResponse
     */
    public function getEntity() {
        return new CouncilReportTstResponse();
    }
}