<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class VoidConfPreAuthorizationMap implements TypemapInterface {
    const FILIACAO = 'Filiacao';
    const TOTAL = 'Total';
    const DATA = 'Data';
    const NUM_AUTOR = 'NumAutor';
    const NUM_C_V = 'NumCV';
    const CONCENTRADOR = 'Concentrador';
    const USR = 'Usr';
    const PWD = 'Pwd';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'Filiacao' => array('name' => 'Filiacao', 'type' => 'string', 'size' => null),
            'Total' => array('name' => 'Total', 'type' => 'string', 'size' => null),
            'Data' => array('name' => 'Data', 'type' => 'string', 'size' => null),
            'NumAutor' => array('name' => 'NumAutor', 'type' => 'string', 'size' => null),
            'NumCV' => array('name' => 'NumCV', 'type' => 'string', 'size' => null),
            'Concentrador' => array('name' => 'Concentrador', 'type' => 'string', 'size' => null),
            'Usr' => array('name' => 'Usr', 'type' => 'string', 'size' => null),
            'Pwd' => array('name' => 'Pwd', 'type' => 'string', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}