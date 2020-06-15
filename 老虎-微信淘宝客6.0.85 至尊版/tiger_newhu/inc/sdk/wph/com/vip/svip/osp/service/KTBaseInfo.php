<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class KTBaseInfo {
	
	static $_TSPEC;
	public $vpid = null;
	public $nickName = null;
	public $userStatus = null;
	public $canTrial = null;
	public $canOpen = null;
	public $expireTime = null;
	public $remainingDays = null;
	public $userLv = null;
	public $averComp = null;
	public $saveAmount = null;
	public $saveCarriageAmount = null;
	public $price = null;
	public $updating = null;
	public $imminentExpiry = null;
	public $specialTag = null;
	public $rebateText = null;
	public $countDownMS = null;
	public $vipFigureUrl = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vpid'
			),
			2 => array(
			'var' => 'nickName'
			),
			3 => array(
			'var' => 'userStatus'
			),
			4 => array(
			'var' => 'canTrial'
			),
			5 => array(
			'var' => 'canOpen'
			),
			6 => array(
			'var' => 'expireTime'
			),
			7 => array(
			'var' => 'remainingDays'
			),
			8 => array(
			'var' => 'userLv'
			),
			9 => array(
			'var' => 'averComp'
			),
			10 => array(
			'var' => 'saveAmount'
			),
			11 => array(
			'var' => 'saveCarriageAmount'
			),
			12 => array(
			'var' => 'price'
			),
			13 => array(
			'var' => 'updating'
			),
			14 => array(
			'var' => 'imminentExpiry'
			),
			15 => array(
			'var' => 'specialTag'
			),
			16 => array(
			'var' => 'rebateText'
			),
			17 => array(
			'var' => 'countDownMS'
			),
			18 => array(
			'var' => 'vipFigureUrl'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vpid'])){
				
				$this->vpid = $vals['vpid'];
			}
			
			
			if (isset($vals['nickName'])){
				
				$this->nickName = $vals['nickName'];
			}
			
			
			if (isset($vals['userStatus'])){
				
				$this->userStatus = $vals['userStatus'];
			}
			
			
			if (isset($vals['canTrial'])){
				
				$this->canTrial = $vals['canTrial'];
			}
			
			
			if (isset($vals['canOpen'])){
				
				$this->canOpen = $vals['canOpen'];
			}
			
			
			if (isset($vals['expireTime'])){
				
				$this->expireTime = $vals['expireTime'];
			}
			
			
			if (isset($vals['remainingDays'])){
				
				$this->remainingDays = $vals['remainingDays'];
			}
			
			
			if (isset($vals['userLv'])){
				
				$this->userLv = $vals['userLv'];
			}
			
			
			if (isset($vals['averComp'])){
				
				$this->averComp = $vals['averComp'];
			}
			
			
			if (isset($vals['saveAmount'])){
				
				$this->saveAmount = $vals['saveAmount'];
			}
			
			
			if (isset($vals['saveCarriageAmount'])){
				
				$this->saveCarriageAmount = $vals['saveCarriageAmount'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['updating'])){
				
				$this->updating = $vals['updating'];
			}
			
			
			if (isset($vals['imminentExpiry'])){
				
				$this->imminentExpiry = $vals['imminentExpiry'];
			}
			
			
			if (isset($vals['specialTag'])){
				
				$this->specialTag = $vals['specialTag'];
			}
			
			
			if (isset($vals['rebateText'])){
				
				$this->rebateText = $vals['rebateText'];
			}
			
			
			if (isset($vals['countDownMS'])){
				
				$this->countDownMS = $vals['countDownMS'];
			}
			
			
			if (isset($vals['vipFigureUrl'])){
				
				$this->vipFigureUrl = $vals['vipFigureUrl'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'KTBaseInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vpid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vpid);
				
			}
			
			
			
			
			if ("nickName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->nickName);
				
			}
			
			
			
			
			if ("userStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userStatus); 
				
			}
			
			
			
			
			if ("canTrial" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->canTrial);
				
			}
			
			
			
			
			if ("canOpen" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->canOpen);
				
			}
			
			
			
			
			if ("expireTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expireTime); 
				
			}
			
			
			
			
			if ("remainingDays" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->remainingDays); 
				
			}
			
			
			
			
			if ("userLv" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userLv);
				
			}
			
			
			
			
			if ("averComp" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->averComp); 
				
			}
			
			
			
			
			if ("saveAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saveAmount);
				
			}
			
			
			
			
			if ("saveCarriageAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saveCarriageAmount);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("updating" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->updating); 
				
			}
			
			
			
			
			if ("imminentExpiry" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->imminentExpiry);
				
			}
			
			
			
			
			if ("specialTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->specialTag);
				
			}
			
			
			
			
			if ("rebateText" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rebateText);
				
			}
			
			
			
			
			if ("countDownMS" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->countDownMS); 
				
			}
			
			
			
			
			if ("vipFigureUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipFigureUrl);
				
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
		
		if($this->vpid !== null) {
			
			$xfer += $output->writeFieldBegin('vpid');
			$xfer += $output->writeString($this->vpid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nickName !== null) {
			
			$xfer += $output->writeFieldBegin('nickName');
			$xfer += $output->writeString($this->nickName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('userStatus');
		$xfer += $output->writeI32($this->userStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('canTrial');
		$xfer += $output->writeBool($this->canTrial);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('canOpen');
		$xfer += $output->writeBool($this->canOpen);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('expireTime');
		$xfer += $output->writeI64($this->expireTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('remainingDays');
		$xfer += $output->writeI32($this->remainingDays);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userLv !== null) {
			
			$xfer += $output->writeFieldBegin('userLv');
			$xfer += $output->writeString($this->userLv);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('averComp');
		$xfer += $output->writeI32($this->averComp);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->saveAmount !== null) {
			
			$xfer += $output->writeFieldBegin('saveAmount');
			$xfer += $output->writeString($this->saveAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saveCarriageAmount !== null) {
			
			$xfer += $output->writeFieldBegin('saveCarriageAmount');
			$xfer += $output->writeString($this->saveCarriageAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('updating');
		$xfer += $output->writeI32($this->updating);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('imminentExpiry');
		$xfer += $output->writeBool($this->imminentExpiry);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->specialTag !== null) {
			
			$xfer += $output->writeFieldBegin('specialTag');
			$xfer += $output->writeString($this->specialTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rebateText !== null) {
			
			$xfer += $output->writeFieldBegin('rebateText');
			$xfer += $output->writeString($this->rebateText);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('countDownMS');
		$xfer += $output->writeI64($this->countDownMS);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vipFigureUrl !== null) {
			
			$xfer += $output->writeFieldBegin('vipFigureUrl');
			$xfer += $output->writeString($this->vipFigureUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>