<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class GetAuthorizedAVSResponseMap implements TypemapInterface {
    const GET_AUTHORIZED_A_V_S_RESULT = 'GetAuthorizedAVSResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'GetAuthorizedAVSResult' => array('name' => 'GetAuthorizedAVSResult', 'type' => 'GetAuthorizedAVSResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}