<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidPreAuthorizationTstResponseMap implements TypemapInterface {
    const VOID_PRE_AUTHORIZATION_TST_RESULT = 'VoidPreAuthorizationTstResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'VoidPreAuthorizationTstResult' => array('name' => 'VoidPreAuthorizationTstResult', 'type' => 'VoidPreAuthorizationTstResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}