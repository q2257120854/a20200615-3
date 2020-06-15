<?php

namespace Context;

class InvocationInfo {
	private $calleeIP;
	private $calleePort;
	private $protocol;
	private $serviceName;
	private $method;
	private $callerVersion;
	private $sequence;
	private $callerTid;
	private $options;
	private $callerId;
	private $sessionTid;
	private $uid;
	private $cookie;
	private $calleeTid;
	private $uip;
	private $returnCode; // 返回码
	private $returnMessage; // 返回信息
	
	private $response;//请求返回信息
	private $timeOut;
	private $sign;//签名值
}

?>