<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\address;
interface AddressServiceIf{
	
	
	public function getFullAddress( $area_code, $is_show_gat, $is_bind);
	
	public function getProvinceWarehouse( $is_show_gat);
	
	public function healthCheck();
	
}

class _AddressServiceClient extends \Osp\Base\OspStub implements \vipapis\address\AddressServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.address.AddressService", "1.0.0");
	}
	
	
	public function getFullAddress( $area_code, $is_show_gat, $is_bind){
		
		$this->send_getFullAddress( $area_code, $is_show_gat, $is_bind);
		return $this->recv_getFullAddress();
	}
	
	public function send_getFullAddress( $area_code, $is_show_gat, $is_bind){
		
		$this->initInvocation("getFullAddress");
		$args = new \vipapis\address\AddressService_getFullAddress_args();
		
		$args->area_code = $area_code;
		
		$args->is_show_gat = $is_show_gat;
		
		$args->is_bind = $is_bind;
		
		$this->send_base($args);
	}
	
	public function recv_getFullAddress(){
		
		$result = new \vipapis\address\AddressService_getFullAddress_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProvinceWarehouse( $is_show_gat){
		
		$this->send_getProvinceWarehouse( $is_show_gat);
		return $this->recv_getProvinceWarehouse();
	}
	
	public function send_getProvinceWarehouse( $is_show_gat){
		
		$this->initInvocation("getProvinceWarehouse");
		$args = new \vipapis\address\AddressService_getProvinceWarehouse_args();
		
		$args->is_show_gat = $is_show_gat;
		
		$this->send_base($args);
	}
	
	public function recv_getProvinceWarehouse(){
		
		$result = new \vipapis\address\AddressService_getProvinceWarehouse_result();
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
		$args = new \vipapis\address\AddressService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\address\AddressService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class AddressService_getFullAddress_args {
	
	static $_TSPEC;
	public $area_code = null;
	public $is_show_gat = null;
	public $is_bind = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'area_code'
			),
			2 => array(
			'var' => 'is_show_gat'
			),
			3 => array(
			'var' => 'is_bind'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['area_code'])){
				
				$this->area_code = $vals['area_code'];
			}
			
			
			if (isset($vals['is_show_gat'])){
				
				$this->is_show_gat = $vals['is_show_gat'];
			}
			
			
			if (isset($vals['is_bind'])){
				
				$this->is_bind = $vals['is_bind'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->area_code);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\address\Is_Show_GAT::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->is_show_gat = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->is_bind);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('area_code');
		$xfer += $output->writeString($this->area_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->is_show_gat !== null) {
			
			$xfer += $output->writeFieldBegin('is_show_gat');
			
			$em = new \vipapis\address\Is_Show_GAT; 
			$output->writeString($em::$__names[$this->is_show_gat]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_bind !== null) {
			
			$xfer += $output->writeFieldBegin('is_bind');
			$xfer += $output->writeBool($this->is_bind);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AddressService_getProvinceWarehouse_args {
	
	static $_TSPEC;
	public $is_show_gat = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'is_show_gat'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['is_show_gat'])){
				
				$this->is_show_gat = $vals['is_show_gat'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\address\Is_Show_GAT::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->is_show_gat = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->is_show_gat !== null) {
			
			$xfer += $output->writeFieldBegin('is_show_gat');
			
			$em = new \vipapis\address\Is_Show_GAT; 
			$output->writeString($em::$__names[$this->is_show_gat]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class AddressService_healthCheck_args {
	
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




class AddressService_getFullAddress_result {
	
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
			
			
			$this->success = new \vipapis\address\FullAddress();
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




class AddressService_getProvinceWarehouse_result {
	
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
					
					$elem0 = new \vipapis\address\ProvinceWarehouse();
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




class AddressService_healthCheck_result {
	
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