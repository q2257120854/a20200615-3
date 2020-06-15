<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\model\sync;

class ActObjectMemberModel {
	
	static $_TSPEC;
	public $excludeFlag = null;
	public $actRange = null;
	public $objectRangeModelList = null;
	public $actGoodsList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'excludeFlag'
			),
			2 => array(
			'var' => 'actRange'
			),
			3 => array(
			'var' => 'objectRangeModelList'
			),
			4 => array(
			'var' => 'actGoodsList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['excludeFlag'])){
				
				$this->excludeFlag = $vals['excludeFlag'];
			}
			
			
			if (isset($vals['actRange'])){
				
				$this->actRange = $vals['actRange'];
			}
			
			
			if (isset($vals['objectRangeModelList'])){
				
				$this->objectRangeModelList = $vals['objectRangeModelList'];
			}
			
			
			if (isset($vals['actGoodsList'])){
				
				$this->actGoodsList = $vals['actGoodsList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActObjectMemberModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("excludeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->excludeFlag);
				
			}
			
			
			
			
			if ("actRange" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actRange); 
				
			}
			
			
			
			
			if ("objectRangeModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->objectRangeModelList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\pms\data\model\sync\ActObjectRangeModel();
						$elem0->read($input);
						
						$this->objectRangeModelList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("actGoodsList" == $schemeField){
				
				$needSkip = false;
				
				$this->actGoodsList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\PmsActGoodsModel();
						$elem1->read($input);
						
						$this->actGoodsList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('excludeFlag');
		$xfer += $output->writeBool($this->excludeFlag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actRange');
		$xfer += $output->writeI32($this->actRange);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('objectRangeModelList');
		
		if (!is_array($this->objectRangeModelList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->objectRangeModelList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->actGoodsList !== null) {
			
			$xfer += $output->writeFieldBegin('actGoodsList');
			
			if (!is_array($this->actGoodsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->actGoodsList as $iter0){
				
				
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