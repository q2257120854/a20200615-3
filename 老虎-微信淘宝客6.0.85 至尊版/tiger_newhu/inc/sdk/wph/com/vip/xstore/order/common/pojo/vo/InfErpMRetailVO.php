<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class InfErpMRetailVO {
	
	static $_TSPEC;
	public $id = null;
	public $docno = null;
	public $splitDocno = null;
	public $billdate = null;
	public $refno = null;
	public $openid = null;
	public $rfidDocno = null;
	public $retailbilltype = null;
	public $cStoreId = null;
	public $cStore = null;
	public $uploadtype = null;
	public $salesrepId = null;
	public $salesrep = null;
	public $planNum = null;
	public $description = null;
	public $totLines = null;
	public $totQty = null;
	public $totAmtList = null;
	public $totAmtActual = null;
	public $avgDiscount = null;
	public $o2oSo = null;
	public $ownerid = null;
	public $owner = null;
	public $creationdate = null;
	public $modifierid = null;
	public $modifier = null;
	public $modifieddate = null;
	public $statuserid = null;
	public $statuser = null;
	public $statustime = null;
	public $orgdocno = null;
	public $companyCode = null;
	public $procTime = null;
	public $procStatus = null;
	public $errorCount = null;
	public $errorMsg = null;
	public $createTime = null;
	public $updateTime = null;
	public $isDeleted = null;
	public $relatedDocno = null;
	public $storeAfterSaleSn = null;
	public $salesrepNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'docno'
			),
			3 => array(
			'var' => 'splitDocno'
			),
			4 => array(
			'var' => 'billdate'
			),
			5 => array(
			'var' => 'refno'
			),
			6 => array(
			'var' => 'openid'
			),
			7 => array(
			'var' => 'rfidDocno'
			),
			8 => array(
			'var' => 'retailbilltype'
			),
			9 => array(
			'var' => 'cStoreId'
			),
			10 => array(
			'var' => 'cStore'
			),
			11 => array(
			'var' => 'uploadtype'
			),
			12 => array(
			'var' => 'salesrepId'
			),
			13 => array(
			'var' => 'salesrep'
			),
			14 => array(
			'var' => 'planNum'
			),
			15 => array(
			'var' => 'description'
			),
			16 => array(
			'var' => 'totLines'
			),
			17 => array(
			'var' => 'totQty'
			),
			18 => array(
			'var' => 'totAmtList'
			),
			19 => array(
			'var' => 'totAmtActual'
			),
			20 => array(
			'var' => 'avgDiscount'
			),
			21 => array(
			'var' => 'o2oSo'
			),
			22 => array(
			'var' => 'ownerid'
			),
			23 => array(
			'var' => 'owner'
			),
			24 => array(
			'var' => 'creationdate'
			),
			25 => array(
			'var' => 'modifierid'
			),
			26 => array(
			'var' => 'modifier'
			),
			27 => array(
			'var' => 'modifieddate'
			),
			28 => array(
			'var' => 'statuserid'
			),
			29 => array(
			'var' => 'statuser'
			),
			30 => array(
			'var' => 'statustime'
			),
			31 => array(
			'var' => 'orgdocno'
			),
			32 => array(
			'var' => 'companyCode'
			),
			33 => array(
			'var' => 'procTime'
			),
			34 => array(
			'var' => 'procStatus'
			),
			35 => array(
			'var' => 'errorCount'
			),
			36 => array(
			'var' => 'errorMsg'
			),
			37 => array(
			'var' => 'createTime'
			),
			38 => array(
			'var' => 'updateTime'
			),
			39 => array(
			'var' => 'isDeleted'
			),
			40 => array(
			'var' => 'relatedDocno'
			),
			41 => array(
			'var' => 'storeAfterSaleSn'
			),
			42 => array(
			'var' => 'salesrepNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['docno'])){
				
				$this->docno = $vals['docno'];
			}
			
			
			if (isset($vals['splitDocno'])){
				
				$this->splitDocno = $vals['splitDocno'];
			}
			
			
			if (isset($vals['billdate'])){
				
				$this->billdate = $vals['billdate'];
			}
			
			
			if (isset($vals['refno'])){
				
				$this->refno = $vals['refno'];
			}
			
			
			if (isset($vals['openid'])){
				
				$this->openid = $vals['openid'];
			}
			
			
			if (isset($vals['rfidDocno'])){
				
				$this->rfidDocno = $vals['rfidDocno'];
			}
			
			
			if (isset($vals['retailbilltype'])){
				
				$this->retailbilltype = $vals['retailbilltype'];
			}
			
			
			if (isset($vals['cStoreId'])){
				
				$this->cStoreId = $vals['cStoreId'];
			}
			
			
			if (isset($vals['cStore'])){
				
				$this->cStore = $vals['cStore'];
			}
			
			
			if (isset($vals['uploadtype'])){
				
				$this->uploadtype = $vals['uploadtype'];
			}
			
			
			if (isset($vals['salesrepId'])){
				
				$this->salesrepId = $vals['salesrepId'];
			}
			
			
			if (isset($vals['salesrep'])){
				
				$this->salesrep = $vals['salesrep'];
			}
			
			
			if (isset($vals['planNum'])){
				
				$this->planNum = $vals['planNum'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['totLines'])){
				
				$this->totLines = $vals['totLines'];
			}
			
			
			if (isset($vals['totQty'])){
				
				$this->totQty = $vals['totQty'];
			}
			
			
			if (isset($vals['totAmtList'])){
				
				$this->totAmtList = $vals['totAmtList'];
			}
			
			
			if (isset($vals['totAmtActual'])){
				
				$this->totAmtActual = $vals['totAmtActual'];
			}
			
			
			if (isset($vals['avgDiscount'])){
				
				$this->avgDiscount = $vals['avgDiscount'];
			}
			
			
			if (isset($vals['o2oSo'])){
				
				$this->o2oSo = $vals['o2oSo'];
			}
			
			
			if (isset($vals['ownerid'])){
				
				$this->ownerid = $vals['ownerid'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
			if (isset($vals['creationdate'])){
				
				$this->creationdate = $vals['creationdate'];
			}
			
			
			if (isset($vals['modifierid'])){
				
				$this->modifierid = $vals['modifierid'];
			}
			
			
			if (isset($vals['modifier'])){
				
				$this->modifier = $vals['modifier'];
			}
			
			
			if (isset($vals['modifieddate'])){
				
				$this->modifieddate = $vals['modifieddate'];
			}
			
			
			if (isset($vals['statuserid'])){
				
				$this->statuserid = $vals['statuserid'];
			}
			
			
			if (isset($vals['statuser'])){
				
				$this->statuser = $vals['statuser'];
			}
			
			
			if (isset($vals['statustime'])){
				
				$this->statustime = $vals['statustime'];
			}
			
			
			if (isset($vals['orgdocno'])){
				
				$this->orgdocno = $vals['orgdocno'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['procTime'])){
				
				$this->procTime = $vals['procTime'];
			}
			
			
			if (isset($vals['procStatus'])){
				
				$this->procStatus = $vals['procStatus'];
			}
			
			
			if (isset($vals['errorCount'])){
				
				$this->errorCount = $vals['errorCount'];
			}
			
			
			if (isset($vals['errorMsg'])){
				
				$this->errorMsg = $vals['errorMsg'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['relatedDocno'])){
				
				$this->relatedDocno = $vals['relatedDocno'];
			}
			
			
			if (isset($vals['storeAfterSaleSn'])){
				
				$this->storeAfterSaleSn = $vals['storeAfterSaleSn'];
			}
			
			
			if (isset($vals['salesrepNo'])){
				
				$this->salesrepNo = $vals['salesrepNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InfErpMRetailVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("docno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->docno);
				
			}
			
			
			
			
			if ("splitDocno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->splitDocno);
				
			}
			
			
			
			
			if ("billdate" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->billdate); 
				
			}
			
			
			
			
			if ("refno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refno);
				
			}
			
			
			
			
			if ("openid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openid);
				
			}
			
			
			
			
			if ("rfidDocno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rfidDocno);
				
			}
			
			
			
			
			if ("retailbilltype" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->retailbilltype);
				
			}
			
			
			
			
			if ("cStoreId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cStoreId); 
				
			}
			
			
			
			
			if ("cStore" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cStore);
				
			}
			
			
			
			
			if ("uploadtype" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uploadtype);
				
			}
			
			
			
			
			if ("salesrepId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->salesrepId); 
				
			}
			
			
			
			
			if ("salesrep" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesrep);
				
			}
			
			
			
			
			if ("planNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->planNum);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("totLines" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totLines); 
				
			}
			
			
			
			
			if ("totQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totQty); 
				
			}
			
			
			
			
			if ("totAmtList" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->totAmtList);
				
			}
			
			
			
			
			if ("totAmtActual" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->totAmtActual);
				
			}
			
			
			
			
			if ("avgDiscount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->avgDiscount);
				
			}
			
			
			
			
			if ("o2oSo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->o2oSo);
				
			}
			
			
			
			
			if ("ownerid" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->ownerid); 
				
			}
			
			
			
			
			if ("owner" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->owner);
				
			}
			
			
			
			
			if ("creationdate" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->creationdate); 
				
			}
			
			
			
			
			if ("modifierid" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->modifierid); 
				
			}
			
			
			
			
			if ("modifier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->modifier);
				
			}
			
			
			
			
			if ("modifieddate" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->modifieddate); 
				
			}
			
			
			
			
			if ("statuserid" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->statuserid); 
				
			}
			
			
			
			
			if ("statuser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statuser);
				
			}
			
			
			
			
			if ("statustime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->statustime); 
				
			}
			
			
			
			
			if ("orgdocno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgdocno);
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("procTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->procTime); 
				
			}
			
			
			
			
			if ("procStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->procStatus); 
				
			}
			
			
			
			
			if ("errorCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->errorCount); 
				
			}
			
			
			
			
			if ("errorMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMsg);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDeleted); 
				
			}
			
			
			
			
			if ("relatedDocno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->relatedDocno);
				
			}
			
			
			
			
			if ("storeAfterSaleSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeAfterSaleSn);
				
			}
			
			
			
			
			if ("salesrepNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesrepNo);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->docno !== null) {
			
			$xfer += $output->writeFieldBegin('docno');
			$xfer += $output->writeString($this->docno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->splitDocno !== null) {
			
			$xfer += $output->writeFieldBegin('splitDocno');
			$xfer += $output->writeString($this->splitDocno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billdate !== null) {
			
			$xfer += $output->writeFieldBegin('billdate');
			$xfer += $output->writeI32($this->billdate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refno !== null) {
			
			$xfer += $output->writeFieldBegin('refno');
			$xfer += $output->writeString($this->refno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openid !== null) {
			
			$xfer += $output->writeFieldBegin('openid');
			$xfer += $output->writeString($this->openid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rfidDocno !== null) {
			
			$xfer += $output->writeFieldBegin('rfidDocno');
			$xfer += $output->writeString($this->rfidDocno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retailbilltype !== null) {
			
			$xfer += $output->writeFieldBegin('retailbilltype');
			$xfer += $output->writeString($this->retailbilltype);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cStoreId !== null) {
			
			$xfer += $output->writeFieldBegin('cStoreId');
			$xfer += $output->writeI64($this->cStoreId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cStore !== null) {
			
			$xfer += $output->writeFieldBegin('cStore');
			$xfer += $output->writeString($this->cStore);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uploadtype !== null) {
			
			$xfer += $output->writeFieldBegin('uploadtype');
			$xfer += $output->writeString($this->uploadtype);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesrepId !== null) {
			
			$xfer += $output->writeFieldBegin('salesrepId');
			$xfer += $output->writeI64($this->salesrepId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesrep !== null) {
			
			$xfer += $output->writeFieldBegin('salesrep');
			$xfer += $output->writeString($this->salesrep);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->planNum !== null) {
			
			$xfer += $output->writeFieldBegin('planNum');
			$xfer += $output->writeString($this->planNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totLines !== null) {
			
			$xfer += $output->writeFieldBegin('totLines');
			$xfer += $output->writeI32($this->totLines);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totQty !== null) {
			
			$xfer += $output->writeFieldBegin('totQty');
			$xfer += $output->writeI32($this->totQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totAmtList !== null) {
			
			$xfer += $output->writeFieldBegin('totAmtList');
			$xfer += $output->writeString($this->totAmtList);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totAmtActual !== null) {
			
			$xfer += $output->writeFieldBegin('totAmtActual');
			$xfer += $output->writeString($this->totAmtActual);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->avgDiscount !== null) {
			
			$xfer += $output->writeFieldBegin('avgDiscount');
			$xfer += $output->writeString($this->avgDiscount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->o2oSo !== null) {
			
			$xfer += $output->writeFieldBegin('o2oSo');
			$xfer += $output->writeString($this->o2oSo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ownerid !== null) {
			
			$xfer += $output->writeFieldBegin('ownerid');
			$xfer += $output->writeI64($this->ownerid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->owner !== null) {
			
			$xfer += $output->writeFieldBegin('owner');
			$xfer += $output->writeString($this->owner);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creationdate !== null) {
			
			$xfer += $output->writeFieldBegin('creationdate');
			$xfer += $output->writeI32($this->creationdate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->modifierid !== null) {
			
			$xfer += $output->writeFieldBegin('modifierid');
			$xfer += $output->writeI64($this->modifierid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->modifier !== null) {
			
			$xfer += $output->writeFieldBegin('modifier');
			$xfer += $output->writeString($this->modifier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->modifieddate !== null) {
			
			$xfer += $output->writeFieldBegin('modifieddate');
			$xfer += $output->writeI32($this->modifieddate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statuserid !== null) {
			
			$xfer += $output->writeFieldBegin('statuserid');
			$xfer += $output->writeI64($this->statuserid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statuser !== null) {
			
			$xfer += $output->writeFieldBegin('statuser');
			$xfer += $output->writeString($this->statuser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statustime !== null) {
			
			$xfer += $output->writeFieldBegin('statustime');
			$xfer += $output->writeI32($this->statustime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgdocno !== null) {
			
			$xfer += $output->writeFieldBegin('orgdocno');
			$xfer += $output->writeString($this->orgdocno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyCode !== null) {
			
			$xfer += $output->writeFieldBegin('companyCode');
			$xfer += $output->writeString($this->companyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procTime !== null) {
			
			$xfer += $output->writeFieldBegin('procTime');
			$xfer += $output->writeI64($this->procTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procStatus !== null) {
			
			$xfer += $output->writeFieldBegin('procStatus');
			$xfer += $output->writeI32($this->procStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorCount !== null) {
			
			$xfer += $output->writeFieldBegin('errorCount');
			$xfer += $output->writeI32($this->errorCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errorMsg');
			$xfer += $output->writeString($this->errorMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI32($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->relatedDocno !== null) {
			
			$xfer += $output->writeFieldBegin('relatedDocno');
			$xfer += $output->writeString($this->relatedDocno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeAfterSaleSn !== null) {
			
			$xfer += $output->writeFieldBegin('storeAfterSaleSn');
			$xfer += $output->writeString($this->storeAfterSaleSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesrepNo !== null) {
			
			$xfer += $output->writeFieldBegin('salesrepNo');
			$xfer += $output->writeString($this->salesrepNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>