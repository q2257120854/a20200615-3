<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\oto;

class SpuHealthCheck {
	
	static $_TSPEC;
	public $v_spu_id = null;
	public $health_check_percentage = null;
	public $health_check_detail = null;
	public $health_check = null;
	public $riskLevel = null;
	public $error_code_message = null;
	public $health_check_detail_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'v_spu_id'
			),
			2 => array(
			'var' => 'health_check_percentage'
			),
			3 => array(
			'var' => 'health_check_detail'
			),
			4 => array(
			'var' => 'health_check'
			),
			5 => array(
			'var' => 'riskLevel'
			),
			6 => array(
			'var' => 'error_code_message'
			),
			7 => array(
			'var' => 'health_check_detail_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['v_spu_id'])){
				
				$this->v_spu_id = $vals['v_spu_id'];
			}
			
			
			if (isset($vals['health_check_percentage'])){
				
				$this->health_check_percentage = $vals['health_check_percentage'];
			}
			
			
			if (isset($vals['health_check_detail'])){
				
				$this->health_check_detail = $vals['health_check_detail'];
			}
			
			
			if (isset($vals['health_check'])){
				
				$this->health_check = $vals['health_check'];
			}
			
			
			if (isset($vals['riskLevel'])){
				
				$this->riskLevel = $vals['riskLevel'];
			}
			
			
			if (isset($vals['error_code_message'])){
				
				$this->error_code_message = $vals['error_code_message'];
			}
			
			
			if (isset($vals['health_check_detail_list'])){
				
				$this->health_check_detail_list = $vals['health_check_detail_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SpuHealthCheck';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("v_spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->v_spu_id); 
				
			}
			
			
			
			
			if ("health_check_percentage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->health_check_percentage);
				
			}
			
			
			
			
			if ("health_check_detail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->health_check_detail);
				
			}
			
			
			
			
			if ("health_check" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->health_check); 
				
			}
			
			
			
			
			if ("riskLevel" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->riskLevel); 
				
			}
			
			
			
			
			if ("error_code_message" == $schemeField){
				
				$needSkip = false;
				
				$this->error_code_message = new \com\vip\vop\cup\api\oto\ErrorCodeMessage();
				$this->error_code_message->read($input);
				
			}
			
			
			
			
			if ("health_check_detail_list" == $schemeField){
				
				$needSkip = false;
				
				$this->health_check_detail_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\cup\api\oto\HealthCheckDetail();
						$elem0->read($input);
						
						$this->health_check_detail_list[$_size0++] = $elem0;
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
		
		if($this->v_spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('v_spu_id');
			$xfer += $output->writeI64($this->v_spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->health_check_percentage !== null) {
			
			$xfer += $output->writeFieldBegin('health_check_percentage');
			$xfer += $output->writeString($this->health_check_percentage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->health_check_detail !== null) {
			
			$xfer += $output->writeFieldBegin('health_check_detail');
			$xfer += $output->writeString($this->health_check_detail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->health_check !== null) {
			
			$xfer += $output->writeFieldBegin('health_check');
			$xfer += $output->writeI32($this->health_check);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->riskLevel !== null) {
			
			$xfer += $output->writeFieldBegin('riskLevel');
			$xfer += $output->writeI32($this->riskLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error_code_message !== null) {
			
			$xfer += $output->writeFieldBegin('error_code_message');
			
			if (!is_object($this->error_code_message)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->error_code_message->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->health_check_detail_list !== null) {
			
			$xfer += $output->writeFieldBegin('health_check_detail_list');
			
			if (!is_array($this->health_check_detail_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->health_check_detail_list as $iter0){
				
				
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