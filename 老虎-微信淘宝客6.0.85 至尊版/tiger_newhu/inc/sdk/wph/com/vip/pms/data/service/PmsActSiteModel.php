<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsActSiteModel {
	
	static $_TSPEC;
	public $siteId = null;
	public $site = null;
	public $actScopeList = null;
	public $actPsScopeList = null;
	public $actFavList = null;
	public $actNoList = null;
	public $siteType = null;
	public $actGoodsList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'siteId'
			),
			2 => array(
			'var' => 'site'
			),
			3 => array(
			'var' => 'actScopeList'
			),
			4 => array(
			'var' => 'actPsScopeList'
			),
			5 => array(
			'var' => 'actFavList'
			),
			6 => array(
			'var' => 'actNoList'
			),
			7 => array(
			'var' => 'siteType'
			),
			8 => array(
			'var' => 'actGoodsList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['siteId'])){
				
				$this->siteId = $vals['siteId'];
			}
			
			
			if (isset($vals['site'])){
				
				$this->site = $vals['site'];
			}
			
			
			if (isset($vals['actScopeList'])){
				
				$this->actScopeList = $vals['actScopeList'];
			}
			
			
			if (isset($vals['actPsScopeList'])){
				
				$this->actPsScopeList = $vals['actPsScopeList'];
			}
			
			
			if (isset($vals['actFavList'])){
				
				$this->actFavList = $vals['actFavList'];
			}
			
			
			if (isset($vals['actNoList'])){
				
				$this->actNoList = $vals['actNoList'];
			}
			
			
			if (isset($vals['siteType'])){
				
				$this->siteType = $vals['siteType'];
			}
			
			
			if (isset($vals['actGoodsList'])){
				
				$this->actGoodsList = $vals['actGoodsList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsActSiteModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("siteId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->siteId); 
				
			}
			
			
			
			
			if ("site" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->site);
				
			}
			
			
			
			
			if ("actScopeList" == $schemeField){
				
				$needSkip = false;
				
				$this->actScopeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\pms\data\service\PmsActScopeModel();
						$elem0->read($input);
						
						$this->actScopeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("actPsScopeList" == $schemeField){
				
				$needSkip = false;
				
				$this->actPsScopeList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\PmsActPsScopeModel();
						$elem1->read($input);
						
						$this->actPsScopeList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("actFavList" == $schemeField){
				
				$needSkip = false;
				
				$this->actFavList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\pms\data\service\PmsActFavModel();
						$elem2->read($input);
						
						$this->actFavList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("actNoList" == $schemeField){
				
				$needSkip = false;
				
				$this->actNoList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\pms\data\service\PmsActNoModel();
						$elem3->read($input);
						
						$this->actNoList[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("siteType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->siteType); 
				
			}
			
			
			
			
			if ("actGoodsList" == $schemeField){
				
				$needSkip = false;
				
				$this->actGoodsList = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						
						$elem4 = new \com\vip\pms\data\service\PmsActGoodsModel();
						$elem4->read($input);
						
						$this->actGoodsList[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->siteId !== null) {
			
			$xfer += $output->writeFieldBegin('siteId');
			$xfer += $output->writeI32($this->siteId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('site');
		$xfer += $output->writeString($this->site);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->actScopeList !== null) {
			
			$xfer += $output->writeFieldBegin('actScopeList');
			
			if (!is_array($this->actScopeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->actScopeList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('actPsScopeList');
		
		if (!is_array($this->actPsScopeList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->actPsScopeList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actFavList');
		
		if (!is_array($this->actFavList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->actFavList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('actNoList');
		
		if (!is_array($this->actNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->actNoList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->siteType !== null) {
			
			$xfer += $output->writeFieldBegin('siteType');
			$xfer += $output->writeI32($this->siteType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actGoodsList !== null) {
			
			$xfer += $output->writeFieldBegin('actGoodsList');
			
			if (!is_array($this->actGoodsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->actGoodsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>