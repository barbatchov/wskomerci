<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidDebtTransaction;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidDebtTransactionTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidDebtTransaction
     */
    public function getEntity() {
        return new VoidDebtTransaction();
    }
}