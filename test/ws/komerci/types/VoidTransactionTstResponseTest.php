<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionTstResponse;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidTransactionTstResponseTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionTstResponse
     */
    public function getEntity() {
        return new VoidTransactionTstResponse();
    }
}