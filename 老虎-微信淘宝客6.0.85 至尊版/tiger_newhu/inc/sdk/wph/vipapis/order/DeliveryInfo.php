<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class DeliveryInfo {
	
	static $_TSPEC;
	public $delivery_no = null;
	public $container_no = null;
	public $record_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'delivery_no'
			),
			2 => array(
			'var' => 'container_no'
			),
			3 => array(
			'var' => 'record_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['delivery_no'])){
				
				$this->delivery_no = $vals['delivery_no'];
			}
			
			
			if (isset($vals['container_no'])){
				
				$this->container_no = $vals['container_no'];
			}
			
			
			if (isset($vals['record_type'])){
				
				$this->record_type = $vals['record_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DeliveryInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("delivery_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_no);
				
			}
			
			
			
			
			if ("container_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->container_no);
				
			}
			
			
			
			
			if ("record_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->record_type);
				
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
		
		$xfer += $output->writeFieldBegin('delivery_no');
		$xfer += $output->writeString($this->delivery_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('container_no');
		$xfer += $output->writeString($this->container_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('record_type');
		$xfer += $output->writeString($this->record_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>