<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidTransactionResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionResult
     */
    public function getEntity() {
        return new VoidTransactionResult();
    }
}