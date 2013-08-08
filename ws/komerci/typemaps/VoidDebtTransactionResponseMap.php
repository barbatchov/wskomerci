<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class VoidDebtTransactionResponseMap implements TypemapInterface {
    const VOID_DEBT_TRANSACTION_RESULT = 'VoidDebtTransactionResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'VoidDebtTransactionResult' => array('name' => 'VoidDebtTransactionResult', 'type' => 'VoidDebtTransactionResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}