<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\bill;

class UpdateBillResult {
	
	static $_TSPEC;
	public $success_channel_data_id_list = null;
	public $failure_channel_data_id_list = null;
	public $failure_msg_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'success_channel_data_id_list'
			),
			2 => array(
			'var' => 'failure_channel_data_id_list'
			),
			3 => array(
			'var' => 'failure_msg_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success_channel_data_id_list'])){
				
				$this->success_channel_data_id_list = $vals['success_channel_data_id_list'];
			}
			
			
			if (isset($vals['failure_channel_data_id_list'])){
				
				$this->failure_channel_data_id_list = $vals['failure_channel_data_id_list'];
			}
			
			
			if (isset($vals['failure_msg_list'])){
				
				$this->failure_msg_list = $vals['failure_msg_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateBillResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("success_channel_data_id_list" == $schemeField){
				
				$needSkip = false;
				
				$this->success_channel_data_id_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI64($elem0); 
						
						$this->success_channel_data_id_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("failure_channel_data_id_list" == $schemeField){
				
				$needSkip = false;
				
				$this->failure_channel_data_id_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI64($elem1); 
						
						$this->failure_channel_data_id_list[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("failure_msg_list" == $schemeField){
				
				$needSkip = false;
				
				$this->failure_msg_list = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->failure_msg_list[$_size2++] = $elem2;
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
		
		if($this->success_channel_data_id_list !== null) {
			
			$xfer += $output->writeFieldBegin('success_channel_data_id_list');
			
			if (!is_array($this->success_channel_data_id_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success_channel_data_id_list as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failure_channel_data_id_list !== null) {
			
			$xfer += $output->writeFieldBegin('failure_channel_data_id_list');
			
			if (!is_array($this->failure_channel_data_id_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->failure_channel_data_id_list as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failure_msg_list !== null) {
			
			$xfer += $output->writeFieldBegin('failure_msg_list');
			
			if (!is_array($this->failure_msg_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->failure_msg_list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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