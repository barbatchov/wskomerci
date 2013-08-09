<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
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