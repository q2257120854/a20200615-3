<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class GetActualStorageInfoResponse {
	
	static $_TSPEC;
	public $storage_no = null;
	public $storage_time = null;
	public $total = null;
	public $actual_storage_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'storage_no'
			),
			2 => array(
			'var' => 'storage_time'
			),
			3 => array(
			'var' => 'total'
			),
			4 => array(
			'var' => 'actual_storage_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['storage_no'])){
				
				$this->storage_no = $vals['storage_no'];
			}
			
			
			if (isset($vals['storage_time'])){
				
				$this->storage_time = $vals['storage_time'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['actual_storage_list'])){
				
				$this->actual_storage_list = $vals['actual_storage_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetActualStorageInfoResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("storage_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storage_no);
				
			}
			
			
			
			
			if ("storage_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storage_time);
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
			}
			
			
			
			
			if ("actual_storage_list" == $schemeField){
				
				$needSkip = false;
				
				$this->actual_storage_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\delivery\ActualStorageInfo();
						$elem0->read($input);
						
						$this->actual_storage_list[$_size0++] = $elem0;
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
		
		if($this->storage_no !== null) {
			
			$xfer += $output->writeFieldBegin('storage_no');
			$xfer += $output->writeString($this->storage_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storage_time !== null) {
			
			$xfer += $output->writeFieldBegin('storage_time');
			$xfer += $output->writeString($this->storage_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total !== null) {
			
			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeI32($this->total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actual_storage_list !== null) {
			
			$xfer += $output->writeFieldBegin('actual_storage_list');
			
			if (!is_array($this->actual_storage_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->actual_storage_list as $iter0){
				
				
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