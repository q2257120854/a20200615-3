<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\aftersale;

class CreateReturnApplyReq {
	
	static $_TSPEC;
	public $return_apply = null;
	public $return_apply_goods = null;
	public $consignee = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_apply'
			),
			2 => array(
			'var' => 'return_apply_goods'
			),
			3 => array(
			'var' => 'consignee'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_apply'])){
				
				$this->return_apply = $vals['return_apply'];
			}
			
			
			if (isset($vals['return_apply_goods'])){
				
				$this->return_apply_goods = $vals['return_apply_goods'];
			}
			
			
			if (isset($vals['consignee'])){
				
				$this->consignee = $vals['consignee'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateReturnApplyReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("return_apply" == $schemeField){
				
				$needSkip = false;
				
				$this->return_apply = new \com\vip\vop\cup\api\aftersale\ReturnApply();
				$this->return_apply->read($input);
				
			}
			
			
			
			
			if ("return_apply_goods" == $schemeField){
				
				$needSkip = false;
				
				$this->return_apply_goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\cup\api\aftersale\ReturnApplyGood();
						$elem0->read($input);
						
						$this->return_apply_goods[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("consignee" == $schemeField){
				
				$needSkip = false;
				
				$this->consignee = new \com\vip\vop\cup\api\aftersale\Consignee();
				$this->consignee->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('return_apply');
		
		if (!is_object($this->return_apply)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->return_apply->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_apply_goods');
		
		if (!is_array($this->return_apply_goods)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->return_apply_goods as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->consignee !== null) {
			
			$xfer += $output->writeFieldBegin('consignee');
			
			if (!is_object($this->consignee)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->consignee->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>