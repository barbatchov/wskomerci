<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class ConfirmTxnResponseMap implements TypemapInterface {
    const CONFIRM_TXN_RESULT = 'ConfirmTxnResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'ConfirmTxnResult' => array('name' => 'ConfirmTxnResult', 'type' => 'ConfirmTxnResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}