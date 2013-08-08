<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class VoidTransactionDistrResponseMap implements TypemapInterface {
    const VOID_TRANSACTION_DISTR_RESULT = 'VoidTransactionDistrResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'VoidTransactionDistrResult' => array('name' => 'VoidTransactionDistrResult', 'type' => 'VoidTransactionDistrResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}