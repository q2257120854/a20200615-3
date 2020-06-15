<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\service;

class TmsOrderTrackModel {
	
	static $_TSPEC;
	public $recId = null;
	public $tmsOrderTrackId = null;
	public $tmsOrderId = null;
	public $orderNo = null;
	public $trackInfo = null;
	public $orderStatus = null;
	public $workName = null;
	public $remark = null;
	public $custName = null;
	public $workTime = null;
	public $isDelete = null;
	public $createdByUser = null;
	public $createdOffice = null;
	public $createdDtmLoc = null;
	public $createdTimeZone = null;
	public $updatedByUser = null;
	public $updatedOffice = null;
	public $updatedDtmLoc = null;
	public $updatedTimeZone = null;
	public $recordVersion = null;
	public $trackFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'recId'
			),
			2 => array(
			'var' => 'tmsOrderTrackId'
			),
			3 => array(
			'var' => 'tmsOrderId'
			),
			4 => array(
			'var' => 'orderNo'
			),
			5 => array(
			'var' => 'trackInfo'
			),
			6 => array(
			'var' => 'orderStatus'
			),
			7 => array(
			'var' => 'workName'
			),
			8 => array(
			'var' => 'remark'
			),
			9 => array(
			'var' => 'custName'
			),
			10 => array(
			'var' => 'workTime'
			),
			11 => array(
			'var' => 'isDelete'
			),
			12 => array(
			'var' => 'createdByUser'
			),
			13 => array(
			'var' => 'createdOffice'
			),
			14 => array(
			'var' => 'createdDtmLoc'
			),
			15 => array(
			'var' => 'createdTimeZone'
			),
			16 => array(
			'var' => 'updatedByUser'
			),
			17 => array(
			'var' => 'updatedOffice'
			),
			18 => array(
			'var' => 'updatedDtmLoc'
			),
			19 => array(
			'var' => 'updatedTimeZone'
			),
			20 => array(
			'var' => 'recordVersion'
			),
			21 => array(
			'var' => 'trackFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['recId'])){
				
				$this->recId = $vals['recId'];
			}
			
			
			if (isset($vals['tmsOrderTrackId'])){
				
				$this->tmsOrderTrackId = $vals['tmsOrderTrackId'];
			}
			
			
			if (isset($vals['tmsOrderId'])){
				
				$this->tmsOrderId = $vals['tmsOrderId'];
			}
			
			
			if (isset($vals['orderNo'])){
				
				$this->orderNo = $vals['orderNo'];
			}
			
			
			if (isset($vals['trackInfo'])){
				
				$this->trackInfo = $vals['trackInfo'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['workName'])){
				
				$this->workName = $vals['workName'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['custName'])){
				
				$this->custName = $vals['custName'];
			}
			
			
			if (isset($vals['workTime'])){
				
				$this->workTime = $vals['workTime'];
			}
			
			
			if (isset($vals['isDelete'])){
				
				$this->isDelete = $vals['isDelete'];
			}
			
			
			if (isset($vals['createdByUser'])){
				
				$this->createdByUser = $vals['createdByUser'];
			}
			
			
			if (isset($vals['createdOffice'])){
				
				$this->createdOffice = $vals['createdOffice'];
			}
			
			
			if (isset($vals['createdDtmLoc'])){
				
				$this->createdDtmLoc = $vals['createdDtmLoc'];
			}
			
			
			if (isset($vals['createdTimeZone'])){
				
				$this->createdTimeZone = $vals['createdTimeZone'];
			}
			
			
			if (isset($vals['updatedByUser'])){
				
				$this->updatedByUser = $vals['updatedByUser'];
			}
			
			
			if (isset($vals['updatedOffice'])){
				
				$this->updatedOffice = $vals['updatedOffice'];
			}
			
			
			if (isset($vals['updatedDtmLoc'])){
				
				$this->updatedDtmLoc = $vals['updatedDtmLoc'];
			}
			
			
			if (isset($vals['updatedTimeZone'])){
				
				$this->updatedTimeZone = $vals['updatedTimeZone'];
			}
			
			
			if (isset($vals['recordVersion'])){
				
				$this->recordVersion = $vals['recordVersion'];
			}
			
			
			if (isset($vals['trackFlag'])){
				
				$this->trackFlag = $vals['trackFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderTrackModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("recId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->recId); 
				
			}
			
			
			
			
			if ("tmsOrderTrackId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsOrderTrackId);
				
			}
			
			
			
			
			if ("tmsOrderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tmsOrderId);
				
			}
			
			
			
			
			if ("orderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNo);
				
			}
			
			
			
			
			if ("trackInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trackInfo);
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderStatus); 
				
			}
			
			
			
			
			if ("workName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->workName);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("custName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custName);
				
			}
			
			
			
			
			if ("workTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->workTime); 
				
			}
			
			
			
			
			if ("isDelete" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDelete); 
				
			}
			
			
			
			
			if ("createdByUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdByUser);
				
			}
			
			
			
			
			if ("createdOffice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdOffice);
				
			}
			
			
			
			
			if ("createdDtmLoc" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdDtmLoc); 
				
			}
			
			
			
			
			if ("createdTimeZone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdTimeZone);
				
			}
			
			
			
			
			if ("updatedByUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedByUser);
				
			}
			
			
			
			
			if ("updatedOffice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedOffice);
				
			}
			
			
			
			
			if ("updatedDtmLoc" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updatedDtmLoc); 
				
			}
			
			
			
			
			if ("updatedTimeZone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedTimeZone);
				
			}
			
			
			
			
			if ("recordVersion" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->recordVersion); 
				
			}
			
			
			
			
			if ("trackFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->trackFlag); 
				
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
		
		if($this->recId !== null) {
			
			$xfer += $output->writeFieldBegin('recId');
			$xfer += $output->writeI64($this->recId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tmsOrderTrackId !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderTrackId');
			$xfer += $output->writeString($this->tmsOrderTrackId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tmsOrderId !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderId');
			$xfer += $output->writeString($this->tmsOrderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNo !== null) {
			
			$xfer += $output->writeFieldBegin('orderNo');
			$xfer += $output->writeString($this->orderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trackInfo !== null) {
			
			$xfer += $output->writeFieldBegin('trackInfo');
			$xfer += $output->writeString($this->trackInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeI32($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workName !== null) {
			
			$xfer += $output->writeFieldBegin('workName');
			$xfer += $output->writeString($this->workName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->custName !== null) {
			
			$xfer += $output->writeFieldBegin('custName');
			$xfer += $output->writeString($this->custName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->workTime !== null) {
			
			$xfer += $output->writeFieldBegin('workTime');
			$xfer += $output->writeI64($this->workTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDelete !== null) {
			
			$xfer += $output->writeFieldBegin('isDelete');
			$xfer += $output->writeI32($this->isDelete);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdByUser !== null) {
			
			$xfer += $output->writeFieldBegin('createdByUser');
			$xfer += $output->writeString($this->createdByUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdOffice !== null) {
			
			$xfer += $output->writeFieldBegin('createdOffice');
			$xfer += $output->writeString($this->createdOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdDtmLoc !== null) {
			
			$xfer += $output->writeFieldBegin('createdDtmLoc');
			$xfer += $output->writeI64($this->createdDtmLoc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdTimeZone !== null) {
			
			$xfer += $output->writeFieldBegin('createdTimeZone');
			$xfer += $output->writeString($this->createdTimeZone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedByUser !== null) {
			
			$xfer += $output->writeFieldBegin('updatedByUser');
			$xfer += $output->writeString($this->updatedByUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedOffice !== null) {
			
			$xfer += $output->writeFieldBegin('updatedOffice');
			$xfer += $output->writeString($this->updatedOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedDtmLoc !== null) {
			
			$xfer += $output->writeFieldBegin('updatedDtmLoc');
			$xfer += $output->writeI64($this->updatedDtmLoc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedTimeZone !== null) {
			
			$xfer += $output->writeFieldBegin('updatedTimeZone');
			$xfer += $output->writeString($this->updatedTimeZone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recordVersion !== null) {
			
			$xfer += $output->writeFieldBegin('recordVersion');
			$xfer += $output->writeI64($this->recordVersion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trackFlag !== null) {
			
			$xfer += $output->writeFieldBegin('trackFlag');
			$xfer += $output->writeI32($this->trackFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>