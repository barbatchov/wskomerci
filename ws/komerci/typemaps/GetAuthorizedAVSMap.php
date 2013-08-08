<?php
namespace ws\komerci\typemaps;

use \ws\komerci\typemaps\GenericAttributes;

class GetAuthorizedAVSMap implements TypemapInterface {
    const TOTAL = 'Total';
    const TRANSACAO = 'Transacao';
    const PARCELAS = 'Parcelas';
    const FILIACAO = 'Filiacao';
    const NUM_PEDIDO = 'NumPedido';
    const NRCARTAO = 'Nrcartao';
    const C_V_C2 = 'CVC2';
    const MES = 'Mes';
    const ANO = 'Ano';
    const PORTADOR = 'Portador';
    const C_P_F = 'CPF';
    const ENDERECO = 'Endereco';
    const NUM1 = 'Num1';
    const COMPLEMENTO = 'Complemento';
    const CEP1 = 'Cep1';
    const CEP2 = 'Cep2';
    const I_A_T_A = 'IATA';
    const DISTRIBUIDOR = 'Distribuidor';
    const CONCENTRADOR = 'Concentrador';
    const TAXA_EMBARQUE = 'TaxaEmbarque';
    const ENTRADA = 'Entrada';
    const PAX1 = 'Pax1';
    const PAX2 = 'Pax2';
    const PAX3 = 'Pax3';
    const PAX4 = 'Pax4';
    const NUMDOC1 = 'Numdoc1';
    const NUMDOC2 = 'Numdoc2';
    const NUMDOC3 = 'Numdoc3';
    const NUMDOC4 = 'Numdoc4';

    /**
     * @return \ws\komerci\typemaps\GenericAttributes
     */
    public function getProperty($name = '') {
        $array = array(
            'Total' => array('name' => 'Total', 'type' => 'string', 'size' => null),
            'Transacao' => array('name' => 'Transacao', 'type' => 'string', 'size' => null),
            'Parcelas' => array('name' => 'Parcelas', 'type' => 'string', 'size' => null),
            'Filiacao' => array('name' => 'Filiacao', 'type' => 'string', 'size' => null),
            'NumPedido' => array('name' => 'NumPedido', 'type' => 'string', 'size' => null),
            'Nrcartao' => array('name' => 'Nrcartao', 'type' => 'string', 'size' => null),
            'CVC2' => array('name' => 'CVC2', 'type' => 'string', 'size' => null),
            'Mes' => array('name' => 'Mes', 'type' => 'string', 'size' => null),
            'Ano' => array('name' => 'Ano', 'type' => 'string', 'size' => null),
            'Portador' => array('name' => 'Portador', 'type' => 'string', 'size' => null),
            'CPF' => array('name' => 'CPF', 'type' => 'string', 'size' => null),
            'Endereco' => array('name' => 'Endereco', 'type' => 'string', 'size' => null),
            'Num1' => array('name' => 'Num1', 'type' => 'string', 'size' => null),
            'Complemento' => array('name' => 'Complemento', 'type' => 'string', 'size' => null),
            'Cep1' => array('name' => 'Cep1', 'type' => 'string', 'size' => null),
            'Cep2' => array('name' => 'Cep2', 'type' => 'string', 'size' => null),
            'IATA' => array('name' => 'IATA', 'type' => 'string', 'size' => null),
            'Distribuidor' => array('name' => 'Distribuidor', 'type' => 'string', 'size' => null),
            'Concentrador' => array('name' => 'Concentrador', 'type' => 'string', 'size' => null),
            'TaxaEmbarque' => array('name' => 'TaxaEmbarque', 'type' => 'string', 'size' => null),
            'Entrada' => array('name' => 'Entrada', 'type' => 'string', 'size' => null),
            'Pax1' => array('name' => 'Pax1', 'type' => 'string', 'size' => null),
            'Pax2' => array('name' => 'Pax2', 'type' => 'string', 'size' => null),
            'Pax3' => array('name' => 'Pax3', 'type' => 'string', 'size' => null),
            'Pax4' => array('name' => 'Pax4', 'type' => 'string', 'size' => null),
            'Numdoc1' => array('name' => 'Numdoc1', 'type' => 'string', 'size' => null),
            'Numdoc2' => array('name' => 'Numdoc2', 'type' => 'string', 'size' => null),
            'Numdoc3' => array('name' => 'Numdoc3', 'type' => 'string', 'size' => null),
            'Numdoc4' => array('name' => 'Numdoc4', 'type' => 'string', 'size' => null)
        );
    
        return (isset($array[$name])) ? new GenericAttributes($array[$name]) : null;
    }
}