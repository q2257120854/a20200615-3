<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutWmsZcodeDatailInfo {
	
	static $_TSPEC;
	public $ID = null;
	public $Z_CODE = null;
	public $Z_IMAGE = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ID'
			),
			2 => array(
			'var' => 'Z_CODE'
			),
			3 => array(
			'var' => 'Z_IMAGE'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ID'])){
				
				$this->ID = $vals['ID'];
			}
			
			
			if (isset($vals['Z_CODE'])){
				
				$this->Z_CODE = $vals['Z_CODE'];
			}
			
			
			if (isset($vals['Z_IMAGE'])){
				
				$this->Z_IMAGE = $vals['Z_IMAGE'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutWmsZcodeDatailInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ID" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ID);
				
			}
			
			
			
			
			if ("Z_CODE" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->Z_CODE);
				
			}
			
			
			
			
			if ("Z_IMAGE" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->Z_IMAGE);
				
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
		
		$xfer += $output->writeFieldBegin('ID');
		$xfer += $output->writeString($this->ID);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('Z_CODE');
		$xfer += $output->writeString($this->Z_CODE);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('Z_IMAGE');
		$xfer += $output->writeString($this->Z_IMAGE);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>