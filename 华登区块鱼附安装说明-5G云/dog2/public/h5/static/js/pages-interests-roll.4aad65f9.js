(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-interests-roll"],{"14b4":function(e,t,n){"use strict";n.r(t);var o=n("52f2"),i=n("f355");for(var r in i)"default"!==r&&function(e){n.d(t,e,function(){return i[e]})}(r);n("48b9");var a=n("2877"),c=Object(a["a"])(i["default"],o["a"],o["b"],!1,null,"ec14f616",null);t["default"]=c.exports},"176b":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};t.default=o},"1c03":function(e,t,n){"use strict";n.r(t);var o=n("9767"),i=n.n(o);for(var r in o)"default"!==r&&function(e){n.d(t,e,function(){return o[e]})}(r);t["default"]=i.a},"2ed0":function(e,t,n){"use strict";var o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+e.type],style:{color:e.color,"font-size":e.fontSize},on:{click:function(t){t=e.$handleEvent(t),e.onClick()}}})},i=[];n.d(t,"a",function(){return o}),n.d(t,"b",function(){return i})},"3aeb":function(e,t,n){"use strict";n.r(t);var o=n("176b"),i=n.n(o);for(var r in o)"default"!==r&&function(e){n.d(t,e,function(){return o[e]})}(r);t["default"]=i.a},"45a1":function(e,t,n){"use strict";n.r(t);var o=n("f96e"),i=n("1c03");for(var r in i)"default"!==r&&function(e){n.d(t,e,function(){return i[e]})}(r);n("488f");var a=n("2877"),c=Object(a["a"])(i["default"],o["a"],o["b"],!1,null,"b5a2f34c",null);t["default"]=c.exports},"488f":function(e,t,n){"use strict";var o=n("a874"),i=n.n(o);i.a},"48b9":function(e,t,n){"use strict";var o=n("5291"),i=n.n(o);i.a},5291:function(e,t,n){var o=n("c384");"string"===typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);var i=n("4f06").default;i("79948359",o,!0,{sourceMap:!1,shadowMode:!1})},"52f2":function(e,t,n){"use strict";var o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",[e.now_index<3?void 0:[n("v-uni-view",{staticClass:"footer1"},[e._l(e.tabBar,function(t,o){return n("v-uni-view",{key:o,staticClass:"footer_item",staticStyle:{width:"33.3%"}},[n("v-uni-view",{on:{click:function(n){n=e.$handleEvent(n),e.jump(t.pagePath,t.id)}}},[n("v-uni-image",{attrs:{src:t.id==e.now_index?t.selectedIconPath:t.iconPath,mode:""}}),n("v-uni-view",{class:"tab_text "+(t.id==e.now_index?"actives1":"")},[e._v(e._s(t.text))])],1)],1)}),n("v-uni-view",{staticClass:"footer_item",staticStyle:{width:"33.3%"}},[n("v-uni-view",{on:{click:function(t){t=e.$handleEvent(t),e.order()}}},[n("v-uni-image",{attrs:{src:"/static/tabbar/main.png",mode:""}}),n("v-uni-view",{staticClass:"tab_text1"},[e._v("返回亀窩")])],1)],1)],2)]],2)},i=[];n.d(t,"a",function(){return o}),n.d(t,"b",function(){return i})},"5d50":function(e,t,n){"use strict";n.r(t);var o=n("2ed0"),i=n("3aeb");for(var r in i)"default"!==r&&function(e){n.d(t,e,function(){return i[e]})}(r);var a=n("2877"),c=Object(a["a"])(i["default"],o["a"],o["b"],!1,null,null,null);t["default"]=c.exports},"6e35":function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,"uni-page-body[data-v-b5a2f34c]{background:#f2f2f2}body.?%PAGE?%[data-v-b5a2f34c]{background:#f2f2f2}",""])},9767:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o=a(n("e108")),i=a(n("5d50")),r=a(n("14b4"));function a(e){return e&&e.__esModule?e:{default:e}}var c={components:{uniIcon:i.default,footerNav:r.default},data:function(){return{token:uni.getStorageSync("token"),user:uni.getStorageSync("user"),config:uni.getStorageSync("config"),integral:"",number:0,num:"",mobile:"",text:"",status:1,arch:""}},onShow:function(){this.arch=o.default.config.arch,this.time(this),this.num=this.config.max_give,this.number=this.user.integral,this.text="賬戶最少保留 "+this.config.max_give+" 魚餌"},methods:{back:function(){uni.reLaunch({url:"/pages/interests/integral"})},time:function(e){if(""!=e.integral){var t=e.number-e.integral;t<e.num&&uni.showToast({icon:"none",title:"超過限定的"+e.arch+"轉贈額度"})}setTimeout(function(){e.time(e)},5e3)},roll:function(){self=this;var e=self.token,t=self.number-self.integral;""!=self.integral?/^[0-9]+.?[0-9]*$/.test(self.integral)?t<self.num?uni.showToast({icon:"none",title:"超過限定的"+self.arch+"轉贈額度"}):11==self.mobile.length?/^1[3|4|5|7|8|9][0-9]\d{8,11}$/.test(self.mobile)?uni.showModal({content:"確認將"+self.arch+"轉贈嗎？",cancelText:"取消",confirmText:"確認",confirmColor:"#FFAE00",cancelColor:"#D2D2D2",success:function(t){t.confirm&&(self.status=0,uni.request({url:o.default.api.interests.roll,method:"GET",data:{token:e,mobile:self.mobile,integral:self.integral},success:function(e){e=e.data;uni.showToast({icon:"none",title:e.msg}),1==e.code?setTimeout(function(){uni.navigateBack({delta:1})},1e3):self.status=1}}))}}):uni.showToast({icon:"none",title:"手機號碼格式不正確"}):uni.showToast({icon:"none",title:"請輸入11位的手機號碼"}):uni.showToast({icon:"none",title:"轉贈的"+self.arch+"額度只能是數字"}):uni.showToast({icon:"none",title:"轉贈"+self.arch+"數量不能為空"})}}};t.default=c},"9df3":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o={data:function(){return{tabBar:[{id:3,iconPath:"/static/tabbar/refer.png",selectedIconPath:"/static/tabbar/referHL.png",pagePath:"/pages/service/repair",text:"提交工單"},{id:4,iconPath:"/static/tabbar/order.png",selectedIconPath:"/static/tabbar/orderHL.png",pagePath:"/pages/service/order",text:"我的工單"}],footer_nav:[{id:0,name:"亀集市",icon:"/static/tabbar/template.png",select_icon:"/static/tabbar/templateHL.png",pagePath:"/pages/main/bazaar"},{id:1,name:"服務中心",icon:"/static/tabbar/api.png",select_icon:"/static/tabbar/apiHL.png",pagePath:"/pages/main/service"},{id:2,name:"我的亀窩",icon:"/static/tabbar/component.png",select_icon:"/static/tabbar/componentHL.png",pagePath:"/pages/main/shack"}],now_index:uni.getStorageSync("css")}},methods:{jump:function(e,t){uni.setStorageSync("css",t),this.now_index=t,uni.reLaunch({url:e})},order:function(){uni.switchTab({url:"/pages/main/shack"})}}};t.default=o},a874:function(e,t,n){var o=n("6e35");"string"===typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);var i=n("4f06").default;i("6c9d5159",o,!0,{sourceMap:!1,shadowMode:!1})},c384:function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,".footer[data-v-ec14f616]{left:0;bottom:0;width:100%;color:#fff;z-index:1000;height:%?100?%;position:fixed;background:#181e30}.footer1[data-v-ec14f616]{left:0;bottom:0;width:100%;color:#fff;height:%?100?%;position:fixed;background-color:#fff}.footer_item[data-v-ec14f616]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-ec14f616]{margin-top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?0?%}.footer_item.big_item[data-v-ec14f616]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-ec14f616]{width:%?100?%;height:%?100?%}.actives[data-v-ec14f616]{color:#5d8afc}.actives1[data-v-ec14f616]{color:#5d8afc}.tab_text1[data-v-ec14f616]{color:#fdb513}",""])},e108:function(e,t,n){"use strict";function o(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},o=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(o=o.concat(Object.getOwnPropertySymbols(n).filter(function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable}))),o.forEach(function(t){i(e,t,n[t])})}return e}function i(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r="USER_KEY",a="TOKEN_KEY",c=function(){var e="";return e=uni.getStorageSync(r),e},s=function(e){uni.setStorage({key:r,data:e})},u=function(e,t){var n=[];n.push(e),n.push(t),uni.setStorageSync("User_paw",n)},l=function(e){uni.setStorageSync("memory",e)},f=function(e){uni.setStorageSync(a,e)},d=function(){return uni.getStorageSync(a)},g=function(){uni.clearStorage()},p=function(e){uni.setStorageSync("uid",e)},m=function(){return uni.getStorageSync("uid")},v=function(e){uni.setStorageSync("logid",e)},b=function(){return uni.getStorageSync("logid")},h={arch:"魚餌",receive:"捕撈",status:"繁殖中",freeze:"凍結中",species:"區塊魚"},w="http://45.127.98.171/",y={index:w+"default/index",home:{info:w+"port/member/info"},main:{bazaar:w+"port/index/index",order:w+"port/index/appointment",adopt:w+"port/index/adopt",result:w+"port/index/adoptResult",info:w+"port/index/confInfo",notice:w+"port/index/notice"},center:{code:w+"port/member/verifycode",password:w+"port/member/changePwd",passtwo:w+"port/member/changePwd2",pid:w+"port/member/realname",close:w+"port/member/changeMethodStatus",card:w+"port/member/myPaymentMethod",type:w+"port/member/getPaymentType",submit:w+"port/member/submitMethod",message:w+"port/member/systemMessage",team:w+"port/member/myTeam",friends:w+"port/member/inviteFriends"},service:{insert:w+"port/server_center/workorder",submit:w+"port/server_center/submitWorkorder",order:w+"port/server_center/workorderList",weixin:w+""},login:{login:w+"port/login",logo:w+"port/login/get_enter_logo",forget:w+"port/login/forgetpwd"},reg:{register:w+"port/login/register",code:w+"port/login/verifycode",agree:w+"port/login/get_user_regagree",reg:w+"port/member/uploadimg"},interests:{qrcode:w+"port/member/recharge",integral:w+"port/member/integralLog",roll:w+"port/member/givingIntegral",sell:w+"port/member/assetSale",submit:w+"port/member/rechargeSubmit",earnings:w+"port/member/incomeLog",assets:w+"port/member/myAssets",detailed:w+"port/member/getVirtualmoneyLog"},record:{pay:w+"port/order/pay",adopt:w+"port/order/index",make:w+"port/member/appointment",update:w+"port/order/pay",passtwo:w+"port/order/auditPass",submit:w+"port/order/complaint",complaint:w+"record/payment",transfer:w+"port/order/transfer",details:w+"port/order/detail",undo:w+"port/order/revoke"}},_=function(e,t,n,i){var r=this,a=uni.getStorageSync("token");""==a&&(uni.setStorageSync("token",""),uni.reLaunch({url:"/pages/login/login"}));n=o({token:uni.getStorageSync("token")},n);uni.request({url:t,method:"GET",data:n,success:function(t){t=t.data;1==t.code?i(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){console.log(e),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),r.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},x={api:y,auth:_,setToken:f,getToken:d,removeToken:g,getUserInfo:c,setUserInfo:s,setId:p,getId:m,setLogid:v,getLogid:b,config:h,User_paw:u,Memory:l};t.default=x},f355:function(e,t,n){"use strict";n.r(t);var o=n("9df3"),i=n.n(o);for(var r in o)"default"!==r&&function(e){n.d(t,e,function(){return o[e]})}(r);t["default"]=i.a},f96e:function(e,t,n){"use strict";var o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"page"},[n("v-uni-view",{staticClass:"back"},[n("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(t){t=e.$handleEvent(t),e.back()}}})],1),n("v-uni-view",{staticStyle:{margin:"0 50upx"}},[n("v-uni-view",{staticClass:"text"},[e._v(e._s(e.arch)+"壹旦轉贈，不可退回！")]),n("v-uni-view",{staticClass:"margin"}),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("轉贈數量")]),n("v-uni-input",{attrs:{type:"text",maxlength:"20",placeholder:e.text},model:{value:e.integral,callback:function(t){e.integral=t},expression:"integral"}})],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("對方手機")]),n("v-uni-input",{attrs:{type:"text",maxlength:"11",placeholder:"請輸入手機號碼"},model:{value:e.mobile,callback:function(t){e.mobile=t},expression:"mobile"}})],1),n("v-uni-input",{staticClass:"hidden",attrs:{type:"text",value:e.num},model:{value:e.num,callback:function(t){e.num=t},expression:"num"}}),1==e.status?[n("v-uni-button",{staticClass:"btn-area",on:{click:function(t){t=e.$handleEvent(t),e.roll(t)}}},[e._v("確認轉贈")])]:[n("v-uni-button",{staticClass:"btn-area"},[e._v("確認轉贈")])]],2),n("footerNav")],1)},i=[];n.d(t,"a",function(){return o}),n.d(t,"b",function(){return i})}}]);