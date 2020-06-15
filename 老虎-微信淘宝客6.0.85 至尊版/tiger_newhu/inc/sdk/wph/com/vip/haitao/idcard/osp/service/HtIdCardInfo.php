<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\idcard\osp\service;

class HtIdCardInfo {
	
	static $_TSPEC;
	public $orderSn = null;
	public $idCardType = null;
	public $imageFront = null;
	public $imageBack = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'idCardType'
			),
			3 => array(
			'var' => 'imageFront'
			),
			4 => array(
			'var' => 'imageBack'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['idCardType'])){
				
				$this->idCardType = $vals['idCardType'];
			}
			
			
			if (isset($vals['imageFront'])){
				
				$this->imageFront = $vals['imageFront'];
			}
			
			
			if (isset($vals['imageBack'])){
				
				$this->imageBack = $vals['imageBack'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtIdCardInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("idCardType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->idCardType); 
				
			}
			
			
			
			
			if ("imageFront" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imageFront);
				
			}
			
			
			
			
			if ("imageBack" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imageBack);
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->idCardType !== null) {
			
			$xfer += $output->writeFieldBegin('idCardType');
			$xfer += $output->writeI32($this->idCardType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageFront !== null) {
			
			$xfer += $output->writeFieldBegin('imageFront');
			$xfer += $output->writeString($this->imageFront);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imageBack !== null) {
			
			$xfer += $output->writeFieldBegin('imageBack');
			$xfer += $output->writeString($this->imageBack);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>