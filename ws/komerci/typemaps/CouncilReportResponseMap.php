<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class CouncilReportResponseMap implements TypemapInterface {
    const COUNCIL_REPORT_RESULT = 'CouncilReportResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'CouncilReportResult' => array('name' => 'CouncilReportResult', 'type' => 'CouncilReportResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}