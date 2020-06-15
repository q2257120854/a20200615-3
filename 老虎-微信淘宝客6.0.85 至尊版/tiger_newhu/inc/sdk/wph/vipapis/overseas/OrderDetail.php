<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class OrderDetail {
	
	static $_TSPEC;
	public $order_no = null;
	public $order_id = null;
	public $po_no = null;
	public $barcode = null;
	public $v_goods_regist_no = null;
	public $num = null;
	public $HTS_line_money = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_no'
			),
			2 => array(
			'var' => 'order_id'
			),
			3 => array(
			'var' => 'po_no'
			),
			4 => array(
			'var' => 'barcode'
			),
			5 => array(
			'var' => 'v_goods_regist_no'
			),
			6 => array(
			'var' => 'num'
			),
			7 => array(
			'var' => 'HTS_line_money'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_no'])){
				
				$this->order_no = $vals['order_no'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['v_goods_regist_no'])){
				
				$this->v_goods_regist_no = $vals['v_goods_regist_no'];
			}
			
			
			if (isset($vals['num'])){
				
				$this->num = $vals['num'];
			}
			
			
			if (isset($vals['HTS_line_money'])){
				
				$this->HTS_line_money = $vals['HTS_line_money'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_no);
				
			}
			
			
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("v_goods_regist_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->v_goods_regist_no);
				
			}
			
			
			
			
			if ("num" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->num);
				
			}
			
			
			
			
			if ("HTS_line_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->HTS_line_money);
				
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
		
		$xfer += $output->writeFieldBegin('order_no');
		$xfer += $output->writeString($this->order_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('v_goods_regist_no');
		$xfer += $output->writeString($this->v_goods_regist_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('num');
		$xfer += $output->writeString($this->num);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('HTS_line_money');
		$xfer += $output->writeString($this->HTS_line_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>