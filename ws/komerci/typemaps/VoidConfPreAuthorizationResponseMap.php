<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class VoidConfPreAuthorizationResponseMap implements TypemapInterface {
    const VOID_CONF_PRE_AUTHORIZATION_RESULT = 'VoidConfPreAuthorizationResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'VoidConfPreAuthorizationResult' => array('name' => 'VoidConfPreAuthorizationResult', 'type' => 'VoidConfPreAuthorizationResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}