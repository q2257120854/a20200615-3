<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class ShipResponse {
	
	static $_TSPEC;
	public $success_num = null;
	public $success_list = null;
	public $failed_list = null;
	public $failed_num = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'success_num'
			),
			2 => array(
			'var' => 'success_list'
			),
			3 => array(
			'var' => 'failed_list'
			),
			4 => array(
			'var' => 'failed_num'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success_num'])){
				
				$this->success_num = $vals['success_num'];
			}
			
			
			if (isset($vals['success_list'])){
				
				$this->success_list = $vals['success_list'];
			}
			
			
			if (isset($vals['failed_list'])){
				
				$this->failed_list = $vals['failed_list'];
			}
			
			
			if (isset($vals['failed_num'])){
				
				$this->failed_num = $vals['failed_num'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipResponse';
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
			
			
			
			
			if ("success_list" == $schemeField){
				
				$needSkip = false;
				
				$this->success_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\jitx\ShipResult();
						$elem1->read($input);
						
						$this->success_list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("failed_list" == $schemeField){
				
				$needSkip = false;
				
				$this->failed_list = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \vipapis\jitx\ShipResult();
						$elem2->read($input);
						
						$this->failed_list[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("failed_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->failed_num); 
				
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
		
		if($this->success_num !== null) {
			
			$xfer += $output->writeFieldBegin('success_num');
			$xfer += $output->writeI32($this->success_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->success_list !== null) {
			
			$xfer += $output->writeFieldBegin('success_list');
			
			if (!is_array($this->success_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failed_list !== null) {
			
			$xfer += $output->writeFieldBegin('failed_list');
			
			if (!is_array($this->failed_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->failed_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failed_num !== null) {
			
			$xfer += $output->writeFieldBegin('failed_num');
			$xfer += $output->writeI32($this->failed_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>