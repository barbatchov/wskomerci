<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfirmTxnTstResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfirmTxnTstResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfirmTxnTstResult
     */
    public function getEntity() {
        return new ConfirmTxnTstResult();
    }
}