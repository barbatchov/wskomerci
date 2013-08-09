<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\CouncilReportResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class CouncilReportResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\CouncilReportResult
     */
    public function getEntity() {
        return new CouncilReportResult();
    }
}