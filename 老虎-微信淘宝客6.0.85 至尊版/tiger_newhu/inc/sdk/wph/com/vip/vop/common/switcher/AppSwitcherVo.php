<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\common\switcher;

class AppSwitcherVo {
	
	static $_TSPEC;
	public $domainName = null;
	public $moduleName = null;
	public $switchStat = null;
	public $remark = null;
	public $createTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'domainName'
			),
			2 => array(
			'var' => 'moduleName'
			),
			3 => array(
			'var' => 'switchStat'
			),
			4 => array(
			'var' => 'remark'
			),
			5 => array(
			'var' => 'createTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['domainName'])){
				
				$this->domainName = $vals['domainName'];
			}
			
			
			if (isset($vals['moduleName'])){
				
				$this->moduleName = $vals['moduleName'];
			}
			
			
			if (isset($vals['switchStat'])){
				
				$this->switchStat = $vals['switchStat'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AppSwitcherVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("domainName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->domainName);
				
			}
			
			
			
			
			if ("moduleName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->moduleName);
				
			}
			
			
			
			
			if ("switchStat" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->switchStat); 
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createTime);
				
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
		
		$xfer += $output->writeFieldBegin('domainName');
		$xfer += $output->writeString($this->domainName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('moduleName');
		$xfer += $output->writeString($this->moduleName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('switchStat');
		$xfer += $output->writeByte($this->switchStat);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeString($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>