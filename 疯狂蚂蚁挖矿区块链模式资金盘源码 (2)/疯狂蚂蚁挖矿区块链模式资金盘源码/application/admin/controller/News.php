<?php

namespace app\admin\controller;

use think\Db;
use think\Request;
use think\facade\Env;

class News extends Base
{
    /**
     * 新闻列表
     */
    public function index(Request $req)
    {
        $articles = Db::table('article')->where('type', '<>', 8)->order('top DESC, sort DESC, date DESC')->paginate(20, false, ['query' => $req->param()]);
        $this->assign('articles', $articles);
        return $this->fetch();
    }

    /**
     * 发布新闻
     */
    public function create(Request $req)
    {
        if ($req->isPost()) {
            // 获取标题
            $title = $req->param('title');
            if (empty($title)) {
                $this->error('很抱歉、标题必须填写！');
                exit;
            }
            // 获取类型
            $type = $req->param('type/d', 1) ?: 1;
            // 图片上传
            $file = $req->file('image');
            $image = null;
            if (!empty($file)) {
                // 裁剪保存
                $imageObj = \think\Image::open($file);
                $filename = date('Ymd') . '/' . md5(time()) . '.' . $imageObj->type();
                $filepath = Env::get('root_path') . 'public/upload/' . $filename;
                $dir = Env::get('root_path') . 'public/upload/' . date('Ymd');
                is_dir($dir) OR mkdir($dir, 0777, true);
                $imageObj->thumb(100, 100)->save($filepath);
                $image = $filename;
            }
            // 获取时间
            $date = $req->param('date');
            if (empty($date)) {
                $date = $this->timestamp;
            } else {
                $date = str_ireplace('：', ':', $date);
                if (strlen($date) != 19) {
                    $this->error('很抱歉、错误的时间格式！');
                    exit;
                }
            }
            // 获取内容
            $content = $req->param('content');
            // 保存内容
            $bool = Db::table('article')->insert([
                'type'      =>  $type,
                'title'     =>  $title,
                'image'     =>  $image,
                'content'   =>  $content,
                'date'      =>  $date,
                'create_at' =>  $this->timestamp,
                'update_at' =>  $this->timestamp,
            ]);
            // 判断结果
            if (empty($bool)) {
                $this->error('很抱歉、新闻发布失败请重试！');
                exit;
            }
            // 操作成功
            $this->success('恭喜您、操作成功！', '/admin/news/index.html');
            exit;
        }
        return $this->fetch();
    }

    /**
     * 新闻编辑
     */
    public function edit(Request $req)
    {
        // 获取编号
        $id = $req->param('id');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询文章
        $article = Db::table('article')->where('id', '=', $id)->find();
        if (empty($article)) {
            $this->error('很抱歉、该文章不存在！');
            exit;
        }
        // 提交修改
        if ($req->isPost()) {
            // 获取标题
            $title = $req->param('title');
            if (empty($title)) {
                $this->error('很抱歉、标题必须填写！');
                exit;
            }
            // 图片上传
            $file = $req->file('image');
            $image = null;
            if (!empty($file)) {
                // 裁剪保存
                $imageObj = \think\Image::open($file);
                $filename = date('Ymd') . '/' . md5(time()) . '.' . $imageObj->type();
                $filepath = Env::get('root_path') . 'public/upload/' . $filename;
                $dir = Env::get('root_path') . 'public/upload/' . date('Ymd');
                is_dir($dir) OR mkdir($dir, 0777, true);
                $imageObj->thumb(100, 100)->save($filepath);
                $image = $filename;
            }
            // 获取时间
            $date = $req->param('date');
            if (empty($date)) {
                $date = $this->timestamp;
            } else {
                $date = str_ireplace('：', ':', $date);
                if (strlen($date) != 19) {
                    $this->error('很抱歉、错误的时间格式！');
                    exit;
                }
            }
            // 获取顺序
            $sort = $req->param('sort/d');
            // 获取置顶
            $top = $req->param('top/d');
            // 获取内容
            $content = $req->param('content');
            // 保存内容
            $data = [
                'sort'      =>  $sort,
                'top'       =>  $top,
                'title'     =>  $title,
                'date'      =>  $date,
                'content'   =>  $content,
                'update_at' =>  $this->timestamp
            ];
            if (!empty($image)) {
                $data['image'] = $image;
            }
            $bool = Db::table('article')->where('id', '=', $id)->update($data);
            // 判断结果
            if (empty($bool)) {
                $this->error('很抱歉、新闻更新失败请重试！');
                exit;
            }
            // 操作成功
            $this->success('恭喜您、操作成功！', '/admin/news/index.html');
            exit;
        }
        $this->assign('article', $article);
        return $this->fetch();
    }

    /**
     * 删除新闻
     */
    public function remove(Request $req)
    {
        // 获取编号
        $id = $req->param('id');
        if (empty($id)) {
            $this->error('很抱歉、请提供编号！');
            exit;
        }
        // 查询文章
        $bool = Db::table('article')->where('id', '=', $id)->delete();
        if (empty($bool)) {
            $this->error('很抱歉、删除失败请重试！');
            exit;
        }
        // 操作成功
        $this->success('恭喜您、操作成功！');
        exit;
    }
}
