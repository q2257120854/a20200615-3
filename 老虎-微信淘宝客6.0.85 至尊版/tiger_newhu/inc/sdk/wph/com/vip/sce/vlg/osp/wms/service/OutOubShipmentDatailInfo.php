<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutOubShipmentDatailInfo {
	
	static $_TSPEC;
	public $barCode = null;
	public $gCode = null;
	public $qty = null;
	public $zCode = null;
	public $batchNo = null;
	public $blNo = null;
	public $poNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barCode'
			),
			2 => array(
			'var' => 'gCode'
			),
			3 => array(
			'var' => 'qty'
			),
			4 => array(
			'var' => 'zCode'
			),
			5 => array(
			'var' => 'batchNo'
			),
			6 => array(
			'var' => 'blNo'
			),
			7 => array(
			'var' => 'poNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barCode'])){
				
				$this->barCode = $vals['barCode'];
			}
			
			
			if (isset($vals['gCode'])){
				
				$this->gCode = $vals['gCode'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['zCode'])){
				
				$this->zCode = $vals['zCode'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['blNo'])){
				
				$this->blNo = $vals['blNo'];
			}
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutOubShipmentDatailInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barCode);
				
			}
			
			
			
			
			if ("gCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->gCode);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->qty);
				
			}
			
			
			
			
			if ("zCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->zCode);
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("blNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->blNo);
				
			}
			
			
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
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
		
		$xfer += $output->writeFieldBegin('barCode');
		$xfer += $output->writeString($this->barCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('gCode');
		$xfer += $output->writeString($this->gCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeDouble($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('zCode');
		$xfer += $output->writeString($this->zCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batchNo');
		$xfer += $output->writeString($this->batchNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('blNo');
		$xfer += $output->writeString($this->blNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>