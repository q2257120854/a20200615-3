<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;
interface VendorProductServiceIf{
	
	
	public function appendSkus( $vendor_id, $sn, $brand_id, $sku_item_list);
	
	public function autoBindVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn, $sizetable_tpl_id);
	
	public function batchBindVendorProductImages( $vendor_id, $brand_id, $sn, $url_map, $group_sn);
	
	public function batchUploadAndBindVendorProductImage( $vendor_id, $brand_id, $sn, $product_image_map, $group_sn);
	
	public function cancelProductSubmission( $vendor_id, $snList);
	
	public function createProduct( $vendor_id, $vendor_products);
	
	public function createProductForMultiColor( $vendor_id, $spu_item_list);
	
	public function deleteVendorImageRelationship( $vendor_id, $brand_id, $sn, $img_index_list, $group_sn);
	
	public function deleteVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn);
	
	public function editProduct( $vendor_id, $vendor_products);
	
	public function editProductForMultiColor( $vendor_id, $sn, $brand_id,\vipapis\product\EditSpuItem $edit_spu_item_list);
	
	public function getProductPreviewData( $vendor_id, $brand_id, $sn, $group_sn);
	
	public function getProductPreviewUrl( $vendor_id, $brand_id, $sn, $group_sn);
	
	public function getRealVendorSkuByBarcode( $vendor_id, $barcode, $source);
	
	public function getSpuBySnVendorIdAndBrandId( $sn, $vendor_id, $brand_id, $source);
	
	public function getVendorImageRelationshipTaskStatus( $task_id_list);
	
	public function healthCheck();
	
	public function multiGetProductSkuInfo( $vendor_id, $barcode, $brand_id, $category_id, $sn, $page, $limit, $source);
	
	public function multiGetProductSpuInfo( $vendor_id, $brand_id, $category_id, $sn, $status, $page, $limit, $source);
	
	public function saveVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn, $size_table_id, $sku_size_detail_id_mappings);
	
	public function submitProducts( $vendor_id, $vendor_productSN_list);
	
	public function uploadAndBindVendorProductImage( $vendor_id, $brand_id, $sn, $img_index, $img_content, $group_sn);
	
	public function uploadImage( $vendor_id, $file_name, $is_override, $img_content);
	
	public function uploadVendorProductImage( $vendor_id, $brand_id, $sn, $product_image_map, $group_sn);
	
}

