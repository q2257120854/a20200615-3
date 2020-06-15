<?php
/**
 * 苏宁开放平台接口 - 库存API - 修改单个仓库（平行仓模式）
 *
 * $pack   suning.custom.parallelinvaddress.modify
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class ParallelinvaddressModifyRequest extends SuningRequest
{
    /**
     * 仓库编码。商家自行编辑
     */
    private $invCode;

    /**
     * 仓库名称。商家自维护
     */
    private $invName;

    /**
     * 仓库别名。商家自维护
     */
    private $invNameBack;

    /**
     * 省份代码，通过城市代码获取接口可以获取。
     * 例：100（对应为江苏省），如果为四大直辖市，省份字段值写直辖市代码。（数字）
     */
    private $invProvince;

    /**
     * 城市代码，通过城市代码获取接口可以获取。例：000001000173（对应为南京市）。（数字）
     */
    private $invCity;

    /**
     * 区域代码，通过城市代码获取接口可以获取。例：00000001（对应为玄武区）。（数字）
     */
    private $invRegion;

    /**
     * 仓库地址，精确到门牌号（不超过100个字符）
     */
    private $streetAddress;

    /**
     * 仓库所在地邮政编码。 （6位数字）
     */
    private $zipCode;

    /**
     * 联系人姓名
     */
    private $invContact;

    /**
     * 联系人电话。 （数字）
     */
    private $phoneNum;

    public function setInvCode($invCode)
	{
		$this->invCode = $invCode;
		$this->apiParams["invCode"] = $invCode;
	}

	public function getInvCode()
	{
		return $this->invCode;
	}

    public function setInvName($invName)
	{
		$this->invName = $invName;
		$this->apiParams["invName"] = $invName;
	}

	public function getInvName()
	{
		return $this->invName;
	}

    public function setInvNameBack($invNameBack)
	{
		$this->invNameBack = $invNameBack;
		$this->apiParams["invNameBack"] = $invNameBack;
	}

	public function getInvNameBack()
	{
		return $this->invNameBack;
	}

  	public function setInvProvince($invProvince)
	{
		$this->invProvince = $invProvince;
		$this->apiParams["invProvince"] = $invProvince;
	}

	public function getInvProvince()
	{
		return $this->invProvince;
	}

  	public function setInvCity($invCity)
	{
		$this->invCity = $invCity;
		$this->apiParams["invCity"] = $invCity;
	}

	public function getInvCity()
	{
		return $this->invCity;
	}

  	public function setInvRegion($invRegion)
	{
		$this->invRegion = $invRegion;
		$this->apiParams["invRegion"] = $invRegion;
	}

	public function getInvRegion()
	{
		return $this->invRegion;
	}

    public function setStreetAddress($streetAddress)
	{
		$this->streetAddress = $streetAddress;
		$this->apiParams["streetAddress"] = $streetAddress;
	}

	public function getStreetAddress()
	{
		return $this->streetAddress;
	}

    public function setZipCode($zipCode)
	{
		$this->zipCode = $zipCode;
		$this->apiParams["zipCode"] = $zipCode;
	}

	public function getZipCode()
	{
		return $this->zipCode;
	}

  	public function setInvContact($invContact)
	{
		$this->invContact = $invContact;
		$this->apiParams["invContact"] = $invContact;
	}

	public function getInvContact()
	{
		return $this->invContact;
	}

    public function setPhoneNum($phoneNum)
	{
		$this->phoneNum = $phoneNum;
		$this->apiParams["phoneNum"] = $phoneNum;
	}

	public function getPhoneNum()
	{
		return $this->phoneNum;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.parallelinvaddress.modify';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->invCode, 'invCode');
        if (!RequestCheckUtil::checkEmpty($this->streetAddress, 'streetAddress')) {
            RequestCheckUtil::checkMaxLength($this->streetAddress, 100, 'streetAddress');
        }
        if (!RequestCheckUtil::checkEmpty($this->zipCode)) {
            RequestCheckUtil::checkZipValue($this->zipCode, 'zipCode');
        }
	}
	
	public function getBizName(){
		return "parallelInvaddress";
	}
}
?>