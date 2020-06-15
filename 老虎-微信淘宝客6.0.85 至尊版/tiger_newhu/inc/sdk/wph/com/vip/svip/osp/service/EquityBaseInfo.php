<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class EquityBaseInfo {
	
	static $_TSPEC;
	public $vpid = null;
	public $nickName = null;
	public $userStatus = null;
	public $canTrial = null;
	public $canOpen = null;
	public $expireTime = null;
	public $remainingDays = null;
	public $userLv = null;
	public $saveMoneyInformation = null;
	public $price = null;
	public $updating = null;
	public $imminentExpiry = null;
	public $specialTag = null;
	public $rebateText = null;
	public $countDownMS = null;
	public $vipFigureUrl = null;
	public $openType = null;
	public $birthGiftInfo = null;
	public $totalAmount = null;
	
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
			'var' => 'saveMoneyInformation'
			),
			10 => array(
			'var' => 'price'
			),
			11 => array(
			'var' => 'updating'
			),
			12 => array(
			'var' => 'imminentExpiry'
			),
			13 => array(
			'var' => 'specialTag'
			),
			14 => array(
			'var' => 'rebateText'
			),
			15 => array(
			'var' => 'countDownMS'
			),
			16 => array(
			'var' => 'vipFigureUrl'
			),
			17 => array(
			'var' => 'openType'
			),
			18 => array(
			'var' => 'birthGiftInfo'
			),
			19 => array(
			'var' => 'totalAmount'
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
			
			
			if (isset($vals['saveMoneyInformation'])){
				
				$this->saveMoneyInformation = $vals['saveMoneyInformation'];
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
			
			
			if (isset($vals['openType'])){
				
				$this->openType = $vals['openType'];
			}
			
			
			if (isset($vals['birthGiftInfo'])){
				
				$this->birthGiftInfo = $vals['birthGiftInfo'];
			}
			
			
			if (isset($vals['totalAmount'])){
				
				$this->totalAmount = $vals['totalAmount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EquityBaseInfo';
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
			
			
			
			
			if ("saveMoneyInformation" == $schemeField){
				
				$needSkip = false;
				
				$this->saveMoneyInformation = new \com\vip\svip\osp\service\SaveMoneyInformation();
				$this->saveMoneyInformation->read($input);
				
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
			
			
			
			
			if ("openType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->openType); 
				
			}
			
			
			
			
			if ("birthGiftInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->birthGiftInfo = new \com\vip\svip\osp\service\BirthGiftInfo();
				$this->birthGiftInfo->read($input);
				
			}
			
			
			
			
			if ("totalAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->totalAmount);
				
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
		
		
		if($this->saveMoneyInformation !== null) {
			
			$xfer += $output->writeFieldBegin('saveMoneyInformation');
			
			if (!is_object($this->saveMoneyInformation)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->saveMoneyInformation->write($output);
			
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
		
		
		$xfer += $output->writeFieldBegin('openType');
		$xfer += $output->writeI32($this->openType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->birthGiftInfo !== null) {
			
			$xfer += $output->writeFieldBegin('birthGiftInfo');
			
			if (!is_object($this->birthGiftInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->birthGiftInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalAmount !== null) {
			
			$xfer += $output->writeFieldBegin('totalAmount');
			$xfer += $output->writeString($this->totalAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>