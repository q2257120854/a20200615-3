<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\haitaoervice;
interface HtFeedbackMessageServiceIf{
	
	
	public function healthCheck();
	
	public function sendFeedback( $sender, $messageType, $messageList);
	
}

class _HtFeedbackMessageServiceClient extends \Osp\Base\OspStub implements \vipapis\haitaoervice\HtFeedbackMessageServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.haitaoervice.HtFeedbackMessageService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \vipapis\haitaoervice\HtFeedbackMessageService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\haitaoervice\HtFeedbackMessageService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function sendFeedback( $sender, $messageType, $messageList){
		
		$this->send_sendFeedback( $sender, $messageType, $messageList);
		return $this->recv_sendFeedback();
	}
	
	public function send_sendFeedback( $sender, $messageType, $messageList){
		
		$this->initInvocation("sendFeedback");
		$args = new \vipapis\haitaoervice\HtFeedbackMessageService_sendFeedback_args();
		
		$args->sender = $sender;
		
		$args->messageType = $messageType;
		
		$args->messageList = $messageList;
		
		$this->send_base($args);
	}
	
	public function recv_sendFeedback(){
		
		$result = new \vipapis\haitaoervice\HtFeedbackMessageService_sendFeedback_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class HtFeedbackMessageService_healthCheck_args {
	
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




class HtFeedbackMessageService_sendFeedback_args {
	
	static $_TSPEC;
	public $sender = null;
	public $messageType = null;
	public $messageList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sender'
			),
			2 => array(
			'var' => 'messageType'
			),
			3 => array(
			'var' => 'messageList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sender'])){
				
				$this->sender = $vals['sender'];
			}
			
			
			if (isset($vals['messageType'])){
				
				$this->messageType = $vals['messageType'];
			}
			
			
			if (isset($vals['messageList'])){
				
				$this->messageList = $vals['messageList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sender);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->messageType);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->messageList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\haitao\feedback\osp\service\HtFeedbackMessageModel();
					$elem1->read($input);
					
					$this->messageList[$_size1++] = $elem1;
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
		
		if($this->sender !== null) {
			
			$xfer += $output->writeFieldBegin('sender');
			$xfer += $output->writeString($this->sender);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->messageType !== null) {
			
			$xfer += $output->writeFieldBegin('messageType');
			$xfer += $output->writeString($this->messageType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->messageList !== null) {
			
			$xfer += $output->writeFieldBegin('messageList');
			
			if (!is_array($this->messageList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->messageList as $iter0){
				
				
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




class HtFeedbackMessageService_healthCheck_result {
	
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




class HtFeedbackMessageService_sendFeedback_result {
	
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
			
			
			$this->success = new \com\vip\haitao\feedback\osp\service\HtFeedbackMessageResponse();
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