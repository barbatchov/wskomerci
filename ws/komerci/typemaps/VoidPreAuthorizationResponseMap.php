<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class VoidPreAuthorizationResponseMap implements TypemapInterface {
    const VOID_PRE_AUTHORIZATION_RESULT = 'VoidPreAuthorizationResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'VoidPreAuthorizationResult' => array('name' => 'VoidPreAuthorizationResult', 'type' => 'VoidPreAuthorizationResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}