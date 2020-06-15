<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\coupon\model;

class CouponMultiBindRequest {
	
	static $_TSPEC;
	public $groupNo = null;
	public $userIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'groupNo'
			),
			2 => array(
			'var' => 'userIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['groupNo'])){
				
				$this->groupNo = $vals['groupNo'];
			}
			
			
			if (isset($vals['userIds'])){
				
				$this->userIds = $vals['userIds'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponMultiBindRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("groupNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->groupNo);
				
			}
			
			
			
			
			if ("userIds" == $schemeField){
				
				$needSkip = false;
				
				$this->userIds = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI64($elem1); 
						
						$this->userIds[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('groupNo');
		$xfer += $output->writeString($this->groupNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userIds');
		
		if (!is_array($this->userIds)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->userIds as $iter0){
			
			$xfer += $output->writeI64($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>