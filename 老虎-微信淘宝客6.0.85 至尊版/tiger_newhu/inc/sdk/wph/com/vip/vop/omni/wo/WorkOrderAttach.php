<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\omni\wo;

class WorkOrderAttach {
	
	static $_TSPEC;
	public $woNo = null;
	public $createTime = null;
	public $fileName = null;
	public $filePath = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'woNo'
			),
			2 => array(
			'var' => 'createTime'
			),
			3 => array(
			'var' => 'fileName'
			),
			4 => array(
			'var' => 'filePath'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['woNo'])){
				
				$this->woNo = $vals['woNo'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['fileName'])){
				
				$this->fileName = $vals['fileName'];
			}
			
			
			if (isset($vals['filePath'])){
				
				$this->filePath = $vals['filePath'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderAttach';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("woNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->woNo);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("fileName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fileName);
				
			}
			
			
			
			
			if ("filePath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->filePath);
				
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
		
		if($this->woNo !== null) {
			
			$xfer += $output->writeFieldBegin('woNo');
			$xfer += $output->writeString($this->woNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fileName !== null) {
			
			$xfer += $output->writeFieldBegin('fileName');
			$xfer += $output->writeString($this->fileName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->filePath !== null) {
			
			$xfer += $output->writeFieldBegin('filePath');
			$xfer += $output->writeString($this->filePath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>