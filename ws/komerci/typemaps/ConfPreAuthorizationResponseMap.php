<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class ConfPreAuthorizationResponseMap implements TypemapInterface {
    const CONF_PRE_AUTHORIZATION_RESULT = 'ConfPreAuthorizationResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'ConfPreAuthorizationResult' => array('name' => 'ConfPreAuthorizationResult', 'type' => 'ConfPreAuthorizationResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}