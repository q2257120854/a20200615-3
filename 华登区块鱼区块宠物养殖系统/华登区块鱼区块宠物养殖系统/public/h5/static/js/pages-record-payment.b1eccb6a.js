(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-record-payment"],{"00d8":function(e,t,n){"use strict";function i(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},i=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(i=i.concat(Object.getOwnPropertySymbols(n).filter(function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable}))),i.forEach(function(t){o(e,t,n[t])})}return e}function o(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var a="USER_KEY",r="TOKEN_KEY",s=function(){var e="";return e=uni.getStorageSync(a),e||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},u=function(e){uni.setStorage({key:a,data:e})},c=function(e){uni.setStorageSync(r,e)},d=function(){return uni.getStorageSync(r)},l=function(){uni.clearStorage()},f=function(e){uni.setStorageSync("uid",e)},v=function(){return uni.getStorageSync("uid")},g=function(e){uni.setStorageSync("logid",e)},m=function(){return uni.getStorageSync("logid")},p="/",h={index:p+"default/index",home:{info:p+"port/member/info"},main:{bazaar:p+"port/index/index",order:p+"port/index/appointment",adopt:p+"port/index/adopt"},center:{code:p+"port/member/verifycode",password:p+"port/member/changePwd",passtwo:p+"port/member/changePwd2",pid:p+"port/member/realname",close:p+"port/member/changeMethodStatus",card:p+"port/member/myPaymentMethod",type:p+"port/member/getPaymentType",submit:p+"port/member/submitMethod",message:p+"port/member/systemMessage",team:p+"port/member/myTeam",friends:p+"port/member/inviteFriends"},service:{insert:p+"port/server_center/workorder",submit:p+"port/server_center/submitWorkorder",order:p+"port/server_center/submitWorkorder"},login:{login:p+"port/login",logo:p+"port/login/get_enter_logo",forget:p+"port/login/forgetpwd"},reg:{register:p+"port/login/register",code:p+"port/login/verifycode"},interests:{integral:p+"port/member/integralLog",roll:p+"port/member/givingIntegral",sell:p+"port/member/assetSale"},record:{pay:p+"port/order/pay",adopt:p+"port/order/index",make:p+"port/member/appointment",update:p+"port/order/pay",passtwo:p+"record/payment",submit:p+"record/payment",complaint:p+"record/payment",transfer:p+"port/order/transfer"}},_=function(e,t,n,o){var a=this,r=uni.getStorageSync("token");""==r&&uni.reLaunch({url:"/pages/login/login"});n=i({token:uni.getStorageSync("token")},n);uni.request({url:t,method:"GET",data:n,success:function(t){t=t.data;1==t.code?o(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),a.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},b={api:h,auth:_,setToken:c,getToken:d,removeToken:l,getUserInfo:s,setUserInfo:u,setId:f,getId:v,setLogid:g,getLogid:m};t.default=b},"1f64":function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,".footer[data-v-3cddadaa]{left:0;bottom:0;width:100%;color:#fff;height:%?100?%;position:fixed;background-color:#181e30}.footer_item[data-v-3cddadaa]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-3cddadaa]{top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?10?%}.footer_item.big_item[data-v-3cddadaa]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-3cddadaa]{width:%?100?%;height:%?100?%}.active[data-v-3cddadaa]{color:#5d8afc}",""])},"22c1":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i={methods:{jump:function(e){uni.navigateTo({url:e})},change_nav:function(e){this.$store.commit("change_page",e)}},computed:{footer_nav:function(){return this.$store.state.footer_store.footer_nav},now_index:function(){return uni.getStorageSync("css")}}};t.default=i},"306f":function(e,t,n){var i=n("8730");"string"===typeof i&&(i=[[e.i,i,""]]),i.locals&&(e.exports=i.locals);var o=n("4f06").default;o("4ce608af",i,!0,{sourceMap:!1,shadowMode:!1})},3444:function(e,t,n){"use strict";n.r(t);var i=n("d8ed"),o=n("d96f");for(var a in o)"default"!==a&&function(e){n.d(t,e,function(){return o[e]})}(a);n("94bf");var r=n("2877"),s=Object(r["a"])(o["default"],i["a"],i["b"],!1,null,"3cddadaa",null);t["default"]=s.exports},"354a":function(e,t,n){"use strict";var i=n("306f"),o=n.n(i);o.a},"5f6f":function(e,t,n){var i=n("1f64");"string"===typeof i&&(i=[[e.i,i,""]]),i.locals&&(e.exports=i.locals);var o=n("4f06").default;o("fbc8b054",i,!0,{sourceMap:!1,shadowMode:!1})},"6f8b":function(e,t,n){"use strict";var i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"content"},[n("v-uni-view",{staticClass:"list"},[e._v("消耗积分"),n("v-uni-view",{staticClass:"list_right"},[e._v(e._s(e.integral))])],1),n("v-uni-view",{staticClass:"list"},[e._v("转让方"),n("v-uni-view",{staticClass:"list_right"},[e._v(e._s(e.username))])],1),n("v-uni-view",{staticClass:"list"},[e._v("转让方手机"),n("v-uni-view",{staticClass:"list_right"},[e._v(e._s(e.mobile))])],1),n("v-uni-view",{staticClass:"list"},[e._v("区块金额"),n("v-uni-view",{staticClass:"list_right"},[e._v(e._s(e.money))])],1),n("v-uni-view",{staticStyle:{padding:"10upx"}}),n("v-uni-view",{staticClass:"body"},[n("v-uni-image",{staticClass:"img",attrs:{src:e.url,mode:""}}),n("v-uni-view",{staticClass:"text1"},[e._v("转让方收款账户：")]),n("v-uni-view",{staticClass:"text"},[e._v("账户名称："+e._s(e.name))]),n("v-uni-view",{staticClass:"text"},[e._v("账号："+e._s(e.account))]),n("v-uni-view",{staticClass:"text"},[e._v("账户类型："+e._s(e.type))])],1),n("v-uni-view",{staticClass:"body"},[n("v-uni-view",{staticClass:"text1"},[e._v("上传付款凭证：")]),e.imageSrc?[n("v-uni-image",{staticClass:"image",attrs:{src:e.imageSrc,mode:"widthFix"},on:{click:function(t){t=e.$handleEvent(t),e.chooseImage(t)}}})]:[n("v-uni-view",{staticClass:"img1"},[n("v-uni-view",{staticClass:"uni-hello-addfile",on:{click:function(t){t=e.$handleEvent(t),e.chooseImage(t)}}},[e._v("+")])],1)]],2),n("v-uni-view",{staticClass:"body"},[n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("二级密码")]),n("v-uni-input",{attrs:{type:"text",name:"passtwo",password:"true",maxlength:"6",placeholder:"输入二级密码"},model:{value:e.passtwo,callback:function(t){e.passtwo=t},expression:"passtwo"}})],1),n("v-uni-button",{staticClass:"btn-area",on:{click:function(t){t=e.$handleEvent(t),e.submit(t)}}},[e._v("确认付款")])],1),n("footerNav")],1)},o=[];n.d(t,"a",function(){return i}),n.d(t,"b",function(){return o})},8730:function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,".list[data-v-0d75f48d]{width:100%;height:%?100?%;font-size:%?30?%;text-indent:%?40?%;line-height:%?100?%;background-color:#fff;border-bottom:%?3?% solid #f1f1f1}.list_right[data-v-0d75f48d]{color:#fdb513;text-align:right;margin-right:%?40?%;margin-top:%?-100?%}.log-input[data-v-0d75f48d]{background:#f1f1f1}.body[data-v-0d75f48d]{padding:%?40?%;background-color:#fff;border-bottom:%?1?% solid #eee}.img[data-v-0d75f48d]{float:right;width:%?220?%;height:%?220?%}.img1[data-v-0d75f48d]{color:#ddd;width:%?360?%;height:%?360?%;font-size:%?200?%;text-align:center;line-height:%?360?%;background-color:#eee;border:%?4?% solid #ddd}.image[data-v-0d75f48d]{height:%?360?%}.text1[data-v-0d75f48d]{font-size:%?36?%;line-height:%?65?%}",""])},"94bf":function(e,t,n){"use strict";var i=n("5f6f"),o=n.n(i);o.a},9979:function(e,t,n){"use strict";n.r(t);var i=n("e7d9"),o=n.n(i);for(var a in i)"default"!==a&&function(e){n.d(t,e,function(){return i[e]})}(a);t["default"]=o.a},d8ed:function(e,t,n){"use strict";var i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",[n("v-uni-view",{staticClass:"footer"},e._l(e.footer_nav,function(t,i){return n("v-uni-view",{key:i,class:"footer_item "+("big"==t.size?"big_item":""),staticStyle:{width:"33.3%"},on:{click:function(t){t=e.$handleEvent(t),e.change_nav(i)}}},[n("v-uni-view",{on:{click:function(n){n=e.$handleEvent(n),e.jump(t.pagePath)}}},[n("v-uni-image",{attrs:{src:i==e.now_index?t.select_icon:t.icon,mode:""}}),n("v-uni-view",{class:i==e.now_index?"active":""},[e._v(e._s(t.name))])],1)],1)}))],1)},o=[];n.d(t,"a",function(){return i}),n.d(t,"b",function(){return o})},d96f:function(e,t,n){"use strict";n.r(t);var i=n("22c1"),o=n.n(i);for(var a in i)"default"!==a&&function(e){n.d(t,e,function(){return i[e]})}(a);t["default"]=o.a},e7d9:function(module,exports,__webpack_require__){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var _service=_interopRequireDefault(__webpack_require__("00d8")),_footer_nav=_interopRequireDefault(__webpack_require__("3444"));function _interopRequireDefault(e){return e&&e.__esModule?e:{default:e}}var userInfo=_service.default.getUserInfo(),_default={components:{footerNav:_footer_nav.default},data:function(){return{id:uni.getStorageSync("adopt_id"),token:uni.getStorageSync("token"),user:uni.getStorageSync("user"),integral:"34",username:"友秀",mobile:"13344556677",money:"328",url:"../../static/pay/WeChat.png",name:"海宏科技",account:"123456789012",type:"微信支付",imageSrc:"",passtwo:""}},onShow:function(){},methods:{chooseImage:function(){var e=this;uni.chooseImage({count:1,sizeType:["compressed"],sourceType:["album"],success:function(t){var n=t.tempFilePaths[0];e.imageSrc=n},fail:function(e){console.log("chooseImage fail",e)}})},submit:function submit(){if(console.log(self.passtwo),""!=this.imageSrc)if(this.passtwo.length<6)uni.showToast({icon:"none",title:"请输入六位的二级密码"});else var uploadTask=uni.uploadFile({url:_service.default.api.record.update+"?token="+this.token,filePath:this.imageSrc,name:"file",formData:{id:this.id,pwd2:this.passtwo},success:function success(res){res=res.data,res=eval("("+res+")"),console.log(res),1==res.code?uni.navigateTo({url:"/pages/record/successful"}):uni.showToast({icon:"none",title:res.msg})}});else uni.showToast({icon:"none",title:"请上传付款凭证"})}}};exports.default=_default},f267:function(e,t,n){"use strict";n.r(t);var i=n("6f8b"),o=n("9979");for(var a in o)"default"!==a&&function(e){n.d(t,e,function(){return o[e]})}(a);n("354a");var r=n("2877"),s=Object(r["a"])(o["default"],i["a"],i["b"],!1,null,"0d75f48d",null);t["default"]=s.exports}}]);