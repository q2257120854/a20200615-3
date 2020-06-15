<?php
namespace app\index\controller;

class Info extends Common
{
  public function _initialize()
  	{
       $api = config('api');
       $this->mid   = $api['datamid'];
       $this->appid = $api['dataappid'];
       $this->rkey = $api['datakey'];
       $this->id = input('typeid');
       $this->order = "D".session('id').time().rand(100,999);
       db('reorder')->insert(['uid'=>session('id'),'viptype'=>$this->id,'number'=>$this->order]);
    }
    public function index()
    {

    }
    /*
     * 实名身份证认证页
     */
    public function idcard()
    {
      //header('Location: http:///gatway/index/index?appid='.$this->appid.'&mid='.$this->mid.'&key='.$this->rkey.'&order='.$this->order.'&type='.$this->id);
		if(input('post.')){
		    $data = input('post.','','htmlspecialchars');
		    if(!$data['name'] || !$data['idcard']){
		        $this->error('请重新输入');
            }
		    $info = db('user')->where('id',session('id'))->update($data);
		    $this->success('保存成功',url('user/renzheng'));
		    exit;
        }
        return $this->fetch();
    }
    /*
     * 个人资料认证页
     */
    public function personal()
    {	
      	if(input('post.','','htmlspecialchars')){
        $data = input('post.');
        if(db('user')->where('id',session('id'))->update(['personal'=>json_encode($data)])){
        $this->success('保存成功',url('user/renzheng'));
          exit;
        }else{
        $this->error('保存失败');
          exit;
        }
        }
        return $this->fetch();
    }
    /*
     *运营商认证页
     */
    public function operator()
    {
	 header('Location: http:///gatway/index/index?appid='.$this->appid.'&mid='.$this->mid.'&key='.$this->rkey.'&order='.$this->order.'&type='.$this->id);
    }
    /*
     * 身份证正反面
     */
    public function phtoshop()
    {
       if(input('post.')){
         
         $files1 = base64_decode(input('post.imgs1'));
         $files2 = base64_decode(input('post.imgs2'));
         $files3 = base64_decode(input('post.imgs3'));
         
         if(!$files1 || !$files2 || !$files3){
          $this->error('上传错误，请完整上传');
         }
        $dir= ROOT_PATH ."public/static/uploads/".date("Ymd"); 
        if (!file_exists($dir)){
            mkdir ($dir,0777,true);
        }
          $path = ROOT_PATH ."public/static/uploads/".date("Ymd")."/".md5(session('id').time()).".png";
		  file_put_contents($path, $files1);
		  $path2 = ROOT_PATH ."public/static/uploads/".date("Ymd")."/".md5(session('id').time()+100).".png";
		  file_put_contents($path2, $files2);
          $path3 = ROOT_PATH ."public/static/uploads/".date("Ymd")."/".md5(session('id').time()+200).".png";
		  file_put_contents($path3, $files3);
        
		if(!db('user')->where('id',session('id'))->update(['photoAuth'=>json_encode(['a'=>"/static/uploads/".date("Ymd")."/".md5(session('id').time()).".png",'b'=>"/static/uploads/".date("Ymd")."/".md5(session('id').time()+100).".png",'c'=>"/static/uploads/".date("Ymd")."/".md5(session('id').time()+200).".png"])])){
        $this->error('保存失败，请重新上传');
        exit;
        }  
         $this->success('保存成功',url('user/renzheng'));
         exit;
		
    }
       return $this->fetch();
    }
    /*
     * 银行卡认证页
     */
    public function bank()
    {
      //header('Location: http:///gatway/index/index?appid='.$this->appid.'&mid='.$this->mid.'&key='.$this->rkey.'&order=$order&type='.$this->id);
        if(input('post.','','htmlspecialchars')){
            $data = input('post.');
            if(!$data['name'] || !$data['idcard']){
                $this->error('请重新输入');
            }
            $data = json_encode($data);
            $info = db('user')->where('id',session('id'))->update(['bankAuth'=>$data]);
            $this->success('保存成功',url('user/renzheng'));
            exit;
        }
        return $this->fetch();
    }
    /*
     * 芝麻分
     */
    public function zhima()
    {
      //header('Location: http:///gatway/index/index?appid='.$this->appid.'&mid='.$this->mid.'&key='.$this->rkey.'&order='.$this->order.'&type='.$this->id);
      $this->redirect(url('user/alizhima'));
    }
    /*
     * 淘宝
     */
    public function taobao()
    {
      header('Location: http:///gatway/index/index?appid='.$this->appid.'&mid='.$this->mid.'&key='.$this->rkey.'&order='.$this->order.'&type='.$this->id);
    }

	
	}







