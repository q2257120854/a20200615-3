<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipcard;
interface VipCardServiceIf{
	
	
	public function applyGroup(\vipapis\vipcard\ApplyGroupRequest $applyGroupRequest);
	
	public function cancelCard( $client_id, $type, $card_code, $trans_id, $merchant_code);
	
	public function cancelSoldCard( $shop_name, $shop_area, $client_id, $type, $card_code, $trans_id, $sale_trans_id, $merchant_code);
	
	public function getActivateCode( $card_code, $merchant_code);
	
	public function getCardNumberList( $merchant_code, $group_id, $status_filter, $page, $limit);
	
	public function getCardStatus( $shop_name, $shop_area, $client_id, $type, $card_code, $merchant_code);
	
	public function getGroupInfo( $merchant_code, $group_id);
	
	public function getUserVipCardInfo( $client_id, $type, $card_code, $merchant_code);
	
	public function healthCheck();
	
	public function sellCard( $shop_name, $shop_area, $client_id, $type, $card_code, $trans_id, $merchant_code);
	
	public function sellVipCard( $client_id, $type, $card_code, $trans_id, $merchant_code, $is_return_act);
	
}

class _VipCardServiceClient extends \Osp\Base\OspStub implements \vipapis\vipcard\VipCardServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.vipcard.VipCardService", "1.0.0");
	}
	
	
	public function applyGroup(\vipapis\vipcard\ApplyGroupRequest $applyGroupRequest){
		
		$this->send_applyGroup( $applyGroupRequest);
		return $this->recv_applyGroup();
	}
	
	public function send_applyGroup(\vipapis\vipcard\ApplyGroupRequest $applyGroupRequest){
		
		$this->initInvocation("applyGroup");
		$args = new \vipapis\vipcard\VipCardService_applyGroup_args();
		
		$args->applyGroupRequest = $applyGroupRequest;
		
		$this->send_base($args);
	}
	
	public function recv_applyGroup(){
		
		$result = new \vipapis\vipcard\VipCardService_applyGroup_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelCard( $client_id, $type, $card_code, $trans_id, $merchant_code){
		
		$this->send_cancelCard( $client_id, $type, $card_code, $trans_id, $merchant_code);
		return $this->recv_cancelCard();
	}
	
	public function send_cancelCard( $client_id, $type, $card_code, $trans_id, $merchant_code){
		
		$this->initInvocation("cancelCard");
		$args = new \vipapis\vipcard\VipCardService_cancelCard_args();
		
		$args->client_id = $client_id;
		
		$args->type = $type;
		
		$args->card_code = $card_code;
		
		$args->trans_id = $trans_id;
		
		$args->merchant_code = $merchant_code;
		
		$this->send_base($args);
	}
	
	public function recv_cancelCard(){
		
		$result = new \vipapis\vipcard\VipCardService_cancelCard_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelSoldCard( $shop_name, $shop_area, $client_id, $type, $card_code, $trans_id, $sale_trans_id, $merchant_code){
		
		$this->send_cancelSoldCard( $shop_name, $shop_area, $client_id, $type, $card_code, $trans_id, $sale_trans_id, $merchant_code);
		return $this->recv_cancelSoldCard();
	}
	
	public function send_cancelSoldCard( $shop_name, $shop_area, $client_id, $type, $card_code, $trans_id, $sale_trans_id, $merchant_code){
		
		$this->initInvocation("cancelSoldCard");
		$args = new \vipapis\vipcard\VipCardService_cancelSoldCard_args();
		
		$args->shop_name = $shop_name;
		
		$args->shop_area = $shop_area;
		
		$args->client_id = $client_id;
		
		$args->type = $type;
		
		$args->card_code = $card_code;
		
		$args->trans_id = $trans_id;
		
		$args->sale_trans_id = $sale_trans_id;
		
		$args->merchant_code = $merchant_code;
		
		$this->send_base($args);
	}
	
	public function recv_cancelSoldCard(){
		
		$result = new \vipapis\vipcard\VipCardService_cancelSoldCard_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getActivateCode( $card_code, $merchant_code){
		
		$this->send_getActivateCode( $card_code, $merchant_code);
		return $this->recv_getActivateCode();
	}
	
	public function send_getActivateCode( $card_code, $merchant_code){
		
		$this->initInvocation("getActivateCode");
		$args = new \vipapis\vipcard\VipCardService_getActivateCode_args();
		
		$args->card_code = $card_code;
		
		$args->merchant_code = $merchant_code;
		
		$this->send_base($args);
	}
	
	public function recv_getActivateCode(){
		
		$result = new \vipapis\vipcard\VipCardService_getActivateCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCardNumberList( $merchant_code, $group_id, $status_filter, $page, $limit){
		
		$this->send_getCardNumberList( $merchant_code, $group_id, $status_filter, $page, $limit);
		return $this->recv_getCardNumberList();
	}
	
	public function send_getCardNumberList( $merchant_code, $group_id, $status_filter, $page, $limit){
		
		$this->initInvocation("getCardNumberList");
		$args = new \vipapis\vipcard\VipCardService_getCardNumberList_args();
		
		$args->merchant_code = $merchant_code;
		
		$args->group_id = $group_id;
		
		$args->status_filter = $status_filter;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getCardNumberList(){
		
		$result = new \vipapis\vipcard\VipCardService_getCardNumberList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCardStatus( $shop_name, $shop_area, $client_id, $type, $card_code, $merchant_code){
		
		$this->send_getCardStatus( $shop_name, $shop_area, $client_id, $type, $card_code, $merchant_code);
		return $this->recv_getCardStatus();
	}
	
	public function send_getCardStatus( $shop_name, $shop_area, $client_id, $type, $card_code, $merchant_code){
		
		$this->initInvocation("getCardStatus");
		$args = new \vipapis\vipcard\VipCardService_getCardStatus_args();
		
		$args->shop_name = $shop_name;
		
		$args->shop_area = $shop_area;
		
		$args->client_id = $client_id;
		
		$args->type = $type;
		
		$args->card_code = $card_code;
		
		$args->merchant_code = $merchant_code;
		
		$this->send_base($args);
	}
	
	public function recv_getCardStatus(){
		
		$result = new \vipapis\vipcard\VipCardService_getCardStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getGroupInfo( $merchant_code, $group_id){
		
		$this->send_getGroupInfo( $merchant_code, $group_id);
		return $this->recv_getGroupInfo();
	}
	
	public function send_getGroupInfo( $merchant_code, $group_id){
		
		$this->initInvocation("getGroupInfo");
		$args = new \vipapis\vipcard\VipCardService_getGroupInfo_args();
		
		$args->merchant_code = $merchant_code;
		
		$args->group_id = $group_id;
		
		$this->send_base($args);
	}
	
	public function recv_getGroupInfo(){
		
		$result = new \vipapis\vipcard\VipCardService_getGroupInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUserVipCardInfo( $client_id, $type, $card_code, $merchant_code){
		
		$this->send_getUserVipCardInfo( $client_id, $type, $card_code, $merchant_code);
		return $this->recv_getUserVipCardInfo();
	}
	
	public function send_getUserVipCardInfo( $client_id, $type, $card_code, $merchant_code){
		
		$this->initInvocation("getUserVipCardInfo");
		$args = new \vipapis\vipcard\VipCardService_getUserVipCardInfo_args();
		
		$args->client_id = $client_id;
		
		$args->type = $type;
		
		$args->card_code = $card_code;
		
		$args->merchant_code = $merchant_code;
		
		$this->send_base($args);
	}
	
	public function recv_getUserVipCardInfo(){
		
		$result = new \vipapis\vipcard\VipCardService_getUserVipCardInfo_result();
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
		$args = new \vipapis\vipcard\VipCardService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\vipcard\VipCardService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function sellCard( $shop_name, $shop_area, $client_id, $type, $card_code, $trans_id, $merchant_code){
		
		$this->send_sellCard( $shop_name, $shop_area, $client_id, $type, $card_code, $trans_id, $merchant_code);
		return $this->recv_sellCard();
	}
	
	public function send_sellCard( $shop_name, $shop_area, $client_id, $type, $card_code, $trans_id, $merchant_code){
		
		$this->initInvocation("sellCard");
		$args = new \vipapis\vipcard\VipCardService_sellCard_args();
		
		$args->shop_name = $shop_name;
		
		$args->shop_area = $shop_area;
		
		$args->client_id = $client_id;
		
		$args->type = $type;
		
		$args->card_code = $card_code;
		
		$args->trans_id = $trans_id;
		
		$args->merchant_code = $merchant_code;
		
		$this->send_base($args);
	}
	
	public function recv_sellCard(){
		
		$result = new \vipapis\vipcard\VipCardService_sellCard_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function sellVipCard( $client_id, $type, $card_code, $trans_id, $merchant_code, $is_return_act){
		
		$this->send_sellVipCard( $client_id, $type, $card_code, $trans_id, $merchant_code, $is_return_act);
		return $this->recv_sellVipCard();
	}
	
	public function send_sellVipCard( $client_id, $type, $card_code, $trans_id, $merchant_code, $is_return_act){
		
		$this->initInvocation("sellVipCard");
		$args = new \vipapis\vipcard\VipCardService_sellVipCard_args();
		
		$args->client_id = $client_id;
		
		$args->type = $type;
		
		$args->card_code = $card_code;
		
		$args->trans_id = $trans_id;
		
		$args->merchant_code = $merchant_code;
		
		$args->is_return_act = $is_return_act;
		
		$this->send_base($args);
	}
	
	public function recv_sellVipCard(){
		
		$result = new \vipapis\vipcard\VipCardService_sellVipCard_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VipCardService_applyGroup_args {
	
	static $_TSPEC;
	public $applyGroupRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'applyGroupRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['applyGroupRequest'])){
				
				$this->applyGroupRequest = $vals['applyGroupRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->applyGroupRequest = new \vipapis\vipcard\ApplyGroupRequest();
			$this->applyGroupRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('applyGroupRequest');
		
		if (!is_object($this->applyGroupRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->applyGroupRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_cancelCard_args {
	
	static $_TSPEC;
	public $client_id = null;
	public $type = null;
	public $card_code = null;
	public $trans_id = null;
	public $merchant_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'client_id'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'card_code'
			),
			4 => array(
			'var' => 'trans_id'
			),
			5 => array(
			'var' => 'merchant_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['card_code'])){
				
				$this->card_code = $vals['card_code'];
			}
			
			
			if (isset($vals['trans_id'])){
				
				$this->trans_id = $vals['trans_id'];
			}
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->client_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->type); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->card_code = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->card_code[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->trans_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->merchant_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeI32($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI32($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('card_code');
		
		if (!is_array($this->card_code)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->card_code as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trans_id');
		$xfer += $output->writeI32($this->trans_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->merchant_code !== null) {
			
			$xfer += $output->writeFieldBegin('merchant_code');
			$xfer += $output->writeString($this->merchant_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_cancelSoldCard_args {
	
	static $_TSPEC;
	public $shop_name = null;
	public $shop_area = null;
	public $client_id = null;
	public $type = null;
	public $card_code = null;
	public $trans_id = null;
	public $sale_trans_id = null;
	public $merchant_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shop_name'
			),
			2 => array(
			'var' => 'shop_area'
			),
			3 => array(
			'var' => 'client_id'
			),
			4 => array(
			'var' => 'type'
			),
			5 => array(
			'var' => 'card_code'
			),
			6 => array(
			'var' => 'trans_id'
			),
			7 => array(
			'var' => 'sale_trans_id'
			),
			8 => array(
			'var' => 'merchant_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shop_name'])){
				
				$this->shop_name = $vals['shop_name'];
			}
			
			
			if (isset($vals['shop_area'])){
				
				$this->shop_area = $vals['shop_area'];
			}
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['card_code'])){
				
				$this->card_code = $vals['card_code'];
			}
			
			
			if (isset($vals['trans_id'])){
				
				$this->trans_id = $vals['trans_id'];
			}
			
			
			if (isset($vals['sale_trans_id'])){
				
				$this->sale_trans_id = $vals['sale_trans_id'];
			}
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->shop_name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->shop_area);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->client_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->card_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->trans_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->sale_trans_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->merchant_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('shop_name');
		$xfer += $output->writeString($this->shop_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('shop_area');
		$xfer += $output->writeString($this->shop_area);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeI32($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI32($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('card_code');
		$xfer += $output->writeString($this->card_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trans_id');
		$xfer += $output->writeI32($this->trans_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sale_trans_id');
		$xfer += $output->writeI32($this->sale_trans_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->merchant_code !== null) {
			
			$xfer += $output->writeFieldBegin('merchant_code');
			$xfer += $output->writeString($this->merchant_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_getActivateCode_args {
	
	static $_TSPEC;
	public $card_code = null;
	public $merchant_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'card_code'
			),
			2 => array(
			'var' => 'merchant_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['card_code'])){
				
				$this->card_code = $vals['card_code'];
			}
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->card_code = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->card_code[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->merchant_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('card_code');
		
		if (!is_array($this->card_code)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->card_code as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('merchant_code');
		$xfer += $output->writeString($this->merchant_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_getCardNumberList_args {
	
	static $_TSPEC;
	public $merchant_code = null;
	public $group_id = null;
	public $status_filter = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'merchant_code'
			),
			2 => array(
			'var' => 'group_id'
			),
			3 => array(
			'var' => 'status_filter'
			),
			4 => array(
			'var' => 'page'
			),
			5 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
			if (isset($vals['group_id'])){
				
				$this->group_id = $vals['group_id'];
			}
			
			
			if (isset($vals['status_filter'])){
				
				$this->status_filter = $vals['status_filter'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->merchant_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->group_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->status_filter); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('merchant_code');
		$xfer += $output->writeString($this->merchant_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('group_id');
		$xfer += $output->writeI32($this->group_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status_filter');
		$xfer += $output->writeI32($this->status_filter);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_getCardStatus_args {
	
	static $_TSPEC;
	public $shop_name = null;
	public $shop_area = null;
	public $client_id = null;
	public $type = null;
	public $card_code = null;
	public $merchant_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shop_name'
			),
			2 => array(
			'var' => 'shop_area'
			),
			3 => array(
			'var' => 'client_id'
			),
			4 => array(
			'var' => 'type'
			),
			5 => array(
			'var' => 'card_code'
			),
			6 => array(
			'var' => 'merchant_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shop_name'])){
				
				$this->shop_name = $vals['shop_name'];
			}
			
			
			if (isset($vals['shop_area'])){
				
				$this->shop_area = $vals['shop_area'];
			}
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['card_code'])){
				
				$this->card_code = $vals['card_code'];
			}
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->shop_name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->shop_area);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->client_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->type); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->card_code = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->card_code[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->merchant_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->shop_name !== null) {
			
			$xfer += $output->writeFieldBegin('shop_name');
			$xfer += $output->writeString($this->shop_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shop_area !== null) {
			
			$xfer += $output->writeFieldBegin('shop_area');
			$xfer += $output->writeString($this->shop_area);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeI32($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI32($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('card_code');
		
		if (!is_array($this->card_code)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->card_code as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->merchant_code !== null) {
			
			$xfer += $output->writeFieldBegin('merchant_code');
			$xfer += $output->writeString($this->merchant_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_getGroupInfo_args {
	
	static $_TSPEC;
	public $merchant_code = null;
	public $group_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'merchant_code'
			),
			2 => array(
			'var' => 'group_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
			if (isset($vals['group_id'])){
				
				$this->group_id = $vals['group_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->merchant_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->group_id); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('merchant_code');
		$xfer += $output->writeString($this->merchant_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('group_id');
		$xfer += $output->writeI32($this->group_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_getUserVipCardInfo_args {
	
	static $_TSPEC;
	public $client_id = null;
	public $type = null;
	public $card_code = null;
	public $merchant_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'client_id'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'card_code'
			),
			4 => array(
			'var' => 'merchant_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['card_code'])){
				
				$this->card_code = $vals['card_code'];
			}
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->client_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->type); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->card_code = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->card_code[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->merchant_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeI32($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI32($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('card_code');
		
		if (!is_array($this->card_code)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->card_code as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->merchant_code !== null) {
			
			$xfer += $output->writeFieldBegin('merchant_code');
			$xfer += $output->writeString($this->merchant_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_healthCheck_args {
	
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




class VipCardService_sellCard_args {
	
	static $_TSPEC;
	public $shop_name = null;
	public $shop_area = null;
	public $client_id = null;
	public $type = null;
	public $card_code = null;
	public $trans_id = null;
	public $merchant_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shop_name'
			),
			2 => array(
			'var' => 'shop_area'
			),
			3 => array(
			'var' => 'client_id'
			),
			4 => array(
			'var' => 'type'
			),
			5 => array(
			'var' => 'card_code'
			),
			6 => array(
			'var' => 'trans_id'
			),
			7 => array(
			'var' => 'merchant_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shop_name'])){
				
				$this->shop_name = $vals['shop_name'];
			}
			
			
			if (isset($vals['shop_area'])){
				
				$this->shop_area = $vals['shop_area'];
			}
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['card_code'])){
				
				$this->card_code = $vals['card_code'];
			}
			
			
			if (isset($vals['trans_id'])){
				
				$this->trans_id = $vals['trans_id'];
			}
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->shop_name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->shop_area);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->client_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->card_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->trans_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->merchant_code);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->shop_name !== null) {
			
			$xfer += $output->writeFieldBegin('shop_name');
			$xfer += $output->writeString($this->shop_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shop_area !== null) {
			
			$xfer += $output->writeFieldBegin('shop_area');
			$xfer += $output->writeString($this->shop_area);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeI32($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI32($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('card_code');
		$xfer += $output->writeString($this->card_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trans_id');
		$xfer += $output->writeI32($this->trans_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->merchant_code !== null) {
			
			$xfer += $output->writeFieldBegin('merchant_code');
			$xfer += $output->writeString($this->merchant_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_sellVipCard_args {
	
	static $_TSPEC;
	public $client_id = null;
	public $type = null;
	public $card_code = null;
	public $trans_id = null;
	public $merchant_code = null;
	public $is_return_act = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'client_id'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'card_code'
			),
			4 => array(
			'var' => 'trans_id'
			),
			5 => array(
			'var' => 'merchant_code'
			),
			6 => array(
			'var' => 'is_return_act'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['card_code'])){
				
				$this->card_code = $vals['card_code'];
			}
			
			
			if (isset($vals['trans_id'])){
				
				$this->trans_id = $vals['trans_id'];
			}
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
			if (isset($vals['is_return_act'])){
				
				$this->is_return_act = $vals['is_return_act'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->client_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->type); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->card_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->trans_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->merchant_code);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->is_return_act); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeI32($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI32($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('card_code');
		$xfer += $output->writeString($this->card_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trans_id');
		$xfer += $output->writeI32($this->trans_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('merchant_code');
		$xfer += $output->writeString($this->merchant_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->is_return_act !== null) {
			
			$xfer += $output->writeFieldBegin('is_return_act');
			$xfer += $output->writeI32($this->is_return_act);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_applyGroup_result {
	
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
			
			
			$this->success = new \vipapis\vipcard\ApplyGroupResponse();
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




class VipCardService_cancelCard_result {
	
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
			
			
			$this->success = new \vipapis\vipcard\CancelCardResponse();
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




class VipCardService_cancelSoldCard_result {
	
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
			
			$input->readBool($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_getActivateCode_result {
	
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
					
					$elem0 = new \vipapis\vipcard\ActivateCodeInfo();
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




class VipCardService_getCardNumberList_result {
	
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
			
			
			$this->success = new \vipapis\vipcard\CardNumberList();
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




class VipCardService_getCardStatus_result {
	
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
					
					$elem0 = new \vipapis\vipcard\VipCard();
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




class VipCardService_getGroupInfo_result {
	
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
			
			
			$this->success = new \vipapis\vipcard\GroupInfo();
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




class VipCardService_getUserVipCardInfo_result {
	
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
					
					$elem0 = new \vipapis\vipcard\VipCardInfo();
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




class VipCardService_healthCheck_result {
	
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




class VipCardService_sellCard_result {
	
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
			
			$input->readBool($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VipCardService_sellVipCard_result {
	
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
			
			
			$this->success = new \vipapis\vipcard\SellCardResponse();
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