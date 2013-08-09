<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class SalesSummMap implements TypemapInterface {
    const FILIACAO = 'Filiacao';
    const USR = 'Usr';
    const PWD = 'Pwd';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'Filiacao' => array('name' => 'Filiacao', 'type' => 'string', 'size' => null),
            'Usr' => array('name' => 'Usr', 'type' => 'string', 'size' => null),
            'Pwd' => array('name' => 'Pwd', 'type' => 'string', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}