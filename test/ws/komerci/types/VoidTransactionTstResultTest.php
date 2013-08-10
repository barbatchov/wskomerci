<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionTstResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidTransactionTstResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionTstResult
     */
    public function getEntity() {
        return new VoidTransactionTstResult();
    }
}