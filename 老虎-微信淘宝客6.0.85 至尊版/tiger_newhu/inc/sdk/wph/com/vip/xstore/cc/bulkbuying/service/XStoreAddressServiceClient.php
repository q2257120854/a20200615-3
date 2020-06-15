<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;
$base_path = dirname(__FILE__).'/../../../../../../';
require_once $base_path.'/Osp/Util/PathUtil.php';
require_once $base_path.'/Osp/ClassLoader/ClassLoader.php';
class XStoreAddressServiceClient{
	
	private static $isRegis;
	private static $DEFAULT_PROXY_IP = "127.0.0.1";
	private static $DEFAULT_PROXY_PORT = "2080";
	
	private static function regis(){
		
		$path = \Osp\Util\PathUtil::getRootPath ();
		$nsLoader = new \Osp\ClassLoader\ClassLoader ();
		$nsLoader->registerNamespace ( 'Thrift', $path );
		$nsLoader->registerNamespace ( 'Osp', $path );
		$nsLoader->registerNamespace ( 'com', $path );
		$nsLoader->register ();
	}
	
	
	public static function getService(){
		
		if (! XStoreAddressServiceClient::$isRegis){
			
			XStoreAddressServiceClient::regis ();
			XStoreAddressServiceClient::$isRegis = true;
		}
		
		
		$ctx = \Osp\Context\InvocationContextFactory::getInstance ();
		$ip = XStoreAddressServiceClient::$DEFAULT_PROXY_IP;
		$port = XStoreAddressServiceClient::$DEFAULT_PROXY_PORT;	
		try{
			
			$envCfg = getenv ( "VIP_OSP_PROXY" );
			$ipport = explode ( ":", $envCfg );
			if (strlen ( $envCfg ) > 0 && count ( $ipport ) == 2){
				
				$ip = $ipport [0];
				$port = $ipport [1];
			}
			
		}
		catch(\Exception $e){
			
			$ip = XStoreAddressServiceClient::$DEFAULT_PROXY_IP;
			$port = XStoreAddressServiceClient::$DEFAULT_PROXY_PORT;
		}
		
		if ($ctx->getCalleeIP () == null){
			
			$ctx->setCalleeIP ( $ip );
		}
		
		if ($ctx->getCalleePort () == null){
			
			$ctx->setCalleePort ( $port );
		}
		
		//$ctx->setProtocol ( \Osp\Protocol\OspProtocol::$Binary );
		
		return new \com\vip\xstore\cc\bulkbuying\service\XStoreAddressServiceHelper();
	}
	
}

?>