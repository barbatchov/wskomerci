<?php
namespace ws\komerci\enum;

use ws\komerci\enum\EnumAbstract;

class ConfirmTxnEnum extends EnumAbstract {
	const CONFIRMACAO_COM_SUCESSO = 0;
	const JA_CONFIRMADA = 1;
	const TRANSACAO_NEGADA = 2;
	const TRANSACAO_DESFEITA = 3;
	const TRANSACAO_ESTORNADA = 4;
	const TRANSACAO_ESTORNADA_COD05 = 5;
	const DADOS_NAO_COINCIDEM = 8;
	const DADOS_NAO_ENCONTRADA = 9;
	const DADOS_AUSENTES = 88;
}