<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\comment\api\admin\service;

class OrderCommentRecord {
	
	static $_TSPEC;
	public $ordersn = null;
	public $custNo = null;
	public $deliveryManNo = null;
	public $deliveryManName = null;
	public $serviceStarScore = null;
	public $recetimeStarScore = null;
	public $packageStarScore = null;
	public $satisfaction = null;
	public $impressToDelivery = null;
	public $feelings = null;
	public $createTime = null;
	public $createBy = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ordersn'
			),
			2 => array(
			'var' => 'custNo'
			),
			3 => array(
			'var' => 'deliveryManNo'
			),
			4 => array(
			'var' => 'deliveryManName'
			),
			5 => array(
			'var' => 'serviceStarScore'
			),
			6 => array(
			'var' => 'recetimeStarScore'
			),
			7 => array(
			'var' => 'packageStarScore'
			),
			8 => array(
			'var' => 'satisfaction'
			),
			9 => array(
			'var' => 'impressToDelivery'
			),
			10 => array(
			'var' => 'feelings'
			),
			11 => array(
			'var' => 'createTime'
			),
			12 => array(
			'var' => 'createBy'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ordersn'])){
				
				$this->ordersn = $vals['ordersn'];
			}
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
			if (isset($vals['deliveryManNo'])){
				
				$this->deliveryManNo = $vals['deliveryManNo'];
			}
			
			
			if (isset($vals['deliveryManName'])){
				
				$this->deliveryManName = $vals['deliveryManName'];
			}
			
			
			if (isset($vals['serviceStarScore'])){
				
				$this->serviceStarScore = $vals['serviceStarScore'];
			}
			
			
			if (isset($vals['recetimeStarScore'])){
				
				$this->recetimeStarScore = $vals['recetimeStarScore'];
			}
			
			
			if (isset($vals['packageStarScore'])){
				
				$this->packageStarScore = $vals['packageStarScore'];
			}
			
			
			if (isset($vals['satisfaction'])){
				
				$this->satisfaction = $vals['satisfaction'];
			}
			
			
			if (isset($vals['impressToDelivery'])){
				
				$this->impressToDelivery = $vals['impressToDelivery'];
			}
			
			
			if (isset($vals['feelings'])){
				
				$this->feelings = $vals['feelings'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderCommentRecord';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ordersn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ordersn);
				
			}
			
			
			
			
			if ("custNo" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->custNo); 
				
			}
			
			
			
			
			if ("deliveryManNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryManNo);
				
			}
			
			
			
			
			if ("deliveryManName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliveryManName);
				
			}
			
			
			
			
			if ("serviceStarScore" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\comment\api\admin\service\StarScore::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->serviceStarScore = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("recetimeStarScore" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\comment\api\admin\service\StarScore::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->recetimeStarScore = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("packageStarScore" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\comment\api\admin\service\StarScore::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->packageStarScore = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("satisfaction" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\comment\api\admin\service\Satisfaction::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->satisfaction = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("impressToDelivery" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->impressToDelivery);
				
			}
			
			
			
			
			if ("feelings" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feelings);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
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
		
		if($this->ordersn !== null) {
			
			$xfer += $output->writeFieldBegin('ordersn');
			$xfer += $output->writeString($this->ordersn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('custNo');
		$xfer += $output->writeI64($this->custNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->deliveryManNo !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryManNo');
			$xfer += $output->writeString($this->deliveryManNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryManName !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryManName');
			$xfer += $output->writeString($this->deliveryManName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serviceStarScore !== null) {
			
			$xfer += $output->writeFieldBegin('serviceStarScore');
			
			$em = new \com\vip\comment\api\admin\service\StarScore; 
			$output->writeString($em::$__names[$this->serviceStarScore]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recetimeStarScore !== null) {
			
			$xfer += $output->writeFieldBegin('recetimeStarScore');
			
			$em = new \com\vip\comment\api\admin\service\StarScore; 
			$output->writeString($em::$__names[$this->recetimeStarScore]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->packageStarScore !== null) {
			
			$xfer += $output->writeFieldBegin('packageStarScore');
			
			$em = new \com\vip\comment\api\admin\service\StarScore; 
			$output->writeString($em::$__names[$this->packageStarScore]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->satisfaction !== null) {
			
			$xfer += $output->writeFieldBegin('satisfaction');
			
			$em = new \com\vip\comment\api\admin\service\Satisfaction; 
			$output->writeString($em::$__names[$this->satisfaction]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->impressToDelivery !== null) {
			
			$xfer += $output->writeFieldBegin('impressToDelivery');
			$xfer += $output->writeString($this->impressToDelivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feelings !== null) {
			
			$xfer += $output->writeFieldBegin('feelings');
			$xfer += $output->writeString($this->feelings);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeString($this->createBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>