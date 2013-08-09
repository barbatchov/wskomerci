<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
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