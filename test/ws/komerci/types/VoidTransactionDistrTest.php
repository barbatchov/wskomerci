<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidTransactionDistr;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidTransactionDistrTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidTransactionDistr
     */
    public function getEntity() {
        return new VoidTransactionDistr();
    }
}