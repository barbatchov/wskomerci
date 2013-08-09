<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ReversalTxn;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ReversalTxnTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ReversalTxn
     */
    public function getEntity() {
        return new ReversalTxn();
    }
}