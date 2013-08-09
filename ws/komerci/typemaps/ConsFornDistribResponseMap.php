<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConsFornDistribResponseMap implements TypemapInterface {
    const CONS_FORN_DISTRIB_RESULT = 'ConsFornDistribResult';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'ConsFornDistribResult' => array('name' => 'ConsFornDistribResult', 'type' => 'ConsFornDistribResult', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}