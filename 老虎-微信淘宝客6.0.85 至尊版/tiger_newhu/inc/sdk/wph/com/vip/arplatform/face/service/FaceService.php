<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\face\service;
interface FaceServiceIf{
	
	
	public function faceCartoon( $imageInPath, $faceUrl, $facelessUrl, $cr, $cb, $point);
	
	public function faceSimilarity( $image_url1, $image_url2);
	
	public function facesetCreate( $faceset_key, $image_urls);
	
	public function facesetDelete( $faceset_key, $image_urls);
	
	public function facesetStatus( $faceset_key);
	
	public function facesetUpdate( $faceset_key, $image_urls);
	
	public function getCrCb( $facelessUrl, $point);
	
	public function getFacesetUrl( $faceset_key);
	
	public function getSearchResult( $token);
	
	public function getSearchWithFeaturesResult(\com\vip\arplatform\face\service\GetSearchWithFeaturesParamResultModel $getSearchWithFeaturesParamResultModel);
	
	public function healthCheck();
	
	public function imageStylize( $imageInPath, $type);
	
	public function search( $faceset_key, $image_url, $results_count, $asynchronization);
	
	public function searchWithFeatures(\com\vip\arplatform\face\service\SearchWithFeaturesParamModel $searchWithFeaturesParamModel);
	
	public function shapeSimilarity( $img_src, $img_target);
	
}

