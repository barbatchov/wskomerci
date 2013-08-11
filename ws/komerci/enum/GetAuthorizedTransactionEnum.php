<?php
namespace ws\komerci\enum;

use ws\komerci\enum\EnumAbstract;

class GetAuthorizedTransactionEnum extends EnumAbstract {
	const AVISTA = '04';
	const PARCELADO_EMISSOR	 = '06';
	const PARCELADO_ESTABELECIMENTO = '06';
	const IATA_AVISTA = '39';
	const IATA_PARCELADO = '40';
}