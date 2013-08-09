<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransaction;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidTransactionTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransaction
     */
    public function getEntity() {
        return new VoidTransaction();
    }
}