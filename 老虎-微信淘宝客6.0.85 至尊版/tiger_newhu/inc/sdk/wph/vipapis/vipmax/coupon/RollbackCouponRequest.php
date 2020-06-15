<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\coupon;

class RollbackCouponRequest {
	
	static $_TSPEC;
	public $open_uid = null;
	public $order_sn = null;
	public $coupon_sn_lists = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'open_uid'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'coupon_sn_lists'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['open_uid'])){
				
				$this->open_uid = $vals['open_uid'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['coupon_sn_lists'])){
				
				$this->coupon_sn_lists = $vals['coupon_sn_lists'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RollbackCouponRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("open_uid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->open_uid);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("coupon_sn_lists" == $schemeField){
				
				$needSkip = false;
				
				$this->coupon_sn_lists = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->coupon_sn_lists[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('open_uid');
		$xfer += $output->writeString($this->open_uid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('coupon_sn_lists');
		
		if (!is_array($this->coupon_sn_lists)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->coupon_sn_lists as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>