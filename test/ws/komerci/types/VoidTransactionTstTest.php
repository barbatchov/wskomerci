<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionTst;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidTransactionTstTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionTst
     */
    public function getEntity() {
        return new VoidTransactionTst();
    }
}