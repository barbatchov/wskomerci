<?php

namespace ws\komerci;

use ws\komerci\KomerciSoapClientAbstract;


/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *
 */

/**
 * @method \ws\komerci\types\ConfPreAuthorizationResponse ConfPreAuthorization(\ws\komerci\types\ConfPreAuthorization $param)
 * @method \ws\komerci\types\GetAuthorized_ADResponse GetAuthorized_AD(\ws\komerci\types\GetAuthorized_AD $param)
 * @method \ws\komerci\types\GetAuthorizedResponse GetAuthorized(\ws\komerci\types\GetAuthorized $param)
 * @method \ws\komerci\types\GetAuthorizedAVSResponse GetAuthorizedAVS(\ws\komerci\types\GetAuthorizedAVS $param)
 * @method \ws\komerci\types\ReversalTxnResponse ReversalTxn(\ws\komerci\types\ReversalTxn $param)
 * @method \ws\komerci\types\ConfirmTxn_ADResponse ConfirmTxn_AD(\ws\komerci\types\ConfirmTxn_AD $param)
 * @method \ws\komerci\types\ConfirmTxnResponse ConfirmTxn(\ws\komerci\types\ConfirmTxn $param)
 * @method \ws\komerci\types\ConsFornDistribResponse ConsFornDistrib(\ws\komerci\types\ConsFornDistrib $param)
 * @method \ws\komerci\types\VoidConfPreAuthorizationResponse VoidConfPreAuthorization(\ws\komerci\types\VoidConfPreAuthorization $param)
 * @method \ws\komerci\types\VoidDebtTransactionResponse VoidDebtTransaction(\ws\komerci\types\VoidDebtTransaction $param)
 * @method \ws\komerci\types\VoidTransactionResponse VoidTransaction(\ws\komerci\types\VoidTransaction $param)
 * @method \ws\komerci\types\VoidTransactionDistrResponse VoidTransactionDistr(\ws\komerci\types\VoidTransactionDistr $param)
 * @method \ws\komerci\types\CouncilReportResponse CouncilReport(\ws\komerci\types\CouncilReport $param)
 * @method \ws\komerci\types\SalesSummResponse SalesSumm(\ws\komerci\types\SalesSumm $param)
 * @method \ws\komerci\types\VoidPreAuthorizationResponse VoidPreAuthorization(\ws\komerci\types\VoidPreAuthorization $param)
 * @method \ws\komerci\types\ConfPreAuthorizationResponse ConfPreAuthorization(\ws\komerci\types\ConfPreAuthorization $param)
 * @method \ws\komerci\types\GetAuthorized_ADResponse GetAuthorized_AD(\ws\komerci\types\GetAuthorized_AD $param)
 * @method \ws\komerci\types\GetAuthorizedResponse GetAuthorized(\ws\komerci\types\GetAuthorized $param)
 * @method \ws\komerci\types\GetAuthorizedAVSResponse GetAuthorizedAVS(\ws\komerci\types\GetAuthorizedAVS $param)
 * @method \ws\komerci\types\ReversalTxnResponse ReversalTxn(\ws\komerci\types\ReversalTxn $param)
 * @method \ws\komerci\types\ConfirmTxn_ADResponse ConfirmTxn_AD(\ws\komerci\types\ConfirmTxn_AD $param)
 * @method \ws\komerci\types\ConfirmTxnResponse ConfirmTxn(\ws\komerci\types\ConfirmTxn $param)
 * @method \ws\komerci\types\ConsFornDistribResponse ConsFornDistrib(\ws\komerci\types\ConsFornDistrib $param)
 * @method \ws\komerci\types\VoidConfPreAuthorizationResponse VoidConfPreAuthorization(\ws\komerci\types\VoidConfPreAuthorization $param)
 * @method \ws\komerci\types\VoidDebtTransactionResponse VoidDebtTransaction(\ws\komerci\types\VoidDebtTransaction $param)
 * @method \ws\komerci\types\VoidTransactionResponse VoidTransaction(\ws\komerci\types\VoidTransaction $param)
 * @method \ws\komerci\types\VoidTransactionDistrResponse VoidTransactionDistr(\ws\komerci\types\VoidTransactionDistr $param)
 * @method \ws\komerci\types\CouncilReportResponse CouncilReport(\ws\komerci\types\CouncilReport $param)
 * @method \ws\komerci\types\SalesSummResponse SalesSumm(\ws\komerci\types\SalesSumm $param)
 * @method \ws\komerci\types\VoidPreAuthorizationResponse VoidPreAuthorization(\ws\komerci\types\VoidPreAuthorization $param)
 * 
 * Test operations
 * @method \ws\komerci\types\SalesSummTstResponse SalesSummTst(\ws\komerci\types\SalesSummTst $param)
 * @method \ws\komerci\types\VoidPreAuthorizationTstResponse VoidPreAuthorizationTst(\ws\komerci\types\VoidPreAuthorizationTst $param)
 * @method \ws\komerci\types\VoidTransactionTstResponse VoidTransactionTst(\ws\komerci\types\VoidTransactionTst $param)
 * @method \ws\komerci\types\VoidConfPreAuthorizationTstResponse VoidConfPreAuthorizationTst(\ws\komerci\types\VoidConfPreAuthorizationTst $param)
 * @method \ws\komerci\types\GetAuthorizedTstResponse GetAuthorizedTst(\ws\komerci\types\GetAuthorizedTst $param)
 * @method \ws\komerci\types\GetAuthorizedAVSTstResponse GetAuthorizedAVSTst(\ws\komerci\types\GetAuthorizedAVSTst $param)
 * @method \ws\komerci\types\CouncilReportTstResponse CouncilReportTst(\ws\komerci\types\CouncilReportTst $param)
 * @method \ws\komerci\types\ConfirmTxnTstResponse ConfirmTxnTst(\ws\komerci\types\ConfirmTxnTst $param)
 * @method \ws\komerci\types\ConfPreAuthorizationTstResponse ConfPreAuthorizationTst(\ws\komerci\types\ConfPreAuthorizationTst $param)
 * @method \ws\komerci\types\SalesSummTstResponse SalesSummTst(\ws\komerci\types\SalesSummTst $param)
 * @method \ws\komerci\types\VoidPreAuthorizationTstResponse VoidPreAuthorizationTst(\ws\komerci\types\VoidPreAuthorizationTst $param)
 * @method \ws\komerci\types\VoidTransactionTstResponse VoidTransactionTst(\ws\komerci\types\VoidTransactionTst $param)
 * @method \ws\komerci\types\VoidConfPreAuthorizationTstResponse VoidConfPreAuthorizationTst(\ws\komerci\types\VoidConfPreAuthorizationTst $param)
 * @method \ws\komerci\types\GetAuthorizedTstResponse GetAuthorizedTst(\ws\komerci\types\GetAuthorizedTst $param)
 * @method \ws\komerci\types\GetAuthorizedAVSTstResponse GetAuthorizedAVSTst(\ws\komerci\types\GetAuthorizedAVSTst $param)
 * @method \ws\komerci\types\CouncilReportTstResponse CouncilReportTst(\ws\komerci\types\CouncilReportTst $param)
 * @method \ws\komerci\types\ConfirmTxnTstResponse ConfirmTxnTst(\ws\komerci\types\ConfirmTxnTst $param)
 * @method \ws\komerci\types\ConfPreAuthorizationTstResponse ConfPreAuthorizationTst(\ws\komerci\types\ConfPreAuthorizationTst $param)
 */
class KomerciFacade extends KomerciSoapClientAbstract {}