class _FaceServiceClient extends \Osp\Base\OspStub implements \com\vip\arplatform\face\service\FaceServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.arplatform.face.service.FaceService", "1.0.0");
	}
	
	
	public function faceCartoon( $imageInPath, $faceUrl, $facelessUrl, $cr, $cb, $point){
		
		$this->send_faceCartoon( $imageInPath, $faceUrl, $facelessUrl, $cr, $cb, $point);
		return $this->recv_faceCartoon();
	}
	
	public function send_faceCartoon( $imageInPath, $faceUrl, $facelessUrl, $cr, $cb, $point){
		
		$this->initInvocation("faceCartoon");
		$args = new \com\vip\arplatform\face\service\FaceService_faceCartoon_args();
		
		$args->imageInPath = $imageInPath;
		
		$args->faceUrl = $faceUrl;
		
		$args->facelessUrl = $facelessUrl;
		
		$args->cr = $cr;
		
		$args->cb = $cb;
		
		$args->point = $point;
		
		$this->send_base($args);
	}
	
	public function recv_faceCartoon(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_faceCartoon_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function faceSimilarity( $image_url1, $image_url2){
		
		$this->send_faceSimilarity( $image_url1, $image_url2);
		return $this->recv_faceSimilarity();
	}
	
	public function send_faceSimilarity( $image_url1, $image_url2){
		
		$this->initInvocation("faceSimilarity");
		$args = new \com\vip\arplatform\face\service\FaceService_faceSimilarity_args();
		
		$args->image_url1 = $image_url1;
		
		$args->image_url2 = $image_url2;
		
		$this->send_base($args);
	}
	
	public function recv_faceSimilarity(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_faceSimilarity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function facesetCreate( $faceset_key, $image_urls){
		
		$this->send_facesetCreate( $faceset_key, $image_urls);
		return $this->recv_facesetCreate();
	}
	
	public function send_facesetCreate( $faceset_key, $image_urls){
		
		$this->initInvocation("facesetCreate");
		$args = new \com\vip\arplatform\face\service\FaceService_facesetCreate_args();
		
		$args->faceset_key = $faceset_key;
		
		$args->image_urls = $image_urls;
		
		$this->send_base($args);
	}
	
	public function recv_facesetCreate(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_facesetCreate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function facesetDelete( $faceset_key, $image_urls){
		
		$this->send_facesetDelete( $faceset_key, $image_urls);
		return $this->recv_facesetDelete();
	}
	
	public function send_facesetDelete( $faceset_key, $image_urls){
		
		$this->initInvocation("facesetDelete");
		$args = new \com\vip\arplatform\face\service\FaceService_facesetDelete_args();
		
		$args->faceset_key = $faceset_key;
		
		$args->image_urls = $image_urls;
		
		$this->send_base($args);
	}
	
	public function recv_facesetDelete(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_facesetDelete_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function facesetStatus( $faceset_key){
		
		$this->send_facesetStatus( $faceset_key);
		return $this->recv_facesetStatus();
	}
	
	public function send_facesetStatus( $faceset_key){
		
		$this->initInvocation("facesetStatus");
		$args = new \com\vip\arplatform\face\service\FaceService_facesetStatus_args();
		
		$args->faceset_key = $faceset_key;
		
		$this->send_base($args);
	}
	
	public function recv_facesetStatus(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_facesetStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function facesetUpdate( $faceset_key, $image_urls){
		
		$this->send_facesetUpdate( $faceset_key, $image_urls);
		return $this->recv_facesetUpdate();
	}
	
	public function send_facesetUpdate( $faceset_key, $image_urls){
		
		$this->initInvocation("facesetUpdate");
		$args = new \com\vip\arplatform\face\service\FaceService_facesetUpdate_args();
		
		$args->faceset_key = $faceset_key;
		
		$args->image_urls = $image_urls;
		
		$this->send_base($args);
	}
	
	public function recv_facesetUpdate(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_facesetUpdate_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCrCb( $facelessUrl, $point){
		
		$this->send_getCrCb( $facelessUrl, $point);
		return $this->recv_getCrCb();
	}
	
	public function send_getCrCb( $facelessUrl, $point){
		
		$this->initInvocation("getCrCb");
		$args = new \com\vip\arplatform\face\service\FaceService_getCrCb_args();
		
		$args->facelessUrl = $facelessUrl;
		
		$args->point = $point;
		
		$this->send_base($args);
	}
	
	public function recv_getCrCb(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_getCrCb_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getFacesetUrl( $faceset_key){
		
		$this->send_getFacesetUrl( $faceset_key);
		return $this->recv_getFacesetUrl();
	}
	
	public function send_getFacesetUrl( $faceset_key){
		
		$this->initInvocation("getFacesetUrl");
		$args = new \com\vip\arplatform\face\service\FaceService_getFacesetUrl_args();
		
		$args->faceset_key = $faceset_key;
		
		$this->send_base($args);
	}
	
	public function recv_getFacesetUrl(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_getFacesetUrl_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSearchResult( $token){
		
		$this->send_getSearchResult( $token);
		return $this->recv_getSearchResult();
	}
	
	public function send_getSearchResult( $token){
		
		$this->initInvocation("getSearchResult");
		$args = new \com\vip\arplatform\face\service\FaceService_getSearchResult_args();
		
		$args->token = $token;
		
		$this->send_base($args);
	}
	
	public function recv_getSearchResult(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_getSearchResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSearchWithFeaturesResult(\com\vip\arplatform\face\service\GetSearchWithFeaturesParamResultModel $getSearchWithFeaturesParamResultModel){
		
		$this->send_getSearchWithFeaturesResult( $getSearchWithFeaturesParamResultModel);
		return $this->recv_getSearchWithFeaturesResult();
	}
	
	public function send_getSearchWithFeaturesResult(\com\vip\arplatform\face\service\GetSearchWithFeaturesParamResultModel $getSearchWithFeaturesParamResultModel){
		
		$this->initInvocation("getSearchWithFeaturesResult");
		$args = new \com\vip\arplatform\face\service\FaceService_getSearchWithFeaturesResult_args();
		
		$args->getSearchWithFeaturesParamResultModel = $getSearchWithFeaturesParamResultModel;
		
		$this->send_base($args);
	}
	
	public function recv_getSearchWithFeaturesResult(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_getSearchWithFeaturesResult_result();
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
		$args = new \com\vip\arplatform\face\service\FaceService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function imageStylize( $imageInPath, $type){
		
		$this->send_imageStylize( $imageInPath, $type);
		return $this->recv_imageStylize();
	}
	
	public function send_imageStylize( $imageInPath, $type){
		
		$this->initInvocation("imageStylize");
		$args = new \com\vip\arplatform\face\service\FaceService_imageStylize_args();
		
		$args->imageInPath = $imageInPath;
		
		$args->type = $type;
		
		$this->send_base($args);
	}
	
	public function recv_imageStylize(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_imageStylize_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function search( $faceset_key, $image_url, $results_count, $asynchronization){
		
		$this->send_search( $faceset_key, $image_url, $results_count, $asynchronization);
		return $this->recv_search();
	}
	
	public function send_search( $faceset_key, $image_url, $results_count, $asynchronization){
		
		$this->initInvocation("search");
		$args = new \com\vip\arplatform\face\service\FaceService_search_args();
		
		$args->faceset_key = $faceset_key;
		
		$args->image_url = $image_url;
		
		$args->results_count = $results_count;
		
		$args->asynchronization = $asynchronization;
		
		$this->send_base($args);
	}
	
	public function recv_search(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_search_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function searchWithFeatures(\com\vip\arplatform\face\service\SearchWithFeaturesParamModel $searchWithFeaturesParamModel){
		
		$this->send_searchWithFeatures( $searchWithFeaturesParamModel);
		return $this->recv_searchWithFeatures();
	}
	
	public function send_searchWithFeatures(\com\vip\arplatform\face\service\SearchWithFeaturesParamModel $searchWithFeaturesParamModel){
		
		$this->initInvocation("searchWithFeatures");
		$args = new \com\vip\arplatform\face\service\FaceService_searchWithFeatures_args();
		
		$args->searchWithFeaturesParamModel = $searchWithFeaturesParamModel;
		
		$this->send_base($args);
	}
	
	public function recv_searchWithFeatures(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_searchWithFeatures_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function shapeSimilarity( $img_src, $img_target){
		
		$this->send_shapeSimilarity( $img_src, $img_target);
		return $this->recv_shapeSimilarity();
	}
	
	public function send_shapeSimilarity( $img_src, $img_target){
		
		$this->initInvocation("shapeSimilarity");
		$args = new \com\vip\arplatform\face\service\FaceService_shapeSimilarity_args();
		
		$args->img_src = $img_src;
		
		$args->img_target = $img_target;
		
		$this->send_base($args);
	}
	
	public function recv_shapeSimilarity(){
		
		$result = new \com\vip\arplatform\face\service\FaceService_shapeSimilarity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class FaceService_faceCartoon_args {
	
	static $_TSPEC;
	public $imageInPath = null;
	public $faceUrl = null;
	public $facelessUrl = null;
	public $cr = null;
	public $cb = null;
	public $point = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'imageInPath'
			),
			2 => array(
			'var' => 'faceUrl'
			),
			3 => array(
			'var' => 'facelessUrl'
			),
			4 => array(
			'var' => 'cr'
			),
			5 => array(
			'var' => 'cb'
			),
			6 => array(
			'var' => 'point'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['imageInPath'])){
				
				$this->imageInPath = $vals['imageInPath'];
			}
			
			
			if (isset($vals['faceUrl'])){
				
				$this->faceUrl = $vals['faceUrl'];
			}
			
			
			if (isset($vals['facelessUrl'])){
				
				$this->facelessUrl = $vals['facelessUrl'];
			}
			
			
			if (isset($vals['cr'])){
				
				$this->cr = $vals['cr'];
			}
			
			
			if (isset($vals['cb'])){
				
				$this->cb = $vals['cb'];
			}
			
			
			if (isset($vals['point'])){
				
				$this->point = $vals['point'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->imageInPath);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->faceUrl);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->facelessUrl);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->cr); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->cb); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->point);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('imageInPath');
		$xfer += $output->writeString($this->imageInPath);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('faceUrl');
		$xfer += $output->writeString($this->faceUrl);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('facelessUrl');
		$xfer += $output->writeString($this->facelessUrl);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cr !== null) {
			
			$xfer += $output->writeFieldBegin('cr');
			$xfer += $output->writeI32($this->cr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cb !== null) {
			
			$xfer += $output->writeFieldBegin('cb');
			$xfer += $output->writeI32($this->cb);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('point');
		$xfer += $output->writeString($this->point);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_faceSimilarity_args {
	
	static $_TSPEC;
	public $image_url1 = null;
	public $image_url2 = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'image_url1'
			),
			2 => array(
			'var' => 'image_url2'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['image_url1'])){
				
				$this->image_url1 = $vals['image_url1'];
			}
			
			
			if (isset($vals['image_url2'])){
				
				$this->image_url2 = $vals['image_url2'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->image_url1);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->image_url2);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('image_url1');
		$xfer += $output->writeString($this->image_url1);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('image_url2');
		$xfer += $output->writeString($this->image_url2);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_facesetCreate_args {
	
	static $_TSPEC;
	public $faceset_key = null;
	public $image_urls = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'faceset_key'
			),
			2 => array(
			'var' => 'image_urls'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['faceset_key'])){
				
				$this->faceset_key = $vals['faceset_key'];
			}
			
			
			if (isset($vals['image_urls'])){
				
				$this->image_urls = $vals['image_urls'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->faceset_key);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->image_urls);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('faceset_key');
		$xfer += $output->writeString($this->faceset_key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('image_urls');
		$xfer += $output->writeString($this->image_urls);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_facesetDelete_args {
	
	static $_TSPEC;
	public $faceset_key = null;
	public $image_urls = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'faceset_key'
			),
			2 => array(
			'var' => 'image_urls'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['faceset_key'])){
				
				$this->faceset_key = $vals['faceset_key'];
			}
			
			
			if (isset($vals['image_urls'])){
				
				$this->image_urls = $vals['image_urls'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->faceset_key);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->image_urls);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('faceset_key');
		$xfer += $output->writeString($this->faceset_key);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->image_urls !== null) {
			
			$xfer += $output->writeFieldBegin('image_urls');
			$xfer += $output->writeString($this->image_urls);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_facesetStatus_args {
	
	static $_TSPEC;
	public $faceset_key = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'faceset_key'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['faceset_key'])){
				
				$this->faceset_key = $vals['faceset_key'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->faceset_key);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('faceset_key');
		$xfer += $output->writeString($this->faceset_key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_facesetUpdate_args {
	
	static $_TSPEC;
	public $faceset_key = null;
	public $image_urls = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'faceset_key'
			),
			2 => array(
			'var' => 'image_urls'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['faceset_key'])){
				
				$this->faceset_key = $vals['faceset_key'];
			}
			
			
			if (isset($vals['image_urls'])){
				
				$this->image_urls = $vals['image_urls'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->faceset_key);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->image_urls);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('faceset_key');
		$xfer += $output->writeString($this->faceset_key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('image_urls');
		$xfer += $output->writeString($this->image_urls);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_getCrCb_args {
	
	static $_TSPEC;
	public $facelessUrl = null;
	public $point = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'facelessUrl'
			),
			2 => array(
			'var' => 'point'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['facelessUrl'])){
				
				$this->facelessUrl = $vals['facelessUrl'];
			}
			
			
			if (isset($vals['point'])){
				
				$this->point = $vals['point'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->facelessUrl);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->point);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('facelessUrl');
		$xfer += $output->writeString($this->facelessUrl);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('point');
		$xfer += $output->writeString($this->point);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_getFacesetUrl_args {
	
	static $_TSPEC;
	public $faceset_key = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'faceset_key'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['faceset_key'])){
				
				$this->faceset_key = $vals['faceset_key'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->faceset_key);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('faceset_key');
		$xfer += $output->writeString($this->faceset_key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_getSearchResult_args {
	
	static $_TSPEC;
	public $token = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'token'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['token'])){
				
				$this->token = $vals['token'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->token);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('token');
		$xfer += $output->writeString($this->token);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_getSearchWithFeaturesResult_args {
	
	static $_TSPEC;
	public $getSearchWithFeaturesParamResultModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getSearchWithFeaturesParamResultModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getSearchWithFeaturesParamResultModel'])){
				
				$this->getSearchWithFeaturesParamResultModel = $vals['getSearchWithFeaturesParamResultModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getSearchWithFeaturesParamResultModel = new \com\vip\arplatform\face\service\GetSearchWithFeaturesParamResultModel();
			$this->getSearchWithFeaturesParamResultModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('getSearchWithFeaturesParamResultModel');
		
		if (!is_object($this->getSearchWithFeaturesParamResultModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->getSearchWithFeaturesParamResultModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_healthCheck_args {
	
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




class FaceService_imageStylize_args {
	
	static $_TSPEC;
	public $imageInPath = null;
	public $type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'imageInPath'
			),
			2 => array(
			'var' => 'type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['imageInPath'])){
				
				$this->imageInPath = $vals['imageInPath'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->imageInPath);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->type);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('imageInPath');
		$xfer += $output->writeString($this->imageInPath);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_search_args {
	
	static $_TSPEC;
	public $faceset_key = null;
	public $image_url = null;
	public $results_count = null;
	public $asynchronization = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'faceset_key'
			),
			2 => array(
			'var' => 'image_url'
			),
			3 => array(
			'var' => 'results_count'
			),
			4 => array(
			'var' => 'asynchronization'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['faceset_key'])){
				
				$this->faceset_key = $vals['faceset_key'];
			}
			
			
			if (isset($vals['image_url'])){
				
				$this->image_url = $vals['image_url'];
			}
			
			
			if (isset($vals['results_count'])){
				
				$this->results_count = $vals['results_count'];
			}
			
			
			if (isset($vals['asynchronization'])){
				
				$this->asynchronization = $vals['asynchronization'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->faceset_key);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->image_url);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->results_count); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->asynchronization); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('faceset_key');
		$xfer += $output->writeString($this->faceset_key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('image_url');
		$xfer += $output->writeString($this->image_url);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('results_count');
		$xfer += $output->writeI32($this->results_count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('asynchronization');
		$xfer += $output->writeI32($this->asynchronization);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_searchWithFeatures_args {
	
	static $_TSPEC;
	public $searchWithFeaturesParamModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'searchWithFeaturesParamModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['searchWithFeaturesParamModel'])){
				
				$this->searchWithFeaturesParamModel = $vals['searchWithFeaturesParamModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->searchWithFeaturesParamModel = new \com\vip\arplatform\face\service\SearchWithFeaturesParamModel();
			$this->searchWithFeaturesParamModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('searchWithFeaturesParamModel');
		
		if (!is_object($this->searchWithFeaturesParamModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->searchWithFeaturesParamModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_shapeSimilarity_args {
	
	static $_TSPEC;
	public $img_src = null;
	public $img_target = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'img_src'
			),
			2 => array(
			'var' => 'img_target'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['img_src'])){
				
				$this->img_src = $vals['img_src'];
			}
			
			
			if (isset($vals['img_target'])){
				
				$this->img_target = $vals['img_target'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->img_src);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->img_target);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('img_src');
		$xfer += $output->writeString($this->img_src);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('img_target');
		$xfer += $output->writeString($this->img_target);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_faceCartoon_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\CartoonModel();
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




class FaceService_faceSimilarity_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\FacesetCompareResult();
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




class FaceService_facesetCreate_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\FacesetCreateModel();
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




class FaceService_facesetDelete_result {
	
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
					$input->readString($elem0);
					
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
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_facesetStatus_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\FacesetCreateModel();
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




class FaceService_facesetUpdate_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\FacesetCreateModel();
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




class FaceService_getCrCb_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\CrCbModel();
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




class FaceService_getFacesetUrl_result {
	
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
					$input->readString($elem0);
					
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
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class FaceService_getSearchResult_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\CompareResponse();
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




class FaceService_getSearchWithFeaturesResult_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\SearchWithFeaturesResultModel();
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




class FaceService_healthCheck_result {
	
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




class FaceService_imageStylize_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\ImageStylizationModel();
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




class FaceService_search_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\CompareResponse();
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




class FaceService_searchWithFeatures_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\SearchWithFeaturesResultModel();
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




class FaceService_shapeSimilarity_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\face\service\ShapeSimilarityModel();
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