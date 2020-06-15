<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class CarrierInfoRequest {
	
	static $_TSPEC;
	public $request_time = null;
	public $cust_code = null;
	public $carrier_info_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request_time'
			),
			2 => array(
			'var' => 'cust_code'
			),
			3 => array(
			'var' => 'carrier_info_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request_time'])){
				
				$this->request_time = $vals['request_time'];
			}
			
			
			if (isset($vals['cust_code'])){
				
				$this->cust_code = $vals['cust_code'];
			}
			
			
			if (isset($vals['carrier_info_list'])){
				
				$this->carrier_info_list = $vals['carrier_info_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CarrierInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("request_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->request_time);
				
			}
			
			
			
			
			if ("cust_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cust_code);
				
			}
			
			
			
			
			if ("carrier_info_list" == $schemeField){
				
				$needSkip = false;
				
				$this->carrier_info_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\overseas\CarrierInfo();
						$elem0->read($input);
						
						$this->carrier_info_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('request_time');
		$xfer += $output->writeString($this->request_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cust_code');
		$xfer += $output->writeString($this->cust_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_info_list');
		
		if (!is_array($this->carrier_info_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->carrier_info_list as $iter0){
			
			
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