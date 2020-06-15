<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\wo;

class StateAppendixInfo {
	
	static $_TSPEC;
	public $is_punish = null;
	public $is_expedited = null;
	public $is_contacted = null;
	public $urges_cnt = null;
	public $reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'is_punish'
			),
			2 => array(
			'var' => 'is_expedited'
			),
			3 => array(
			'var' => 'is_contacted'
			),
			4 => array(
			'var' => 'urges_cnt'
			),
			5 => array(
			'var' => 'reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['is_punish'])){
				
				$this->is_punish = $vals['is_punish'];
			}
			
			
			if (isset($vals['is_expedited'])){
				
				$this->is_expedited = $vals['is_expedited'];
			}
			
			
			if (isset($vals['is_contacted'])){
				
				$this->is_contacted = $vals['is_contacted'];
			}
			
			
			if (isset($vals['urges_cnt'])){
				
				$this->urges_cnt = $vals['urges_cnt'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'StateAppendixInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("is_punish" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_punish);
				
			}
			
			
			
			
			if ("is_expedited" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_expedited);
				
			}
			
			
			
			
			if ("is_contacted" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->is_contacted);
				
			}
			
			
			
			
			if ("urges_cnt" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->urges_cnt); 
				
			}
			
			
			
			
			if ("reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason);
				
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
		
		if($this->is_punish !== null) {
			
			$xfer += $output->writeFieldBegin('is_punish');
			$xfer += $output->writeBool($this->is_punish);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_expedited !== null) {
			
			$xfer += $output->writeFieldBegin('is_expedited');
			$xfer += $output->writeBool($this->is_expedited);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_contacted !== null) {
			
			$xfer += $output->writeFieldBegin('is_contacted');
			$xfer += $output->writeBool($this->is_contacted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('urges_cnt');
		$xfer += $output->writeI32($this->urges_cnt);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>