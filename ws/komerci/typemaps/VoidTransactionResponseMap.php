<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
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