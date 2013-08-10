<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\CouncilReportTst;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class CouncilReportTstTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\CouncilReportTst
     */
    public function getEntity() {
        return new CouncilReportTst();
    }
}