<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxn_AD;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfirmTxn_ADTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxn_AD
     */
    public function getEntity() {
        return new ConfirmTxn_AD();
    }
}