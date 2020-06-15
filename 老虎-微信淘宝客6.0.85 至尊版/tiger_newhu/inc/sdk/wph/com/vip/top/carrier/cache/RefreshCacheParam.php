<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\cache;

class RefreshCacheParam {
	
	static $_TSPEC;
	public $custCode = null;
	public $createdOffice = null;
	public $custRegion = null;
	public $custTown = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custCode'
			),
			2 => array(
			'var' => 'createdOffice'
			),
			3 => array(
			'var' => 'custRegion'
			),
			4 => array(
			'var' => 'custTown'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custCode'])){
				
				$this->custCode = $vals['custCode'];
			}
			
			
			if (isset($vals['createdOffice'])){
				
				$this->createdOffice = $vals['createdOffice'];
			}
			
			
			if (isset($vals['custRegion'])){
				
				$this->custRegion = $vals['custRegion'];
			}
			
			
			if (isset($vals['custTown'])){
				
				$this->custTown = $vals['custTown'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefreshCacheParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("custCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custCode);
				
			}
			
			
			
			
			if ("createdOffice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdOffice);
				
			}
			
			
			
			
			if ("custRegion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custRegion);
				
			}
			
			
			
			
			if ("custTown" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custTown);
				
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
		
		if($this->custCode !== null) {
			
			$xfer += $output->writeFieldBegin('custCode');
			$xfer += $output->writeString($this->custCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdOffice !== null) {
			
			$xfer += $output->writeFieldBegin('createdOffice');
			$xfer += $output->writeString($this->createdOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custRegion !== null) {
			
			$xfer += $output->writeFieldBegin('custRegion');
			$xfer += $output->writeString($this->custRegion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custTown !== null) {
			
			$xfer += $output->writeFieldBegin('custTown');
			$xfer += $output->writeString($this->custTown);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>