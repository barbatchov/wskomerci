<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class GetAuthorized_ADResponseMap implements TypemapInterface {
    const GET_AUTHORIZED__A_D_RESULT = 'GetAuthorized_ADResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'GetAuthorized_ADResult' => array('name' => 'GetAuthorized_ADResult', 'type' => 'GetAuthorized_ADResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}