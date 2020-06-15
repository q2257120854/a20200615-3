<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\activity;
interface ActivityServiceIf{
	
	
	public function checkIn( $activityId, $mobile);
	
	public function checkInV2( $activityId, $mobile);
	
	public function checkInV3( $activityId, $mobile);
	
	public function healthCheck();
	
}

class _ActivityServiceClient extends \Osp\Base\OspStub implements \vipapis\activity\ActivityServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.activity.ActivityService", "1.0.0");
	}
	
	
	public function checkIn( $activityId, $mobile){
		
		$this->send_checkIn( $activityId, $mobile);
		return $this->recv_checkIn();
	}
	
	public function send_checkIn( $activityId, $mobile){
		
		$this->initInvocation("checkIn");
		$args = new \vipapis\activity\ActivityService_checkIn_args();
		
		$args->activityId = $activityId;
		
		$args->mobile = $mobile;
		
		$this->send_base($args);
	}
	
	public function recv_checkIn(){
		
		$result = new \vipapis\activity\ActivityService_checkIn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkInV2( $activityId, $mobile){
		
		$this->send_checkInV2( $activityId, $mobile);
		return $this->recv_checkInV2();
	}
	
	public function send_checkInV2( $activityId, $mobile){
		
		$this->initInvocation("checkInV2");
		$args = new \vipapis\activity\ActivityService_checkInV2_args();
		
		$args->activityId = $activityId;
		
		$args->mobile = $mobile;
		
		$this->send_base($args);
	}
	
	public function recv_checkInV2(){
		
		$result = new \vipapis\activity\ActivityService_checkInV2_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkInV3( $activityId, $mobile){
		
		$this->send_checkInV3( $activityId, $mobile);
		return $this->recv_checkInV3();
	}
	
	public function send_checkInV3( $activityId, $mobile){
		
		$this->initInvocation("checkInV3");
		$args = new \vipapis\activity\ActivityService_checkInV3_args();
		
		$args->activityId = $activityId;
		
		$args->mobile = $mobile;
		
		$this->send_base($args);
	}
	
	public function recv_checkInV3(){
		
		$result = new \vipapis\activity\ActivityService_checkInV3_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \vipapis\activity\ActivityService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\activity\ActivityService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ActivityService_checkIn_args {
	
	static $_TSPEC;
	public $activityId = null;
	public $mobile = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activityId'
			),
			2 => array(
			'var' => 'mobile'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activityId'])){
				
				$this->activityId = $vals['activityId'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->activityId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->mobile);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('activityId');
		$xfer += $output->writeString($this->activityId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mobile');
		$xfer += $output->writeString($this->mobile);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ActivityService_checkInV2_args {
	
	static $_TSPEC;
	public $activityId = null;
	public $mobile = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activityId'
			),
			2 => array(
			'var' => 'mobile'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activityId'])){
				
				$this->activityId = $vals['activityId'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->activityId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->mobile);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('activityId');
		$xfer += $output->writeString($this->activityId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mobile');
		$xfer += $output->writeString($this->mobile);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ActivityService_checkInV3_args {
	
	static $_TSPEC;
	public $activityId = null;
	public $mobile = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activityId'
			),
			2 => array(
			'var' => 'mobile'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activityId'])){
				
				$this->activityId = $vals['activityId'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->activityId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->mobile);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('activityId');
		$xfer += $output->writeString($this->activityId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mobile');
		$xfer += $output->writeString($this->mobile);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ActivityService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ActivityService_checkIn_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\activity\Coupon();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
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




class ActivityService_checkInV2_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \vipapis\activity\CheckInResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ActivityService_checkInV3_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \vipapis\activity\CheckInResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ActivityService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>