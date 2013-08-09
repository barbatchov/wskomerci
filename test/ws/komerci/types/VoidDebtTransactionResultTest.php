<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidDebtTransactionResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidDebtTransactionResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidDebtTransactionResult
     */
    public function getEntity() {
        return new VoidDebtTransactionResult();
    }
}