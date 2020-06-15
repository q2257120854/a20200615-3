<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\logistical;
interface CommentCustServiceIf{
	
	
	public function countOrderCommentsByCondition( $custNo, $ordersn, $startPostime, $endPostime);
	
	public function getCommentsByCustNo( $custNo, $curPage, $pageSize, $startPostime, $endPostime);
	
	public function getOrderCommentsByCondition( $custNo, $ordersn, $curPage, $pageSize, $startPostime, $endPostime, $order);
	
	public function healthCheck();
	
}

class _CommentCustServiceClient extends \Osp\Base\OspStub implements \vipapis\logistical\CommentCustServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.logistical.CommentCustService", "1.0.4");
	}
	
	
	public function countOrderCommentsByCondition( $custNo, $ordersn, $startPostime, $endPostime){
		
		$this->send_countOrderCommentsByCondition( $custNo, $ordersn, $startPostime, $endPostime);
		return $this->recv_countOrderCommentsByCondition();
	}
	
	public function send_countOrderCommentsByCondition( $custNo, $ordersn, $startPostime, $endPostime){
		
		$this->initInvocation("countOrderCommentsByCondition");
		$args = new \vipapis\logistical\CommentCustService_countOrderCommentsByCondition_args();
		
		$args->custNo = $custNo;
		
		$args->ordersn = $ordersn;
		
		$args->startPostime = $startPostime;
		
		$args->endPostime = $endPostime;
		
		$this->send_base($args);
	}
	
	public function recv_countOrderCommentsByCondition(){
		
		$result = new \vipapis\logistical\CommentCustService_countOrderCommentsByCondition_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCommentsByCustNo( $custNo, $curPage, $pageSize, $startPostime, $endPostime){
		
		$this->send_getCommentsByCustNo( $custNo, $curPage, $pageSize, $startPostime, $endPostime);
		return $this->recv_getCommentsByCustNo();
	}
	
	public function send_getCommentsByCustNo( $custNo, $curPage, $pageSize, $startPostime, $endPostime){
		
		$this->initInvocation("getCommentsByCustNo");
		$args = new \vipapis\logistical\CommentCustService_getCommentsByCustNo_args();
		
		$args->custNo = $custNo;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->startPostime = $startPostime;
		
		$args->endPostime = $endPostime;
		
		$this->send_base($args);
	}
	
	public function recv_getCommentsByCustNo(){
		
		$result = new \vipapis\logistical\CommentCustService_getCommentsByCustNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOrderCommentsByCondition( $custNo, $ordersn, $curPage, $pageSize, $startPostime, $endPostime, $order){
		
		$this->send_getOrderCommentsByCondition( $custNo, $ordersn, $curPage, $pageSize, $startPostime, $endPostime, $order);
		return $this->recv_getOrderCommentsByCondition();
	}
	
	public function send_getOrderCommentsByCondition( $custNo, $ordersn, $curPage, $pageSize, $startPostime, $endPostime, $order){
		
		$this->initInvocation("getOrderCommentsByCondition");
		$args = new \vipapis\logistical\CommentCustService_getOrderCommentsByCondition_args();
		
		$args->custNo = $custNo;
		
		$args->ordersn = $ordersn;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$args->startPostime = $startPostime;
		
		$args->endPostime = $endPostime;
		
		$args->order = $order;
		
		$this->send_base($args);
	}
	
	public function recv_getOrderCommentsByCondition(){
		
		$result = new \vipapis\logistical\CommentCustService_getOrderCommentsByCondition_result();
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
		$args = new \vipapis\logistical\CommentCustService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\logistical\CommentCustService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class CommentCustService_countOrderCommentsByCondition_args {
	
	static $_TSPEC;
	public $custNo = null;
	public $ordersn = null;
	public $startPostime = null;
	public $endPostime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custNo'
			),
			2 => array(
			'var' => 'ordersn'
			),
			3 => array(
			'var' => 'startPostime'
			),
			4 => array(
			'var' => 'endPostime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
			if (isset($vals['ordersn'])){
				
				$this->ordersn = $vals['ordersn'];
			}
			
			
			if (isset($vals['startPostime'])){
				
				$this->startPostime = $vals['startPostime'];
			}
			
			
			if (isset($vals['endPostime'])){
				
				$this->endPostime = $vals['endPostime'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->custNo); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ordersn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->startPostime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->endPostime); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->custNo !== null) {
			
			$xfer += $output->writeFieldBegin('custNo');
			$xfer += $output->writeI64($this->custNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ordersn !== null) {
			
			$xfer += $output->writeFieldBegin('ordersn');
			$xfer += $output->writeString($this->ordersn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startPostime !== null) {
			
			$xfer += $output->writeFieldBegin('startPostime');
			$xfer += $output->writeI64($this->startPostime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endPostime !== null) {
			
			$xfer += $output->writeFieldBegin('endPostime');
			$xfer += $output->writeI64($this->endPostime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CommentCustService_getCommentsByCustNo_args {
	
	static $_TSPEC;
	public $custNo = null;
	public $curPage = null;
	public $pageSize = null;
	public $startPostime = null;
	public $endPostime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custNo'
			),
			2 => array(
			'var' => 'curPage'
			),
			3 => array(
			'var' => 'pageSize'
			),
			4 => array(
			'var' => 'startPostime'
			),
			5 => array(
			'var' => 'endPostime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['startPostime'])){
				
				$this->startPostime = $vals['startPostime'];
			}
			
			
			if (isset($vals['endPostime'])){
				
				$this->endPostime = $vals['endPostime'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->custNo); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->startPostime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->endPostime); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('custNo');
		$xfer += $output->writeI64($this->custNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->startPostime !== null) {
			
			$xfer += $output->writeFieldBegin('startPostime');
			$xfer += $output->writeI64($this->startPostime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endPostime !== null) {
			
			$xfer += $output->writeFieldBegin('endPostime');
			$xfer += $output->writeI64($this->endPostime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CommentCustService_getOrderCommentsByCondition_args {
	
	static $_TSPEC;
	public $custNo = null;
	public $ordersn = null;
	public $curPage = null;
	public $pageSize = null;
	public $startPostime = null;
	public $endPostime = null;
	public $order = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'custNo'
			),
			2 => array(
			'var' => 'ordersn'
			),
			3 => array(
			'var' => 'curPage'
			),
			4 => array(
			'var' => 'pageSize'
			),
			5 => array(
			'var' => 'startPostime'
			),
			6 => array(
			'var' => 'endPostime'
			),
			7 => array(
			'var' => 'order'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['custNo'])){
				
				$this->custNo = $vals['custNo'];
			}
			
			
			if (isset($vals['ordersn'])){
				
				$this->ordersn = $vals['ordersn'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['startPostime'])){
				
				$this->startPostime = $vals['startPostime'];
			}
			
			
			if (isset($vals['endPostime'])){
				
				$this->endPostime = $vals['endPostime'];
			}
			
			
			if (isset($vals['order'])){
				
				$this->order = $vals['order'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->custNo); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ordersn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->startPostime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->endPostime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->order); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->custNo !== null) {
			
			$xfer += $output->writeFieldBegin('custNo');
			$xfer += $output->writeI64($this->custNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ordersn !== null) {
			
			$xfer += $output->writeFieldBegin('ordersn');
			$xfer += $output->writeString($this->ordersn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->startPostime !== null) {
			
			$xfer += $output->writeFieldBegin('startPostime');
			$xfer += $output->writeI64($this->startPostime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endPostime !== null) {
			
			$xfer += $output->writeFieldBegin('endPostime');
			$xfer += $output->writeI64($this->endPostime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order !== null) {
			
			$xfer += $output->writeFieldBegin('order');
			$xfer += $output->writeI32($this->order);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CommentCustService_healthCheck_args {
	
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




class CommentCustService_countOrderCommentsByCondition_result {
	
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
			
			$input->readI64($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeI64($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CommentCustService_getCommentsByCustNo_result {
	
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
					
					$elem0 = new \com\vip\comment\api\admin\service\OrderCommentRecord();
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




class CommentCustService_getOrderCommentsByCondition_result {
	
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
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\comment\api\admin\service\OrderCommentRecord();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
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




class CommentCustService_healthCheck_result {
	
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