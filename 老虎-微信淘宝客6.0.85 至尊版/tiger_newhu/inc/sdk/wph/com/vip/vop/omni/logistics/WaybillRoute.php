<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\omni\logistics;

class WaybillRoute {
	
	static $_TSPEC;
	public $routeId = null;
	public $orderSn = null;
	public $transportNo = null;
	public $acceptTime = null;
	public $acceptAddress = null;
	public $remark = null;
	public $opCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'routeId'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'transportNo'
			),
			4 => array(
			'var' => 'acceptTime'
			),
			5 => array(
			'var' => 'acceptAddress'
			),
			6 => array(
			'var' => 'remark'
			),
			7 => array(
			'var' => 'opCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['routeId'])){
				
				$this->routeId = $vals['routeId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['acceptTime'])){
				
				$this->acceptTime = $vals['acceptTime'];
			}
			
			
			if (isset($vals['acceptAddress'])){
				
				$this->acceptAddress = $vals['acceptAddress'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['opCode'])){
				
				$this->opCode = $vals['opCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WaybillRoute';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("routeId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->routeId);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("acceptTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->acceptTime);
				
			}
			
			
			
			
			if ("acceptAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->acceptAddress);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("opCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->opCode);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('routeId');
		$xfer += $output->writeString($this->routeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('acceptTime');
		$xfer += $output->writeString($this->acceptTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('acceptAddress');
		$xfer += $output->writeString($this->acceptAddress);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('remark');
		$xfer += $output->writeString($this->remark);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('opCode');
		$xfer += $output->writeString($this->opCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>