<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
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