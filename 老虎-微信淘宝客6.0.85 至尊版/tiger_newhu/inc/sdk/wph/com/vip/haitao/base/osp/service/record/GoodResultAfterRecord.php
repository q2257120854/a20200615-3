<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\base\osp\service\record;

class GoodResultAfterRecord {
	
	static $_TSPEC;
	public $carrierCode = null;
	public $customsCode = null;
	public $recordType = null;
	public $goodSn = null;
	public $recordNo = null;
	public $resultType = null;
	public $statusTime = null;
	public $cusRecordNo = null;
	public $ciqRecordNo = null;
	public $parcelTaxNo = null;
	public $goodHsCode = null;
	public $element = null;
	public $legalUnitFirst = null;
	public $legalUnitSecond = null;
	public $legalAmountFirst = null;
	public $legalAmountSecond = null;
	public $statusNote = null;
	public $tjEffect = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrierCode'
			),
			2 => array(
			'var' => 'customsCode'
			),
			3 => array(
			'var' => 'recordType'
			),
			4 => array(
			'var' => 'goodSn'
			),
			5 => array(
			'var' => 'recordNo'
			),
			6 => array(
			'var' => 'resultType'
			),
			7 => array(
			'var' => 'statusTime'
			),
			8 => array(
			'var' => 'cusRecordNo'
			),
			9 => array(
			'var' => 'ciqRecordNo'
			),
			10 => array(
			'var' => 'parcelTaxNo'
			),
			11 => array(
			'var' => 'goodHsCode'
			),
			12 => array(
			'var' => 'element'
			),
			13 => array(
			'var' => 'legalUnitFirst'
			),
			14 => array(
			'var' => 'legalUnitSecond'
			),
			15 => array(
			'var' => 'legalAmountFirst'
			),
			16 => array(
			'var' => 'legalAmountSecond'
			),
			17 => array(
			'var' => 'statusNote'
			),
			18 => array(
			'var' => 'tjEffect'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrierCode'])){
				
				$this->carrierCode = $vals['carrierCode'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['recordType'])){
				
				$this->recordType = $vals['recordType'];
			}
			
			
			if (isset($vals['goodSn'])){
				
				$this->goodSn = $vals['goodSn'];
			}
			
			
			if (isset($vals['recordNo'])){
				
				$this->recordNo = $vals['recordNo'];
			}
			
			
			if (isset($vals['resultType'])){
				
				$this->resultType = $vals['resultType'];
			}
			
			
			if (isset($vals['statusTime'])){
				
				$this->statusTime = $vals['statusTime'];
			}
			
			
			if (isset($vals['cusRecordNo'])){
				
				$this->cusRecordNo = $vals['cusRecordNo'];
			}
			
			
			if (isset($vals['ciqRecordNo'])){
				
				$this->ciqRecordNo = $vals['ciqRecordNo'];
			}
			
			
			if (isset($vals['parcelTaxNo'])){
				
				$this->parcelTaxNo = $vals['parcelTaxNo'];
			}
			
			
			if (isset($vals['goodHsCode'])){
				
				$this->goodHsCode = $vals['goodHsCode'];
			}
			
			
			if (isset($vals['element'])){
				
				$this->element = $vals['element'];
			}
			
			
			if (isset($vals['legalUnitFirst'])){
				
				$this->legalUnitFirst = $vals['legalUnitFirst'];
			}
			
			
			if (isset($vals['legalUnitSecond'])){
				
				$this->legalUnitSecond = $vals['legalUnitSecond'];
			}
			
			
			if (isset($vals['legalAmountFirst'])){
				
				$this->legalAmountFirst = $vals['legalAmountFirst'];
			}
			
			
			if (isset($vals['legalAmountSecond'])){
				
				$this->legalAmountSecond = $vals['legalAmountSecond'];
			}
			
			
			if (isset($vals['statusNote'])){
				
				$this->statusNote = $vals['statusNote'];
			}
			
			
			if (isset($vals['tjEffect'])){
				
				$this->tjEffect = $vals['tjEffect'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GoodResultAfterRecord';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrierCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierCode);
				
			}
			
			
			
			
			if ("customsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customsCode);
				
			}
			
			
			
			
			if ("recordType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recordType);
				
			}
			
			
			
			
			if ("goodSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodSn);
				
			}
			
			
			
			
			if ("recordNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recordNo);
				
			}
			
			
			
			
			if ("resultType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->resultType); 
				
			}
			
			
			
			
			if ("statusTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->statusTime); 
				
			}
			
			
			
			
			if ("cusRecordNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cusRecordNo);
				
			}
			
			
			
			
			if ("ciqRecordNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ciqRecordNo);
				
			}
			
			
			
			
			if ("parcelTaxNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parcelTaxNo);
				
			}
			
			
			
			
			if ("goodHsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodHsCode);
				
			}
			
			
			
			
			if ("element" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->element);
				
			}
			
			
			
			
			if ("legalUnitFirst" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->legalUnitFirst);
				
			}
			
			
			
			
			if ("legalUnitSecond" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->legalUnitSecond);
				
			}
			
			
			
			
			if ("legalAmountFirst" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->legalAmountFirst);
				
			}
			
			
			
			
			if ("legalAmountSecond" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->legalAmountSecond);
				
			}
			
			
			
			
			if ("statusNote" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statusNote);
				
			}
			
			
			
			
			if ("tjEffect" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tjEffect);
				
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
		
		if($this->carrierCode !== null) {
			
			$xfer += $output->writeFieldBegin('carrierCode');
			$xfer += $output->writeString($this->carrierCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsCode !== null) {
			
			$xfer += $output->writeFieldBegin('customsCode');
			$xfer += $output->writeString($this->customsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recordType !== null) {
			
			$xfer += $output->writeFieldBegin('recordType');
			$xfer += $output->writeString($this->recordType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodSn !== null) {
			
			$xfer += $output->writeFieldBegin('goodSn');
			$xfer += $output->writeString($this->goodSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recordNo !== null) {
			
			$xfer += $output->writeFieldBegin('recordNo');
			$xfer += $output->writeString($this->recordNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resultType !== null) {
			
			$xfer += $output->writeFieldBegin('resultType');
			$xfer += $output->writeI32($this->resultType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusTime !== null) {
			
			$xfer += $output->writeFieldBegin('statusTime');
			$xfer += $output->writeI64($this->statusTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cusRecordNo !== null) {
			
			$xfer += $output->writeFieldBegin('cusRecordNo');
			$xfer += $output->writeString($this->cusRecordNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ciqRecordNo !== null) {
			
			$xfer += $output->writeFieldBegin('ciqRecordNo');
			$xfer += $output->writeString($this->ciqRecordNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parcelTaxNo !== null) {
			
			$xfer += $output->writeFieldBegin('parcelTaxNo');
			$xfer += $output->writeString($this->parcelTaxNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodHsCode !== null) {
			
			$xfer += $output->writeFieldBegin('goodHsCode');
			$xfer += $output->writeString($this->goodHsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->element !== null) {
			
			$xfer += $output->writeFieldBegin('element');
			$xfer += $output->writeString($this->element);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalUnitFirst !== null) {
			
			$xfer += $output->writeFieldBegin('legalUnitFirst');
			$xfer += $output->writeString($this->legalUnitFirst);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalUnitSecond !== null) {
			
			$xfer += $output->writeFieldBegin('legalUnitSecond');
			$xfer += $output->writeString($this->legalUnitSecond);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalAmountFirst !== null) {
			
			$xfer += $output->writeFieldBegin('legalAmountFirst');
			$xfer += $output->writeString($this->legalAmountFirst);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->legalAmountSecond !== null) {
			
			$xfer += $output->writeFieldBegin('legalAmountSecond');
			$xfer += $output->writeString($this->legalAmountSecond);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statusNote !== null) {
			
			$xfer += $output->writeFieldBegin('statusNote');
			$xfer += $output->writeString($this->statusNote);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tjEffect !== null) {
			
			$xfer += $output->writeFieldBegin('tjEffect');
			$xfer += $output->writeString($this->tjEffect);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>