<?php
// +----------------------------------------------------------------------
// | vaeThink [ Programming makes me happy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2018 http://www.vaeThink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 听雨 < 389625819@qq.com >
// +---------------------------------------------------------------------
namespace app\admin\controller;
use vae\controller\AdminCheckAuth;
use think\Db;
use think\Config;
use think\Request;
use app\common\model\product\Product as ProductModel;
use app\common\model\product\ProductCate;
use app\common\model\product\ProductLevel;
class ProductController extends AdminCheckAuth
{
    public function index(Request $request)
    {
        return view();
    }

    //列表
    public function getContentList()
    {
    	$param = vae_get_param();
        $where = array();
        if(isset($param['status']) && $param['status'] != '') {
            $where['p.status'] = intval($param['status']);
        }
        if(!empty($param['keywords'])) {
            $where['p.id|pc.catename|pl.levelname'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = ProductModel::systemPage($where);
    	return vae_assign_table(0,'',$list);
    }

    //添加
    public function add()
    {
    	$catelist = ProductCate::getList();
        return view('',['catelist'=>$catelist]);
    }

    //提交添加
    public function addSubmit()
    {
    	if($this->request->isPost()){
    		$param = vae_get_param();
    		$result = $this->validate($param, 'app\admin\validate\product\Product.add');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                $cate = ProductCate::getCate($param['cate_id']);
                if (empty($param['price'])){
                    $param['price'] = $cate['minprice'];
                }else{
                    if(intval($param['price']) < $cate['minprice'] || intval($param['price']) > $cate['maxprice']){
                        return vae_assign(0,'当前输入的价值不在鱼品种价值之间');
                    }
                }
                ProductModel::batchInsert($param);
                return vae_assign();
            }
    	}
    }

    //修改
    public function edit()
    {   
        $data['detail'] = ProductModel::getProduct(vae_get_param('id'));
        $data['catelist'] = ProductCate::getList();
        return view('', $data);
    }

    //提交修改
    public function editSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\product\Product.edit');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                ProductModel::updateProduct($param, true);
                return vae_assign(1, '修改会员数据成功');
            }
        }
    }
    
    //区块鱼品种
    public function cate()
    {
        return view();
    }

    //列表
    public function getCateList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['pc.id|pc.catename'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = ProductCate::systemPage($where);
        return vae_assign_table(0,'',$list);
    }

    //添加
    public function addcate()
    {
        $data['levellist'] = ProductLevel::getList();
        return view('', $data);
    }

    //提交添加
    public function addcateSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\product\ProductCate.add');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                ProductCate::insertCate($param);
                return vae_assign();
            }
        }
    }

    //修改
    public function editcate()
    {   
        $data['levellist'] = ProductLevel::getList();
        $data['detail'] = ProductCate::getCate(vae_get_param('id'));
        return view('', $data);
    }

    //提交修改
    public function editcateSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\product\ProductCate.edit');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                ProductCate::updateCate($param);
                return vae_assign();
            }
        }
    }

    //区块鱼品种
    public function level()
    {
        return view();
    }

    //列表
    public function getLevelList()
    {
        $param = vae_get_param();
        $where = array();
        if(!empty($param['keywords'])) {
            $where['id|levelname|level'] = ['like', '%' . $param['keywords'] . '%'];
        }
        $list = ProductLevel::systemPage($where);

        return vae_assign_table(0,'',$list);
    }

    //添加
    public function addlevel()
    {
        return view();
    }

    //提交添加
    public function addlevelSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();

            $result = $this->validate($param, 'app\admin\validate\product\ProductLevel.add');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                ProductLevel::insertLevel($param);
                return vae_assign(1, '修改等级数据成功');
            }
        }
    }

    //修改
    public function editlevel()
    {   
        $data['detail'] = ProductLevel::getLevel(vae_get_param('id'));
        return view('', $data);
    }

    //提交修改
    public function editlevelSubmit()
    {
        if($this->request->isPost()){
            $param = vae_get_param();
            $result = $this->validate($param, 'app\admin\validate\product\ProductLevel.add');
            if ($result !== true) {
                return vae_assign(0,$result);
            } else {
                ProductLevel::updateLevel($param);
                return vae_assign(1, '修改等级数据成功');
            }
        }
    }

    //软删除
    public function delete()
    {
        $id    = vae_get_param("id");
        if (ProductModel::deleteProduct($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

    //软删除
    public function deleteCate()
    {
        $id    = vae_get_param("id");
        if (ProductCate::deleteCate($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

    public function deleteLevel()
    {
        $id    = vae_get_param("id");
        if (ProductLevel::deleteLevel($id) !== false) {
            return vae_assign(1,"成功放入回收站！");
        } else {
            return vae_assign(0,"删除失败！");
        }
    }

}
