<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;
interface PmsDataServiceIf{
	
	
	public function addActivityUserLog(\com\vip\pms\data\service\ActivityUserLogRequestModel $request);
	
	public function addCommandPersonalCode( $commandId, $personalCode);
	
	public function addCommandUserLog(\com\vip\pms\data\service\CommandUserLogRequestModel $request);
	
	public function addCouponUserLog(\com\vip\pms\data\service\CouponOrderRequestModel $request);
	
	public function addOldPmsOrderInfo(\com\vip\pms\data\service\OldPmsOrderRequestModel $request);
	
	public function addOrUpdateActivitySync(\com\vip\pms\data\service\ActivityRequestModel $activityRequestModel);
	
	public function addOrUpdateCommandSync(\com\vip\pms\data\service\CommandRequestModel $commandRequestModel);
	
	public function addOrUpdateConfig(\com\vip\pms\data\service\AdminConfigModel $config);
	
	public function addOrUpdateCouponGroupSync(\com\vip\pms\data\service\CouponRequestModel $couponRequestModel);
	
	public function addOrUpdateCouponRuleSync(\com\vip\pms\data\service\CouponRuleRequestModel $couponRuleRequestModel);
	
	public function addOrUpdateCouponSync(\com\vip\pms\data\service\CouponRequestModel $couponRequestModel);
	
	public function addOrUpdatePaySync(\com\vip\pms\data\service\PayRequestModel $payRequestModel);
	
	public function addOrUpdatePrepayInfoSync(\com\vip\pms\data\service\PrepayInfoRequestModel $prepayInfoRequestModel);
	
	public function addOrUpdateSpecialSync(\com\vip\pms\data\service\SpecialRequestModel $specialRequestModel);
	
	public function addOrUpdateSurprisePriceActivitySync(\com\vip\pms\data\service\SurprisePriceActivityRequestModel $activityRequestModel);
	
	public function addPayUserLog(\com\vip\pms\data\service\PayUserLogRequestModel $request);
	
	public function addSpecialUserLog(\com\vip\pms\data\service\SpecialUserLogRequestModel $request);
	
	public function batchModifyCouponTime( $modifyList, $taskId);
	
	public function buildAllActivityIndex( $indexType);
	
	public function cancelActivitySync( $actNoList, $channelId);
	
	public function cancelCommandSync( $commandNoList);
	
	public function cancelOrOfflineCouponGroupSync( $noList, $isCancel);
	
	public function cancelOrOfflineCouponRuleSync( $noList, $isCancel);
	
	public function cancelOrOfflineCouponSync( $noList, $isCancel);
	
	public function cancelOrder( $orderNo, $refIdType, $refIdList, $userId);
	
	public function cancelPaySync( $payNoList);
	
	public function cancelSpecialSync( $specialNoList);
	
	public function cancelSurprisePriceActivitySync( $actNoList);
	
	public function check(\com\vip\pms\data\service\CheckRequest $checkRequest);
	
	public function couponActivate(\com\vip\pms\data\service\CouponInstanceModel $instanceModel);
	
	public function couponBind(\com\vip\pms\data\service\CouponInstanceModel $instanceModel);
	
	public function couponGroupActivate(\com\vip\pms\data\service\CouponInstanceModel $groupInstanceModel, $couponInstanceList);
	
	public function couponGroupBind(\com\vip\pms\data\service\CouponInstanceModel $groupInstanceModel, $couponInstanceList);
	
	public function delGoodsOriginalPrice( $spuIdList);
	
	public function delGoodsSurprisePrice( $modelList);
	
	public function deleteConfig( $type, $key);
	
	public function deletePrepayInfoByMidSync( $prepayMainNo, $merchandiseNos);
	
	public function deletePrepayInfoSync( $prepayMainNos);
	
	public function exportCoupon( $couponNo, $offset);
	
	public function exportCouponGroup( $groupNo, $offset);
	
	public function fetchCommandOrderNos(\com\vip\pms\data\service\FetchCommandOrderNosRequestModel $fetchCommandOrderNosRequestModel);
	
	public function fetchOrder(\com\vip\pms\data\service\FetchOrderRequestModel $fetchOrderRequestModel);
	
	public function flushCouponRuleIndexSync();
	
	public function flushGoodsOriginalPrice( $modelList);
	
	public function flushGoodsSurprisePrice( $modelList);
	
	public function getConfig( $type, $key);
	
	public function getTypeConfig( $type);
	
	public function healthCheck();
	
	public function modifyCacheSwitchStatus( $switchStatus);
	
	public function modifyCouponTime( $couponId, $beginTime, $endTime, $taskId);
	
	public function modifyCouponTimeByUserIds( $couponId, $beginTime, $endTime, $userIds);
	
	public function multiBind(\com\vip\pms\data\coupon\model\CouponMultiBindRequest $multiBindRequest);
	
	public function multiBindSyncMode(\com\vip\pms\data\coupon\model\CouponMultiBindRequest $multiBindRequest);
	
	public function offlineActivityCallback( $actNoList);
	
	public function offlineActivitySync( $actNoList, $channelId);
	
	public function offlineCommandSync( $commandNoList);
	
	public function offlinePaySync( $payNoList);
	
	public function offlinePrepayInfoSync(\com\vip\pms\data\service\DeletePrepayInfoModel $requestModel);
	
	public function offlineSpecialSync( $specialNoList);
	
	public function offlineSurprisePriceActivitySync( $actNoList);
	
	public function prepareActivity(\com\vip\pms\data\model\sync\PrepareActivityRequest $request);
	
	public function prepareSpecial(\com\vip\pms\data\model\sync\PrepareActivityRequest $request);
	
	public function publishRollbackUseCouponMsg(\com\vip\pms\data\service\RollbackCouponReqModel $reqModel);
	
	public function pushOfflineActivities(\com\vip\pms\data\service\ActivityRequestModel $activityRequestModel, $subActivityStatus);
	
	public function queryConfirmationNo( $confirmationRequests);
	
	public function queryCouponInstanceStat( $couponNos);
	
	public function queryGoodsFavAmount( $orderCouponRequests);
	
	public function refreshOrder( $orderNo, $hashValue, $refIdType, $userId);
	
	public function returnCoupon( $userId, $couponSns);
	
	public function saveActPromotionObject(\com\vip\pms\data\model\sync\ActObjectRequest $request);
	
	public function saveActivity(\com\vip\pms\data\service\ActivityRequestModel $request);
	
	public function saveSpecial(\com\vip\pms\data\service\SpecialRequestModel $request);
	
	public function saveSpecialPromotionObject(\com\vip\pms\data\model\sync\SpecialObjectRequest $request);
	
	public function submitSMSendingRequest(\com\vip\pms\data\service\SMSRequestModel $smsRequestModel);
	
	public function syncAllActivityIndex( $indexType);
	
	public function syncAllCacheByCacheType( $cacheType, $scope);
	
	public function syncAllGoodsOriginalPrice();
	
	public function syncAllGoodsSurprisePrice();
	
	public function syncBiPush( $biPushType);
	
	public function syncBlacklistNew( $blacklist);
	
	public function syncCacheByActivityNosAndCacheType( $activityNos, $cacheType, $scopes);
	
	public function syncPayBlackList( $blackIds);
	
	public function updateActPromotionObject(\com\vip\pms\data\model\sync\ActObjectUpdateRequest $request);
	
	public function updateActivityBaseInfo(\com\vip\pms\data\service\ActivityRequestModel $request);
	
	public function updateSpecialBaseInfo(\com\vip\pms\data\service\SpecialRequestModel $request);
	
	public function updateSpecialPromotionObject(\com\vip\pms\data\model\sync\ActObjectUpdateRequest $request);
	
}

