<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
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