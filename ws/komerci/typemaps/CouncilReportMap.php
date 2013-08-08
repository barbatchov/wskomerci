<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class CouncilReportMap implements TypemapInterface {
    const FILIACAO = 'Filiacao';
    const DISTRIBUIDOR = 'Distribuidor';
    const DATA__INICIAL = 'Data_Inicial';
    const DATA__FINAL = 'Data_Final';
    const TIPO__TRX = 'Tipo_Trx';
    const STATUS__TRX = 'Status_Trx';
    const SERVICO__A_V_S = 'Servico_AVS';
    const PROGRAMA = 'Programa';
    const USR = 'Usr';
    const PWD = 'Pwd';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'Filiacao' => array('name' => 'Filiacao', 'type' => 'string', 'size' => null),
            'Distribuidor' => array('name' => 'Distribuidor', 'type' => 'string', 'size' => null),
            'Data_Inicial' => array('name' => 'Data_Inicial', 'type' => 'string', 'size' => null),
            'Data_Final' => array('name' => 'Data_Final', 'type' => 'string', 'size' => null),
            'Tipo_Trx' => array('name' => 'Tipo_Trx', 'type' => 'string', 'size' => null),
            'Status_Trx' => array('name' => 'Status_Trx', 'type' => 'string', 'size' => null),
            'Servico_AVS' => array('name' => 'Servico_AVS', 'type' => 'string', 'size' => null),
            'Programa' => array('name' => 'Programa', 'type' => 'string', 'size' => null),
            'Usr' => array('name' => 'Usr', 'type' => 'string', 'size' => null),
            'Pwd' => array('name' => 'Pwd', 'type' => 'string', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}