<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
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