(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-interests-roll"],{"00d8":function(e,t,n){"use strict";function o(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},o=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(o=o.concat(Object.getOwnPropertySymbols(n).filter(function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable}))),o.forEach(function(t){i(e,t,n[t])})}return e}function i(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r="USER_KEY",a="TOKEN_KEY",u=function(){var e="";return e=uni.getStorageSync(r),e||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},c=function(e){uni.setStorage({key:r,data:e})},s=function(e){uni.setStorageSync(a,e)},l=function(){return uni.getStorageSync(a)},f=function(){uni.clearStorage()},d=function(e){uni.setStorageSync("uid",e)},g=function(){return uni.getStorageSync("uid")},m=function(e){uni.setStorageSync("logid",e)},v=function(){return uni.getStorageSync("logid")},p="/",b={index:p+"default/index",home:{info:p+"port/member/info"},main:{bazaar:p+"port/index/index",order:p+"port/index/appointment",adopt:p+"port/index/adopt",info:p+"port/index/confInfo",notice:p+"port/index/notice"},center:{code:p+"port/member/verifycode",password:p+"port/member/changePwd",passtwo:p+"port/member/changePwd2",pid:p+"port/member/realname",close:p+"port/member/changeMethodStatus",card:p+"port/member/myPaymentMethod",type:p+"port/member/getPaymentType",submit:p+"port/member/submitMethod",message:p+"port/member/systemMessage",team:p+"port/member/myTeam",friends:p+"port/member/inviteFriends"},service:{insert:p+"port/server_center/workorder",submit:p+"port/server_center/submitWorkorder",order:p+"port/server_center/workorderList"},login:{login:p+"port/login",logo:p+"port/login/get_enter_logo",forget:p+"port/login/forgetpwd"},reg:{register:p+"port/login/register",code:p+"port/login/verifycode",agree:p+"port/login/get_user_regagree"},interests:{qrcode:p+"port/member/recharge",integral:p+"port/member/integralLog",roll:p+"port/member/givingIntegral",sell:p+"port/member/assetSale",submit:p+"port/member/rechargeSubmit"},record:{pay:p+"port/order/pay",adopt:p+"port/order/index",make:p+"port/member/appointment",update:p+"port/order/pay",passtwo:p+"port/order/auditPass",submit:p+"port/order/complaint",complaint:p+"record/payment",transfer:p+"port/order/transfer",details:p+"port/order/detail",undo:p+"port/order/detail"}},h=function(e,t,n,i){var r=this,a=uni.getStorageSync("token");""==a&&uni.reLaunch({url:"/pages/login/login"});n=o({token:uni.getStorageSync("token")},n);uni.request({url:t,method:"GET",data:n,success:function(t){t=t.data;1==t.code?i(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){console.log(e),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),r.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},_={api:b,auth:h,setToken:s,getToken:l,removeToken:f,getUserInfo:u,setUserInfo:c,setId:d,getId:g,setLogid:m,getLogid:v};t.default=_},"14b4":function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,".footer[data-v-04c0d9bb]{left:0;bottom:0;width:100%;color:#fff;z-index:1000;height:%?100?%;position:fixed;background-color:#181e30}.footer_item[data-v-04c0d9bb]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-04c0d9bb]{top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?10?%}.footer_item.big_item[data-v-04c0d9bb]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-04c0d9bb]{width:%?100?%;height:%?100?%}.active[data-v-04c0d9bb]{color:#5d8afc}",""])},"22c1":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o={methods:{jump:function(e){uni.navigateTo({url:e})},change_nav:function(e){this.$store.commit("change_page",e)}},computed:{footer_nav:function(){return this.$store.state.footer_store.footer_nav},now_index:function(){return uni.getStorageSync("css")}}};t.default=o},"2bde":function(e,t,n){"use strict";n.r(t);var o=n("7869"),i=n("8a4c");for(var r in i)"default"!==r&&function(e){n.d(t,e,function(){return i[e]})}(r);var a=n("2877"),u=Object(a["a"])(i["default"],o["a"],o["b"],!1,null,null,null);t["default"]=u.exports},3444:function(e,t,n){"use strict";n.r(t);var o=n("5dbd"),i=n("d96f");for(var r in i)"default"!==r&&function(e){n.d(t,e,function(){return i[e]})}(r);n("7e0f");var a=n("2877"),u=Object(a["a"])(i["default"],o["a"],o["b"],!1,null,"04c0d9bb",null);t["default"]=u.exports},"47b4":function(e,t,n){"use strict";var o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"content"},[n("v-uni-view",{staticClass:"back"},[n("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(t){t=e.$handleEvent(t),e.back("/pages/interests/integral")}}})],1),n("v-uni-view",{staticStyle:{margin:"0 50upx"}},[n("v-uni-view",{staticClass:"text"},[e._v("M分壹但轉贈，不可退回！")]),n("v-uni-view",{staticClass:"margin"}),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("轉贈數量")]),n("v-uni-input",{attrs:{type:"text",maxlength:"20",placeholder:e.text},model:{value:e.integral,callback:function(t){e.integral=t},expression:"integral"}})],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("對方手機")]),n("v-uni-input",{attrs:{type:"text",maxlength:"11",placeholder:"請輸入手機號碼"},model:{value:e.mobile,callback:function(t){e.mobile=t},expression:"mobile"}})],1),n("v-uni-input",{staticClass:"hidden",attrs:{type:"text",value:e.num},model:{value:e.num,callback:function(t){e.num=t},expression:"num"}}),n("v-uni-button",{staticClass:"btn-area",on:{click:function(t){t=e.$handleEvent(t),e.roll(t)}}},[e._v("確認轉贈")])],1),n("footerNav")],1)},i=[];n.d(t,"a",function(){return o}),n.d(t,"b",function(){return i})},"5dbd":function(e,t,n){"use strict";var o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",[n("v-uni-view",{staticClass:"footer"},e._l(e.footer_nav,function(t,o){return n("v-uni-view",{key:o,class:"footer_item "+("big"==t.size?"big_item":""),staticStyle:{width:"33.3%"},on:{click:function(t){t=e.$handleEvent(t),e.change_nav(o)}}},[n("v-uni-view",{on:{click:function(n){n=e.$handleEvent(n),e.jump(t.pagePath)}}},[n("v-uni-image",{attrs:{src:o==e.now_index?t.select_icon:t.icon,mode:""}}),n("v-uni-view",{class:o==e.now_index?"active":""},[e._v(e._s(t.name))])],1)],1)}))],1)},i=[];n.d(t,"a",function(){return o}),n.d(t,"b",function(){return i})},7869:function(e,t,n){"use strict";var o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+e.type],style:{color:e.color,"font-size":e.fontSize},on:{click:function(t){t=e.$handleEvent(t),e.onClick()}}})},i=[];n.d(t,"a",function(){return o}),n.d(t,"b",function(){return i})},"7dc5":function(e,t,n){"use strict";n.r(t);var o=n("47b4"),i=n("9d66");for(var r in i)"default"!==r&&function(e){n.d(t,e,function(){return i[e]})}(r);var a=n("2877"),u=Object(a["a"])(i["default"],o["a"],o["b"],!1,null,"89da3790",null);t["default"]=u.exports},"7e0f":function(e,t,n){"use strict";var o=n("a465"),i=n.n(o);i.a},"8a4c":function(e,t,n){"use strict";n.r(t);var o=n("ceb8"),i=n.n(o);for(var r in o)"default"!==r&&function(e){n.d(t,e,function(){return o[e]})}(r);t["default"]=i.a},"9d66":function(e,t,n){"use strict";n.r(t);var o=n("f152"),i=n.n(o);for(var r in o)"default"!==r&&function(e){n.d(t,e,function(){return o[e]})}(r);t["default"]=i.a},a465:function(e,t,n){var o=n("14b4");"string"===typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);var i=n("4f06").default;i("803dff7a",o,!0,{sourceMap:!1,shadowMode:!1})},ceb8:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};t.default=o},d96f:function(e,t,n){"use strict";n.r(t);var o=n("22c1"),i=n.n(o);for(var r in o)"default"!==r&&function(e){n.d(t,e,function(){return o[e]})}(r);t["default"]=i.a},f152:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o=a(n("00d8")),i=a(n("2bde")),r=a(n("3444"));function a(e){return e&&e.__esModule?e:{default:e}}var u={components:{uniIcon:i.default,footerNav:r.default},data:function(){return{token:uni.getStorageSync("token"),user:uni.getStorageSync("user"),config:uni.getStorageSync("config"),integral:"",num:"",mobile:"",text:""}},onShow:function(){this.time(this),this.num=this.config.max_give,this.text="最高可轉出 "+this.config.max_give+" 分"},methods:{back:function(e){uni.navigateTo({url:e})},time:function(e){if(""!=e.integral){var t=e.integral-e.num;t>0&&uni.showToast({icon:"none",title:"超過限定的積分轉贈額度"})}setTimeout(function(){e.time(e)},5e3)},roll:function(){self=this;var e=self.token,t=self.integral-self.num;""!=self.integral?t>0?uni.showToast({icon:"none",title:"超過限定的積分轉贈額度"}):11==self.mobile.length?/^1[3|4|5|7|8][0-9]\d{8,11}$/.test(self.mobile)?uni.showModal({content:"確認將M分轉贈嗎？",cancelText:"取消",confirmText:"確認",confirmColor:"#FFAE00",cancelColor:"#D2D2D2",success:function(t){t.confirm&&uni.request({url:o.default.api.interests.roll,method:"GET",data:{token:e,mobile:self.mobile,integral:self.integral},success:function(e){e=e.data;if(uni.showToast({icon:"none",title:e.msg}),1==e.code){var t=self.num-self.integral;self.user.integral=t,uni.setStorageSync("user",self.user),self.integral="",self.mobile=""}}})}}):uni.showToast({icon:"none",title:"手機號碼格式不正確"}):uni.showToast({icon:"none",title:"請輸入11位的手機號碼"}):uni.showToast({icon:"none",title:"轉贈積分數量不能為空"})}}};t.default=u}}]);