<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class ConfirmTxn_ADResponseMap implements TypemapInterface {
    const CONFIRM_TXN__A_D_RESULT = 'ConfirmTxn_ADResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'ConfirmTxn_ADResult' => array('name' => 'ConfirmTxn_ADResult', 'type' => 'ConfirmTxn_ADResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}