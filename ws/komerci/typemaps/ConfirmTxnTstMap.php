<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfirmTxnTstMap implements TypemapInterface {
    const DATA = 'Data';
    const NUM_SQN = 'NumSqn';
    const NUM_C_V = 'NumCV';
    const NUM_AUTOR = 'NumAutor';
    const PARCELAS = 'Parcelas';
    const TRANS_ORIG = 'TransOrig';
    const TOTAL = 'Total';
    const FILIACAO = 'Filiacao';
    const DISTRIBUIDOR = 'Distribuidor';
    const NUM_PEDIDO = 'NumPedido';
    const PAX1 = 'Pax1';
    const PAX2 = 'Pax2';
    const PAX3 = 'Pax3';
    const PAX4 = 'Pax4';
    const NUMDOC1 = 'Numdoc1';
    const NUMDOC2 = 'Numdoc2';
    const NUMDOC3 = 'Numdoc3';
    const NUMDOC4 = 'Numdoc4';
    const ADD_DATA = 'AddData';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'Data' => array('name' => 'Data', 'type' => 'string', 'size' => null),
            'NumSqn' => array('name' => 'NumSqn', 'type' => 'string', 'size' => null),
            'NumCV' => array('name' => 'NumCV', 'type' => 'string', 'size' => null),
            'NumAutor' => array('name' => 'NumAutor', 'type' => 'string', 'size' => null),
            'Parcelas' => array('name' => 'Parcelas', 'type' => 'string', 'size' => null),
            'TransOrig' => array('name' => 'TransOrig', 'type' => 'string', 'size' => null),
            'Total' => array('name' => 'Total', 'type' => 'string', 'size' => null),
            'Filiacao' => array('name' => 'Filiacao', 'type' => 'string', 'size' => null),
            'Distribuidor' => array('name' => 'Distribuidor', 'type' => 'string', 'size' => null),
            'NumPedido' => array('name' => 'NumPedido', 'type' => 'string', 'size' => null),
            'Pax1' => array('name' => 'Pax1', 'type' => 'string', 'size' => null),
            'Pax2' => array('name' => 'Pax2', 'type' => 'string', 'size' => null),
            'Pax3' => array('name' => 'Pax3', 'type' => 'string', 'size' => null),
            'Pax4' => array('name' => 'Pax4', 'type' => 'string', 'size' => null),
            'Numdoc1' => array('name' => 'Numdoc1', 'type' => 'string', 'size' => null),
            'Numdoc2' => array('name' => 'Numdoc2', 'type' => 'string', 'size' => null),
            'Numdoc3' => array('name' => 'Numdoc3', 'type' => 'string', 'size' => null),
            'Numdoc4' => array('name' => 'Numdoc4', 'type' => 'string', 'size' => null),
            'AddData' => array('name' => 'AddData', 'type' => 'string', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}