<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxnTst;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfirmTxnTstTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxnTst
     */
    public function getEntity() {
        return new ConfirmTxnTst();
    }
}