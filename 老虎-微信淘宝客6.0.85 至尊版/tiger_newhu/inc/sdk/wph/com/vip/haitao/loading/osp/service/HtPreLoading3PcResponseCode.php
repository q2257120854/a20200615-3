<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\loading\osp\service;
final class HtPreLoading3PcResponseCode{
	
	
	const SUCCESS = 200;
	
	const ORDER_NOT_FOUND = 404;
	
	const ORDER_LOADING_DUPLICATED = 405;
	
	const TOO_MANY_ORDERS = 406;
	
	const CANCEL_FAILED = 450;
	
	const FAILED = 500;
	
	static public $__names = array(
	
	200 => 'SUCCESS',
	
	404 => 'ORDER_NOT_FOUND',
	
	405 => 'ORDER_LOADING_DUPLICATED',
	
	406 => 'TOO_MANY_ORDERS',
	
	450 => 'CANCEL_FAILED',
	
	500 => 'FAILED',
	
	);
}

?>