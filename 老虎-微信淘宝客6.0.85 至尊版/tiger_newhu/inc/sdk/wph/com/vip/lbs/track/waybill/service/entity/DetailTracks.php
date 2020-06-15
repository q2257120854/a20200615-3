<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\track\waybill\service\entity;

class DetailTracks {
	
	static $_TSPEC;
	public $state = null;
	public $trackDesc = null;
	public $dispRecMan = null;
	public $dispRecManPhone = null;
	public $scanType = null;
	public $preNextCity = null;
	public $preNextProv = null;
	public $preNextSite = null;
	public $preNextSiteCode = null;
	public $preNextSitePhone = null;
	public $signMan = null;
	public $scanSitePhone = null;
	public $remark = null;
	public $trackCreateTime = null;
	public $trackCode = null;
	public $siteCode = null;
	public $siteName = null;
	public $extendFields = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'state'
			),
			2 => array(
			'var' => 'trackDesc'
			),
			3 => array(
			'var' => 'dispRecMan'
			),
			4 => array(
			'var' => 'dispRecManPhone'
			),
			5 => array(
			'var' => 'scanType'
			),
			6 => array(
			'var' => 'preNextCity'
			),
			7 => array(
			'var' => 'preNextProv'
			),
			8 => array(
			'var' => 'preNextSite'
			),
			9 => array(
			'var' => 'preNextSiteCode'
			),
			10 => array(
			'var' => 'preNextSitePhone'
			),
			11 => array(
			'var' => 'signMan'
			),
			12 => array(
			'var' => 'scanSitePhone'
			),
			13 => array(
			'var' => 'remark'
			),
			14 => array(
			'var' => 'trackCreateTime'
			),
			15 => array(
			'var' => 'trackCode'
			),
			16 => array(
			'var' => 'siteCode'
			),
			17 => array(
			'var' => 'siteName'
			),
			18 => array(
			'var' => 'extendFields'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['trackDesc'])){
				
				$this->trackDesc = $vals['trackDesc'];
			}
			
			
			if (isset($vals['dispRecMan'])){
				
				$this->dispRecMan = $vals['dispRecMan'];
			}
			
			
			if (isset($vals['dispRecManPhone'])){
				
				$this->dispRecManPhone = $vals['dispRecManPhone'];
			}
			
			
			if (isset($vals['scanType'])){
				
				$this->scanType = $vals['scanType'];
			}
			
			
			if (isset($vals['preNextCity'])){
				
				$this->preNextCity = $vals['preNextCity'];
			}
			
			
			if (isset($vals['preNextProv'])){
				
				$this->preNextProv = $vals['preNextProv'];
			}
			
			
			if (isset($vals['preNextSite'])){
				
				$this->preNextSite = $vals['preNextSite'];
			}
			
			
			if (isset($vals['preNextSiteCode'])){
				
				$this->preNextSiteCode = $vals['preNextSiteCode'];
			}
			
			
			if (isset($vals['preNextSitePhone'])){
				
				$this->preNextSitePhone = $vals['preNextSitePhone'];
			}
			
			
			if (isset($vals['signMan'])){
				
				$this->signMan = $vals['signMan'];
			}
			
			
			if (isset($vals['scanSitePhone'])){
				
				$this->scanSitePhone = $vals['scanSitePhone'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['trackCreateTime'])){
				
				$this->trackCreateTime = $vals['trackCreateTime'];
			}
			
			
			if (isset($vals['trackCode'])){
				
				$this->trackCode = $vals['trackCode'];
			}
			
			
			if (isset($vals['siteCode'])){
				
				$this->siteCode = $vals['siteCode'];
			}
			
			
			if (isset($vals['siteName'])){
				
				$this->siteName = $vals['siteName'];
			}
			
			
			if (isset($vals['extendFields'])){
				
				$this->extendFields = $vals['extendFields'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DetailTracks';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->state); 
				
			}
			
			
			
			
			if ("trackDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trackDesc);
				
			}
			
			
			
			
			if ("dispRecMan" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dispRecMan);
				
			}
			
			
			
			
			if ("dispRecManPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dispRecManPhone);
				
			}
			
			
			
			
			if ("scanType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scanType);
				
			}
			
			
			
			
			if ("preNextCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preNextCity);
				
			}
			
			
			
			
			if ("preNextProv" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preNextProv);
				
			}
			
			
			
			
			if ("preNextSite" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preNextSite);
				
			}
			
			
			
			
			if ("preNextSiteCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preNextSiteCode);
				
			}
			
			
			
			
			if ("preNextSitePhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preNextSitePhone);
				
			}
			
			
			
			
			if ("signMan" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->signMan);
				
			}
			
			
			
			
			if ("scanSitePhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scanSitePhone);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("trackCreateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->trackCreateTime); 
				
			}
			
			
			
			
			if ("trackCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trackCode);
				
			}
			
			
			
			
			if ("siteCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->siteCode);
				
			}
			
			
			
			
			if ("siteName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->siteName);
				
			}
			
			
			
			
			if ("extendFields" == $schemeField){
				
				$needSkip = false;
				
				$this->extendFields = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->extendFields[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		$xfer += $output->writeFieldBegin('state');
		$xfer += $output->writeI32($this->state);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trackDesc');
		$xfer += $output->writeString($this->trackDesc);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->dispRecMan !== null) {
			
			$xfer += $output->writeFieldBegin('dispRecMan');
			$xfer += $output->writeString($this->dispRecMan);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dispRecManPhone !== null) {
			
			$xfer += $output->writeFieldBegin('dispRecManPhone');
			$xfer += $output->writeString($this->dispRecManPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scanType !== null) {
			
			$xfer += $output->writeFieldBegin('scanType');
			$xfer += $output->writeString($this->scanType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preNextCity !== null) {
			
			$xfer += $output->writeFieldBegin('preNextCity');
			$xfer += $output->writeString($this->preNextCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preNextProv !== null) {
			
			$xfer += $output->writeFieldBegin('preNextProv');
			$xfer += $output->writeString($this->preNextProv);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preNextSite !== null) {
			
			$xfer += $output->writeFieldBegin('preNextSite');
			$xfer += $output->writeString($this->preNextSite);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preNextSiteCode !== null) {
			
			$xfer += $output->writeFieldBegin('preNextSiteCode');
			$xfer += $output->writeString($this->preNextSiteCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preNextSitePhone !== null) {
			
			$xfer += $output->writeFieldBegin('preNextSitePhone');
			$xfer += $output->writeString($this->preNextSitePhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signMan !== null) {
			
			$xfer += $output->writeFieldBegin('signMan');
			$xfer += $output->writeString($this->signMan);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scanSitePhone !== null) {
			
			$xfer += $output->writeFieldBegin('scanSitePhone');
			$xfer += $output->writeString($this->scanSitePhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('remark');
		$xfer += $output->writeString($this->remark);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trackCreateTime');
		$xfer += $output->writeI64($this->trackCreateTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->trackCode !== null) {
			
			$xfer += $output->writeFieldBegin('trackCode');
			$xfer += $output->writeString($this->trackCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->siteCode !== null) {
			
			$xfer += $output->writeFieldBegin('siteCode');
			$xfer += $output->writeString($this->siteCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->siteName !== null) {
			
			$xfer += $output->writeFieldBegin('siteName');
			$xfer += $output->writeString($this->siteName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extendFields !== null) {
			
			$xfer += $output->writeFieldBegin('extendFields');
			
			if (!is_array($this->extendFields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->extendFields as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>