<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class SurprisePriceActivityRequestModel {
	
	static $_TSPEC;
	public $activityNo = null;
	public $name = null;
	public $startTime = null;
	public $endTime = null;
	public $longMessage = null;
	public $shortMessage = null;
	public $iconLink = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activityNo'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'startTime'
			),
			4 => array(
			'var' => 'endTime'
			),
			5 => array(
			'var' => 'longMessage'
			),
			6 => array(
			'var' => 'shortMessage'
			),
			7 => array(
			'var' => 'iconLink'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activityNo'])){
				
				$this->activityNo = $vals['activityNo'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['longMessage'])){
				
				$this->longMessage = $vals['longMessage'];
			}
			
			
			if (isset($vals['shortMessage'])){
				
				$this->shortMessage = $vals['shortMessage'];
			}
			
			
			if (isset($vals['iconLink'])){
				
				$this->iconLink = $vals['iconLink'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SurprisePriceActivityRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("activityNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityNo);
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime);
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime);
				
			}
			
			
			
			
			if ("longMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->longMessage);
				
			}
			
			
			
			
			if ("shortMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shortMessage);
				
			}
			
			
			
			
			if ("iconLink" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->iconLink);
				
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
		
		$xfer += $output->writeFieldBegin('activityNo');
		$xfer += $output->writeString($this->activityNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('startTime');
		$xfer += $output->writeI64($this->startTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('endTime');
		$xfer += $output->writeI64($this->endTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('longMessage');
		$xfer += $output->writeString($this->longMessage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('shortMessage');
		$xfer += $output->writeString($this->shortMessage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('iconLink');
		$xfer += $output->writeString($this->iconLink);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>