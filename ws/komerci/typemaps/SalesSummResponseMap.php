<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class SalesSummResponseMap implements TypemapInterface {
    const SALES_SUMM_RESULT = 'SalesSummResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'SalesSummResult' => array('name' => 'SalesSummResult', 'type' => 'SalesSummResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}