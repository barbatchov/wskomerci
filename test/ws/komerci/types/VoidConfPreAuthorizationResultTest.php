<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\VoidConfPreAuthorizationResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class VoidConfPreAuthorizationResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\VoidConfPreAuthorizationResult
     */
    public function getEntity() {
        return new VoidConfPreAuthorizationResult();
    }
}