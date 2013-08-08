<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class GetAuthorizedResponseMap implements TypemapInterface {
    const GET_AUTHORIZED_RESULT = 'GetAuthorizedResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'GetAuthorizedResult' => array('name' => 'GetAuthorizedResult', 'type' => 'GetAuthorizedResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}