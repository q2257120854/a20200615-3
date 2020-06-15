<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\omni\wo;

class WorkOrder {
	
	static $_TSPEC;
	public $syncType = null;
	public $woNo = null;
	public $vendorId = null;
	public $acceptTime = null;
	public $state = null;
	public $pc1Name = null;
	public $pc2Name = null;
	public $pc3Name = null;
	public $problemDesc = null;
	public $currentStepState = null;
	public $sdNo = null;
	public $expectEndTime = null;
	public $messageType = null;
	public $expEvaluation = null;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'syncType'
			),
			2 => array(
			'var' => 'woNo'
			),
			3 => array(
			'var' => 'vendorId'
			),
			4 => array(
			'var' => 'acceptTime'
			),
			5 => array(
			'var' => 'state'
			),
			6 => array(
			'var' => 'pc1Name'
			),
			7 => array(
			'var' => 'pc2Name'
			),
			8 => array(
			'var' => 'pc3Name'
			),
			9 => array(
			'var' => 'problemDesc'
			),
			10 => array(
			'var' => 'currentStepState'
			),
			11 => array(
			'var' => 'sdNo'
			),
			12 => array(
			'var' => 'expectEndTime'
			),
			13 => array(
			'var' => 'messageType'
			),
			14 => array(
			'var' => 'expEvaluation'
			),
			15 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['syncType'])){
				
				$this->syncType = $vals['syncType'];
			}
			
			
			if (isset($vals['woNo'])){
				
				$this->woNo = $vals['woNo'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['acceptTime'])){
				
				$this->acceptTime = $vals['acceptTime'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['pc1Name'])){
				
				$this->pc1Name = $vals['pc1Name'];
			}
			
			
			if (isset($vals['pc2Name'])){
				
				$this->pc2Name = $vals['pc2Name'];
			}
			
			
			if (isset($vals['pc3Name'])){
				
				$this->pc3Name = $vals['pc3Name'];
			}
			
			
			if (isset($vals['problemDesc'])){
				
				$this->problemDesc = $vals['problemDesc'];
			}
			
			
			if (isset($vals['currentStepState'])){
				
				$this->currentStepState = $vals['currentStepState'];
			}
			
			
			if (isset($vals['sdNo'])){
				
				$this->sdNo = $vals['sdNo'];
			}
			
			
			if (isset($vals['expectEndTime'])){
				
				$this->expectEndTime = $vals['expectEndTime'];
			}
			
			
			if (isset($vals['messageType'])){
				
				$this->messageType = $vals['messageType'];
			}
			
			
			if (isset($vals['expEvaluation'])){
				
				$this->expEvaluation = $vals['expEvaluation'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("syncType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->syncType); 
				
			}
			
			
			
			
			if ("woNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->woNo);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("acceptTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->acceptTime); 
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->state); 
				
			}
			
			
			
			
			if ("pc1Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc1Name);
				
			}
			
			
			
			
			if ("pc2Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc2Name);
				
			}
			
			
			
			
			if ("pc3Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc3Name);
				
			}
			
			
			
			
			if ("problemDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->problemDesc);
				
			}
			
			
			
			
			if ("currentStepState" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->currentStepState); 
				
			}
			
			
			
			
			if ("sdNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sdNo);
				
			}
			
			
			
			
			if ("expectEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expectEndTime); 
				
			}
			
			
			
			
			if ("messageType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->messageType);
				
			}
			
			
			
			
			if ("expEvaluation" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expEvaluation);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
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
		
		if($this->syncType !== null) {
			
			$xfer += $output->writeFieldBegin('syncType');
			$xfer += $output->writeI32($this->syncType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->woNo !== null) {
			
			$xfer += $output->writeFieldBegin('woNo');
			$xfer += $output->writeString($this->woNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acceptTime !== null) {
			
			$xfer += $output->writeFieldBegin('acceptTime');
			$xfer += $output->writeI64($this->acceptTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeByte($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pc1Name !== null) {
			
			$xfer += $output->writeFieldBegin('pc1Name');
			$xfer += $output->writeString($this->pc1Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pc2Name !== null) {
			
			$xfer += $output->writeFieldBegin('pc2Name');
			$xfer += $output->writeString($this->pc2Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pc3Name !== null) {
			
			$xfer += $output->writeFieldBegin('pc3Name');
			$xfer += $output->writeString($this->pc3Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problemDesc !== null) {
			
			$xfer += $output->writeFieldBegin('problemDesc');
			$xfer += $output->writeString($this->problemDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currentStepState !== null) {
			
			$xfer += $output->writeFieldBegin('currentStepState');
			$xfer += $output->writeByte($this->currentStepState);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sdNo !== null) {
			
			$xfer += $output->writeFieldBegin('sdNo');
			$xfer += $output->writeString($this->sdNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expectEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('expectEndTime');
			$xfer += $output->writeI64($this->expectEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->messageType !== null) {
			
			$xfer += $output->writeFieldBegin('messageType');
			$xfer += $output->writeString($this->messageType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expEvaluation !== null) {
			
			$xfer += $output->writeFieldBegin('expEvaluation');
			$xfer += $output->writeString($this->expEvaluation);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>