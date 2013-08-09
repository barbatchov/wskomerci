<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\CouncilReport;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class CouncilReportTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\CouncilReport
     */
    public function getEntity() {
        return new CouncilReport();
    }
}