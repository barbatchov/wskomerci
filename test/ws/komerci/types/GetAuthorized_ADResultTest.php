<?php
use \test\ws\komerci\BasicEntityTestCase;
use \ws\komerci\types\GetAuthorized_ADResult;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */
class GetAuthorized_ADResultTest extends BasicEntityTestCase {

    /**
     * @return \ws\komerci\types\GetAuthorized_ADResult
     */
    public function getEntity() {
        return new GetAuthorized_ADResult();
    }
}