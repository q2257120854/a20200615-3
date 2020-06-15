<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipcard;

class CancelCardResponse {
	
	static $_TSPEC;
	public $success_num = null;
	public $fail_num = null;
	public $fail_message = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'success_num'
			),
			2 => array(
			'var' => 'fail_num'
			),
			3 => array(
			'var' => 'fail_message'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success_num'])){
				
				$this->success_num = $vals['success_num'];
			}
			
			
			if (isset($vals['fail_num'])){
				
				$this->fail_num = $vals['fail_num'];
			}
			
			
			if (isset($vals['fail_message'])){
				
				$this->fail_message = $vals['fail_message'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelCardResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("success_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->success_num); 
				
			}
			
			
			
			
			if ("fail_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->fail_num); 
				
			}
			
			
			
			
			if ("fail_message" == $schemeField){
				
				$needSkip = false;
				
				$this->fail_message = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\vipcard\CancelCardFailMessage();
						$elem0->read($input);
						
						$this->fail_message[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('success_num');
		$xfer += $output->writeI32($this->success_num);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('fail_num');
		$xfer += $output->writeI32($this->fail_num);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->fail_message !== null) {
			
			$xfer += $output->writeFieldBegin('fail_message');
			
			if (!is_array($this->fail_message)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->fail_message as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>