class _VendorProductServiceClient extends \Osp\Base\OspStub implements \vipapis\product\VendorProductServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.product.VendorProductService", "1.0.0");
	}
	
	
	public function appendSkus( $vendor_id, $sn, $brand_id, $sku_item_list){
		
		$this->send_appendSkus( $vendor_id, $sn, $brand_id, $sku_item_list);
		return $this->recv_appendSkus();
	}
	
	public function send_appendSkus( $vendor_id, $sn, $brand_id, $sku_item_list){
		
		$this->initInvocation("appendSkus");
		$args = new \vipapis\product\VendorProductService_appendSkus_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->sn = $sn;
		
		$args->brand_id = $brand_id;
		
		$args->sku_item_list = $sku_item_list;
		
		$this->send_base($args);
	}
	
	public function recv_appendSkus(){
		
		$result = new \vipapis\product\VendorProductService_appendSkus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function autoBindVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn, $sizetable_tpl_id){
		
		$this->send_autoBindVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn, $sizetable_tpl_id);
		return $this->recv_autoBindVendorProductSizeTableRelationship();
	}
	
	public function send_autoBindVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn, $sizetable_tpl_id){
		
		$this->initInvocation("autoBindVendorProductSizeTableRelationship");
		$args = new \vipapis\product\VendorProductService_autoBindVendorProductSizeTableRelationship_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$args->sizetable_tpl_id = $sizetable_tpl_id;
		
		$this->send_base($args);
	}
	
	public function recv_autoBindVendorProductSizeTableRelationship(){
		
		$result = new \vipapis\product\VendorProductService_autoBindVendorProductSizeTableRelationship_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchBindVendorProductImages( $vendor_id, $brand_id, $sn, $url_map, $group_sn){
		
		$this->send_batchBindVendorProductImages( $vendor_id, $brand_id, $sn, $url_map, $group_sn);
		return $this->recv_batchBindVendorProductImages();
	}
	
	public function send_batchBindVendorProductImages( $vendor_id, $brand_id, $sn, $url_map, $group_sn){
		
		$this->initInvocation("batchBindVendorProductImages");
		$args = new \vipapis\product\VendorProductService_batchBindVendorProductImages_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$args->url_map = $url_map;
		
		$args->group_sn = $group_sn;
		
		$this->send_base($args);
	}
	
	public function recv_batchBindVendorProductImages(){
		
		$result = new \vipapis\product\VendorProductService_batchBindVendorProductImages_result();
		$this->receive_base($result);
		
	}
	
	
	public function batchUploadAndBindVendorProductImage( $vendor_id, $brand_id, $sn, $product_image_map, $group_sn){
		
		$this->send_batchUploadAndBindVendorProductImage( $vendor_id, $brand_id, $sn, $product_image_map, $group_sn);
		return $this->recv_batchUploadAndBindVendorProductImage();
	}
	
	public function send_batchUploadAndBindVendorProductImage( $vendor_id, $brand_id, $sn, $product_image_map, $group_sn){
		
		$this->initInvocation("batchUploadAndBindVendorProductImage");
		$args = new \vipapis\product\VendorProductService_batchUploadAndBindVendorProductImage_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$args->product_image_map = $product_image_map;
		
		$args->group_sn = $group_sn;
		
		$this->send_base($args);
	}
	
	public function recv_batchUploadAndBindVendorProductImage(){
		
		$result = new \vipapis\product\VendorProductService_batchUploadAndBindVendorProductImage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function cancelProductSubmission( $vendor_id, $snList){
		
		$this->send_cancelProductSubmission( $vendor_id, $snList);
		return $this->recv_cancelProductSubmission();
	}
	
	public function send_cancelProductSubmission( $vendor_id, $snList){
		
		$this->initInvocation("cancelProductSubmission");
		$args = new \vipapis\product\VendorProductService_cancelProductSubmission_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->snList = $snList;
		
		$this->send_base($args);
	}
	
	public function recv_cancelProductSubmission(){
		
		$result = new \vipapis\product\VendorProductService_cancelProductSubmission_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createProduct( $vendor_id, $vendor_products){
		
		$this->send_createProduct( $vendor_id, $vendor_products);
		return $this->recv_createProduct();
	}
	
	public function send_createProduct( $vendor_id, $vendor_products){
		
		$this->initInvocation("createProduct");
		$args = new \vipapis\product\VendorProductService_createProduct_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->vendor_products = $vendor_products;
		
		$this->send_base($args);
	}
	
	public function recv_createProduct(){
		
		$result = new \vipapis\product\VendorProductService_createProduct_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createProductForMultiColor( $vendor_id, $spu_item_list){
		
		$this->send_createProductForMultiColor( $vendor_id, $spu_item_list);
		return $this->recv_createProductForMultiColor();
	}
	
	public function send_createProductForMultiColor( $vendor_id, $spu_item_list){
		
		$this->initInvocation("createProductForMultiColor");
		$args = new \vipapis\product\VendorProductService_createProductForMultiColor_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->spu_item_list = $spu_item_list;
		
		$this->send_base($args);
	}
	
	public function recv_createProductForMultiColor(){
		
		$result = new \vipapis\product\VendorProductService_createProductForMultiColor_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteVendorImageRelationship( $vendor_id, $brand_id, $sn, $img_index_list, $group_sn){
		
		$this->send_deleteVendorImageRelationship( $vendor_id, $brand_id, $sn, $img_index_list, $group_sn);
		return $this->recv_deleteVendorImageRelationship();
	}
	
	public function send_deleteVendorImageRelationship( $vendor_id, $brand_id, $sn, $img_index_list, $group_sn){
		
		$this->initInvocation("deleteVendorImageRelationship");
		$args = new \vipapis\product\VendorProductService_deleteVendorImageRelationship_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$args->img_index_list = $img_index_list;
		
		$args->group_sn = $group_sn;
		
		$this->send_base($args);
	}
	
	public function recv_deleteVendorImageRelationship(){
		
		$result = new \vipapis\product\VendorProductService_deleteVendorImageRelationship_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn){
		
		$this->send_deleteVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn);
		return $this->recv_deleteVendorProductSizeTableRelationship();
	}
	
	public function send_deleteVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn){
		
		$this->initInvocation("deleteVendorProductSizeTableRelationship");
		$args = new \vipapis\product\VendorProductService_deleteVendorProductSizeTableRelationship_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$this->send_base($args);
	}
	
	public function recv_deleteVendorProductSizeTableRelationship(){
		
		$result = new \vipapis\product\VendorProductService_deleteVendorProductSizeTableRelationship_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function editProduct( $vendor_id, $vendor_products){
		
		$this->send_editProduct( $vendor_id, $vendor_products);
		return $this->recv_editProduct();
	}
	
	public function send_editProduct( $vendor_id, $vendor_products){
		
		$this->initInvocation("editProduct");
		$args = new \vipapis\product\VendorProductService_editProduct_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->vendor_products = $vendor_products;
		
		$this->send_base($args);
	}
	
	public function recv_editProduct(){
		
		$result = new \vipapis\product\VendorProductService_editProduct_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function editProductForMultiColor( $vendor_id, $sn, $brand_id,\vipapis\product\EditSpuItem $edit_spu_item_list){
		
		$this->send_editProductForMultiColor( $vendor_id, $sn, $brand_id, $edit_spu_item_list);
		return $this->recv_editProductForMultiColor();
	}
	
	public function send_editProductForMultiColor( $vendor_id, $sn, $brand_id,\vipapis\product\EditSpuItem $edit_spu_item_list){
		
		$this->initInvocation("editProductForMultiColor");
		$args = new \vipapis\product\VendorProductService_editProductForMultiColor_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->sn = $sn;
		
		$args->brand_id = $brand_id;
		
		$args->edit_spu_item_list = $edit_spu_item_list;
		
		$this->send_base($args);
	}
	
	public function recv_editProductForMultiColor(){
		
		$result = new \vipapis\product\VendorProductService_editProductForMultiColor_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProductPreviewData( $vendor_id, $brand_id, $sn, $group_sn){
		
		$this->send_getProductPreviewData( $vendor_id, $brand_id, $sn, $group_sn);
		return $this->recv_getProductPreviewData();
	}
	
	public function send_getProductPreviewData( $vendor_id, $brand_id, $sn, $group_sn){
		
		$this->initInvocation("getProductPreviewData");
		$args = new \vipapis\product\VendorProductService_getProductPreviewData_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$args->group_sn = $group_sn;
		
		$this->send_base($args);
	}
	
	public function recv_getProductPreviewData(){
		
		$result = new \vipapis\product\VendorProductService_getProductPreviewData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProductPreviewUrl( $vendor_id, $brand_id, $sn, $group_sn){
		
		$this->send_getProductPreviewUrl( $vendor_id, $brand_id, $sn, $group_sn);
		return $this->recv_getProductPreviewUrl();
	}
	
	public function send_getProductPreviewUrl( $vendor_id, $brand_id, $sn, $group_sn){
		
		$this->initInvocation("getProductPreviewUrl");
		$args = new \vipapis\product\VendorProductService_getProductPreviewUrl_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$args->group_sn = $group_sn;
		
		$this->send_base($args);
	}
	
	public function recv_getProductPreviewUrl(){
		
		$result = new \vipapis\product\VendorProductService_getProductPreviewUrl_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getRealVendorSkuByBarcode( $vendor_id, $barcode, $source){
		
		$this->send_getRealVendorSkuByBarcode( $vendor_id, $barcode, $source);
		return $this->recv_getRealVendorSkuByBarcode();
	}
	
	public function send_getRealVendorSkuByBarcode( $vendor_id, $barcode, $source){
		
		$this->initInvocation("getRealVendorSkuByBarcode");
		$args = new \vipapis\product\VendorProductService_getRealVendorSkuByBarcode_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->barcode = $barcode;
		
		$args->source = $source;
		
		$this->send_base($args);
	}
	
	public function recv_getRealVendorSkuByBarcode(){
		
		$result = new \vipapis\product\VendorProductService_getRealVendorSkuByBarcode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSpuBySnVendorIdAndBrandId( $sn, $vendor_id, $brand_id, $source){
		
		$this->send_getSpuBySnVendorIdAndBrandId( $sn, $vendor_id, $brand_id, $source);
		return $this->recv_getSpuBySnVendorIdAndBrandId();
	}
	
	public function send_getSpuBySnVendorIdAndBrandId( $sn, $vendor_id, $brand_id, $source){
		
		$this->initInvocation("getSpuBySnVendorIdAndBrandId");
		$args = new \vipapis\product\VendorProductService_getSpuBySnVendorIdAndBrandId_args();
		
		$args->sn = $sn;
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->source = $source;
		
		$this->send_base($args);
	}
	
	public function recv_getSpuBySnVendorIdAndBrandId(){
		
		$result = new \vipapis\product\VendorProductService_getSpuBySnVendorIdAndBrandId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getVendorImageRelationshipTaskStatus( $task_id_list){
		
		$this->send_getVendorImageRelationshipTaskStatus( $task_id_list);
		return $this->recv_getVendorImageRelationshipTaskStatus();
	}
	
	public function send_getVendorImageRelationshipTaskStatus( $task_id_list){
		
		$this->initInvocation("getVendorImageRelationshipTaskStatus");
		$args = new \vipapis\product\VendorProductService_getVendorImageRelationshipTaskStatus_args();
		
		$args->task_id_list = $task_id_list;
		
		$this->send_base($args);
	}
	
	public function recv_getVendorImageRelationshipTaskStatus(){
		
		$result = new \vipapis\product\VendorProductService_getVendorImageRelationshipTaskStatus_result();
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
		$args = new \vipapis\product\VendorProductService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\product\VendorProductService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function multiGetProductSkuInfo( $vendor_id, $barcode, $brand_id, $category_id, $sn, $page, $limit, $source){
		
		$this->send_multiGetProductSkuInfo( $vendor_id, $barcode, $brand_id, $category_id, $sn, $page, $limit, $source);
		return $this->recv_multiGetProductSkuInfo();
	}
	
	public function send_multiGetProductSkuInfo( $vendor_id, $barcode, $brand_id, $category_id, $sn, $page, $limit, $source){
		
		$this->initInvocation("multiGetProductSkuInfo");
		$args = new \vipapis\product\VendorProductService_multiGetProductSkuInfo_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->barcode = $barcode;
		
		$args->brand_id = $brand_id;
		
		$args->category_id = $category_id;
		
		$args->sn = $sn;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->source = $source;
		
		$this->send_base($args);
	}
	
	public function recv_multiGetProductSkuInfo(){
		
		$result = new \vipapis\product\VendorProductService_multiGetProductSkuInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function multiGetProductSpuInfo( $vendor_id, $brand_id, $category_id, $sn, $status, $page, $limit, $source){
		
		$this->send_multiGetProductSpuInfo( $vendor_id, $brand_id, $category_id, $sn, $status, $page, $limit, $source);
		return $this->recv_multiGetProductSpuInfo();
	}
	
	public function send_multiGetProductSpuInfo( $vendor_id, $brand_id, $category_id, $sn, $status, $page, $limit, $source){
		
		$this->initInvocation("multiGetProductSpuInfo");
		$args = new \vipapis\product\VendorProductService_multiGetProductSpuInfo_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->category_id = $category_id;
		
		$args->sn = $sn;
		
		$args->status = $status;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->source = $source;
		
		$this->send_base($args);
	}
	
	public function recv_multiGetProductSpuInfo(){
		
		$result = new \vipapis\product\VendorProductService_multiGetProductSpuInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn, $size_table_id, $sku_size_detail_id_mappings){
		
		$this->send_saveVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn, $size_table_id, $sku_size_detail_id_mappings);
		return $this->recv_saveVendorProductSizeTableRelationship();
	}
	
	public function send_saveVendorProductSizeTableRelationship( $vendor_id, $brand_id, $sn, $size_table_id, $sku_size_detail_id_mappings){
		
		$this->initInvocation("saveVendorProductSizeTableRelationship");
		$args = new \vipapis\product\VendorProductService_saveVendorProductSizeTableRelationship_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$args->size_table_id = $size_table_id;
		
		$args->sku_size_detail_id_mappings = $sku_size_detail_id_mappings;
		
		$this->send_base($args);
	}
	
	public function recv_saveVendorProductSizeTableRelationship(){
		
		$result = new \vipapis\product\VendorProductService_saveVendorProductSizeTableRelationship_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function submitProducts( $vendor_id, $vendor_productSN_list){
		
		$this->send_submitProducts( $vendor_id, $vendor_productSN_list);
		return $this->recv_submitProducts();
	}
	
	public function send_submitProducts( $vendor_id, $vendor_productSN_list){
		
		$this->initInvocation("submitProducts");
		$args = new \vipapis\product\VendorProductService_submitProducts_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->vendor_productSN_list = $vendor_productSN_list;
		
		$this->send_base($args);
	}
	
	public function recv_submitProducts(){
		
		$result = new \vipapis\product\VendorProductService_submitProducts_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadAndBindVendorProductImage( $vendor_id, $brand_id, $sn, $img_index, $img_content, $group_sn){
		
		$this->send_uploadAndBindVendorProductImage( $vendor_id, $brand_id, $sn, $img_index, $img_content, $group_sn);
		return $this->recv_uploadAndBindVendorProductImage();
	}
	
	public function send_uploadAndBindVendorProductImage( $vendor_id, $brand_id, $sn, $img_index, $img_content, $group_sn){
		
		$this->initInvocation("uploadAndBindVendorProductImage");
		$args = new \vipapis\product\VendorProductService_uploadAndBindVendorProductImage_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$args->img_index = $img_index;
		
		$args->img_content = $img_content;
		
		$args->group_sn = $group_sn;
		
		$this->send_base($args);
	}
	
	public function recv_uploadAndBindVendorProductImage(){
		
		$result = new \vipapis\product\VendorProductService_uploadAndBindVendorProductImage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadImage( $vendor_id, $file_name, $is_override, $img_content){
		
		$this->send_uploadImage( $vendor_id, $file_name, $is_override, $img_content);
		return $this->recv_uploadImage();
	}
	
	public function send_uploadImage( $vendor_id, $file_name, $is_override, $img_content){
		
		$this->initInvocation("uploadImage");
		$args = new \vipapis\product\VendorProductService_uploadImage_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->file_name = $file_name;
		
		$args->is_override = $is_override;
		
		$args->img_content = $img_content;
		
		$this->send_base($args);
	}
	
	public function recv_uploadImage(){
		
		$result = new \vipapis\product\VendorProductService_uploadImage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadVendorProductImage( $vendor_id, $brand_id, $sn, $product_image_map, $group_sn){
		
		$this->send_uploadVendorProductImage( $vendor_id, $brand_id, $sn, $product_image_map, $group_sn);
		return $this->recv_uploadVendorProductImage();
	}
	
	public function send_uploadVendorProductImage( $vendor_id, $brand_id, $sn, $product_image_map, $group_sn){
		
		$this->initInvocation("uploadVendorProductImage");
		$args = new \vipapis\product\VendorProductService_uploadVendorProductImage_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->brand_id = $brand_id;
		
		$args->sn = $sn;
		
		$args->product_image_map = $product_image_map;
		
		$args->group_sn = $group_sn;
		
		$this->send_base($args);
	}
	
	public function recv_uploadVendorProductImage(){
		
		$result = new \vipapis\product\VendorProductService_uploadVendorProductImage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VendorProductService_appendSkus_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $sn = null;
	public $brand_id = null;
	public $sku_item_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'sn'
			),
			3 => array(
			'var' => 'brand_id'
			),
			4 => array(
			'var' => 'sku_item_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sku_item_list'])){
				
				$this->sku_item_list = $vals['sku_item_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->sku_item_list = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\product\CreateSkuItem();
					$elem0->read($input);
					
					$this->sku_item_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sku_item_list');
		
		if (!is_array($this->sku_item_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->sku_item_list as $iter0){
			
			
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




class VendorProductService_autoBindVendorProductSizeTableRelationship_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $sizetable_tpl_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'sizetable_tpl_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['sizetable_tpl_id'])){
				
				$this->sizetable_tpl_id = $vals['sizetable_tpl_id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->sizetable_tpl_id); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sizetable_tpl_id');
		$xfer += $output->writeI32($this->sizetable_tpl_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_batchBindVendorProductImages_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $url_map = null;
	public $group_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'url_map'
			),
			5 => array(
			'var' => 'group_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['url_map'])){
				
				$this->url_map = $vals['url_map'];
			}
			
			
			if (isset($vals['group_sn'])){
				
				$this->group_sn = $vals['group_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->url_map = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = 0;
					$input->readI32($key0); 
					
					$val0 = '';
					$input->readString($val0);
					
					$this->url_map[$key0] = $val0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->group_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('url_map');
		
		if (!is_array($this->url_map)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeMapBegin();
		foreach ($this->url_map as $kiter0 => $viter0){
			
			$xfer += $output->writeI32($kiter0);
			
			$xfer += $output->writeString($viter0);
			
		}
		
		$output->writeMapEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->group_sn !== null) {
			
			$xfer += $output->writeFieldBegin('group_sn');
			$xfer += $output->writeString($this->group_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_batchUploadAndBindVendorProductImage_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $product_image_map = null;
	public $group_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'product_image_map'
			),
			5 => array(
			'var' => 'group_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['product_image_map'])){
				
				$this->product_image_map = $vals['product_image_map'];
			}
			
			
			if (isset($vals['group_sn'])){
				
				$this->group_sn = $vals['group_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->product_image_map = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = 0;
					$input->readI32($key0); 
					
					$val0 = '';
					$input->readString($val0);
					
					$this->product_image_map[$key0] = $val0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->group_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('product_image_map');
		
		if (!is_array($this->product_image_map)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeMapBegin();
		foreach ($this->product_image_map as $kiter0 => $viter0){
			
			$xfer += $output->writeI32($kiter0);
			
			$xfer += $output->writeString($viter0);
			
		}
		
		$output->writeMapEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->group_sn !== null) {
			
			$xfer += $output->writeFieldBegin('group_sn');
			$xfer += $output->writeString($this->group_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_cancelProductSubmission_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $snList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'snList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['snList'])){
				
				$this->snList = $vals['snList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->snList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\product\VendorProductSN();
					$elem0->read($input);
					
					$this->snList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->snList !== null) {
			
			$xfer += $output->writeFieldBegin('snList');
			
			if (!is_array($this->snList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->snList as $iter0){
				
				
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




class VendorProductService_createProduct_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_products = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_products'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_products'])){
				
				$this->vendor_products = $vals['vendor_products'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->vendor_products = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\product\CreateProductItem();
					$elem1->read($input);
					
					$this->vendor_products[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_products');
		
		if (!is_array($this->vendor_products)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vendor_products as $iter0){
			
			
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




class VendorProductService_createProductForMultiColor_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $spu_item_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'spu_item_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['spu_item_list'])){
				
				$this->spu_item_list = $vals['spu_item_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->spu_item_list = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\product\CreateSpuItem();
					$elem1->read($input);
					
					$this->spu_item_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('spu_item_list');
		
		if (!is_array($this->spu_item_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->spu_item_list as $iter0){
			
			
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




class VendorProductService_deleteVendorImageRelationship_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $img_index_list = null;
	public $group_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'img_index_list'
			),
			5 => array(
			'var' => 'group_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['img_index_list'])){
				
				$this->img_index_list = $vals['img_index_list'];
			}
			
			
			if (isset($vals['group_sn'])){
				
				$this->group_sn = $vals['group_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->img_index_list = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->img_index_list[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->group_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('img_index_list');
		
		if (!is_array($this->img_index_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->img_index_list as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->group_sn !== null) {
			
			$xfer += $output->writeFieldBegin('group_sn');
			$xfer += $output->writeString($this->group_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_deleteVendorProductSizeTableRelationship_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_editProduct_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_products = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_products'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_products'])){
				
				$this->vendor_products = $vals['vendor_products'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->vendor_products = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\product\EditProductItem();
					$elem0->read($input);
					
					$this->vendor_products[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_products');
		
		if (!is_array($this->vendor_products)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vendor_products as $iter0){
			
			
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




class VendorProductService_editProductForMultiColor_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $sn = null;
	public $brand_id = null;
	public $edit_spu_item_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'sn'
			),
			3 => array(
			'var' => 'brand_id'
			),
			4 => array(
			'var' => 'edit_spu_item_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['edit_spu_item_list'])){
				
				$this->edit_spu_item_list = $vals['edit_spu_item_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->edit_spu_item_list = new \vipapis\product\EditSpuItem();
			$this->edit_spu_item_list->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('edit_spu_item_list');
		
		if (!is_object($this->edit_spu_item_list)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->edit_spu_item_list->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_getProductPreviewData_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $group_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'group_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['group_sn'])){
				
				$this->group_sn = $vals['group_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->group_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->group_sn !== null) {
			
			$xfer += $output->writeFieldBegin('group_sn');
			$xfer += $output->writeString($this->group_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_getProductPreviewUrl_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $group_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'group_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['group_sn'])){
				
				$this->group_sn = $vals['group_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->group_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->group_sn !== null) {
			
			$xfer += $output->writeFieldBegin('group_sn');
			$xfer += $output->writeString($this->group_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_getRealVendorSkuByBarcode_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $barcode = null;
	public $source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->barcode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->source); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_getSpuBySnVendorIdAndBrandId_args {
	
	static $_TSPEC;
	public $sn = null;
	public $vendor_id = null;
	public $brand_id = null;
	public $source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sn'
			),
			2 => array(
			'var' => 'vendor_id'
			),
			3 => array(
			'var' => 'brand_id'
			),
			4 => array(
			'var' => 'source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->source); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_getVendorImageRelationshipTaskStatus_args {
	
	static $_TSPEC;
	public $task_id_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'task_id_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['task_id_list'])){
				
				$this->task_id_list = $vals['task_id_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->task_id_list = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI64($elem0); 
					
					$this->task_id_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('task_id_list');
		
		if (!is_array($this->task_id_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->task_id_list as $iter0){
			
			$xfer += $output->writeI64($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_healthCheck_args {
	
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




class VendorProductService_multiGetProductSkuInfo_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $barcode = null;
	public $brand_id = null;
	public $category_id = null;
	public $sn = null;
	public $page = null;
	public $limit = null;
	public $source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'brand_id'
			),
			4 => array(
			'var' => 'category_id'
			),
			5 => array(
			'var' => 'sn'
			),
			6 => array(
			'var' => 'page'
			),
			7 => array(
			'var' => 'limit'
			),
			8 => array(
			'var' => 'source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['category_id'])){
				
				$this->category_id = $vals['category_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->barcode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->category_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->source); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeI32($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category_id !== null) {
			
			$xfer += $output->writeFieldBegin('category_id');
			$xfer += $output->writeI32($this->category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_multiGetProductSpuInfo_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $category_id = null;
	public $sn = null;
	public $status = null;
	public $page = null;
	public $limit = null;
	public $source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'category_id'
			),
			4 => array(
			'var' => 'sn'
			),
			5 => array(
			'var' => 'status'
			),
			6 => array(
			'var' => 'page'
			),
			7 => array(
			'var' => 'limit'
			),
			8 => array(
			'var' => 'source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['category_id'])){
				
				$this->category_id = $vals['category_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->category_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\product\ProductStatus::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->status = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->source); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brand_id !== null) {
			
			$xfer += $output->writeFieldBegin('brand_id');
			$xfer += $output->writeI32($this->brand_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category_id !== null) {
			
			$xfer += $output->writeFieldBegin('category_id');
			$xfer += $output->writeI32($this->category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			
			$em = new \vipapis\product\ProductStatus; 
			$output->writeString($em::$__names[$this->status]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeI32($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_saveVendorProductSizeTableRelationship_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $size_table_id = null;
	public $sku_size_detail_id_mappings = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'size_table_id'
			),
			5 => array(
			'var' => 'sku_size_detail_id_mappings'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['size_table_id'])){
				
				$this->size_table_id = $vals['size_table_id'];
			}
			
			
			if (isset($vals['sku_size_detail_id_mappings'])){
				
				$this->sku_size_detail_id_mappings = $vals['sku_size_detail_id_mappings'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->size_table_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->sku_size_detail_id_mappings = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = '';
					$input->readString($key0);
					
					$val0 = 0;
					$input->readI64($val0); 
					
					$this->sku_size_detail_id_mappings[$key0] = $val0;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('size_table_id');
		$xfer += $output->writeI64($this->size_table_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sku_size_detail_id_mappings !== null) {
			
			$xfer += $output->writeFieldBegin('sku_size_detail_id_mappings');
			
			if (!is_array($this->sku_size_detail_id_mappings)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->sku_size_detail_id_mappings as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeI64($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_submitProducts_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $vendor_productSN_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'vendor_productSN_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['vendor_productSN_list'])){
				
				$this->vendor_productSN_list = $vals['vendor_productSN_list'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->vendor_productSN_list = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \vipapis\product\VendorProductSN();
					$elem1->read($input);
					
					$this->vendor_productSN_list[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_productSN_list');
		
		if (!is_array($this->vendor_productSN_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->vendor_productSN_list as $iter0){
			
			
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




class VendorProductService_uploadAndBindVendorProductImage_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $img_index = null;
	public $img_content = null;
	public $group_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'img_index'
			),
			5 => array(
			'var' => 'img_content'
			),
			6 => array(
			'var' => 'group_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['img_index'])){
				
				$this->img_index = $vals['img_index'];
			}
			
			
			if (isset($vals['img_content'])){
				
				$this->img_content = $vals['img_content'];
			}
			
			
			if (isset($vals['group_sn'])){
				
				$this->group_sn = $vals['group_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->img_index); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->img_content);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->group_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('img_index');
		$xfer += $output->writeI32($this->img_index);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('img_content');
		$xfer += $output->writeString($this->img_content);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->group_sn !== null) {
			
			$xfer += $output->writeFieldBegin('group_sn');
			$xfer += $output->writeString($this->group_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_uploadImage_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $file_name = null;
	public $is_override = null;
	public $img_content = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'file_name'
			),
			3 => array(
			'var' => 'is_override'
			),
			4 => array(
			'var' => 'img_content'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['file_name'])){
				
				$this->file_name = $vals['file_name'];
			}
			
			
			if (isset($vals['is_override'])){
				
				$this->is_override = $vals['is_override'];
			}
			
			
			if (isset($vals['img_content'])){
				
				$this->img_content = $vals['img_content'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->file_name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->is_override);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->img_content);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('file_name');
		$xfer += $output->writeString($this->file_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_override');
		$xfer += $output->writeString($this->is_override);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('img_content');
		$xfer += $output->writeString($this->img_content);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_uploadVendorProductImage_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $product_image_map = null;
	public $group_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'product_image_map'
			),
			5 => array(
			'var' => 'group_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['product_image_map'])){
				
				$this->product_image_map = $vals['product_image_map'];
			}
			
			
			if (isset($vals['group_sn'])){
				
				$this->group_sn = $vals['group_sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brand_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->product_image_map = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = 0;
					$input->readI32($key0); 
					
					$val0 = '';
					$input->readString($val0);
					
					$this->product_image_map[$key0] = $val0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->group_sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('product_image_map');
		
		if (!is_array($this->product_image_map)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeMapBegin();
		foreach ($this->product_image_map as $kiter0 => $viter0){
			
			$xfer += $output->writeI32($kiter0);
			
			$xfer += $output->writeString($viter0);
			
		}
		
		$output->writeMapEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->group_sn !== null) {
			
			$xfer += $output->writeFieldBegin('group_sn');
			$xfer += $output->writeString($this->group_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_appendSkus_result {
	
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
			
			
			$this->success = new \vipapis\product\AppendSkuResponse();
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




class VendorProductService_autoBindVendorProductSizeTableRelationship_result {
	
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
			
			
			$this->success = new \vipapis\product\SaveVSpuSizeTableRelationResponse();
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




class VendorProductService_batchBindVendorProductImages_result {
	
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




class VendorProductService_batchUploadAndBindVendorProductImage_result {
	
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
			
			
			$this->success = new \vipapis\product\BatchUploadAndBindImageResult();
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




class VendorProductService_cancelProductSubmission_result {
	
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
					
					$elem0 = new \vipapis\product\CancelSubmissionResult();
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




class VendorProductService_createProduct_result {
	
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
			
			
			$this->success = new \vipapis\product\VendorProductResponse();
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




class VendorProductService_createProductForMultiColor_result {
	
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
					
					$elem0 = new \vipapis\product\ProductForMultiColorResponse();
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




class VendorProductService_deleteVendorImageRelationship_result {
	
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




class VendorProductService_deleteVendorProductSizeTableRelationship_result {
	
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
			
			
			$this->success = new \vipapis\product\DeleteVSpuSizeTableRelationResponse();
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




class VendorProductService_editProduct_result {
	
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
			
			
			$this->success = new \vipapis\product\VendorProductResponse();
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




class VendorProductService_editProductForMultiColor_result {
	
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
			
			
			$this->success = new \vipapis\product\ProductForMultiColorResponse();
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




class VendorProductService_getProductPreviewData_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_getProductPreviewUrl_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_getRealVendorSkuByBarcode_result {
	
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
			
			
			$this->success = new \vipapis\product\ProductSkuInfo();
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




class VendorProductService_getSpuBySnVendorIdAndBrandId_result {
	
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
			
			
			$this->success = new \vipapis\product\ProductSpuInfo();
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




class VendorProductService_getVendorImageRelationshipTaskStatus_result {
	
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
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = 0;
					$input->readI64($key0); 
					
					$val0 = null;
					
					$val0 = new \vipapis\product\UploadTaskExecutionResult();
					$val0->read($input);
					
					$this->success[$key0] = $val0;
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeI64($kiter0);
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorProductService_healthCheck_result {
	
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




class VendorProductService_multiGetProductSkuInfo_result {
	
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
			
			
			$this->success = new \vipapis\product\MultiGetProductSkuResponse();
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




class VendorProductService_multiGetProductSpuInfo_result {
	
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
			
			
			$this->success = new \vipapis\product\MultiGetProductSpuResponse();
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




class VendorProductService_saveVendorProductSizeTableRelationship_result {
	
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
			
			
			$this->success = new \vipapis\product\SaveVSpuSizeTableRelationResponse();
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




class VendorProductService_submitProducts_result {
	
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
					
					$elem0 = new \vipapis\product\VendorProductSubmitResult();
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




class VendorProductService_uploadAndBindVendorProductImage_result {
	
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
			
			
			$this->success = new \vipapis\product\UploadAndBindImageResult();
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




class VendorProductService_uploadImage_result {
	
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
			
			
			$this->success = new \vipapis\product\ImageInfo();
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




class VendorProductService_uploadVendorProductImage_result {
	
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
			
			
			$this->success = new \vipapis\product\ImageUploadResult();
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