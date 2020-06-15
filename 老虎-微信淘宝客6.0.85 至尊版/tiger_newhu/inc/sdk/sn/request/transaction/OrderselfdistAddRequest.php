<?php
/**
 * 苏宁开放平台接口 - 订单发货（商家自配送）
 *
 * @author suning
 * @date   2014-9-25
 */
class OrderselfdistAddRequest  extends SuningRequest{
	
	/**
	 * 订单号
	 */
	private $orderCode;
	
	/**
	 * 送货人姓名
	 */
	private $deliveryPerName;
	
	/**
	 * 送货人手机号
	 */
	private $deliveryPerPhone;
	
	/**
	 * 发货时间
	 */
	private $deliveryTime;
	
	/**
	 * 苏宁商品编码父节点
	 */
	private $productCodes;
	
	/**
	 * 订单行项目号父节点
	 */
	private $orderLineNumbers;
	
	/**
	 * 手机串码父节点
	 */
	private $phoneIdentifyCodes;
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getDeliveryPerName() {
		return $this->deliveryPerName;
	}
	
	public function setDeliveryPerName($deliveryPerName) {
		$this->deliveryPerName = $deliveryPerName;
		$this->apiParams["deliveryPerName"] = $deliveryPerName;
	}
	
	public function getDeliveryPerPhone() {
		return $this->deliveryPerPhone;
	}
	
	public function setDeliveryPerPhone($deliveryPerPhone) {
		$this->deliveryPerPhone = $deliveryPerPhone;
		$this->apiParams["deliveryPerPhone"] = $deliveryPerPhone;
	}
	
	public function getDeliveryTime() {
		return $this->deliveryTime;
	}
	
	public function setDeliveryTime($deliveryTime) {
		$this->deliveryTime = $deliveryTime;
		$this->apiParams["deliveryTime"] = $deliveryTime;
	}
	
	public function getProductCodes() {
		return $this->productCodes;
	}
	
	public function setProductCodes($productCodes) {
		$this->productCodes = $productCodes;
		$arr = array();
		foreach ($productCodes as $temp){
		    array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["productCodes"] = $arr;
	}
	
	public function getOrderLineNumbers() {
		return $this->orderLineNumbers;
	}
	
	public function setOrderLineNumbers($orderLineNumbers) {
		$this->orderLineNumbers = $orderLineNumbers;
		$arr = array();
		foreach ($orderLineNumbers as $temp){
		    array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderLineNumbers"] = $arr;
	}
	
    public function getPhoneIdentifyCodes()
    {
        return $this->phoneIdentifyCodes;
    }

    public function setPhoneIdentifyCodes($phoneIdentifyCodes)
    {
        $this->phoneIdentifyCodes = $phoneIdentifyCodes;
        $arr = array();
        foreach ($phoneIdentifyCodes as $temp){
            array_push($arr,$temp->getApiParams());
        }
        $this->apiParams["phoneIdentifyCodes"] = $arr;
    }

    public function getApiMethodName(){
		return 'suning.custom.orderselfdist.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
		RequestCheckUtil::checkNotNull($this->deliveryPerName, 'deliveryPerName');
		RequestCheckUtil::checkNotNull($this->deliveryPerPhone, 'deliveryPerPhone');
	}
	
	public function getBizName(){
		return "orderSelfDist";
	}
	
}

class ProductCodes {

	private $apiParams = array();
	
	private $productCode;
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
}

class OrderLineNumbers {

	private $apiParams = array();
	
	private $orderLineNumber;
	
	public function getOrderLineNumber() {
		return $this->orderLineNumber;
	}

	public function setOrderLineNumber($orderLineNumber) {
		$this->orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
}

class PhoneIdentifyCodes {
    
    private $apiParams = array();
    
    private $productCode;
    
    private $orderLineNumber;
    
    private $phoneIdentifyCode;
 
    public function getProductCode()
    {
        return $this->productCode;
    }

    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        $this->apiParams["productCode"] = $productCode;
    }
    
    public function getOrderLineNumber()
    {
        return $this->orderLineNumber;
    }

    public function setOrderLineNumber($orderLineNumber)
    {
        $this->orderLineNumber = $orderLineNumber;
        $this->apiParams["orderLineNumber"] = $orderLineNumber;
    }
    
    public function getPhoneIdentifyCode()
    {
        return $this->phoneIdentifyCode;
    }

    public function setPhoneIdentifyCode($phoneIdentifyCode)
    {
        $this->phoneIdentifyCode = $phoneIdentifyCode;
        $this->apiParams["phoneIdentifyCode"] = $phoneIdentifyCode;
    }

    public function getApiParams(){
        return $this->apiParams;
    }
}

?>