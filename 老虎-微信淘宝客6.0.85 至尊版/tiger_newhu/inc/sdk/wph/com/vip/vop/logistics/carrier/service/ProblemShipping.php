<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\carrier\service;

class ProblemShipping {
	
	static $_TSPEC;
	public $logistics_no = null;
	public $op_time = null;
	public $desc = null;
	public $problem_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'logistics_no'
			),
			2 => array(
			'var' => 'op_time'
			),
			3 => array(
			'var' => 'desc'
			),
			4 => array(
			'var' => 'problem_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['op_time'])){
				
				$this->op_time = $vals['op_time'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
			if (isset($vals['problem_code'])){
				
				$this->problem_code = $vals['problem_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProblemShipping';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("op_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->op_time);
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
			}
			
			
			
			
			if ("problem_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->problem_code);
				
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
		
		$xfer += $output->writeFieldBegin('logistics_no');
		$xfer += $output->writeString($this->logistics_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('op_time');
		$xfer += $output->writeI64($this->op_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('desc');
		$xfer += $output->writeString($this->desc);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('problem_code');
		$xfer += $output->writeString($this->problem_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>