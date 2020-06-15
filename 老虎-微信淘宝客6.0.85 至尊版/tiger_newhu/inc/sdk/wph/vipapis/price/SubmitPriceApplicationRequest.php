<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\price;

class SubmitPriceApplicationRequest {
	
	static $_TSPEC;
	public $application_id = null;
	public $effective_start_time = null;
	public $effective_end_time = null;
	public $memo = null;
	public $vendor_id = null;
	public $cooperation_nos = null;
	public $price_details = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'application_id'
			),
			2 => array(
			'var' => 'effective_start_time'
			),
			3 => array(
			'var' => 'effective_end_time'
			),
			4 => array(
			'var' => 'memo'
			),
			5 => array(
			'var' => 'vendor_id'
			),
			6 => array(
			'var' => 'cooperation_nos'
			),
			7 => array(
			'var' => 'price_details'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['application_id'])){
				
				$this->application_id = $vals['application_id'];
			}
			
			
			if (isset($vals['effective_start_time'])){
				
				$this->effective_start_time = $vals['effective_start_time'];
			}
			
			
			if (isset($vals['effective_end_time'])){
				
				$this->effective_end_time = $vals['effective_end_time'];
			}
			
			
			if (isset($vals['memo'])){
				
				$this->memo = $vals['memo'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['cooperation_nos'])){
				
				$this->cooperation_nos = $vals['cooperation_nos'];
			}
			
			
			if (isset($vals['price_details'])){
				
				$this->price_details = $vals['price_details'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubmitPriceApplicationRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("application_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->application_id);
				
			}
			
			
			
			
			if ("effective_start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->effective_start_time);
				
			}
			
			
			
			
			if ("effective_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->effective_end_time);
				
			}
			
			
			
			
			if ("memo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->memo);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("cooperation_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->cooperation_nos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->cooperation_nos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("price_details" == $schemeField){
				
				$needSkip = false;
				
				$this->price_details = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\price\SubmitPriceApplicationDetail();
						$elem1->read($input);
						
						$this->price_details[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('application_id');
		$xfer += $output->writeString($this->application_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('effective_start_time');
		$xfer += $output->writeI64($this->effective_start_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->effective_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('effective_end_time');
			$xfer += $output->writeI64($this->effective_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->memo !== null) {
			
			$xfer += $output->writeFieldBegin('memo');
			$xfer += $output->writeString($this->memo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cooperation_nos');
		
		if (!is_array($this->cooperation_nos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->cooperation_nos as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('price_details');
		
		if (!is_array($this->price_details)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->price_details as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>