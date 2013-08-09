<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ReversalTxnResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ReversalTxnResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ReversalTxnResult
     */
    public function getEntity() {
        return new ReversalTxnResult();
    }
}