<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

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