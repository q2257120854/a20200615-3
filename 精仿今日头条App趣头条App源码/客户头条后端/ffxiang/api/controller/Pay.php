<?php
namespace app\api\controller;
use app\api\controller\Common;  // 公用   
use think\Db;       //数据库
use think\Session;  // session
use think\Request; //获取请求类型
use think\Validate;
class Pay extends Common
{
    public $member=null;
    public function __construct(){
        parent::__construct();
        // 读取会员配置 - 开始
        $config=Db::name('member_config')->where('name','switch')->value('text');
        unset($data);   // 销毁变量
        // 读取会员配置 - 结束
        // 会员是否开启 - 开始
        if(!$config || $config==0){
            exit(json_encode(['err'=>'会员未开放']));
        }
        // 会员是否开启 - 结束
        // 获取登录token
        $token=Session::get('user','ffxiangUser') ? Session::get('user','ffxiangUser') : input('post.token');
        if(!$token){
            echo json_encode(['err'=>'token不正确']);
            exit();
        }
        // 解密token UID
        $uid=_Dencrypt($token,'D');
        if(!$uid){
            echo json_encode(['err'=>'会员UID不正确，请重新获取token']);
            exit();
        }
        // 解密成功获取会员信息
        $member=$member=Db::name('member')->where('id',$uid)->find();
        // 检测会员限制
        if($member){
            switch ($member['hide']) {
                case '0':
                    $recording=_records($member['id'],'API操作,账户被禁止');
                    if($recording){
                        $data=['err'=>'无法登录，账户已被封号'];
                    }
                    echo json_encode($data);
                    break;
                    exit();
                case '2':
                    $recording=_records($member['id'],'API操作,账户正在审核');
                    if($recording){
                        $data=['err'=>'账户正在审核，请等待客服处理'];
                    }
                    echo json_encode($data);
                    break;
                    exit();
                case '3':
                    $recording=_records($member['id'],'API操作，账户审核被拒绝');
                    if($recording){
                        $data=['err'=>'账户审核被拒绝，拒绝原因：'.$member['hidetent']];
                    }
                    echo json_encode($data);
                    break;
                    exit();
            }
        }else{
            echo json_encode(['err'=>'会员不存在']);
            exit();
        }
        $this->member=$member;
    }
    public function index(){
        return _ajaxError();
    }
    // 支付列表
    // type 调用支付类型
    public function payList(){
        $type=input('post.type') ? input('post.type') : '';
        $validate = new Validate([
            'type'=>'require|in:pc,app,wap,wx',
        ]);
        $validata=[
            'type'=>$type,
        ];
        if (!$validate->check($validata)) {
            return ['err'=>$validate->getError()];
        }
        $where['type']=$type;
        $where['hide']=1;
        $data=Db::name('pay')->where($where)->cache(_cache('db'))->order('des desc,id asc')->select();
        return ['ret'=>$data];
    }
    // 封装post请求
    // $url 请求地址
    // $param 数组
    private function request_post($url = '', $param = '') {
        if (empty($url) || empty($param)) {
            return false;
        }
        
        $postUrl = $url;
        $curlPost = $param;
        $ch = curl_init();//初始化curl
        curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
        $data = curl_exec($ch);//运行curl
        curl_close($ch);
        
        return $data;
    }
    // 调用beecloud支付  
    public function pay(){
        require_once(VENDOR_PATH.'/beecloud/loader.php');
        require_once(VENDOR_PATH.'/beecloud/demo/config.php');
        try {
            $api->registerApp(APP_ID, APP_SECRET, MASTER_SECRET, TEST_SECRET);
            $api->setSandbox(true);
        }catch(Exception $e){
            die($e->getMessage());
        }
        // 获取GET变量
        // 支付类型 0充值 1购物车 2购买VIP || 类型2和3 则必须使用scookies字段 
        $sctype=input("sctype/d") ? input("sctype/d") : 0;
        // 格式json存储  如果sctype 类型2和3 则必须使用scookies字段
        $scookies=input("scookies") ? input("scookies") : 0;
        // 金额
        if($sctype==0){
            $money=input("money/d") ? input("money/d") : '';
        }else{
            // 调用scookies数据相加金额
        }
        // 支付渠道ID
        $type=input('type/d') ? input("type/d") : '';
        // 充值说明 1充值 2消费 3购买VIP
        $titleid=input('titleid/d') ? input("titleid/d") : '';
        $titleids=[1=>'充值',2=>'消费',3=>'购买'];
        // 验证
        $validate = new Validate([
            'money'     =>      'require|number|max:9',
            'type'          =>      'require|number|max:100',
            'titleid'       =>      'require|between:1,3',
            'sctype'        =>      'between:0,3',
        ]);
        $validata = [
            'money'     =>      $money,
            'type'          =>      $type,
            'titleid'       =>      $titleid,
            'sctype'        =>      $sctype,
        ];
        if (!$validate->check($validata)) {
            return ['err'=>$validate->getError()];
        }
        // 订单号码 $win前缀+年月日时分秒+随机6位数
        $typetitle=Db::name('pay')->where('id',$type)->cache(_cache('db'))->value('type');
        $bill_no=strtoupper($typetitle).date('YmdHis').rand(100000,999999);
        $data = array();
        $data["timestamp"] = time() * 1000;
        //total_fee(int 类型) 单位分
        $data["total_fee"] = $money;
        $data["bill_no"] = $bill_no;
        //title UTF8编码格式，32个字节内，最长支持16个汉字
        $data["title"] = $titleids[$titleid];
        //渠道类型:ALI_WEB 或 ALI_QRCODE 或 UN_WEB或JD_WAP或JD_WEB, BC_GATEWAY为京东、BC_WX_WAP渠道时为必填, BC_ALI_WAP不支持此参数
        $data["return_url"] = "https://beecloud.cn";
        //选填 optional
        $data["optional"] = (object)array("tag"=>"msgtoreturn");
        $type=Db::name('pay')->where('id',$type)->cache(_cache('db'))->value('qudao');
        if(!$type){
            return ['err'=>'type参数不存在'];
        }
        switch($type){
            case 'ALI_WEB' :
                $title = "支付宝及时到账";
                $data["channel"] = "ALI_WEB";
                break;
            case 'ALI_WAP' :
                $title = "支付宝移动网页";
                $data["channel"] = "ALI_WAP";
                //非必填参数,boolean型,是否使用APP支付,true使用,否则不使用
                //$data["use_app"] = true;
                break;
            case 'ALI_QRCODE' :
                $title = "支付宝扫码支付";
                $data["channel"] = "ALI_QRCODE";
                //qr_pay_mode必填 二维码类型含义
                //0： 订单码-简约前置模式, 对应 iframe 宽度不能小于 600px, 高度不能小于 300px
                //1： 订单码-前置模式, 对应 iframe 宽度不能小于 300px, 高度不能小于 600px
                //3： 订单码-迷你前置模式, 对应 iframe 宽度不能小于 75px, 高度不能小于 75px
                $data["qr_pay_mode"] = "0";
                break;
            case 'ALI_OFFLINE_QRCODE' :
                $data["channel"] = "ALI_OFFLINE_QRCODE";
                $title = "支付宝线下扫码";
                require_once VENDOR_PATH.'/beecloud/ali/index.php';
                exit();
                break;
            case 'BD_WEB' :
                $data["channel"] = "BD_WEB";
                $title = "百度网页支付";
                break;
            case 'BD_WAP' :
                $data["channel"] = "BD_WAP";
                $title = "百度移动网页";
                break;
            case 'JD_B2B' :
                $data["channel"] = "JD_B2B";
                /*
                 * bank_code(int 类型) for channel JD_B2B
                9102    中国工商银行      9107    招商银行
                9103    中国农业银行      9108    光大银行
                9104    交通银行          9109    中国银行
                9105    中国建设银行      9110     平安银行
                */
                $data["bank_code"] = 9102;
                $title = "京东B2B";
                break;
            case 'JD_WEB' :
                $data["channel"] = "JD_WEB";
                $title = "京东网页";
                break;
            case 'JD_WAP' :
                $data["channel"] = "JD_WAP";
                $title = "京东移动网页";
                break;
            case 'UN_WEB' :
                $data["channel"] = "UN_WEB";
                $title = "银联网页";
                break;
            case 'UN_WAP' : //由于银联做了适配,需在移动端打开,PC端仍显示网页支付
                $data["channel"] = "UN_WAP";
                $title = "银联移动网页";
                break;
            case 'WX_NATIVE':
                $data["channel"] = "WX_NATIVE";
                $title = "微信扫码";
                require_once VENDOR_PATH.'/beecloud/wx/native.php';
                exit();
                break;
            case 'WX_JSAPI':
                $data["channel"] = "WX_JSAPI";
                $title = "微信H5网页";
                require_once VENDOR_PATH.'/beecloud/wx/jsapi.php';
                exit();
                break;
            case 'YEE_WEB' :
                $data["channel"] = "YEE_WEB";
                $title = "易宝网页";
                break;
            case 'YEE_WAP' :
                $data["channel"] = "YEE_WAP";
                $data["identity_id"] = "lengthlessthan50useruniqueid";
                $title = "易宝移动网页";
                break;
            case 'YEE_NOBANKCARD':
                //total_fee(订单金额)必须和充值卡面额相同，否则会造成金额丢失(渠道方决定)
                $data["total_fee"] = 10;
                $data["channel"] = "YEE_NOBANKCARD";
                //点卡卡号，每种卡的要求不一样
                $data["cardno"] = "15078120125091678";
                //点卡密码，简称卡密
                $data["cardpwd"] = "121684730734269992";
                /*
                 * frqid 点卡类型编码
                 * 骏网一卡通(JUNNET),盛大卡(SNDACARD),神州行(SZX),征途卡(ZHENGTU),Q币卡(QQCARD),联通卡(UNICOM),
                 * 久游卡(JIUYOU),易充卡(YICHONGCARD),网易卡(NETEASE),完美卡(WANMEI),搜狐卡(SOHU),电信卡(TELECOM),
                 * 纵游一卡通(ZONGYOU),天下一卡通(TIANXIA),天宏一卡通(TIANHONG),32 一卡通(THIRTYTWOCARD)
                 */
                $data["frqid"] = "SZX";
                $title = "易宝点卡支付";
                break;
            case 'KUAIQIAN_WEB' :
                $data["channel"] = "KUAIQIAN_WEB";
                $title = "快钱移动网页";
                break;
            case 'KUAIQIAN_WAP' :
                $data["channel"] = "KUAIQIAN_WEB";
                $title = "快钱移动网页";
                break;
            case 'PAYPAL_PAYPAL' :
                $data["channel"] = "PAYPAL_PAYPAL";
                /*
                 * currency参数的对照表, 请参考:
                 * https://github.com/beecloud/beecloud-rest-api/tree/master/international
                 */
                $data["currency"] = "USD";
                $title = "Paypal网页";
                break;
            case 'PAYPAL_CREDITCARD' :
                $data["channel"] = "PAYPAL_CREDITCARD";
                /*
                 * currency参数的对照表, 请参考:
                 * https://github.com/beecloud/beecloud-rest-api/tree/master/international
                 */
                $data["currency"] = "USD";

                $card_info = array(
                    'card_number' => '',
                    'expire_month' => 1,  //int month
                    'expire_year' => 2016, //int year
                    'cvv' => 0,           //string
                    'first_name' => '', //string
                    'last_name' => '',  //string
                    'card_type' => 'visa' //string
                );
                $data["credit_card_info"] = (object)$card_info;
                $title = "Paypal信用卡";
                break;
            case 'PAYPAL_SAVED_CREDITCARD' :
                $data["channel"] = "PAYPAL_SAVED_CREDITCARD";
                /*
                 * currency参数的对照表, 请参考:
                 * https://github.com/beecloud/beecloud-rest-api/tree/master/international
                 */
                $data["currency"] = "USD";
                $data["credit_card_id"] = '';
                $title = "Paypal快捷";
                break;
            case 'BC_GATEWAY' :
                $data["channel"] = "BC_GATEWAY";
                $data["pay_type"] = "B2C";
                /*
                 * card_type(string 类型) for channel BC_GATEWAY
                 * 卡类型: 1代表信用卡；2代表借记卡
                */
                $data["card_type"] = '1';
                $data["bank"] = "中国银行";
                $title = "BC网关支付";
                /*
                  * bank(string 类型) for channel BC_GATEWAY
                  * 根据参数card_type, pay_type(B2C/B2B，参数可选)确定银行名称，获取银行的方法，即
                  *
                  */
                $params = array(
                    'card_type' => $data["card_type"],
                    'pay_type' => 'B2C' //B2C或B2B
                );
                $info = $api->get_banks($params, 'BC_GATEWAY');
                if (isset($info->result_code) && $info->result_code == 0) {
                    $banks = $info->banks;
                }
                if(!in_array($data["bank"], $banks)){
                    exit('参数bank不在限定的范围内, 请重新设置');
                }
                break;
            case 'BC_EXPRESS' :
                $data["channel"] = "BC_EXPRESS";
                //银行卡卡号, 选填
                //$data["card_no"] = '622269192199384xxxx';
                $title = "BC快捷支付";
                break;
            case 'BC_NATIVE' :
                $data["channel"] = "BC_NATIVE";
                $title = "BC微信扫码";
                require_once VENDOR_PATH.'/beecloud/wx/native.php';
                exit();
                break;
            case 'BC_WX_WAP' : //请在手机浏览器内测试
                $data["channel"] = "BC_WX_WAP";
                $title = "BC微信移动网页支付";
                break;
            case 'BC_WX_SCAN' :
                $data["channel"] = "BC_WX_SCAN";
                $title = "BC微信刷卡";
                $data["auth_code"] = "13022657110xxxxxxxx";
                break;
            case 'BC_WX_JSAPI':
                $data["channel"] = "BC_WX_JSAPI";
                $title = "微信H5网页";
                require_once VENDOR_PATH.'/beecloud/wx/jsapi.php';
                exit();
                break;
            case 'BC_ALI_QRCODE' :
                $data["channel"] = "BC_ALI_QRCODE";
                $title = "BC支付宝线下扫码";
                require_once VENDOR_PATH.'/beecloud/ali/index.php';
                exit();
                break;
            case 'BC_ALI_SCAN' :
                $data["channel"] = "BC_ALI_SCAN";
                $title = "BC支付宝刷卡";
                $data["auth_code"] = "28886955594xxxxxxxx";
                break;
            case 'BC_ALI_WAP' : //请在手机浏览器内测试
                $data["channel"] = "BC_ALI_WAP";
                $title = "BC支付宝移动网页";
                break;
            default :
                exit("No this type.");
                break;
        }
        // 将订单写入数据
        $where['uid']=$this->member['id'];
        $where['code']=$bill_no;
        $where['money']=$money;
        $where['status']=0;
        $where['type']=$type;
        $where['create_time']=time();
        $where['ip']=_ip();
        $where['system']=$_SERVER['HTTP_USER_AGENT'];
        $where['sctype']=$sctype;
        if($sctype==0){
            $where['scookies']=$scookies;
        }
        // 写入数据
        Db::name('pay_record')->insert($where);
        // 结束
        try {
            if(in_array($type, array('PAYPAL_PAYPAL', 'PAYPAL_CREDITCARD', 'PAYPAL_SAVED_CREDITCARD'))){
                $result =  $international->bill($data);
            }else if(in_array($type, array('BC_ALI_SCAN', 'BC_WX_SCAN'))){
                $result =  $api->offline_bill($data);
            }else{
                $result =  $api->bill($data);
            }
            if ($result->result_code != 0) {
                print_r($result);
                exit();
            }
            if(isset($result->url) && $result->url){
                return ['ret'=>$result->url];
                //header("Location:$result->url");
            }else if(isset($result->html) && $result->html) {
                echo $result->html;
                return ['err'=>$result->html];
            }else if(isset($result->code_url) && $result->code_url) { //channel为BC_ALI_WAP
                //header("Location:$result->code_url");
                return ['err'=>$result->code_url];
            }else if(isset($result->credit_card_id)){
                //echo '信用卡id(PAYPAL_CREDITCARD): '.$result->credit_card_id;
                 return ['err'=>'信用卡id(PAYPAL_CREDITCARD): '.$result->credit_card_id];
            }else if(isset($result->id)){
                return ['err'=>$type.'支付成功: '.$result->id];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
}
