<?php
namespace ws\komerci\decorators;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-09
 *
 */
interface KomerciObserverInterface {
	public function notify($args = null);
}