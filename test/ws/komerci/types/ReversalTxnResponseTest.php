<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ReversalTxnResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ReversalTxnResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ReversalTxnResponse
     */
    public function getEntity() {
        return new ReversalTxnResponse();
    }
}