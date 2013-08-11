<?php

namespace ws\komerci;

use ws\komerci\KomerciSoapClientAbstract;

/**
 *
 * @author Elias Alves Chacon <elias.alves.chacon@gmail.com>
 * @since 2013-08-07 02:29:30
 *       
 */

class KomerciServiceFacade extends KomerciSoapClientAbstract {
	/**
	 * @return \ws\komerci\types\ConfirmTxnResponse
	 */
	public function ConfirmTxn(\ws\komerci\types\ConfirmTxn $param) {
		return new \ws\komerci\types\ConfirmTxnResponse(parent::call('ConfirmTxn', $param));
	}
	/**
	 * @return \ws\komerci\types\ConfirmTxnTstResponse
	 */
	public function ConfirmTxnTst(\ws\komerci\types\ConfirmTxnTst $param) {
		return new \ws\komerci\types\ConfirmTxnTstResponse(parent::call('ConfirmTxnTst', $param));
	}
	/**
	 * @return \ws\komerci\types\ConfirmTxn_ADResponse
	 */
	public function ConfirmTxn_AD(\ws\komerci\types\ConfirmTxn_AD $param) {
		return new \ws\komerci\types\ConfirmTxn_ADResponse(parent::call('ConfirmTxn_AD', $param));
	}
	/**
	 * @return \ws\komerci\types\ConfPreAuthorizationResponse
	 */
	public function ConfPreAuthorization(\ws\komerci\types\ConfPreAuthorization $param) {
		return new \ws\komerci\types\ConfPreAuthorizationResponse(parent::call('ConfPreAuthorization', $param));
	}
	/**
	 * @return \ws\komerci\types\ConfPreAuthorizationTstResponse
	 */
	public function ConfPreAuthorizationTst(\ws\komerci\types\ConfPreAuthorizationTst $param) {
		return new \ws\komerci\types\ConfPreAuthorizationTstResponse(parent::call('ConfPreAuthorizationTst', $param));
	}
	/**
	 * @return \ws\komerci\types\ConsFornDistribResponse
	 */
	public function ConsFornDistrib(\ws\komerci\types\ConsFornDistrib $param) {
		return new \ws\komerci\types\ConsFornDistribResponse(parent::call('ConsFornDistrib', $param));
	}
	/**
	 * @return \ws\komerci\types\CouncilReportResponse
	 */
	public function CouncilReport(\ws\komerci\types\CouncilReport $param) {
		return new \ws\komerci\types\CouncilReportResponse(parent::call('CouncilReport', $param));
	}
	/**
	 * @return \ws\komerci\types\CouncilReportTstResponse
	 */
	public function CouncilReportTst(\ws\komerci\types\CouncilReportTst $param) {
		return new \ws\komerci\types\CouncilReportTstResponse(parent::call('CouncilReportTst', $param));
	}
	/**
	 * @return \ws\komerci\types\GetAuthorizedAVSResponse
	 */
	public function GetAuthorizedAVS(\ws\komerci\types\GetAuthorizedAVS $param) {
		return new \ws\komerci\types\GetAuthorizedAVSResponse(parent::call('GetAuthorizedAVS', $param));
	}
	/**
	 * @return \ws\komerci\types\GetAuthorizedAVSTstResponse
	 */
	public function GetAuthorizedAVSTst(\ws\komerci\types\GetAuthorizedAVSTst $param) {
		return new \ws\komerci\types\GetAuthorizedAVSTstResponse(parent::call('GetAuthorizedAVSTst', $param));
	}
	/**
	 * @return \ws\komerci\types\GetAuthorizedResponse
	 */
	public function GetAuthorized(\ws\komerci\types\GetAuthorized $param) {
		return new \ws\komerci\types\GetAuthorizedResponse(parent::call('GetAuthorized', $param));
	}
	/**
	 * @return \ws\komerci\types\GetAuthorizedTstResponse
	 */
	public function GetAuthorizedTst(\ws\komerci\types\GetAuthorizedTst $param) {
		return new \ws\komerci\types\GetAuthorizedTstResponse(parent::call('GetAuthorizedTst', $param));
	}
	/**
	 * @return \ws\komerci\types\GetAuthorized_ADResponse
	 */
	public function GetAuthorized_AD(\ws\komerci\types\GetAuthorized_AD $param) {
		return new \ws\komerci\types\GetAuthorized_ADResponse(parent::call('GetAuthorized_AD', $param));
	}
	/**
	 * @return \ws\komerci\types\ReversalTxnResponse
	 */
	public function ReversalTxn(\ws\komerci\types\ReversalTxn $param) {
		return new \ws\komerci\types\ReversalTxnResponse(parent::call('ReversalTxn', $param));
	}
	/**
	 * @return \ws\komerci\types\SalesSummResponse
	 */
	public function SalesSumm(\ws\komerci\types\SalesSumm $param) {
		return new \ws\komerci\types\SalesSummResponse(parent::call('SalesSumm', $param));
	}
	/**
	 * @return \ws\komerci\types\SalesSummTstResponse
	 */
	public function SalesSummTst(\ws\komerci\types\SalesSummTst $param) {
		return new \ws\komerci\types\SalesSummTstResponse(parent::call('SalesSummTst', $param));
	}
	/**
	 * @return \ws\komerci\types\VoidConfPreAuthorizationResponse
	 */
	public function VoidConfPreAuthorization(\ws\komerci\types\VoidConfPreAuthorization $param) {
		return new \ws\komerci\types\VoidConfPreAuthorizationResponse(parent::call('VoidConfPreAuthorization', $param));
	}
	/**
	 * @return \ws\komerci\types\VoidConfPreAuthorizationTstResponse
	 */
	public function VoidConfPreAuthorizationTst(\ws\komerci\types\VoidConfPreAuthorizationTst $param) {
		return new \ws\komerci\types\VoidConfPreAuthorizationTstResponse(parent::call('VoidConfPreAuthorizationTst', $param));
	}
	/**
	 * @return \ws\komerci\types\VoidDebtTransactionResponse
	 */
	public function VoidDebtTransaction(\ws\komerci\types\VoidDebtTransaction $param) {
		return new \ws\komerci\types\VoidDebtTransactionResponse(parent::call('VoidDebtTransaction', $param));
	}
	/**
	 * @return \ws\komerci\types\VoidPreAuthorizationResponse
	 */
	public function VoidPreAuthorization(\ws\komerci\types\VoidPreAuthorization $param) {
		return new \ws\komerci\types\VoidPreAuthorizationResponse(parent::call('VoidPreAuthorization', $param));
	}
	/**
	 * @return \ws\komerci\types\VoidPreAuthorizationTstResponse
	 */
	public function VoidPreAuthorizationTst(\ws\komerci\types\VoidPreAuthorizationTst $param) {
		return new \ws\komerci\types\VoidPreAuthorizationTstResponse(parent::call('VoidPreAuthorizationTst', $param));
	}
	/**
	 * @return \ws\komerci\types\VoidTransactionDistrResponse
	 */
	public function VoidTransactionDistr(\ws\komerci\types\VoidTransactionDistr $param) {
		return new \ws\komerci\types\VoidTransactionDistrResponse(parent::call('VoidTransactionDistr', $param));
	}
	/**
	 * @return \ws\komerci\types\VoidTransactionResponse
	 */
	public function VoidTransaction(\ws\komerci\types\VoidTransaction $param) {
		return new \ws\komerci\types\VoidTransactionResponse(parent::call('VoidTransaction', $param));
		//return new \ws\komerci\types\VoidTransactionResponse(parent::call('VoidTransaction', $param));
	}
	/**
	 * @return \ws\komerci\types\VoidTransactionTstResponse
	 */
	public function VoidTransactionTst(\ws\komerci\types\VoidTransactionTst $param) {
		return new \ws\komerci\types\VoidTransactionTstResponse(parent::call('VoidTransactionTst', $param));
	}
}