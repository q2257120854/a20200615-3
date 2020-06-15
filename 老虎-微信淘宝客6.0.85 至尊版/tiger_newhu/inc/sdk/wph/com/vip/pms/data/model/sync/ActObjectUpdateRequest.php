<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\model\sync;

class ActObjectUpdateRequest {
	
	static $_TSPEC;
	public $actNo = null;
	public $delRangIdList = null;
	public $addObjectMemberModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actNo'
			),
			2 => array(
			'var' => 'delRangIdList'
			),
			3 => array(
			'var' => 'addObjectMemberModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actNo'])){
				
				$this->actNo = $vals['actNo'];
			}
			
			
			if (isset($vals['delRangIdList'])){
				
				$this->delRangIdList = $vals['delRangIdList'];
			}
			
			
			if (isset($vals['addObjectMemberModel'])){
				
				$this->addObjectMemberModel = $vals['addObjectMemberModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActObjectUpdateRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actNo);
				
			}
			
			
			
			
			if ("delRangIdList" == $schemeField){
				
				$needSkip = false;
				
				$this->delRangIdList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->delRangIdList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("addObjectMemberModel" == $schemeField){
				
				$needSkip = false;
				
				$this->addObjectMemberModel = new \com\vip\pms\data\model\sync\ActObjectMemberModel();
				$this->addObjectMemberModel->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('actNo');
		$xfer += $output->writeString($this->actNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delRangIdList !== null) {
			
			$xfer += $output->writeFieldBegin('delRangIdList');
			
			if (!is_array($this->delRangIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->delRangIdList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addObjectMemberModel !== null) {
			
			$xfer += $output->writeFieldBegin('addObjectMemberModel');
			
			if (!is_object($this->addObjectMemberModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->addObjectMemberModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>