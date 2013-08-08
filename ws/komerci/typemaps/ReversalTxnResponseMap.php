<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class ReversalTxnResponseMap implements TypemapInterface {
    const REVERSAL_TXN_RESULT = 'ReversalTxnResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'ReversalTxnResult' => array('name' => 'ReversalTxnResult', 'type' => 'ReversalTxnResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}