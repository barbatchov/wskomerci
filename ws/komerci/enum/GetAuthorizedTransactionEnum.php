<?php
namespace ws\komerci\enum;

use ws\komerci\enum\EnumAbstract;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-10
 *
 */
class GetAuthorizedTransactionEnum extends EnumAbstract {
	const AVISTA = '04';
	const PARCELADO_EMISSOR	 = '06';
	const PARCELADO_ESTABELECIMENTO = '06';
	const IATA_AVISTA = '39';
	const IATA_PARCELADO = '40';
}