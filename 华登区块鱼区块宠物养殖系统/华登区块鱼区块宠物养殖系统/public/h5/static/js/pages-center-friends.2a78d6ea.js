(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-center-friends"],{"08dd":function(e,t,n){"use strict";var o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",[e.now_index<3?void 0:[n("v-uni-view",{staticClass:"footer1"},[e._l(e.tabBar,function(t,o){return n("v-uni-view",{key:o,staticClass:"footer_item",staticStyle:{width:"33.3%"}},[n("v-uni-view",{on:{click:function(n){n=e.$handleEvent(n),e.jump(t.pagePath,t.id)}}},[n("v-uni-image",{attrs:{src:t.id==e.now_index?t.selectedIconPath:t.iconPath,mode:""}}),n("v-uni-view",{class:"tab_text "+(t.id==e.now_index?"actives1":"")},[e._v(e._s(t.text))])],1)],1)}),n("v-uni-view",{staticClass:"footer_item",staticStyle:{width:"33.3%"}},[n("v-uni-view",{on:{click:function(t){t=e.$handleEvent(t),e.order()}}},[n("v-uni-image",{attrs:{src:"/static/tabbar/main.png",mode:""}}),n("v-uni-view",{staticClass:"tab_text1"},[e._v("返回貓窩")])],1)],1)],2)]],2)},i=[];n.d(t,"a",function(){return o}),n.d(t,"b",function(){return i})},"0ea1":function(e,t,n){"use strict";n.r(t);var o=n("38be"),i=n.n(o);for(var r in o)"default"!==r&&function(e){n.d(t,e,function(){return o[e]})}(r);t["default"]=i.a},"1b6e":function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,".footer[data-v-5f7461c0]{left:0;bottom:0;width:100%;color:#fff;z-index:1000;height:%?100?%;position:fixed;background:#181e30}.footer1[data-v-5f7461c0]{left:0;bottom:0;width:100%;color:#fff;height:%?100?%;position:fixed;background-color:#fff}.footer_item[data-v-5f7461c0]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-5f7461c0]{margin-top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?0?%}.footer_item.big_item[data-v-5f7461c0]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-5f7461c0]{width:%?100?%;height:%?100?%}.actives[data-v-5f7461c0]{color:#5d8afc}.actives1[data-v-5f7461c0]{color:#5d8afc}.tab_text1[data-v-5f7461c0]{color:#fdb513}",""])},"26c5":function(e,t,n){"use strict";n.r(t);var o=n("b722"),i=n.n(o);for(var r in o)"default"!==r&&function(e){n.d(t,e,function(){return o[e]})}(r);t["default"]=i.a},"38be":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o={data:function(){return{tabBar:[{id:3,iconPath:"/static/tabbar/refer.png",selectedIconPath:"/static/tabbar/referHL.png",pagePath:"/pages/service/repair",text:"提交工單"},{id:4,iconPath:"/static/tabbar/order.png",selectedIconPath:"/static/tabbar/orderHL.png",pagePath:"/pages/service/order",text:"我的工單"}],footer_nav:[{id:0,name:"貓貓集市",icon:"/static/tabbar/template.png",select_icon:"/static/tabbar/templateHL.png",pagePath:"/pages/main/bazaar"},{id:1,name:"服務中心",icon:"/static/tabbar/api.png",select_icon:"/static/tabbar/apiHL.png",pagePath:"/pages/main/service"},{id:2,name:"我的貓窩",icon:"/static/tabbar/component.png",select_icon:"/static/tabbar/componentHL.png",pagePath:"/pages/main/shack"}],now_index:uni.getStorageSync("css")}},methods:{jump:function(e,t){uni.setStorageSync("css",t),this.now_index=t,uni.reLaunch({url:e})},order:function(){uni.switchTab({url:"/pages/main/shack"})}}};t.default=o},"4b12":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o=a(n("db84")),i=a(n("5692")),r=a(n("b807"));function a(e){return e&&e.__esModule?e:{default:e}}var c={components:{uniIcon:i.default,footerNav:r.default},data:function(){return{token:uni.getStorageSync("token"),qrcode:""}},methods:{back:function(){uni.reLaunch({url:"/pages/main/shack"})}},onLoad:function(){var e=this;uni.request({url:o.default.api.center.friends,method:"GET",data:{token:this.token},success:function(t){t=t.data;1==t.code?e.qrcode=t.data.qrcode:uni.showModal({title:"温馨提示",content:t.msg,confirmText:"确认",confirmColor:"#FFAE00",cancelColor:"#D2D2D2",showCancel:!1,success:function(e){uni.switchTab({url:"/pages/main/shack"})}})}})}};t.default=c},5572:function(e,t,n){"use strict";var o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+e.type],style:{color:e.color,"font-size":e.fontSize},on:{click:function(t){t=e.$handleEvent(t),e.onClick()}}})},i=[];n.d(t,"a",function(){return o}),n.d(t,"b",function(){return i})},5692:function(e,t,n){"use strict";n.r(t);var o=n("5572"),i=n("26c5");for(var r in i)"default"!==r&&function(e){n.d(t,e,function(){return i[e]})}(r);var a=n("2877"),c=Object(a["a"])(i["default"],o["a"],o["b"],!1,null,null,null);t["default"]=c.exports},a2ae:function(e,t,n){"use strict";var o=n("ad18"),i=n.n(o);i.a},ad18:function(e,t,n){var o=n("bd2e");"string"===typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);var i=n("4f06").default;i("4cba61ef",o,!0,{sourceMap:!1,shadowMode:!1})},b722:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};t.default=o},b807:function(e,t,n){"use strict";n.r(t);var o=n("08dd"),i=n("0ea1");for(var r in i)"default"!==r&&function(e){n.d(t,e,function(){return i[e]})}(r);n("ef44");var a=n("2877"),c=Object(a["a"])(i["default"],o["a"],o["b"],!1,null,"5f7461c0",null);t["default"]=c.exports},ba09:function(e,t,n){"use strict";n.r(t);var o=n("cdb6"),i=n("e3c8");for(var r in i)"default"!==r&&function(e){n.d(t,e,function(){return i[e]})}(r);n("a2ae");var a=n("2877"),c=Object(a["a"])(i["default"],o["a"],o["b"],!1,null,"6bfa50e0",null);t["default"]=c.exports},bd2e:function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,".content[data-v-6bfa50e0]{background:#252831}.back_img[data-v-6bfa50e0]{width:100%;height:100%;position:fixed}.img[data-v-6bfa50e0]{height:100%;margin:%?0?% 50%;padding:50% %?0?%}.img uni-image[data-v-6bfa50e0]{width:%?450?%;height:%?450?%;margin-left:%?-225?%;z-index:997;position:fixed}",""])},cdb6:function(e,t,n){"use strict";var o=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"page"},[n("v-uni-view",{staticClass:"back"},[n("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(t){t=e.$handleEvent(t),e.back()}}})],1),n("v-uni-view",{staticClass:"img"},[n("v-uni-image",{attrs:{src:e.qrcode},on:{click:function(t){t=e.$handleEvent(t),e.save(t)}}})],1),n("v-uni-image",{staticClass:"back_img",attrs:{src:"../../static/img/friends.jpg",mode:""}}),n("footerNav")],1)},i=[];n.d(t,"a",function(){return o}),n.d(t,"b",function(){return i})},db84:function(e,t,n){"use strict";function o(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},o=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(o=o.concat(Object.getOwnPropertySymbols(n).filter(function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable}))),o.forEach(function(t){i(e,t,n[t])})}return e}function i(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r="USER_KEY",a="TOKEN_KEY",c=function(){var e="";return e=uni.getStorageSync(r),e||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},u=function(e){uni.setStorage({key:r,data:e})},s=function(e){uni.setStorageSync(a,e)},d=function(){return uni.getStorageSync(a)},f=function(){uni.clearStorage()},l=function(e){uni.setStorageSync("uid",e)},g=function(){return uni.getStorageSync("uid")},p=function(e){uni.setStorageSync("logid",e)},m=function(){return uni.getStorageSync("logid")},b="http://bc.hhwl168.com/",v={index:b+"default/index",home:{info:b+"port/member/info"},main:{bazaar:b+"port/index/index",order:b+"port/index/appointment",adopt:b+"port/index/adopt",result:b+"port/index/adoptResult",info:b+"port/index/confInfo",notice:b+"port/index/notice"},center:{code:b+"port/member/verifycode",password:b+"port/member/changePwd",passtwo:b+"port/member/changePwd2",pid:b+"port/member/realname",close:b+"port/member/changeMethodStatus",card:b+"port/member/myPaymentMethod",type:b+"port/member/getPaymentType",submit:b+"port/member/submitMethod",message:b+"port/member/systemMessage",team:b+"port/member/myTeam",friends:b+"port/member/inviteFriends"},service:{insert:b+"port/server_center/workorder",submit:b+"port/server_center/submitWorkorder",order:b+"port/server_center/workorderList"},login:{login:b+"port/login",logo:b+"port/login/get_enter_logo",forget:b+"port/login/forgetpwd"},reg:{register:b+"port/login/register",code:b+"port/login/verifycode",agree:b+"port/login/get_user_regagree"},interests:{qrcode:b+"port/member/recharge",integral:b+"port/member/integralLog",roll:b+"port/member/givingIntegral",sell:b+"port/member/assetSale",submit:b+"port/member/rechargeSubmit",earnings:b+"port/member/incomeLog",assets:b+"port/member/myAssets"},record:{pay:b+"port/order/pay",adopt:b+"port/order/index",make:b+"port/member/appointment",update:b+"port/order/pay",passtwo:b+"port/order/auditPass",submit:b+"port/order/complaint",complaint:b+"record/payment",transfer:b+"port/order/transfer",details:b+"port/order/detail",undo:b+"port/order/revoke"}},h=function(e,t,n,i){var r=this,a=uni.getStorageSync("token");""==a&&(uni.setStorageSync("token",""),uni.reLaunch({url:"/pages/login/login"}));n=o({token:uni.getStorageSync("token")},n);uni.request({url:t,method:"GET",data:n,success:function(t){t=t.data;1==t.code?i(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){console.log(e),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),r.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},w={api:v,auth:h,setToken:s,getToken:d,removeToken:f,getUserInfo:c,setUserInfo:u,setId:l,getId:g,setLogid:p,getLogid:m};t.default=w},e3c8:function(e,t,n){"use strict";n.r(t);var o=n("4b12"),i=n.n(o);for(var r in o)"default"!==r&&function(e){n.d(t,e,function(){return o[e]})}(r);t["default"]=i.a},e82f:function(e,t,n){var o=n("1b6e");"string"===typeof o&&(o=[[e.i,o,""]]),o.locals&&(e.exports=o.locals);var i=n("4f06").default;i("3bdf2f52",o,!0,{sourceMap:!1,shadowMode:!1})},ef44:function(e,t,n){"use strict";var o=n("e82f"),i=n.n(o);i.a}}]);