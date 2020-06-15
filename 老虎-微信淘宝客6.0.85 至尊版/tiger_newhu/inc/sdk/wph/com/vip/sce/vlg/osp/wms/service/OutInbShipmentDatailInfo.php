<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutInbShipmentDatailInfo {
	
	static $_TSPEC;
	public $Id = null;
	public $gCode = null;
	public $custGoodsno = null;
	public $ciqGoodsno = null;
	public $qty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'Id'
			),
			2 => array(
			'var' => 'gCode'
			),
			3 => array(
			'var' => 'custGoodsno'
			),
			4 => array(
			'var' => 'ciqGoodsno'
			),
			5 => array(
			'var' => 'qty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['Id'])){
				
				$this->Id = $vals['Id'];
			}
			
			
			if (isset($vals['gCode'])){
				
				$this->gCode = $vals['gCode'];
			}
			
			
			if (isset($vals['custGoodsno'])){
				
				$this->custGoodsno = $vals['custGoodsno'];
			}
			
			
			if (isset($vals['ciqGoodsno'])){
				
				$this->ciqGoodsno = $vals['ciqGoodsno'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutInbShipmentDatailInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("Id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->Id);
				
			}
			
			
			
			
			if ("gCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->gCode);
				
			}
			
			
			
			
			if ("custGoodsno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custGoodsno);
				
			}
			
			
			
			
			if ("ciqGoodsno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ciqGoodsno);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->qty);
				
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
		
		$xfer += $output->writeFieldBegin('Id');
		$xfer += $output->writeString($this->Id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('gCode');
		$xfer += $output->writeString($this->gCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('custGoodsno');
		$xfer += $output->writeString($this->custGoodsno);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ciqGoodsno');
		$xfer += $output->writeString($this->ciqGoodsno);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeDouble($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>