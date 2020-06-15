<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ProtContractAuditParams {
	
	static $_TSPEC;
	public $protNos = null;
	public $isAgree = null;
	public $remark = null;
	public $stage = null;
	public $createOperatorId = null;
	public $brandGoodsList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protNos'
			),
			2 => array(
			'var' => 'isAgree'
			),
			3 => array(
			'var' => 'remark'
			),
			4 => array(
			'var' => 'stage'
			),
			5 => array(
			'var' => 'createOperatorId'
			),
			6 => array(
			'var' => 'brandGoodsList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protNos'])){
				
				$this->protNos = $vals['protNos'];
			}
			
			
			if (isset($vals['isAgree'])){
				
				$this->isAgree = $vals['isAgree'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['stage'])){
				
				$this->stage = $vals['stage'];
			}
			
			
			if (isset($vals['createOperatorId'])){
				
				$this->createOperatorId = $vals['createOperatorId'];
			}
			
			
			if (isset($vals['brandGoodsList'])){
				
				$this->brandGoodsList = $vals['brandGoodsList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProtContractAuditParams';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("protNos" == $schemeField){
				
				$needSkip = false;
				
				$this->protNos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->protNos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("isAgree" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isAgree);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("stage" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stage); 
				
			}
			
			
			
			
			if ("createOperatorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->createOperatorId); 
				
			}
			
			
			
			
			if ("brandGoodsList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandGoodsList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\api\promotion\vis\protcontract\service\BrandGoods();
						$elem1->read($input);
						
						$this->brandGoodsList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('protNos');
		
		if (!is_array($this->protNos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->protNos as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isAgree');
		$xfer += $output->writeString($this->isAgree);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('stage');
		$xfer += $output->writeByte($this->stage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('createOperatorId');
		$xfer += $output->writeI32($this->createOperatorId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandGoodsList !== null) {
			
			$xfer += $output->writeFieldBegin('brandGoodsList');
			
			if (!is_array($this->brandGoodsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->brandGoodsList as $iter0){
				
				
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