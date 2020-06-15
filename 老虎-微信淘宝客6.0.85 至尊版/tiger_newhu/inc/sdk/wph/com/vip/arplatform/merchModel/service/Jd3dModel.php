<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\merchModel\service;

class Jd3dModel {
	
	static $_TSPEC;
	public $pidVid = null;
	public $modelUrl = null;
	public $barcode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pidVid'
			),
			2 => array(
			'var' => 'modelUrl'
			),
			3 => array(
			'var' => 'barcode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pidVid'])){
				
				$this->pidVid = $vals['pidVid'];
			}
			
			
			if (isset($vals['modelUrl'])){
				
				$this->modelUrl = $vals['modelUrl'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Jd3dModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pidVid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pidVid);
				
			}
			
			
			
			
			if ("modelUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->modelUrl);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
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
		
		if($this->pidVid !== null) {
			
			$xfer += $output->writeFieldBegin('pidVid');
			$xfer += $output->writeString($this->pidVid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('modelUrl');
		$xfer += $output->writeString($this->modelUrl);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>