class _PmsDataServiceClient extends \Osp\Base\OspStub implements \com\vip\pms\data\service\PmsDataServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.pms.data.service.PmsDataService", "1.0.0");
	}
	
	
	public function addActivityUserLog(\com\vip\pms\data\service\ActivityUserLogRequestModel $request){
		
		$this->send_addActivityUserLog( $request);
		return $this->recv_addActivityUserLog();
	}
	
	public function send_addActivityUserLog(\com\vip\pms\data\service\ActivityUserLogRequestModel $request){
		
		$this->initInvocation("addActivityUserLog");
		$args = new \com\vip\pms\data\service\PmsDataService_addActivityUserLog_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_addActivityUserLog(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addActivityUserLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addCommandPersonalCode( $commandId, $personalCode){
		
		$this->send_addCommandPersonalCode( $commandId, $personalCode);
		return $this->recv_addCommandPersonalCode();
	}
	
	public function send_addCommandPersonalCode( $commandId, $personalCode){
		
		$this->initInvocation("addCommandPersonalCode");
		$args = new \com\vip\pms\data\service\PmsDataService_addCommandPersonalCode_args();
		
		$args->commandId = $commandId;
		
		$args->personalCode = $personalCode;
		
		$this->send_base($args);
	}
	
	public function recv_addCommandPersonalCode(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addCommandPersonalCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addCommandUserLog(\com\vip\pms\data\service\CommandUserLogRequestModel $request){
		
		$this->send_addCommandUserLog( $request);
		return $this->recv_addCommandUserLog();
	}
	
	public function send_addCommandUserLog(\com\vip\pms\data\service\CommandUserLogRequestModel $request){
		
		$this->initInvocation("addCommandUserLog");
		$args = new \com\vip\pms\data\service\PmsDataService_addCommandUserLog_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_addCommandUserLog(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addCommandUserLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addCouponUserLog(\com\vip\pms\data\service\CouponOrderRequestModel $request){
		
		$this->send_addCouponUserLog( $request);
		return $this->recv_addCouponUserLog();
	}
	
	public function send_addCouponUserLog(\com\vip\pms\data\service\CouponOrderRequestModel $request){
		
		$this->initInvocation("addCouponUserLog");
		$args = new \com\vip\pms\data\service\PmsDataService_addCouponUserLog_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_addCouponUserLog(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addCouponUserLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOldPmsOrderInfo(\com\vip\pms\data\service\OldPmsOrderRequestModel $request){
		
		$this->send_addOldPmsOrderInfo( $request);
		return $this->recv_addOldPmsOrderInfo();
	}
	
	public function send_addOldPmsOrderInfo(\com\vip\pms\data\service\OldPmsOrderRequestModel $request){
		
		$this->initInvocation("addOldPmsOrderInfo");
		$args = new \com\vip\pms\data\service\PmsDataService_addOldPmsOrderInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_addOldPmsOrderInfo(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOldPmsOrderInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOrUpdateActivitySync(\com\vip\pms\data\service\ActivityRequestModel $activityRequestModel){
		
		$this->send_addOrUpdateActivitySync( $activityRequestModel);
		return $this->recv_addOrUpdateActivitySync();
	}
	
	public function send_addOrUpdateActivitySync(\com\vip\pms\data\service\ActivityRequestModel $activityRequestModel){
		
		$this->initInvocation("addOrUpdateActivitySync");
		$args = new \com\vip\pms\data\service\PmsDataService_addOrUpdateActivitySync_args();
		
		$args->activityRequestModel = $activityRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_addOrUpdateActivitySync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOrUpdateActivitySync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOrUpdateCommandSync(\com\vip\pms\data\service\CommandRequestModel $commandRequestModel){
		
		$this->send_addOrUpdateCommandSync( $commandRequestModel);
		return $this->recv_addOrUpdateCommandSync();
	}
	
	public function send_addOrUpdateCommandSync(\com\vip\pms\data\service\CommandRequestModel $commandRequestModel){
		
		$this->initInvocation("addOrUpdateCommandSync");
		$args = new \com\vip\pms\data\service\PmsDataService_addOrUpdateCommandSync_args();
		
		$args->commandRequestModel = $commandRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_addOrUpdateCommandSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOrUpdateCommandSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOrUpdateConfig(\com\vip\pms\data\service\AdminConfigModel $config){
		
		$this->send_addOrUpdateConfig( $config);
		return $this->recv_addOrUpdateConfig();
	}
	
	public function send_addOrUpdateConfig(\com\vip\pms\data\service\AdminConfigModel $config){
		
		$this->initInvocation("addOrUpdateConfig");
		$args = new \com\vip\pms\data\service\PmsDataService_addOrUpdateConfig_args();
		
		$args->config = $config;
		
		$this->send_base($args);
	}
	
	public function recv_addOrUpdateConfig(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOrUpdateConfig_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOrUpdateCouponGroupSync(\com\vip\pms\data\service\CouponRequestModel $couponRequestModel){
		
		$this->send_addOrUpdateCouponGroupSync( $couponRequestModel);
		return $this->recv_addOrUpdateCouponGroupSync();
	}
	
	public function send_addOrUpdateCouponGroupSync(\com\vip\pms\data\service\CouponRequestModel $couponRequestModel){
		
		$this->initInvocation("addOrUpdateCouponGroupSync");
		$args = new \com\vip\pms\data\service\PmsDataService_addOrUpdateCouponGroupSync_args();
		
		$args->couponRequestModel = $couponRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_addOrUpdateCouponGroupSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOrUpdateCouponGroupSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOrUpdateCouponRuleSync(\com\vip\pms\data\service\CouponRuleRequestModel $couponRuleRequestModel){
		
		$this->send_addOrUpdateCouponRuleSync( $couponRuleRequestModel);
		return $this->recv_addOrUpdateCouponRuleSync();
	}
	
	public function send_addOrUpdateCouponRuleSync(\com\vip\pms\data\service\CouponRuleRequestModel $couponRuleRequestModel){
		
		$this->initInvocation("addOrUpdateCouponRuleSync");
		$args = new \com\vip\pms\data\service\PmsDataService_addOrUpdateCouponRuleSync_args();
		
		$args->couponRuleRequestModel = $couponRuleRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_addOrUpdateCouponRuleSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOrUpdateCouponRuleSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOrUpdateCouponSync(\com\vip\pms\data\service\CouponRequestModel $couponRequestModel){
		
		$this->send_addOrUpdateCouponSync( $couponRequestModel);
		return $this->recv_addOrUpdateCouponSync();
	}
	
	public function send_addOrUpdateCouponSync(\com\vip\pms\data\service\CouponRequestModel $couponRequestModel){
		
		$this->initInvocation("addOrUpdateCouponSync");
		$args = new \com\vip\pms\data\service\PmsDataService_addOrUpdateCouponSync_args();
		
		$args->couponRequestModel = $couponRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_addOrUpdateCouponSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOrUpdateCouponSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOrUpdatePaySync(\com\vip\pms\data\service\PayRequestModel $payRequestModel){
		
		$this->send_addOrUpdatePaySync( $payRequestModel);
		return $this->recv_addOrUpdatePaySync();
	}
	
	public function send_addOrUpdatePaySync(\com\vip\pms\data\service\PayRequestModel $payRequestModel){
		
		$this->initInvocation("addOrUpdatePaySync");
		$args = new \com\vip\pms\data\service\PmsDataService_addOrUpdatePaySync_args();
		
		$args->payRequestModel = $payRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_addOrUpdatePaySync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOrUpdatePaySync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOrUpdatePrepayInfoSync(\com\vip\pms\data\service\PrepayInfoRequestModel $prepayInfoRequestModel){
		
		$this->send_addOrUpdatePrepayInfoSync( $prepayInfoRequestModel);
		return $this->recv_addOrUpdatePrepayInfoSync();
	}
	
	public function send_addOrUpdatePrepayInfoSync(\com\vip\pms\data\service\PrepayInfoRequestModel $prepayInfoRequestModel){
		
		$this->initInvocation("addOrUpdatePrepayInfoSync");
		$args = new \com\vip\pms\data\service\PmsDataService_addOrUpdatePrepayInfoSync_args();
		
		$args->prepayInfoRequestModel = $prepayInfoRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_addOrUpdatePrepayInfoSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOrUpdatePrepayInfoSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOrUpdateSpecialSync(\com\vip\pms\data\service\SpecialRequestModel $specialRequestModel){
		
		$this->send_addOrUpdateSpecialSync( $specialRequestModel);
		return $this->recv_addOrUpdateSpecialSync();
	}
	
	public function send_addOrUpdateSpecialSync(\com\vip\pms\data\service\SpecialRequestModel $specialRequestModel){
		
		$this->initInvocation("addOrUpdateSpecialSync");
		$args = new \com\vip\pms\data\service\PmsDataService_addOrUpdateSpecialSync_args();
		
		$args->specialRequestModel = $specialRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_addOrUpdateSpecialSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOrUpdateSpecialSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOrUpdateSurprisePriceActivitySync(\com\vip\pms\data\service\SurprisePriceActivityRequestModel $activityRequestModel){
		
		$this->send_addOrUpdateSurprisePriceActivitySync( $activityRequestModel);
		return $this->recv_addOrUpdateSurprisePriceActivitySync();
	}
	
	public function send_addOrUpdateSurprisePriceActivitySync(\com\vip\pms\data\service\SurprisePriceActivityRequestModel $activityRequestModel){
		
		$this->initInvocation("addOrUpdateSurprisePriceActivitySync");
		$args = new \com\vip\pms\data\service\PmsDataService_addOrUpdateSurprisePriceActivitySync_args();
		
		$args->activityRequestModel = $activityRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_addOrUpdateSurprisePriceActivitySync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addOrUpdateSurprisePriceActivitySync_result();
		$this->receive_base($result);
		
	}
	
	
	public function addPayUserLog(\com\vip\pms\data\service\PayUserLogRequestModel $request){
		
		$this->send_addPayUserLog( $request);
		return $this->recv_addPayUserLog();
	}
	
	public function send_addPayUserLog(\com\vip\pms\data\service\PayUserLogRequestModel $request){
		
		$this->initInvocation("addPayUserLog");
		$args = new \com\vip\pms\data\service\PmsDataService_addPayUserLog_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_addPayUserLog(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addPayUserLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addSpecialUserLog(\com\vip\pms\data\service\SpecialUserLogRequestModel $request){
		
		$this->send_addSpecialUserLog( $request);
		return $this->recv_addSpecialUserLog();
	}
	
	public function send_addSpecialUserLog(\com\vip\pms\data\service\SpecialUserLogRequestModel $request){
		
		$this->initInvocation("addSpecialUserLog");
		$args = new \com\vip\pms\data\service\PmsDataService_addSpecialUserLog_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_addSpecialUserLog(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_addSpecialUserLog_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchModifyCouponTime( $modifyList, $taskId){
		
		$this->send_batchModifyCouponTime( $modifyList, $taskId);
		return $this->recv_batchModifyCouponTime();
	}
	
	public function send_batchModifyCouponTime( $modifyList, $taskId){
		
		$this->initInvocation("batchModifyCouponTime");
		$args = new \com\vip\pms\data\service\PmsDataService_batchModifyCouponTime_args();
		
		$args->modifyList = $modifyList;
		
		$args->taskId = $taskId;
		
		$this->send_base($args);
	}
	
	public function recv_batchModifyCouponTime(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_batchModifyCouponTime_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function buildAllActivityIndex( $indexType){
		
		$this->send_buildAllActivityIndex( $indexType);
		return $this->recv_buildAllActivityIndex();
	}
	
	public function send_buildAllActivityIndex( $indexType){
		
		$this->initInvocation("buildAllActivityIndex");
		$args = new \com\vip\pms\data\service\PmsDataService_buildAllActivityIndex_args();
		
		$args->indexType = $indexType;
		
		$this->send_base($args);
	}
	
	public function recv_buildAllActivityIndex(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_buildAllActivityIndex_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelActivitySync( $actNoList, $channelId){
		
		$this->send_cancelActivitySync( $actNoList, $channelId);
		return $this->recv_cancelActivitySync();
	}
	
	public function send_cancelActivitySync( $actNoList, $channelId){
		
		$this->initInvocation("cancelActivitySync");
		$args = new \com\vip\pms\data\service\PmsDataService_cancelActivitySync_args();
		
		$args->actNoList = $actNoList;
		
		$args->channelId = $channelId;
		
		$this->send_base($args);
	}
	
	public function recv_cancelActivitySync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_cancelActivitySync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelCommandSync( $commandNoList){
		
		$this->send_cancelCommandSync( $commandNoList);
		return $this->recv_cancelCommandSync();
	}
	
	public function send_cancelCommandSync( $commandNoList){
		
		$this->initInvocation("cancelCommandSync");
		$args = new \com\vip\pms\data\service\PmsDataService_cancelCommandSync_args();
		
		$args->commandNoList = $commandNoList;
		
		$this->send_base($args);
	}
	
	public function recv_cancelCommandSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_cancelCommandSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelOrOfflineCouponGroupSync( $noList, $isCancel){
		
		$this->send_cancelOrOfflineCouponGroupSync( $noList, $isCancel);
		return $this->recv_cancelOrOfflineCouponGroupSync();
	}
	
	public function send_cancelOrOfflineCouponGroupSync( $noList, $isCancel){
		
		$this->initInvocation("cancelOrOfflineCouponGroupSync");
		$args = new \com\vip\pms\data\service\PmsDataService_cancelOrOfflineCouponGroupSync_args();
		
		$args->noList = $noList;
		
		$args->isCancel = $isCancel;
		
		$this->send_base($args);
	}
	
	public function recv_cancelOrOfflineCouponGroupSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_cancelOrOfflineCouponGroupSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelOrOfflineCouponRuleSync( $noList, $isCancel){
		
		$this->send_cancelOrOfflineCouponRuleSync( $noList, $isCancel);
		return $this->recv_cancelOrOfflineCouponRuleSync();
	}
	
	public function send_cancelOrOfflineCouponRuleSync( $noList, $isCancel){
		
		$this->initInvocation("cancelOrOfflineCouponRuleSync");
		$args = new \com\vip\pms\data\service\PmsDataService_cancelOrOfflineCouponRuleSync_args();
		
		$args->noList = $noList;
		
		$args->isCancel = $isCancel;
		
		$this->send_base($args);
	}
	
	public function recv_cancelOrOfflineCouponRuleSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_cancelOrOfflineCouponRuleSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelOrOfflineCouponSync( $noList, $isCancel){
		
		$this->send_cancelOrOfflineCouponSync( $noList, $isCancel);
		return $this->recv_cancelOrOfflineCouponSync();
	}
	
	public function send_cancelOrOfflineCouponSync( $noList, $isCancel){
		
		$this->initInvocation("cancelOrOfflineCouponSync");
		$args = new \com\vip\pms\data\service\PmsDataService_cancelOrOfflineCouponSync_args();
		
		$args->noList = $noList;
		
		$args->isCancel = $isCancel;
		
		$this->send_base($args);
	}
	
	public function recv_cancelOrOfflineCouponSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_cancelOrOfflineCouponSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelOrder( $orderNo, $refIdType, $refIdList, $userId){
		
		$this->send_cancelOrder( $orderNo, $refIdType, $refIdList, $userId);
		return $this->recv_cancelOrder();
	}
	
	public function send_cancelOrder( $orderNo, $refIdType, $refIdList, $userId){
		
		$this->initInvocation("cancelOrder");
		$args = new \com\vip\pms\data\service\PmsDataService_cancelOrder_args();
		
		$args->orderNo = $orderNo;
		
		$args->refIdType = $refIdType;
		
		$args->refIdList = $refIdList;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_cancelOrder(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_cancelOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelPaySync( $payNoList){
		
		$this->send_cancelPaySync( $payNoList);
		return $this->recv_cancelPaySync();
	}
	
	public function send_cancelPaySync( $payNoList){
		
		$this->initInvocation("cancelPaySync");
		$args = new \com\vip\pms\data\service\PmsDataService_cancelPaySync_args();
		
		$args->payNoList = $payNoList;
		
		$this->send_base($args);
	}
	
	public function recv_cancelPaySync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_cancelPaySync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelSpecialSync( $specialNoList){
		
		$this->send_cancelSpecialSync( $specialNoList);
		return $this->recv_cancelSpecialSync();
	}
	
	public function send_cancelSpecialSync( $specialNoList){
		
		$this->initInvocation("cancelSpecialSync");
		$args = new \com\vip\pms\data\service\PmsDataService_cancelSpecialSync_args();
		
		$args->specialNoList = $specialNoList;
		
		$this->send_base($args);
	}
	
	public function recv_cancelSpecialSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_cancelSpecialSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelSurprisePriceActivitySync( $actNoList){
		
		$this->send_cancelSurprisePriceActivitySync( $actNoList);
		return $this->recv_cancelSurprisePriceActivitySync();
	}
	
	public function send_cancelSurprisePriceActivitySync( $actNoList){
		
		$this->initInvocation("cancelSurprisePriceActivitySync");
		$args = new \com\vip\pms\data\service\PmsDataService_cancelSurprisePriceActivitySync_args();
		
		$args->actNoList = $actNoList;
		
		$this->send_base($args);
	}
	
	public function recv_cancelSurprisePriceActivitySync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_cancelSurprisePriceActivitySync_result();
		$this->receive_base($result);
		
	}
	
	
	public function check(\com\vip\pms\data\service\CheckRequest $checkRequest){
		
		$this->send_check( $checkRequest);
		return $this->recv_check();
	}
	
	public function send_check(\com\vip\pms\data\service\CheckRequest $checkRequest){
		
		$this->initInvocation("check");
		$args = new \com\vip\pms\data\service\PmsDataService_check_args();
		
		$args->checkRequest = $checkRequest;
		
		$this->send_base($args);
	}
	
	public function recv_check(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_check_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function couponActivate(\com\vip\pms\data\service\CouponInstanceModel $instanceModel){
		
		$this->send_couponActivate( $instanceModel);
		return $this->recv_couponActivate();
	}
	
	public function send_couponActivate(\com\vip\pms\data\service\CouponInstanceModel $instanceModel){
		
		$this->initInvocation("couponActivate");
		$args = new \com\vip\pms\data\service\PmsDataService_couponActivate_args();
		
		$args->instanceModel = $instanceModel;
		
		$this->send_base($args);
	}
	
	public function recv_couponActivate(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_couponActivate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function couponBind(\com\vip\pms\data\service\CouponInstanceModel $instanceModel){
		
		$this->send_couponBind( $instanceModel);
		return $this->recv_couponBind();
	}
	
	public function send_couponBind(\com\vip\pms\data\service\CouponInstanceModel $instanceModel){
		
		$this->initInvocation("couponBind");
		$args = new \com\vip\pms\data\service\PmsDataService_couponBind_args();
		
		$args->instanceModel = $instanceModel;
		
		$this->send_base($args);
	}
	
	public function recv_couponBind(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_couponBind_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function couponGroupActivate(\com\vip\pms\data\service\CouponInstanceModel $groupInstanceModel, $couponInstanceList){
		
		$this->send_couponGroupActivate( $groupInstanceModel, $couponInstanceList);
		return $this->recv_couponGroupActivate();
	}
	
	public function send_couponGroupActivate(\com\vip\pms\data\service\CouponInstanceModel $groupInstanceModel, $couponInstanceList){
		
		$this->initInvocation("couponGroupActivate");
		$args = new \com\vip\pms\data\service\PmsDataService_couponGroupActivate_args();
		
		$args->groupInstanceModel = $groupInstanceModel;
		
		$args->couponInstanceList = $couponInstanceList;
		
		$this->send_base($args);
	}
	
	public function recv_couponGroupActivate(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_couponGroupActivate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function couponGroupBind(\com\vip\pms\data\service\CouponInstanceModel $groupInstanceModel, $couponInstanceList){
		
		$this->send_couponGroupBind( $groupInstanceModel, $couponInstanceList);
		return $this->recv_couponGroupBind();
	}
	
	public function send_couponGroupBind(\com\vip\pms\data\service\CouponInstanceModel $groupInstanceModel, $couponInstanceList){
		
		$this->initInvocation("couponGroupBind");
		$args = new \com\vip\pms\data\service\PmsDataService_couponGroupBind_args();
		
		$args->groupInstanceModel = $groupInstanceModel;
		
		$args->couponInstanceList = $couponInstanceList;
		
		$this->send_base($args);
	}
	
	public function recv_couponGroupBind(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_couponGroupBind_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function delGoodsOriginalPrice( $spuIdList){
		
		$this->send_delGoodsOriginalPrice( $spuIdList);
		return $this->recv_delGoodsOriginalPrice();
	}
	
	public function send_delGoodsOriginalPrice( $spuIdList){
		
		$this->initInvocation("delGoodsOriginalPrice");
		$args = new \com\vip\pms\data\service\PmsDataService_delGoodsOriginalPrice_args();
		
		$args->spuIdList = $spuIdList;
		
		$this->send_base($args);
	}
	
	public function recv_delGoodsOriginalPrice(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_delGoodsOriginalPrice_result();
		$this->receive_base($result);
		
	}
	
	
	public function delGoodsSurprisePrice( $modelList){
		
		$this->send_delGoodsSurprisePrice( $modelList);
		return $this->recv_delGoodsSurprisePrice();
	}
	
	public function send_delGoodsSurprisePrice( $modelList){
		
		$this->initInvocation("delGoodsSurprisePrice");
		$args = new \com\vip\pms\data\service\PmsDataService_delGoodsSurprisePrice_args();
		
		$args->modelList = $modelList;
		
		$this->send_base($args);
	}
	
	public function recv_delGoodsSurprisePrice(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_delGoodsSurprisePrice_result();
		$this->receive_base($result);
		
	}
	
	
	public function deleteConfig( $type, $key){
		
		$this->send_deleteConfig( $type, $key);
		return $this->recv_deleteConfig();
	}
	
	public function send_deleteConfig( $type, $key){
		
		$this->initInvocation("deleteConfig");
		$args = new \com\vip\pms\data\service\PmsDataService_deleteConfig_args();
		
		$args->type = $type;
		
		$args->key = $key;
		
		$this->send_base($args);
	}
	
	public function recv_deleteConfig(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_deleteConfig_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deletePrepayInfoByMidSync( $prepayMainNo, $merchandiseNos){
		
		$this->send_deletePrepayInfoByMidSync( $prepayMainNo, $merchandiseNos);
		return $this->recv_deletePrepayInfoByMidSync();
	}
	
	public function send_deletePrepayInfoByMidSync( $prepayMainNo, $merchandiseNos){
		
		$this->initInvocation("deletePrepayInfoByMidSync");
		$args = new \com\vip\pms\data\service\PmsDataService_deletePrepayInfoByMidSync_args();
		
		$args->prepayMainNo = $prepayMainNo;
		
		$args->merchandiseNos = $merchandiseNos;
		
		$this->send_base($args);
	}
	
	public function recv_deletePrepayInfoByMidSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_deletePrepayInfoByMidSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deletePrepayInfoSync( $prepayMainNos){
		
		$this->send_deletePrepayInfoSync( $prepayMainNos);
		return $this->recv_deletePrepayInfoSync();
	}
	
	public function send_deletePrepayInfoSync( $prepayMainNos){
		
		$this->initInvocation("deletePrepayInfoSync");
		$args = new \com\vip\pms\data\service\PmsDataService_deletePrepayInfoSync_args();
		
		$args->prepayMainNos = $prepayMainNos;
		
		$this->send_base($args);
	}
	
	public function recv_deletePrepayInfoSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_deletePrepayInfoSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportCoupon( $couponNo, $offset){
		
		$this->send_exportCoupon( $couponNo, $offset);
		return $this->recv_exportCoupon();
	}
	
	public function send_exportCoupon( $couponNo, $offset){
		
		$this->initInvocation("exportCoupon");
		$args = new \com\vip\pms\data\service\PmsDataService_exportCoupon_args();
		
		$args->couponNo = $couponNo;
		
		$args->offset = $offset;
		
		$this->send_base($args);
	}
	
	public function recv_exportCoupon(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_exportCoupon_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportCouponGroup( $groupNo, $offset){
		
		$this->send_exportCouponGroup( $groupNo, $offset);
		return $this->recv_exportCouponGroup();
	}
	
	public function send_exportCouponGroup( $groupNo, $offset){
		
		$this->initInvocation("exportCouponGroup");
		$args = new \com\vip\pms\data\service\PmsDataService_exportCouponGroup_args();
		
		$args->groupNo = $groupNo;
		
		$args->offset = $offset;
		
		$this->send_base($args);
	}
	
	public function recv_exportCouponGroup(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_exportCouponGroup_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function fetchCommandOrderNos(\com\vip\pms\data\service\FetchCommandOrderNosRequestModel $fetchCommandOrderNosRequestModel){
		
		$this->send_fetchCommandOrderNos( $fetchCommandOrderNosRequestModel);
		return $this->recv_fetchCommandOrderNos();
	}
	
	public function send_fetchCommandOrderNos(\com\vip\pms\data\service\FetchCommandOrderNosRequestModel $fetchCommandOrderNosRequestModel){
		
		$this->initInvocation("fetchCommandOrderNos");
		$args = new \com\vip\pms\data\service\PmsDataService_fetchCommandOrderNos_args();
		
		$args->fetchCommandOrderNosRequestModel = $fetchCommandOrderNosRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_fetchCommandOrderNos(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_fetchCommandOrderNos_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function fetchOrder(\com\vip\pms\data\service\FetchOrderRequestModel $fetchOrderRequestModel){
		
		$this->send_fetchOrder( $fetchOrderRequestModel);
		return $this->recv_fetchOrder();
	}
	
	public function send_fetchOrder(\com\vip\pms\data\service\FetchOrderRequestModel $fetchOrderRequestModel){
		
		$this->initInvocation("fetchOrder");
		$args = new \com\vip\pms\data\service\PmsDataService_fetchOrder_args();
		
		$args->fetchOrderRequestModel = $fetchOrderRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_fetchOrder(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_fetchOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function flushCouponRuleIndexSync(){
		
		$this->send_flushCouponRuleIndexSync();
		return $this->recv_flushCouponRuleIndexSync();
	}
	
	public function send_flushCouponRuleIndexSync(){
		
		$this->initInvocation("flushCouponRuleIndexSync");
		$args = new \com\vip\pms\data\service\PmsDataService_flushCouponRuleIndexSync_args();
		
		$this->send_base($args);
	}
	
	public function recv_flushCouponRuleIndexSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_flushCouponRuleIndexSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function flushGoodsOriginalPrice( $modelList){
		
		$this->send_flushGoodsOriginalPrice( $modelList);
		return $this->recv_flushGoodsOriginalPrice();
	}
	
	public function send_flushGoodsOriginalPrice( $modelList){
		
		$this->initInvocation("flushGoodsOriginalPrice");
		$args = new \com\vip\pms\data\service\PmsDataService_flushGoodsOriginalPrice_args();
		
		$args->modelList = $modelList;
		
		$this->send_base($args);
	}
	
	public function recv_flushGoodsOriginalPrice(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_flushGoodsOriginalPrice_result();
		$this->receive_base($result);
		
	}
	
	
	public function flushGoodsSurprisePrice( $modelList){
		
		$this->send_flushGoodsSurprisePrice( $modelList);
		return $this->recv_flushGoodsSurprisePrice();
	}
	
	public function send_flushGoodsSurprisePrice( $modelList){
		
		$this->initInvocation("flushGoodsSurprisePrice");
		$args = new \com\vip\pms\data\service\PmsDataService_flushGoodsSurprisePrice_args();
		
		$args->modelList = $modelList;
		
		$this->send_base($args);
	}
	
	public function recv_flushGoodsSurprisePrice(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_flushGoodsSurprisePrice_result();
		$this->receive_base($result);
		
	}
	
	
	public function getConfig( $type, $key){
		
		$this->send_getConfig( $type, $key);
		return $this->recv_getConfig();
	}
	
	public function send_getConfig( $type, $key){
		
		$this->initInvocation("getConfig");
		$args = new \com\vip\pms\data\service\PmsDataService_getConfig_args();
		
		$args->type = $type;
		
		$args->key = $key;
		
		$this->send_base($args);
	}
	
	public function recv_getConfig(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_getConfig_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTypeConfig( $type){
		
		$this->send_getTypeConfig( $type);
		return $this->recv_getTypeConfig();
	}
	
	public function send_getTypeConfig( $type){
		
		$this->initInvocation("getTypeConfig");
		$args = new \com\vip\pms\data\service\PmsDataService_getTypeConfig_args();
		
		$args->type = $type;
		
		$this->send_base($args);
	}
	
	public function recv_getTypeConfig(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_getTypeConfig_result();
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
		$args = new \com\vip\pms\data\service\PmsDataService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function modifyCacheSwitchStatus( $switchStatus){
		
		$this->send_modifyCacheSwitchStatus( $switchStatus);
		return $this->recv_modifyCacheSwitchStatus();
	}
	
	public function send_modifyCacheSwitchStatus( $switchStatus){
		
		$this->initInvocation("modifyCacheSwitchStatus");
		$args = new \com\vip\pms\data\service\PmsDataService_modifyCacheSwitchStatus_args();
		
		$args->switchStatus = $switchStatus;
		
		$this->send_base($args);
	}
	
	public function recv_modifyCacheSwitchStatus(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_modifyCacheSwitchStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function modifyCouponTime( $couponId, $beginTime, $endTime, $taskId){
		
		$this->send_modifyCouponTime( $couponId, $beginTime, $endTime, $taskId);
		return $this->recv_modifyCouponTime();
	}
	
	public function send_modifyCouponTime( $couponId, $beginTime, $endTime, $taskId){
		
		$this->initInvocation("modifyCouponTime");
		$args = new \com\vip\pms\data\service\PmsDataService_modifyCouponTime_args();
		
		$args->couponId = $couponId;
		
		$args->beginTime = $beginTime;
		
		$args->endTime = $endTime;
		
		$args->taskId = $taskId;
		
		$this->send_base($args);
	}
	
	public function recv_modifyCouponTime(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_modifyCouponTime_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function modifyCouponTimeByUserIds( $couponId, $beginTime, $endTime, $userIds){
		
		$this->send_modifyCouponTimeByUserIds( $couponId, $beginTime, $endTime, $userIds);
		return $this->recv_modifyCouponTimeByUserIds();
	}
	
	public function send_modifyCouponTimeByUserIds( $couponId, $beginTime, $endTime, $userIds){
		
		$this->initInvocation("modifyCouponTimeByUserIds");
		$args = new \com\vip\pms\data\service\PmsDataService_modifyCouponTimeByUserIds_args();
		
		$args->couponId = $couponId;
		
		$args->beginTime = $beginTime;
		
		$args->endTime = $endTime;
		
		$args->userIds = $userIds;
		
		$this->send_base($args);
	}
	
	public function recv_modifyCouponTimeByUserIds(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_modifyCouponTimeByUserIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function multiBind(\com\vip\pms\data\coupon\model\CouponMultiBindRequest $multiBindRequest){
		
		$this->send_multiBind( $multiBindRequest);
		return $this->recv_multiBind();
	}
	
	public function send_multiBind(\com\vip\pms\data\coupon\model\CouponMultiBindRequest $multiBindRequest){
		
		$this->initInvocation("multiBind");
		$args = new \com\vip\pms\data\service\PmsDataService_multiBind_args();
		
		$args->multiBindRequest = $multiBindRequest;
		
		$this->send_base($args);
	}
	
	public function recv_multiBind(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_multiBind_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function multiBindSyncMode(\com\vip\pms\data\coupon\model\CouponMultiBindRequest $multiBindRequest){
		
		$this->send_multiBindSyncMode( $multiBindRequest);
		return $this->recv_multiBindSyncMode();
	}
	
	public function send_multiBindSyncMode(\com\vip\pms\data\coupon\model\CouponMultiBindRequest $multiBindRequest){
		
		$this->initInvocation("multiBindSyncMode");
		$args = new \com\vip\pms\data\service\PmsDataService_multiBindSyncMode_args();
		
		$args->multiBindRequest = $multiBindRequest;
		
		$this->send_base($args);
	}
	
	public function recv_multiBindSyncMode(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_multiBindSyncMode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function offlineActivityCallback( $actNoList){
		
		$this->send_offlineActivityCallback( $actNoList);
		return $this->recv_offlineActivityCallback();
	}
	
	public function send_offlineActivityCallback( $actNoList){
		
		$this->initInvocation("offlineActivityCallback");
		$args = new \com\vip\pms\data\service\PmsDataService_offlineActivityCallback_args();
		
		$args->actNoList = $actNoList;
		
		$this->send_base($args);
	}
	
	public function recv_offlineActivityCallback(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_offlineActivityCallback_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function offlineActivitySync( $actNoList, $channelId){
		
		$this->send_offlineActivitySync( $actNoList, $channelId);
		return $this->recv_offlineActivitySync();
	}
	
	public function send_offlineActivitySync( $actNoList, $channelId){
		
		$this->initInvocation("offlineActivitySync");
		$args = new \com\vip\pms\data\service\PmsDataService_offlineActivitySync_args();
		
		$args->actNoList = $actNoList;
		
		$args->channelId = $channelId;
		
		$this->send_base($args);
	}
	
	public function recv_offlineActivitySync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_offlineActivitySync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function offlineCommandSync( $commandNoList){
		
		$this->send_offlineCommandSync( $commandNoList);
		return $this->recv_offlineCommandSync();
	}
	
	public function send_offlineCommandSync( $commandNoList){
		
		$this->initInvocation("offlineCommandSync");
		$args = new \com\vip\pms\data\service\PmsDataService_offlineCommandSync_args();
		
		$args->commandNoList = $commandNoList;
		
		$this->send_base($args);
	}
	
	public function recv_offlineCommandSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_offlineCommandSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function offlinePaySync( $payNoList){
		
		$this->send_offlinePaySync( $payNoList);
		return $this->recv_offlinePaySync();
	}
	
	public function send_offlinePaySync( $payNoList){
		
		$this->initInvocation("offlinePaySync");
		$args = new \com\vip\pms\data\service\PmsDataService_offlinePaySync_args();
		
		$args->payNoList = $payNoList;
		
		$this->send_base($args);
	}
	
	public function recv_offlinePaySync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_offlinePaySync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function offlinePrepayInfoSync(\com\vip\pms\data\service\DeletePrepayInfoModel $requestModel){
		
		$this->send_offlinePrepayInfoSync( $requestModel);
		return $this->recv_offlinePrepayInfoSync();
	}
	
	public function send_offlinePrepayInfoSync(\com\vip\pms\data\service\DeletePrepayInfoModel $requestModel){
		
		$this->initInvocation("offlinePrepayInfoSync");
		$args = new \com\vip\pms\data\service\PmsDataService_offlinePrepayInfoSync_args();
		
		$args->requestModel = $requestModel;
		
		$this->send_base($args);
	}
	
	public function recv_offlinePrepayInfoSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_offlinePrepayInfoSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function offlineSpecialSync( $specialNoList){
		
		$this->send_offlineSpecialSync( $specialNoList);
		return $this->recv_offlineSpecialSync();
	}
	
	public function send_offlineSpecialSync( $specialNoList){
		
		$this->initInvocation("offlineSpecialSync");
		$args = new \com\vip\pms\data\service\PmsDataService_offlineSpecialSync_args();
		
		$args->specialNoList = $specialNoList;
		
		$this->send_base($args);
	}
	
	public function recv_offlineSpecialSync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_offlineSpecialSync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function offlineSurprisePriceActivitySync( $actNoList){
		
		$this->send_offlineSurprisePriceActivitySync( $actNoList);
		return $this->recv_offlineSurprisePriceActivitySync();
	}
	
	public function send_offlineSurprisePriceActivitySync( $actNoList){
		
		$this->initInvocation("offlineSurprisePriceActivitySync");
		$args = new \com\vip\pms\data\service\PmsDataService_offlineSurprisePriceActivitySync_args();
		
		$args->actNoList = $actNoList;
		
		$this->send_base($args);
	}
	
	public function recv_offlineSurprisePriceActivitySync(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_offlineSurprisePriceActivitySync_result();
		$this->receive_base($result);
		
	}
	
	
	public function prepareActivity(\com\vip\pms\data\model\sync\PrepareActivityRequest $request){
		
		$this->send_prepareActivity( $request);
		return $this->recv_prepareActivity();
	}
	
	public function send_prepareActivity(\com\vip\pms\data\model\sync\PrepareActivityRequest $request){
		
		$this->initInvocation("prepareActivity");
		$args = new \com\vip\pms\data\service\PmsDataService_prepareActivity_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_prepareActivity(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_prepareActivity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function prepareSpecial(\com\vip\pms\data\model\sync\PrepareActivityRequest $request){
		
		$this->send_prepareSpecial( $request);
		return $this->recv_prepareSpecial();
	}
	
	public function send_prepareSpecial(\com\vip\pms\data\model\sync\PrepareActivityRequest $request){
		
		$this->initInvocation("prepareSpecial");
		$args = new \com\vip\pms\data\service\PmsDataService_prepareSpecial_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_prepareSpecial(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_prepareSpecial_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function publishRollbackUseCouponMsg(\com\vip\pms\data\service\RollbackCouponReqModel $reqModel){
		
		$this->send_publishRollbackUseCouponMsg( $reqModel);
		return $this->recv_publishRollbackUseCouponMsg();
	}
	
	public function send_publishRollbackUseCouponMsg(\com\vip\pms\data\service\RollbackCouponReqModel $reqModel){
		
		$this->initInvocation("publishRollbackUseCouponMsg");
		$args = new \com\vip\pms\data\service\PmsDataService_publishRollbackUseCouponMsg_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_publishRollbackUseCouponMsg(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_publishRollbackUseCouponMsg_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushOfflineActivities(\com\vip\pms\data\service\ActivityRequestModel $activityRequestModel, $subActivityStatus){
		
		$this->send_pushOfflineActivities( $activityRequestModel, $subActivityStatus);
		return $this->recv_pushOfflineActivities();
	}
	
	public function send_pushOfflineActivities(\com\vip\pms\data\service\ActivityRequestModel $activityRequestModel, $subActivityStatus){
		
		$this->initInvocation("pushOfflineActivities");
		$args = new \com\vip\pms\data\service\PmsDataService_pushOfflineActivities_args();
		
		$args->activityRequestModel = $activityRequestModel;
		
		$args->subActivityStatus = $subActivityStatus;
		
		$this->send_base($args);
	}
	
	public function recv_pushOfflineActivities(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_pushOfflineActivities_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryConfirmationNo( $confirmationRequests){
		
		$this->send_queryConfirmationNo( $confirmationRequests);
		return $this->recv_queryConfirmationNo();
	}
	
	public function send_queryConfirmationNo( $confirmationRequests){
		
		$this->initInvocation("queryConfirmationNo");
		$args = new \com\vip\pms\data\service\PmsDataService_queryConfirmationNo_args();
		
		$args->confirmationRequests = $confirmationRequests;
		
		$this->send_base($args);
	}
	
	public function recv_queryConfirmationNo(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_queryConfirmationNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryCouponInstanceStat( $couponNos){
		
		$this->send_queryCouponInstanceStat( $couponNos);
		return $this->recv_queryCouponInstanceStat();
	}
	
	public function send_queryCouponInstanceStat( $couponNos){
		
		$this->initInvocation("queryCouponInstanceStat");
		$args = new \com\vip\pms\data\service\PmsDataService_queryCouponInstanceStat_args();
		
		$args->couponNos = $couponNos;
		
		$this->send_base($args);
	}
	
	public function recv_queryCouponInstanceStat(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_queryCouponInstanceStat_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryGoodsFavAmount( $orderCouponRequests){
		
		$this->send_queryGoodsFavAmount( $orderCouponRequests);
		return $this->recv_queryGoodsFavAmount();
	}
	
	public function send_queryGoodsFavAmount( $orderCouponRequests){
		
		$this->initInvocation("queryGoodsFavAmount");
		$args = new \com\vip\pms\data\service\PmsDataService_queryGoodsFavAmount_args();
		
		$args->orderCouponRequests = $orderCouponRequests;
		
		$this->send_base($args);
	}
	
	public function recv_queryGoodsFavAmount(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_queryGoodsFavAmount_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function refreshOrder( $orderNo, $hashValue, $refIdType, $userId){
		
		$this->send_refreshOrder( $orderNo, $hashValue, $refIdType, $userId);
		return $this->recv_refreshOrder();
	}
	
	public function send_refreshOrder( $orderNo, $hashValue, $refIdType, $userId){
		
		$this->initInvocation("refreshOrder");
		$args = new \com\vip\pms\data\service\PmsDataService_refreshOrder_args();
		
		$args->orderNo = $orderNo;
		
		$args->hashValue = $hashValue;
		
		$args->refIdType = $refIdType;
		
		$args->userId = $userId;
		
		$this->send_base($args);
	}
	
	public function recv_refreshOrder(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_refreshOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function returnCoupon( $userId, $couponSns){
		
		$this->send_returnCoupon( $userId, $couponSns);
		return $this->recv_returnCoupon();
	}
	
	public function send_returnCoupon( $userId, $couponSns){
		
		$this->initInvocation("returnCoupon");
		$args = new \com\vip\pms\data\service\PmsDataService_returnCoupon_args();
		
		$args->userId = $userId;
		
		$args->couponSns = $couponSns;
		
		$this->send_base($args);
	}
	
	public function recv_returnCoupon(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_returnCoupon_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveActPromotionObject(\com\vip\pms\data\model\sync\ActObjectRequest $request){
		
		$this->send_saveActPromotionObject( $request);
		return $this->recv_saveActPromotionObject();
	}
	
	public function send_saveActPromotionObject(\com\vip\pms\data\model\sync\ActObjectRequest $request){
		
		$this->initInvocation("saveActPromotionObject");
		$args = new \com\vip\pms\data\service\PmsDataService_saveActPromotionObject_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_saveActPromotionObject(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_saveActPromotionObject_result();
		$this->receive_base($result);
		
	}
	
	
	public function saveActivity(\com\vip\pms\data\service\ActivityRequestModel $request){
		
		$this->send_saveActivity( $request);
		return $this->recv_saveActivity();
	}
	
	public function send_saveActivity(\com\vip\pms\data\service\ActivityRequestModel $request){
		
		$this->initInvocation("saveActivity");
		$args = new \com\vip\pms\data\service\PmsDataService_saveActivity_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_saveActivity(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_saveActivity_result();
		$this->receive_base($result);
		
	}
	
	
	public function saveSpecial(\com\vip\pms\data\service\SpecialRequestModel $request){
		
		$this->send_saveSpecial( $request);
		return $this->recv_saveSpecial();
	}
	
	public function send_saveSpecial(\com\vip\pms\data\service\SpecialRequestModel $request){
		
		$this->initInvocation("saveSpecial");
		$args = new \com\vip\pms\data\service\PmsDataService_saveSpecial_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_saveSpecial(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_saveSpecial_result();
		$this->receive_base($result);
		
	}
	
	
	public function saveSpecialPromotionObject(\com\vip\pms\data\model\sync\SpecialObjectRequest $request){
		
		$this->send_saveSpecialPromotionObject( $request);
		return $this->recv_saveSpecialPromotionObject();
	}
	
	public function send_saveSpecialPromotionObject(\com\vip\pms\data\model\sync\SpecialObjectRequest $request){
		
		$this->initInvocation("saveSpecialPromotionObject");
		$args = new \com\vip\pms\data\service\PmsDataService_saveSpecialPromotionObject_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_saveSpecialPromotionObject(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_saveSpecialPromotionObject_result();
		$this->receive_base($result);
		
	}
	
	
	public function submitSMSendingRequest(\com\vip\pms\data\service\SMSRequestModel $smsRequestModel){
		
		$this->send_submitSMSendingRequest( $smsRequestModel);
		return $this->recv_submitSMSendingRequest();
	}
	
	public function send_submitSMSendingRequest(\com\vip\pms\data\service\SMSRequestModel $smsRequestModel){
		
		$this->initInvocation("submitSMSendingRequest");
		$args = new \com\vip\pms\data\service\PmsDataService_submitSMSendingRequest_args();
		
		$args->smsRequestModel = $smsRequestModel;
		
		$this->send_base($args);
	}
	
	public function recv_submitSMSendingRequest(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_submitSMSendingRequest_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAllActivityIndex( $indexType){
		
		$this->send_syncAllActivityIndex( $indexType);
		return $this->recv_syncAllActivityIndex();
	}
	
	public function send_syncAllActivityIndex( $indexType){
		
		$this->initInvocation("syncAllActivityIndex");
		$args = new \com\vip\pms\data\service\PmsDataService_syncAllActivityIndex_args();
		
		$args->indexType = $indexType;
		
		$this->send_base($args);
	}
	
	public function recv_syncAllActivityIndex(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_syncAllActivityIndex_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncAllCacheByCacheType( $cacheType, $scope){
		
		$this->send_syncAllCacheByCacheType( $cacheType, $scope);
		return $this->recv_syncAllCacheByCacheType();
	}
	
	public function send_syncAllCacheByCacheType( $cacheType, $scope){
		
		$this->initInvocation("syncAllCacheByCacheType");
		$args = new \com\vip\pms\data\service\PmsDataService_syncAllCacheByCacheType_args();
		
		$args->cacheType = $cacheType;
		
		$args->scope = $scope;
		
		$this->send_base($args);
	}
	
	public function recv_syncAllCacheByCacheType(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_syncAllCacheByCacheType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncAllGoodsOriginalPrice(){
		
		$this->send_syncAllGoodsOriginalPrice();
		return $this->recv_syncAllGoodsOriginalPrice();
	}
	
	public function send_syncAllGoodsOriginalPrice(){
		
		$this->initInvocation("syncAllGoodsOriginalPrice");
		$args = new \com\vip\pms\data\service\PmsDataService_syncAllGoodsOriginalPrice_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncAllGoodsOriginalPrice(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_syncAllGoodsOriginalPrice_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncAllGoodsSurprisePrice(){
		
		$this->send_syncAllGoodsSurprisePrice();
		return $this->recv_syncAllGoodsSurprisePrice();
	}
	
	public function send_syncAllGoodsSurprisePrice(){
		
		$this->initInvocation("syncAllGoodsSurprisePrice");
		$args = new \com\vip\pms\data\service\PmsDataService_syncAllGoodsSurprisePrice_args();
		
		$this->send_base($args);
	}
	
	public function recv_syncAllGoodsSurprisePrice(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_syncAllGoodsSurprisePrice_result();
		$this->receive_base($result);
		
	}
	
	
	public function syncBiPush( $biPushType){
		
		$this->send_syncBiPush( $biPushType);
		return $this->recv_syncBiPush();
	}
	
	public function send_syncBiPush( $biPushType){
		
		$this->initInvocation("syncBiPush");
		$args = new \com\vip\pms\data\service\PmsDataService_syncBiPush_args();
		
		$args->biPushType = $biPushType;
		
		$this->send_base($args);
	}
	
	public function recv_syncBiPush(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_syncBiPush_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncBlacklistNew( $blacklist){
		
		$this->send_syncBlacklistNew( $blacklist);
		return $this->recv_syncBlacklistNew();
	}
	
	public function send_syncBlacklistNew( $blacklist){
		
		$this->initInvocation("syncBlacklistNew");
		$args = new \com\vip\pms\data\service\PmsDataService_syncBlacklistNew_args();
		
		$args->blacklist = $blacklist;
		
		$this->send_base($args);
	}
	
	public function recv_syncBlacklistNew(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_syncBlacklistNew_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncCacheByActivityNosAndCacheType( $activityNos, $cacheType, $scopes){
		
		$this->send_syncCacheByActivityNosAndCacheType( $activityNos, $cacheType, $scopes);
		return $this->recv_syncCacheByActivityNosAndCacheType();
	}
	
	public function send_syncCacheByActivityNosAndCacheType( $activityNos, $cacheType, $scopes){
		
		$this->initInvocation("syncCacheByActivityNosAndCacheType");
		$args = new \com\vip\pms\data\service\PmsDataService_syncCacheByActivityNosAndCacheType_args();
		
		$args->activityNos = $activityNos;
		
		$args->cacheType = $cacheType;
		
		$args->scopes = $scopes;
		
		$this->send_base($args);
	}
	
	public function recv_syncCacheByActivityNosAndCacheType(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_syncCacheByActivityNosAndCacheType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncPayBlackList( $blackIds){
		
		$this->send_syncPayBlackList( $blackIds);
		return $this->recv_syncPayBlackList();
	}
	
	public function send_syncPayBlackList( $blackIds){
		
		$this->initInvocation("syncPayBlackList");
		$args = new \com\vip\pms\data\service\PmsDataService_syncPayBlackList_args();
		
		$args->blackIds = $blackIds;
		
		$this->send_base($args);
	}
	
	public function recv_syncPayBlackList(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_syncPayBlackList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateActPromotionObject(\com\vip\pms\data\model\sync\ActObjectUpdateRequest $request){
		
		$this->send_updateActPromotionObject( $request);
		return $this->recv_updateActPromotionObject();
	}
	
	public function send_updateActPromotionObject(\com\vip\pms\data\model\sync\ActObjectUpdateRequest $request){
		
		$this->initInvocation("updateActPromotionObject");
		$args = new \com\vip\pms\data\service\PmsDataService_updateActPromotionObject_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_updateActPromotionObject(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_updateActPromotionObject_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateActivityBaseInfo(\com\vip\pms\data\service\ActivityRequestModel $request){
		
		$this->send_updateActivityBaseInfo( $request);
		return $this->recv_updateActivityBaseInfo();
	}
	
	public function send_updateActivityBaseInfo(\com\vip\pms\data\service\ActivityRequestModel $request){
		
		$this->initInvocation("updateActivityBaseInfo");
		$args = new \com\vip\pms\data\service\PmsDataService_updateActivityBaseInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_updateActivityBaseInfo(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_updateActivityBaseInfo_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateSpecialBaseInfo(\com\vip\pms\data\service\SpecialRequestModel $request){
		
		$this->send_updateSpecialBaseInfo( $request);
		return $this->recv_updateSpecialBaseInfo();
	}
	
	public function send_updateSpecialBaseInfo(\com\vip\pms\data\service\SpecialRequestModel $request){
		
		$this->initInvocation("updateSpecialBaseInfo");
		$args = new \com\vip\pms\data\service\PmsDataService_updateSpecialBaseInfo_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_updateSpecialBaseInfo(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_updateSpecialBaseInfo_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateSpecialPromotionObject(\com\vip\pms\data\model\sync\ActObjectUpdateRequest $request){
		
		$this->send_updateSpecialPromotionObject( $request);
		return $this->recv_updateSpecialPromotionObject();
	}
	
	public function send_updateSpecialPromotionObject(\com\vip\pms\data\model\sync\ActObjectUpdateRequest $request){
		
		$this->initInvocation("updateSpecialPromotionObject");
		$args = new \com\vip\pms\data\service\PmsDataService_updateSpecialPromotionObject_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_updateSpecialPromotionObject(){
		
		$result = new \com\vip\pms\data\service\PmsDataService_updateSpecialPromotionObject_result();
		$this->receive_base($result);
		
	}
	
	
}




class PmsDataService_addActivityUserLog_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\service\ActivityUserLogRequestModel();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addCommandPersonalCode_args {
	
	static $_TSPEC;
	public $commandId = null;
	public $personalCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commandId'
			),
			2 => array(
			'var' => 'personalCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commandId'])){
				
				$this->commandId = $vals['commandId'];
			}
			
			
			if (isset($vals['personalCode'])){
				
				$this->personalCode = $vals['personalCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->commandId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->personalCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('commandId');
		$xfer += $output->writeString($this->commandId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('personalCode');
		$xfer += $output->writeString($this->personalCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addCommandUserLog_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\service\CommandUserLogRequestModel();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addCouponUserLog_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\service\CouponOrderRequestModel();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOldPmsOrderInfo_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\service\OldPmsOrderRequestModel();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdateActivitySync_args {
	
	static $_TSPEC;
	public $activityRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activityRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activityRequestModel'])){
				
				$this->activityRequestModel = $vals['activityRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->activityRequestModel = new \com\vip\pms\data\service\ActivityRequestModel();
			$this->activityRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('activityRequestModel');
		
		if (!is_object($this->activityRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->activityRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdateCommandSync_args {
	
	static $_TSPEC;
	public $commandRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commandRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commandRequestModel'])){
				
				$this->commandRequestModel = $vals['commandRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->commandRequestModel = new \com\vip\pms\data\service\CommandRequestModel();
			$this->commandRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('commandRequestModel');
		
		if (!is_object($this->commandRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->commandRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdateConfig_args {
	
	static $_TSPEC;
	public $config = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'config'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['config'])){
				
				$this->config = $vals['config'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->config = new \com\vip\pms\data\service\AdminConfigModel();
			$this->config->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('config');
		
		if (!is_object($this->config)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->config->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdateCouponGroupSync_args {
	
	static $_TSPEC;
	public $couponRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponRequestModel'])){
				
				$this->couponRequestModel = $vals['couponRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->couponRequestModel = new \com\vip\pms\data\service\CouponRequestModel();
			$this->couponRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('couponRequestModel');
		
		if (!is_object($this->couponRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->couponRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdateCouponRuleSync_args {
	
	static $_TSPEC;
	public $couponRuleRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponRuleRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponRuleRequestModel'])){
				
				$this->couponRuleRequestModel = $vals['couponRuleRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->couponRuleRequestModel = new \com\vip\pms\data\service\CouponRuleRequestModel();
			$this->couponRuleRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('couponRuleRequestModel');
		
		if (!is_object($this->couponRuleRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->couponRuleRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdateCouponSync_args {
	
	static $_TSPEC;
	public $couponRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponRequestModel'])){
				
				$this->couponRequestModel = $vals['couponRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->couponRequestModel = new \com\vip\pms\data\service\CouponRequestModel();
			$this->couponRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('couponRequestModel');
		
		if (!is_object($this->couponRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->couponRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdatePaySync_args {
	
	static $_TSPEC;
	public $payRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'payRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['payRequestModel'])){
				
				$this->payRequestModel = $vals['payRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->payRequestModel = new \com\vip\pms\data\service\PayRequestModel();
			$this->payRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('payRequestModel');
		
		if (!is_object($this->payRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->payRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdatePrepayInfoSync_args {
	
	static $_TSPEC;
	public $prepayInfoRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prepayInfoRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prepayInfoRequestModel'])){
				
				$this->prepayInfoRequestModel = $vals['prepayInfoRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->prepayInfoRequestModel = new \com\vip\pms\data\service\PrepayInfoRequestModel();
			$this->prepayInfoRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('prepayInfoRequestModel');
		
		if (!is_object($this->prepayInfoRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->prepayInfoRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdateSpecialSync_args {
	
	static $_TSPEC;
	public $specialRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'specialRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['specialRequestModel'])){
				
				$this->specialRequestModel = $vals['specialRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->specialRequestModel = new \com\vip\pms\data\service\SpecialRequestModel();
			$this->specialRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('specialRequestModel');
		
		if (!is_object($this->specialRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->specialRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdateSurprisePriceActivitySync_args {
	
	static $_TSPEC;
	public $activityRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activityRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activityRequestModel'])){
				
				$this->activityRequestModel = $vals['activityRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->activityRequestModel = new \com\vip\pms\data\service\SurprisePriceActivityRequestModel();
			$this->activityRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('activityRequestModel');
		
		if (!is_object($this->activityRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->activityRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addPayUserLog_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\service\PayUserLogRequestModel();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addSpecialUserLog_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\service\SpecialUserLogRequestModel();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_batchModifyCouponTime_args {
	
	static $_TSPEC;
	public $modifyList = null;
	public $taskId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'modifyList'
			),
			2 => array(
			'var' => 'taskId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['modifyList'])){
				
				$this->modifyList = $vals['modifyList'];
			}
			
			
			if (isset($vals['taskId'])){
				
				$this->taskId = $vals['taskId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->modifyList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\pms\data\service\ModifyInfoRequestModel();
					$elem0->read($input);
					
					$this->modifyList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->taskId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('modifyList');
		
		if (!is_array($this->modifyList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->modifyList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('taskId');
		$xfer += $output->writeString($this->taskId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_buildAllActivityIndex_args {
	
	static $_TSPEC;
	public $indexType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'indexType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['indexType'])){
				
				$this->indexType = $vals['indexType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->indexType);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('indexType');
		$xfer += $output->writeString($this->indexType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelActivitySync_args {
	
	static $_TSPEC;
	public $actNoList = null;
	public $channelId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actNoList'
			),
			2 => array(
			'var' => 'channelId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actNoList'])){
				
				$this->actNoList = $vals['actNoList'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->actNoList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->actNoList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('actNoList');
		
		if (!is_array($this->actNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->actNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelCommandSync_args {
	
	static $_TSPEC;
	public $commandNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commandNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commandNoList'])){
				
				$this->commandNoList = $vals['commandNoList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->commandNoList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->commandNoList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('commandNoList');
		
		if (!is_array($this->commandNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->commandNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelOrOfflineCouponGroupSync_args {
	
	static $_TSPEC;
	public $noList = null;
	public $isCancel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'noList'
			),
			2 => array(
			'var' => 'isCancel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['noList'])){
				
				$this->noList = $vals['noList'];
			}
			
			
			if (isset($vals['isCancel'])){
				
				$this->isCancel = $vals['isCancel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->noList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->noList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isCancel);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('noList');
		
		if (!is_array($this->noList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->noList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isCancel');
		$xfer += $output->writeBool($this->isCancel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelOrOfflineCouponRuleSync_args {
	
	static $_TSPEC;
	public $noList = null;
	public $isCancel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'noList'
			),
			2 => array(
			'var' => 'isCancel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['noList'])){
				
				$this->noList = $vals['noList'];
			}
			
			
			if (isset($vals['isCancel'])){
				
				$this->isCancel = $vals['isCancel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->noList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->noList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isCancel);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('noList');
		
		if (!is_array($this->noList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->noList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isCancel');
		$xfer += $output->writeBool($this->isCancel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelOrOfflineCouponSync_args {
	
	static $_TSPEC;
	public $noList = null;
	public $isCancel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'noList'
			),
			2 => array(
			'var' => 'isCancel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['noList'])){
				
				$this->noList = $vals['noList'];
			}
			
			
			if (isset($vals['isCancel'])){
				
				$this->isCancel = $vals['isCancel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->noList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->noList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isCancel);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('noList');
		
		if (!is_array($this->noList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->noList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isCancel');
		$xfer += $output->writeBool($this->isCancel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelOrder_args {
	
	static $_TSPEC;
	public $orderNo = null;
	public $refIdType = null;
	public $refIdList = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderNo'
			),
			2 => array(
			'var' => 'refIdType'
			),
			3 => array(
			'var' => 'refIdList'
			),
			4 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderNo'])){
				
				$this->orderNo = $vals['orderNo'];
			}
			
			
			if (isset($vals['refIdType'])){
				
				$this->refIdType = $vals['refIdType'];
			}
			
			
			if (isset($vals['refIdList'])){
				
				$this->refIdList = $vals['refIdList'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->refIdType); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->refIdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI64($elem0); 
					
					$this->refIdList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('orderNo');
		$xfer += $output->writeString($this->orderNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refIdType');
		$xfer += $output->writeByte($this->refIdType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->refIdList !== null) {
			
			$xfer += $output->writeFieldBegin('refIdList');
			
			if (!is_array($this->refIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->refIdList as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelPaySync_args {
	
	static $_TSPEC;
	public $payNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'payNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['payNoList'])){
				
				$this->payNoList = $vals['payNoList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->payNoList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->payNoList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('payNoList');
		
		if (!is_array($this->payNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->payNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelSpecialSync_args {
	
	static $_TSPEC;
	public $specialNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'specialNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['specialNoList'])){
				
				$this->specialNoList = $vals['specialNoList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->specialNoList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->specialNoList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('specialNoList');
		
		if (!is_array($this->specialNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->specialNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelSurprisePriceActivitySync_args {
	
	static $_TSPEC;
	public $actNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actNoList'])){
				
				$this->actNoList = $vals['actNoList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->actNoList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->actNoList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('actNoList');
		
		if (!is_array($this->actNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->actNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_check_args {
	
	static $_TSPEC;
	public $checkRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'checkRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['checkRequest'])){
				
				$this->checkRequest = $vals['checkRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->checkRequest = new \com\vip\pms\data\service\CheckRequest();
			$this->checkRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->checkRequest !== null) {
			
			$xfer += $output->writeFieldBegin('checkRequest');
			
			if (!is_object($this->checkRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->checkRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_couponActivate_args {
	
	static $_TSPEC;
	public $instanceModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'instanceModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['instanceModel'])){
				
				$this->instanceModel = $vals['instanceModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->instanceModel = new \com\vip\pms\data\service\CouponInstanceModel();
			$this->instanceModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('instanceModel');
		
		if (!is_object($this->instanceModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->instanceModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_couponBind_args {
	
	static $_TSPEC;
	public $instanceModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'instanceModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['instanceModel'])){
				
				$this->instanceModel = $vals['instanceModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->instanceModel = new \com\vip\pms\data\service\CouponInstanceModel();
			$this->instanceModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('instanceModel');
		
		if (!is_object($this->instanceModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->instanceModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_couponGroupActivate_args {
	
	static $_TSPEC;
	public $groupInstanceModel = null;
	public $couponInstanceList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'groupInstanceModel'
			),
			2 => array(
			'var' => 'couponInstanceList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['groupInstanceModel'])){
				
				$this->groupInstanceModel = $vals['groupInstanceModel'];
			}
			
			
			if (isset($vals['couponInstanceList'])){
				
				$this->couponInstanceList = $vals['couponInstanceList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->groupInstanceModel = new \com\vip\pms\data\service\CouponInstanceModel();
			$this->groupInstanceModel->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->couponInstanceList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\pms\data\service\CouponInstanceModel();
					$elem0->read($input);
					
					$this->couponInstanceList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('groupInstanceModel');
		
		if (!is_object($this->groupInstanceModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->groupInstanceModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('couponInstanceList');
		
		if (!is_array($this->couponInstanceList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->couponInstanceList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_couponGroupBind_args {
	
	static $_TSPEC;
	public $groupInstanceModel = null;
	public $couponInstanceList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'groupInstanceModel'
			),
			2 => array(
			'var' => 'couponInstanceList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['groupInstanceModel'])){
				
				$this->groupInstanceModel = $vals['groupInstanceModel'];
			}
			
			
			if (isset($vals['couponInstanceList'])){
				
				$this->couponInstanceList = $vals['couponInstanceList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->groupInstanceModel = new \com\vip\pms\data\service\CouponInstanceModel();
			$this->groupInstanceModel->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->couponInstanceList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\pms\data\service\CouponInstanceModel();
					$elem1->read($input);
					
					$this->couponInstanceList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('groupInstanceModel');
		
		if (!is_object($this->groupInstanceModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->groupInstanceModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('couponInstanceList');
		
		if (!is_array($this->couponInstanceList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->couponInstanceList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_delGoodsOriginalPrice_args {
	
	static $_TSPEC;
	public $spuIdList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spuIdList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spuIdList'])){
				
				$this->spuIdList = $vals['spuIdList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->spuIdList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->spuIdList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('spuIdList');
		
		if (!is_array($this->spuIdList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->spuIdList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_delGoodsSurprisePrice_args {
	
	static $_TSPEC;
	public $modelList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'modelList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['modelList'])){
				
				$this->modelList = $vals['modelList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->modelList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\pms\data\service\FlushGoodsSurprisePriceModel();
					$elem1->read($input);
					
					$this->modelList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('modelList');
		
		if (!is_array($this->modelList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->modelList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_deleteConfig_args {
	
	static $_TSPEC;
	public $type = null;
	public $key = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'key'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['key'])){
				
				$this->key = $vals['key'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->type);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->key);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeString($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('key');
		$xfer += $output->writeString($this->key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_deletePrepayInfoByMidSync_args {
	
	static $_TSPEC;
	public $prepayMainNo = null;
	public $merchandiseNos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prepayMainNo'
			),
			2 => array(
			'var' => 'merchandiseNos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prepayMainNo'])){
				
				$this->prepayMainNo = $vals['prepayMainNo'];
			}
			
			
			if (isset($vals['merchandiseNos'])){
				
				$this->merchandiseNos = $vals['merchandiseNos'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->prepayMainNo);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->merchandiseNos = array();
			$_size0 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI64($elem0); 
					
					$this->merchandiseNos[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->prepayMainNo !== null) {
			
			$xfer += $output->writeFieldBegin('prepayMainNo');
			$xfer += $output->writeString($this->prepayMainNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->merchandiseNos !== null) {
			
			$xfer += $output->writeFieldBegin('merchandiseNos');
			
			if (!is_array($this->merchandiseNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->merchandiseNos as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_deletePrepayInfoSync_args {
	
	static $_TSPEC;
	public $prepayMainNos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prepayMainNos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prepayMainNos'])){
				
				$this->prepayMainNos = $vals['prepayMainNos'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->prepayMainNos = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->prepayMainNos[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('prepayMainNos');
		
		if (!is_array($this->prepayMainNos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->prepayMainNos as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_exportCoupon_args {
	
	static $_TSPEC;
	public $couponNo = null;
	public $offset = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponNo'
			),
			2 => array(
			'var' => 'offset'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponNo'])){
				
				$this->couponNo = $vals['couponNo'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->couponNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->offset); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('couponNo');
		$xfer += $output->writeString($this->couponNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offset');
		$xfer += $output->writeI64($this->offset);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_exportCouponGroup_args {
	
	static $_TSPEC;
	public $groupNo = null;
	public $offset = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'groupNo'
			),
			2 => array(
			'var' => 'offset'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['groupNo'])){
				
				$this->groupNo = $vals['groupNo'];
			}
			
			
			if (isset($vals['offset'])){
				
				$this->offset = $vals['offset'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->groupNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->offset); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('groupNo');
		$xfer += $output->writeString($this->groupNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offset');
		$xfer += $output->writeI64($this->offset);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_fetchCommandOrderNos_args {
	
	static $_TSPEC;
	public $fetchCommandOrderNosRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fetchCommandOrderNosRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fetchCommandOrderNosRequestModel'])){
				
				$this->fetchCommandOrderNosRequestModel = $vals['fetchCommandOrderNosRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->fetchCommandOrderNosRequestModel = new \com\vip\pms\data\service\FetchCommandOrderNosRequestModel();
			$this->fetchCommandOrderNosRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('fetchCommandOrderNosRequestModel');
		
		if (!is_object($this->fetchCommandOrderNosRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->fetchCommandOrderNosRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_fetchOrder_args {
	
	static $_TSPEC;
	public $fetchOrderRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fetchOrderRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fetchOrderRequestModel'])){
				
				$this->fetchOrderRequestModel = $vals['fetchOrderRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->fetchOrderRequestModel = new \com\vip\pms\data\service\FetchOrderRequestModel();
			$this->fetchOrderRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('fetchOrderRequestModel');
		
		if (!is_object($this->fetchOrderRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->fetchOrderRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_flushCouponRuleIndexSync_args {
	
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




class PmsDataService_flushGoodsOriginalPrice_args {
	
	static $_TSPEC;
	public $modelList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'modelList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['modelList'])){
				
				$this->modelList = $vals['modelList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->modelList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\pms\data\service\FlushGoodsOriginalPriceModel();
					$elem0->read($input);
					
					$this->modelList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('modelList');
		
		if (!is_array($this->modelList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->modelList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_flushGoodsSurprisePrice_args {
	
	static $_TSPEC;
	public $modelList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'modelList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['modelList'])){
				
				$this->modelList = $vals['modelList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->modelList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\pms\data\service\FlushGoodsSurprisePriceModel();
					$elem1->read($input);
					
					$this->modelList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('modelList');
		
		if (!is_array($this->modelList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->modelList as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_getConfig_args {
	
	static $_TSPEC;
	public $type = null;
	public $key = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'key'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['key'])){
				
				$this->key = $vals['key'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->type);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->key);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeString($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('key');
		$xfer += $output->writeString($this->key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_getTypeConfig_args {
	
	static $_TSPEC;
	public $type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->type);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeString($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_healthCheck_args {
	
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




class PmsDataService_modifyCacheSwitchStatus_args {
	
	static $_TSPEC;
	public $switchStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'switchStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['switchStatus'])){
				
				$this->switchStatus = $vals['switchStatus'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\pms\data\enums\SwitchStatus::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->switchStatus = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('switchStatus');
		
		$em = new \com\vip\pms\data\enums\SwitchStatus; 
		$output->writeString($em::$__names[$this->switchStatus]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_modifyCouponTime_args {
	
	static $_TSPEC;
	public $couponId = null;
	public $beginTime = null;
	public $endTime = null;
	public $taskId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponId'
			),
			2 => array(
			'var' => 'beginTime'
			),
			3 => array(
			'var' => 'endTime'
			),
			4 => array(
			'var' => 'taskId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponId'])){
				
				$this->couponId = $vals['couponId'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['taskId'])){
				
				$this->taskId = $vals['taskId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->couponId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->beginTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->endTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->taskId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('couponId');
		$xfer += $output->writeI32($this->couponId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('beginTime');
		$xfer += $output->writeI64($this->beginTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('endTime');
		$xfer += $output->writeI64($this->endTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('taskId');
		$xfer += $output->writeString($this->taskId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_modifyCouponTimeByUserIds_args {
	
	static $_TSPEC;
	public $couponId = null;
	public $beginTime = null;
	public $endTime = null;
	public $userIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponId'
			),
			2 => array(
			'var' => 'beginTime'
			),
			3 => array(
			'var' => 'endTime'
			),
			4 => array(
			'var' => 'userIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponId'])){
				
				$this->couponId = $vals['couponId'];
			}
			
			
			if (isset($vals['beginTime'])){
				
				$this->beginTime = $vals['beginTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['userIds'])){
				
				$this->userIds = $vals['userIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->couponId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->beginTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->endTime); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->userIds = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->userIds[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('couponId');
		$xfer += $output->writeI32($this->couponId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('beginTime');
		$xfer += $output->writeI64($this->beginTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('endTime');
		$xfer += $output->writeI64($this->endTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userIds');
		
		if (!is_array($this->userIds)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->userIds as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_multiBind_args {
	
	static $_TSPEC;
	public $multiBindRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'multiBindRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['multiBindRequest'])){
				
				$this->multiBindRequest = $vals['multiBindRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->multiBindRequest = new \com\vip\pms\data\coupon\model\CouponMultiBindRequest();
			$this->multiBindRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('multiBindRequest');
		
		if (!is_object($this->multiBindRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->multiBindRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_multiBindSyncMode_args {
	
	static $_TSPEC;
	public $multiBindRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'multiBindRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['multiBindRequest'])){
				
				$this->multiBindRequest = $vals['multiBindRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->multiBindRequest = new \com\vip\pms\data\coupon\model\CouponMultiBindRequest();
			$this->multiBindRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('multiBindRequest');
		
		if (!is_object($this->multiBindRequest)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->multiBindRequest->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_offlineActivityCallback_args {
	
	static $_TSPEC;
	public $actNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actNoList'])){
				
				$this->actNoList = $vals['actNoList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->actNoList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->actNoList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('actNoList');
		
		if (!is_array($this->actNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->actNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_offlineActivitySync_args {
	
	static $_TSPEC;
	public $actNoList = null;
	public $channelId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actNoList'
			),
			2 => array(
			'var' => 'channelId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actNoList'])){
				
				$this->actNoList = $vals['actNoList'];
			}
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->actNoList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->actNoList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->channelId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('actNoList');
		
		if (!is_array($this->actNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->actNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->channelId !== null) {
			
			$xfer += $output->writeFieldBegin('channelId');
			$xfer += $output->writeI64($this->channelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_offlineCommandSync_args {
	
	static $_TSPEC;
	public $commandNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commandNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commandNoList'])){
				
				$this->commandNoList = $vals['commandNoList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->commandNoList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->commandNoList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('commandNoList');
		
		if (!is_array($this->commandNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->commandNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_offlinePaySync_args {
	
	static $_TSPEC;
	public $payNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'payNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['payNoList'])){
				
				$this->payNoList = $vals['payNoList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->payNoList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->payNoList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('payNoList');
		
		if (!is_array($this->payNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->payNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_offlinePrepayInfoSync_args {
	
	static $_TSPEC;
	public $requestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestModel'])){
				
				$this->requestModel = $vals['requestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->requestModel = new \com\vip\pms\data\service\DeletePrepayInfoModel();
			$this->requestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('requestModel');
		
		if (!is_object($this->requestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->requestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_offlineSpecialSync_args {
	
	static $_TSPEC;
	public $specialNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'specialNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['specialNoList'])){
				
				$this->specialNoList = $vals['specialNoList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->specialNoList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->specialNoList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('specialNoList');
		
		if (!is_array($this->specialNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->specialNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_offlineSurprisePriceActivitySync_args {
	
	static $_TSPEC;
	public $actNoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actNoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actNoList'])){
				
				$this->actNoList = $vals['actNoList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->actNoList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->actNoList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('actNoList');
		
		if (!is_array($this->actNoList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->actNoList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_prepareActivity_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\model\sync\PrepareActivityRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_prepareSpecial_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\model\sync\PrepareActivityRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_publishRollbackUseCouponMsg_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\pms\data\service\RollbackCouponReqModel();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reqModel !== null) {
			
			$xfer += $output->writeFieldBegin('reqModel');
			
			if (!is_object($this->reqModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->reqModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_pushOfflineActivities_args {
	
	static $_TSPEC;
	public $activityRequestModel = null;
	public $subActivityStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activityRequestModel'
			),
			2 => array(
			'var' => 'subActivityStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activityRequestModel'])){
				
				$this->activityRequestModel = $vals['activityRequestModel'];
			}
			
			
			if (isset($vals['subActivityStatus'])){
				
				$this->subActivityStatus = $vals['subActivityStatus'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->activityRequestModel = new \com\vip\pms\data\service\ActivityRequestModel();
			$this->activityRequestModel->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->subActivityStatus = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = '';
					$input->readString($key0);
					
					$val0 = 0;
					$input->readByte($val0); 
					
					$this->subActivityStatus[$key0] = $val0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('activityRequestModel');
		
		if (!is_object($this->activityRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->activityRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('subActivityStatus');
		
		if (!is_array($this->subActivityStatus)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeMapBegin();
		foreach ($this->subActivityStatus as $kiter0 => $viter0){
			
			$xfer += $output->writeString($kiter0);
			
			$xfer += $output->writeByte($viter0);
			
		}
		
		$output->writeMapEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_queryConfirmationNo_args {
	
	static $_TSPEC;
	public $confirmationRequests = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'confirmationRequests'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['confirmationRequests'])){
				
				$this->confirmationRequests = $vals['confirmationRequests'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->confirmationRequests = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\pms\data\service\ConfirmationRequest();
					$elem1->read($input);
					
					$this->confirmationRequests[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('confirmationRequests');
		
		if (!is_array($this->confirmationRequests)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->confirmationRequests as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_queryCouponInstanceStat_args {
	
	static $_TSPEC;
	public $couponNos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponNos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponNos'])){
				
				$this->couponNos = $vals['couponNos'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->couponNos = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->couponNos[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('couponNos');
		
		if (!is_array($this->couponNos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->couponNos as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_queryGoodsFavAmount_args {
	
	static $_TSPEC;
	public $orderCouponRequests = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderCouponRequests'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderCouponRequests'])){
				
				$this->orderCouponRequests = $vals['orderCouponRequests'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->orderCouponRequests = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\pms\data\service\OrderCouponRequest();
					$elem1->read($input);
					
					$this->orderCouponRequests[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('orderCouponRequests');
		
		if (!is_array($this->orderCouponRequests)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orderCouponRequests as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_refreshOrder_args {
	
	static $_TSPEC;
	public $orderNo = null;
	public $hashValue = null;
	public $refIdType = null;
	public $userId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderNo'
			),
			2 => array(
			'var' => 'hashValue'
			),
			3 => array(
			'var' => 'refIdType'
			),
			4 => array(
			'var' => 'userId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderNo'])){
				
				$this->orderNo = $vals['orderNo'];
			}
			
			
			if (isset($vals['hashValue'])){
				
				$this->hashValue = $vals['hashValue'];
			}
			
			
			if (isset($vals['refIdType'])){
				
				$this->refIdType = $vals['refIdType'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->orderNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->hashValue);
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->refIdType); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->userId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('orderNo');
		$xfer += $output->writeString($this->orderNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('hashValue');
		$xfer += $output->writeString($this->hashValue);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refIdType');
		$xfer += $output->writeByte($this->refIdType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_returnCoupon_args {
	
	static $_TSPEC;
	public $userId = null;
	public $couponSns = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'couponSns'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['couponSns'])){
				
				$this->couponSns = $vals['couponSns'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->couponSns = array();
			$_size0 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->couponSns[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeString($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->couponSns !== null) {
			
			$xfer += $output->writeFieldBegin('couponSns');
			
			if (!is_array($this->couponSns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->couponSns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_saveActPromotionObject_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\model\sync\ActObjectRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_saveActivity_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\service\ActivityRequestModel();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_saveSpecial_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\service\SpecialRequestModel();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_saveSpecialPromotionObject_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\model\sync\SpecialObjectRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_submitSMSendingRequest_args {
	
	static $_TSPEC;
	public $smsRequestModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'smsRequestModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['smsRequestModel'])){
				
				$this->smsRequestModel = $vals['smsRequestModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->smsRequestModel = new \com\vip\pms\data\service\SMSRequestModel();
			$this->smsRequestModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('smsRequestModel');
		
		if (!is_object($this->smsRequestModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->smsRequestModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncAllActivityIndex_args {
	
	static $_TSPEC;
	public $indexType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'indexType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['indexType'])){
				
				$this->indexType = $vals['indexType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->indexType);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('indexType');
		$xfer += $output->writeString($this->indexType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncAllCacheByCacheType_args {
	
	static $_TSPEC;
	public $cacheType = null;
	public $scope = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cacheType'
			),
			2 => array(
			'var' => 'scope'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cacheType'])){
				
				$this->cacheType = $vals['cacheType'];
			}
			
			
			if (isset($vals['scope'])){
				
				$this->scope = $vals['scope'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->cacheType); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->scope); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->cacheType !== null) {
			
			$xfer += $output->writeFieldBegin('cacheType');
			$xfer += $output->writeI32($this->cacheType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scope !== null) {
			
			$xfer += $output->writeFieldBegin('scope');
			$xfer += $output->writeI32($this->scope);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncAllGoodsOriginalPrice_args {
	
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




class PmsDataService_syncAllGoodsSurprisePrice_args {
	
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




class PmsDataService_syncBiPush_args {
	
	static $_TSPEC;
	public $biPushType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'biPushType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['biPushType'])){
				
				$this->biPushType = $vals['biPushType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\pms\data\service\BiPushTypeEnum::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->biPushType = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->biPushType !== null) {
			
			$xfer += $output->writeFieldBegin('biPushType');
			
			$em = new \com\vip\pms\data\service\BiPushTypeEnum; 
			$output->writeString($em::$__names[$this->biPushType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncBlacklistNew_args {
	
	static $_TSPEC;
	public $blacklist = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'blacklist'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['blacklist'])){
				
				$this->blacklist = $vals['blacklist'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->blacklist = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\pms\data\service\BlacklistModel();
					$elem0->read($input);
					
					$this->blacklist[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('blacklist');
		
		if (!is_array($this->blacklist)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->blacklist as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncCacheByActivityNosAndCacheType_args {
	
	static $_TSPEC;
	public $activityNos = null;
	public $cacheType = null;
	public $scopes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activityNos'
			),
			2 => array(
			'var' => 'cacheType'
			),
			3 => array(
			'var' => 'scopes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activityNos'])){
				
				$this->activityNos = $vals['activityNos'];
			}
			
			
			if (isset($vals['cacheType'])){
				
				$this->cacheType = $vals['cacheType'];
			}
			
			
			if (isset($vals['scopes'])){
				
				$this->scopes = $vals['scopes'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->activityNos = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->activityNos[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->cacheType); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->scopes = array();
			$_size2 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem2 = null;
					$input->readI32($elem2); 
					
					$this->scopes[$_size2++] = $elem2;
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
		
		if($this->activityNos !== null) {
			
			$xfer += $output->writeFieldBegin('activityNos');
			
			if (!is_array($this->activityNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->activityNos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cacheType !== null) {
			
			$xfer += $output->writeFieldBegin('cacheType');
			$xfer += $output->writeI32($this->cacheType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scopes !== null) {
			
			$xfer += $output->writeFieldBegin('scopes');
			
			if (!is_array($this->scopes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->scopes as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncPayBlackList_args {
	
	static $_TSPEC;
	public $blackIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'blackIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['blackIds'])){
				
				$this->blackIds = $vals['blackIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->blackIds = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->blackIds[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('blackIds');
		
		if (!is_array($this->blackIds)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->blackIds as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_updateActPromotionObject_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\model\sync\ActObjectUpdateRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_updateActivityBaseInfo_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\service\ActivityRequestModel();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_updateSpecialBaseInfo_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\service\SpecialRequestModel();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_updateSpecialPromotionObject_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \com\vip\pms\data\model\sync\ActObjectUpdateRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->request !== null) {
			
			$xfer += $output->writeFieldBegin('request');
			
			if (!is_object($this->request)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->request->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addActivityUserLog_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addCommandPersonalCode_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addCommandUserLog_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addCouponUserLog_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOldPmsOrderInfo_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdateActivitySync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_addOrUpdateCommandSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_addOrUpdateConfig_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addOrUpdateCouponGroupSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_addOrUpdateCouponRuleSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_addOrUpdateCouponSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_addOrUpdatePaySync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_addOrUpdatePrepayInfoSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_addOrUpdateSpecialSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_addOrUpdateSurprisePriceActivitySync_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_addPayUserLog_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_addSpecialUserLog_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_batchModifyCouponTime_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_buildAllActivityIndex_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelActivitySync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_cancelCommandSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_cancelOrOfflineCouponGroupSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_cancelOrOfflineCouponRuleSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_cancelOrOfflineCouponSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_cancelOrder_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_cancelPaySync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_cancelSpecialSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_cancelSurprisePriceActivitySync_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_check_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\CheckResult();
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




class PmsDataService_couponActivate_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\CouponResResult();
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




class PmsDataService_couponBind_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\CouponResResult();
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




class PmsDataService_couponGroupActivate_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\CouponResResult();
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




class PmsDataService_couponGroupBind_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\CouponResResult();
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




class PmsDataService_delGoodsOriginalPrice_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_delGoodsSurprisePrice_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_deleteConfig_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_deletePrepayInfoByMidSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_deletePrepayInfoSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_exportCoupon_result {
	
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
					
					$elem0 = new \com\vip\pms\data\service\ExportRespModel();
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




class PmsDataService_exportCouponGroup_result {
	
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
					
					$elem1 = new \com\vip\pms\data\service\ExportRespModel();
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




class PmsDataService_fetchCommandOrderNos_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\OrderNosResult();
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




class PmsDataService_fetchOrder_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\OrderResult();
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




class PmsDataService_flushCouponRuleIndexSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_flushGoodsOriginalPrice_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_flushGoodsSurprisePrice_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_getConfig_result {
	
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
					
					$elem0 = new \com\vip\pms\data\service\AdminConfigModel();
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




class PmsDataService_getTypeConfig_result {
	
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
					
					$elem1 = new \com\vip\pms\data\service\AdminConfigModel();
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




class PmsDataService_healthCheck_result {
	
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




class PmsDataService_modifyCacheSwitchStatus_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_modifyCouponTime_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_modifyCouponTimeByUserIds_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_multiBind_result {
	
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
					
					$elem0 = new \com\vip\pms\data\coupon\model\CouponMultiBindResponse();
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




class PmsDataService_multiBindSyncMode_result {
	
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
					
					$elem1 = new \com\vip\pms\data\coupon\model\CouponMultiBindResponse();
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




class PmsDataService_offlineActivityCallback_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_offlineActivitySync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_offlineCommandSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_offlinePaySync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_offlinePrepayInfoSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_offlineSpecialSync_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_offlineSurprisePriceActivitySync_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_prepareActivity_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\model\sync\PrepareActivityResult();
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




class PmsDataService_prepareSpecial_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\model\sync\PrepareActivityResult();
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




class PmsDataService_publishRollbackUseCouponMsg_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_pushOfflineActivities_result {
	
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
			
			
			$this->success = new \com\vip\pms\data\service\SyncResult();
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




class PmsDataService_queryConfirmationNo_result {
	
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
					
					$elem0 = new \com\vip\pms\data\service\ConfirmationResult();
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




class PmsDataService_queryCouponInstanceStat_result {
	
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
					
					$elem1 = new \com\vip\pms\data\service\CouponInstanceStatResponse();
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




class PmsDataService_queryGoodsFavAmount_result {
	
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
					
					$elem1 = new \com\vip\pms\data\service\OrderFavDetailResult();
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




class PmsDataService_refreshOrder_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_returnCoupon_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_saveActPromotionObject_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_saveActivity_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_saveSpecial_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_saveSpecialPromotionObject_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_submitSMSendingRequest_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_syncAllActivityIndex_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncAllCacheByCacheType_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncAllGoodsOriginalPrice_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_syncAllGoodsSurprisePrice_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_syncBiPush_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncBlacklistNew_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncCacheByActivityNosAndCacheType_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_syncPayBlackList_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PmsDataService_updateActPromotionObject_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_updateActivityBaseInfo_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_updateSpecialBaseInfo_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class PmsDataService_updateSpecialPromotionObject_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




?>