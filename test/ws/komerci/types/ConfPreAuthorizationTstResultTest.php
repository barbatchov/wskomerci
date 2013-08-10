<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\ConfPreAuthorizationTstResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class ConfPreAuthorizationTstResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\ConfPreAuthorizationTstResult
     */
    public function getEntity() {
        return new ConfPreAuthorizationTstResult();
    }
}