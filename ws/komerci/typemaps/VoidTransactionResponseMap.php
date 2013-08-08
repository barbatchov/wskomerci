<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class VoidTransactionResponseMap implements TypemapInterface {
    const VOID_TRANSACTION_RESULT = 'VoidTransactionResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'VoidTransactionResult' => array('name' => 'VoidTransactionResult', 'type' => 'VoidTransactionResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}