<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\order;

class OrderConsigneeInfo {
	
	static $_TSPEC;
	public $addr_type = null;
	public $consignee = null;
	public $area_id = null;
	public $address = null;
	public $post_code = null;
	public $mobile = null;
	public $tel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'addr_type'
			),
			2 => array(
			'var' => 'consignee'
			),
			3 => array(
			'var' => 'area_id'
			),
			4 => array(
			'var' => 'address'
			),
			5 => array(
			'var' => 'post_code'
			),
			6 => array(
			'var' => 'mobile'
			),
			7 => array(
			'var' => 'tel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['addr_type'])){
				
				$this->addr_type = $vals['addr_type'];
			}
			
			
			if (isset($vals['consignee'])){
				
				$this->consignee = $vals['consignee'];
			}
			
			
			if (isset($vals['area_id'])){
				
				$this->area_id = $vals['area_id'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['post_code'])){
				
				$this->post_code = $vals['post_code'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderConsigneeInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("addr_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->addr_type); 
				
			}
			
			
			
			
			if ("consignee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignee);
				
			}
			
			
			
			
			if ("area_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_id);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("post_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->post_code);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
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
		
		$xfer += $output->writeFieldBegin('addr_type');
		$xfer += $output->writeI32($this->addr_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('consignee');
		$xfer += $output->writeString($this->consignee);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('area_id');
		$xfer += $output->writeString($this->area_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('address');
		$xfer += $output->writeString($this->address);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->post_code !== null) {
			
			$xfer += $output->writeFieldBegin('post_code');
			$xfer += $output->writeString($this->post_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('mobile');
		$xfer += $output->writeString($this->mobile);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>