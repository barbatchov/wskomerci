<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\CouncilReportTstResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class CouncilReportTstResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\CouncilReportTstResult
     */
    public function getEntity() {
        return new CouncilReportTstResult();
    }
}