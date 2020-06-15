<?php
namespace app\index\controller;

use think\Controller;

class News extends Controller
{
    public function index()
    {
        $data = db('notice')->select();
        session('newstype','index');
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function datalist()
    {
      if(session('newstype') =='index'){
        $data = db('notice')->where('id',input('get.id'))->find();
      }
      if(session('newstype') =='newindex'){
        $data = db('consultation')->where('id',input('get.id'))->find(); 
      }
        
        if(!$data){
            $this->error('文章不存在');
        }
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function newindex()
    {
        $data = db('consultation')->select();
        session('newstype','newindex');
        $this->assign('data',$data);
        return $this->fetch('index');
    }
}
