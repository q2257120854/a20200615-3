<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipTXBindHistoryResult {
	
	static $_TSPEC;
	public $user_id = null;
	public $order_no = null;
	public $tencent_acct_type = null;
	public $tencent_member_type = null;
	public $tencent_acct = null;
	public $create_time = null;
	public $tx_nick_name = null;
	public $tx_figure_url = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'user_id'
			),
			2 => array(
			'var' => 'order_no'
			),
			3 => array(
			'var' => 'tencent_acct_type'
			),
			4 => array(
			'var' => 'tencent_member_type'
			),
			5 => array(
			'var' => 'tencent_acct'
			),
			6 => array(
			'var' => 'create_time'
			),
			7 => array(
			'var' => 'tx_nick_name'
			),
			8 => array(
			'var' => 'tx_figure_url'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['user_id'])){
				
				$this->user_id = $vals['user_id'];
			}
			
			
			if (isset($vals['order_no'])){
				
				$this->order_no = $vals['order_no'];
			}
			
			
			if (isset($vals['tencent_acct_type'])){
				
				$this->tencent_acct_type = $vals['tencent_acct_type'];
			}
			
			
			if (isset($vals['tencent_member_type'])){
				
				$this->tencent_member_type = $vals['tencent_member_type'];
			}
			
			
			if (isset($vals['tencent_acct'])){
				
				$this->tencent_acct = $vals['tencent_acct'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['tx_nick_name'])){
				
				$this->tx_nick_name = $vals['tx_nick_name'];
			}
			
			
			if (isset($vals['tx_figure_url'])){
				
				$this->tx_figure_url = $vals['tx_figure_url'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipTXBindHistoryResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("user_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->user_id); 
				
			}
			
			
			
			
			if ("order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_no);
				
			}
			
			
			
			
			if ("tencent_acct_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tencent_acct_type); 
				
			}
			
			
			
			
			if ("tencent_member_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tencent_member_type); 
				
			}
			
			
			
			
			if ("tencent_acct" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tencent_acct);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time);
				
			}
			
			
			
			
			if ("tx_nick_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tx_nick_name);
				
			}
			
			
			
			
			if ("tx_figure_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tx_figure_url);
				
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
		
		$xfer += $output->writeFieldBegin('user_id');
		$xfer += $output->writeI64($this->user_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_no !== null) {
			
			$xfer += $output->writeFieldBegin('order_no');
			$xfer += $output->writeString($this->order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('tencent_acct_type');
		$xfer += $output->writeI32($this->tencent_acct_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tencent_member_type');
		$xfer += $output->writeI32($this->tencent_member_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tencent_acct !== null) {
			
			$xfer += $output->writeFieldBegin('tencent_acct');
			$xfer += $output->writeString($this->tencent_acct);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tx_nick_name !== null) {
			
			$xfer += $output->writeFieldBegin('tx_nick_name');
			$xfer += $output->writeString($this->tx_nick_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tx_figure_url !== null) {
			
			$xfer += $output->writeFieldBegin('tx_figure_url');
			$xfer += $output->writeString($this->tx_figure_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>