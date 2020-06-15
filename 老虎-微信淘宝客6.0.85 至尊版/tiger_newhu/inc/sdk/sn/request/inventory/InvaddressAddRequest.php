<?php
/**
 * 苏宁开放平台接口 - 库存API - 新增仓库地址
 *
 * $pack   suning.custom.invaddress.add
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-30
 */

class InvaddressAddRequest extends SuningRequest
{
    /**
     * 姓名（不能超过64个字符）
     */
    private $invContact;

    /**
     * 填代码，通过城市代码获取接口可以获取。
     * 例：100（对应为江苏省），如果为四大直辖市，省份字段值写市
     */
    private $invProvince;

    /**
     * 填代码，通过城市代码获取接口可以获取。例：（对应为南京市）
     */
    private $invCity;

    /**
     * 填代码，通过城市代码获取接口可以获取。例：00000001（对应为玄武区）
     */
    private $invRegion;

    /**
     * 精确到门牌号（不超过256个字符）
     */
    private $streetAddress;

    /**
     * 仓库所在地编码
     */
    private $zipCode;

    /**
     * 11位数字
     */
    private $telePhone;

    /**
     * 固定电话号码
     */
    private $phoneNum;

    /**
     * 仓库名称（不超过64个字符）
     */
    private $invName;

    /**
     * 备注信息（不超过500个字符）
     */
    private $remark;

  	public function setInvContact($invContact)
	{
		$this->invContact = $invContact;
		$this->apiParams["invContact"] = $invContact;
	}

	public function getInvContact()
	{
		return $this->invContact;
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

    public function setTelePhone($telePhone)
	{
		$this->telePhone = $telePhone;
		$this->apiParams["telePhone"] = $telePhone;
	}

	public function getTelePhone()
	{
		return $this->telePhone;
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

    public function setInvName($invName)
	{
		$this->invName = $invName;
		$this->apiParams["invName"] = $invName;
	}

	public function getInvName()
	{
		return $this->invName;
	}

    public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParams["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

    public function getApiMethodName()
	{
		return 'suning.custom.invaddress.add';
	}

	public function getApiParams()
	{
		return $this->apiParams;
	}

    public function check()
	{
        RequestCheckUtil::checkNotNull($this->invContact, 'invContact');
        RequestCheckUtil::checkMaxLength($this->invContact, 64, 'invContact');
        RequestCheckUtil::checkNotNull($this->invProvince, 'invProvince');
        RequestCheckUtil::checkNotNull($this->invCity, 'invCity');
        RequestCheckUtil::checkNotNull($this->invRegion, 'invRegion');
        RequestCheckUtil::checkNotNull($this->streetAddress, 'streetAddress');
        RequestCheckUtil::checkMaxLength($this->streetAddress, 256, 'streetAddress');
        RequestCheckUtil::checkNotNull($this->zipCode, 'zipCode');
        RequestCheckUtil::checkZipValue($this->zipCode, 'zipCode');
        RequestCheckUtil::checkNotNull($this->telePhone, 'telePhone');
        RequestCheckUtil::checkPhoneValue($this->telePhone, 'telePhone');
        if (!RequestCheckUtil::checkEmpty($this->invName)) {
            RequestCheckUtil::checkMaxLength($this->invName, 64, 'invName');
        }
        if (!RequestCheckUtil::checkEmpty($this->remark)) {
            RequestCheckUtil::checkMaxLength($this->remark, 500, 'remark');
        }

	}
	public function getBizName(){
		return "invaddress";
	}
}
?>