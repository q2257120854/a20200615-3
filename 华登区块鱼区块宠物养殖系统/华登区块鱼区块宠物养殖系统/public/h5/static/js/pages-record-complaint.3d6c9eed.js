(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-record-complaint"],{"00d8":function(t,e,n){"use strict";function o(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{},o=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(o=o.concat(Object.getOwnPropertySymbols(n).filter(function(t){return Object.getOwnPropertyDescriptor(n,t).enumerable}))),o.forEach(function(e){a(t,e,n[e])})}return t}function a(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var r="USER_KEY",i="TOKEN_KEY",c=function(){var t="";return t=uni.getStorageSync(r),t||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},s=function(t){uni.setStorage({key:r,data:t})},u=function(t){uni.setStorageSync(i,t)},d=function(){return uni.getStorageSync(i)},l=function(){uni.clearStorage()},f=function(t){uni.setStorageSync("uid",t)},p=function(){return uni.getStorageSync("uid")},g=function(t){uni.setStorageSync("logid",t)},m=function(){return uni.getStorageSync("logid")},v="http://blockcat.8396048.com/",b={index:v+"default/index",home:{info:v+"port/member/info"},main:{bazaar:v+"port/index/index",order:v+"port/index/appointment",adopt:v+"port/index/adopt",result:v+"port/index/adoptResult",info:v+"port/index/confInfo",notice:v+"port/index/notice"},center:{code:v+"port/member/verifycode",password:v+"port/member/changePwd",passtwo:v+"port/member/changePwd2",pid:v+"port/member/realname",close:v+"port/member/changeMethodStatus",card:v+"port/member/myPaymentMethod",type:v+"port/member/getPaymentType",submit:v+"port/member/submitMethod",message:v+"port/member/systemMessage",team:v+"port/member/myTeam",friends:v+"port/member/inviteFriends"},service:{insert:v+"port/server_center/workorder",submit:v+"port/server_center/submitWorkorder",order:v+"port/server_center/workorderList"},login:{login:v+"port/login",logo:v+"port/login/get_enter_logo",forget:v+"port/login/forgetpwd"},reg:{register:v+"port/login/register",code:v+"port/login/verifycode",agree:v+"port/login/get_user_regagree"},interests:{qrcode:v+"port/member/recharge",integral:v+"port/member/integralLog",roll:v+"port/member/givingIntegral",sell:v+"port/member/assetSale",submit:v+"port/member/rechargeSubmit",earnings:v+"port/member/incomeLog"},record:{pay:v+"port/order/pay",adopt:v+"port/order/index",make:v+"port/member/appointment",update:v+"port/order/pay",passtwo:v+"port/order/auditPass",submit:v+"port/order/complaint",complaint:v+"record/payment",transfer:v+"port/order/transfer",details:v+"port/order/detail",undo:v+"port/order/detail"}},h=function(t,e,n,a){var r=this,i=uni.getStorageSync("token");""==i&&(uni.setStorageSync("token",""),uni.reLaunch({url:"/pages/login/login"}));n=o({token:uni.getStorageSync("token")},n);uni.request({url:e,method:"GET",data:n,success:function(e){e=e.data;1==e.code?a(t,e):400==e.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:e.msg})},fail:function(t){console.log(t),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(t){t=t.data;13==t.code&&(uni.showToast({icon:"none",title:t.msg}),r.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},_={api:b,auth:h,setToken:u,getToken:d,removeToken:l,getUserInfo:c,setUserInfo:s,setId:f,getId:p,setLogid:g,getLogid:m};e.default=_},"0118":function(t,e,n){e=t.exports=n("2350")(!1),e.push([t.i,".footer[data-v-a41350ac]{left:0;bottom:0;width:100%;color:#fff;z-index:1000;height:%?100?%;position:fixed;background:#181e30}.footer1[data-v-a41350ac]{left:0;bottom:0;width:100%;color:#fff;height:%?100?%;position:fixed;background-color:#fff}.footer_item[data-v-a41350ac]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-a41350ac]{margin-top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?0?%}.footer_item.big_item[data-v-a41350ac]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-a41350ac]{width:%?100?%;height:%?100?%}.actives[data-v-a41350ac]{color:#5d8afc}.actives1[data-v-a41350ac]{color:#5d8afc}",""])},"034d":function(t,e,n){"use strict";var o=n("faf8"),a=n.n(o);a.a},"0d09":function(t,e,n){"use strict";var o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-uni-view",[t.now_index<3?void 0:[n("v-uni-view",{staticClass:"footer1"},t._l(t.tabBar,function(e,o){return n("v-uni-view",{key:o,staticClass:"footer_item",staticStyle:{width:"50%"}},[n("v-uni-view",{on:{click:function(n){n=t.$handleEvent(n),t.jump(e.pagePath,e.id)}}},[n("v-uni-image",{attrs:{src:e.id==t.now_index?e.selectedIconPath:e.iconPath,mode:""}}),n("v-uni-view",{class:"tab_text "+(e.id==t.now_index?"actives1":"")},[t._v(t._s(e.text))])],1)],1)}),1)]],2)},a=[];n.d(e,"a",function(){return o}),n.d(e,"b",function(){return a})},"22c1":function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var o={data:function(){return{tabBar:[{id:3,iconPath:"/static/tabbar/refer.png",selectedIconPath:"/static/tabbar/referHL.png",pagePath:"/pages/service/repair",text:"提交工單"},{id:4,iconPath:"/static/tabbar/order.png",selectedIconPath:"/static/tabbar/orderHL.png",pagePath:"/pages/service/order",text:"我的工單"}],footer_nav:[{id:0,name:"貓貓集市",icon:"/static/tabbar/template.png",select_icon:"/static/tabbar/templateHL.png",pagePath:"/pages/main/bazaar"},{id:1,name:"服務中心",icon:"/static/tabbar/api.png",select_icon:"/static/tabbar/apiHL.png",pagePath:"/pages/main/service"},{id:2,name:"我的貓窩",icon:"/static/tabbar/component.png",select_icon:"/static/tabbar/componentHL.png",pagePath:"/pages/main/shack"}],now_index:uni.getStorageSync("css")}},methods:{jump:function(t,e){uni.setStorageSync("css",e),this.now_index=e,uni.navigateTo({url:t})}}};e.default=o},2364:function(t,e,n){"use strict";var o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-uni-view",{staticClass:"content"},[n("v-uni-view",{staticClass:"top"},[t._v("申訴後由客服人員介入調查！")]),n("v-uni-view",{staticClass:"body"},[n("v-uni-view",{staticClass:"text"},[t._v("訂單編號")]),n("v-uni-view",{staticClass:"text1"},[t._v(t._s(t.cat.ordersn))]),n("v-uni-view",{staticClass:"text"},[t._v("訂單金額")]),n("v-uni-view",{staticClass:"text1"},[t._v(t._s(t.cat.price))]),n("v-uni-view",{staticClass:"text"},[t._v("對方名稱")]),n("v-uni-view",{staticClass:"text1"},[t._v(t._s(t.cat.nickname))]),n("v-uni-view",{staticClass:"text"},[t._v("申訴理由")]),n("v-uni-view",{staticClass:"textarea"},[n("v-uni-textarea",{attrs:{placeholder:"寫下申訴的理由",maxlength:"200"},model:{value:t.reason,callback:function(e){t.reason=e},expression:"reason"}})],1),n("v-uni-button",{staticClass:"btn-area",on:{click:function(e){e=t.$handleEvent(e),t.present(e)}}},[t._v("提交申訴")])],1),n("footerNav")],1)},a=[];n.d(e,"a",function(){return o}),n.d(e,"b",function(){return a})},"24a1":function(t,e,n){e=t.exports=n("2350")(!1),e.push([t.i,".top[data-v-590bfc08]{color:#929292;font-size:%?30?%;text-indent:%?32?%;line-height:%?60?%;background:#f5eda8}.body[data-v-590bfc08]{padding:%?30?% 5%}.text[data-v-590bfc08]{color:#999;font-size:%?30?%;line-height:%?60?%}.text1[data-v-590bfc08]{color:#666;font-size:%?34?%;text-indent:%?20?%;line-height:%?64?%}.textarea uni-textarea[data-v-590bfc08]{width:90%;height:%?200?%;line-height:%?50?%;background:#fff;padding:%?0?% %?32?%;border:%?2?% solid #5d8afc}",""])},3444:function(t,e,n){"use strict";n.r(e);var o=n("0d09"),a=n("d96f");for(var r in a)"default"!==r&&function(t){n.d(e,t,function(){return a[t]})}(r);n("5e46");var i=n("2877"),c=Object(i["a"])(a["default"],o["a"],o["b"],!1,null,"a41350ac",null);e["default"]=c.exports},"5e46":function(t,e,n){"use strict";var o=n("d7e4"),a=n.n(o);a.a},7945:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var o=r(n("00d8")),a=r(n("3444"));function r(t){return t&&t.__esModule?t:{default:t}}var i={components:{footerNav:a.default},data:function(){return{reason:"",cat:[],id:uni.getStorageSync("number"),token:uni.getStorageSync("token")}},methods:{present:function(){""!=this.reason?uni.showModal({content:"確認提交申訴嗎？",cancelText:"取消",confirmText:"確認",confirmColor:"#FFAE00",cancelColor:"#D2D2D2",success:function(t){t.confirm&&uni.request({url:o.default.api.record.submit+"?token="+this.token,method:"GET",data:{id:this.id,reason:this.reason},success:function(t){t=t.data;uni.showToast({icon:"none",title:t.msg}),1==t.code&&setTimeout(function(){uni.navigateTo({url:"/pages/record/transfer"})},1e3)}})}}):uni.showToast({icon:"none",title:"申訴理由不能為空"})}},onLoad:function(){var t=uni.getStorageSync("number");o.default.auth(this,o.default.api.record.transfer+"?token="+this.token,{type:2},function(e,n){if(console.log(n),1==n.code)for(var o=n.data.orderlist,a=0;a<o.length;a++)o[a].id==t&&(e.cat=o[a])})}};e.default=i},"8e1b":function(t,e,n){"use strict";n.r(e);var o=n("7945"),a=n.n(o);for(var r in o)"default"!==r&&function(t){n.d(e,t,function(){return o[t]})}(r);e["default"]=a.a},d7e4:function(t,e,n){var o=n("0118");"string"===typeof o&&(o=[[t.i,o,""]]),o.locals&&(t.exports=o.locals);var a=n("4f06").default;a("42aac8f7",o,!0,{sourceMap:!1,shadowMode:!1})},d96f:function(t,e,n){"use strict";n.r(e);var o=n("22c1"),a=n.n(o);for(var r in o)"default"!==r&&function(t){n.d(e,t,function(){return o[t]})}(r);e["default"]=a.a},f3b3:function(t,e,n){"use strict";n.r(e);var o=n("2364"),a=n("8e1b");for(var r in a)"default"!==r&&function(t){n.d(e,t,function(){return a[t]})}(r);n("034d");var i=n("2877"),c=Object(i["a"])(a["default"],o["a"],o["b"],!1,null,"590bfc08",null);e["default"]=c.exports},faf8:function(t,e,n){var o=n("24a1");"string"===typeof o&&(o=[[t.i,o,""]]),o.locals&&(t.exports=o.locals);var a=n("4f06").default;a("eba3536c",o,!0,{sourceMap:!1,shadowMode:!1})}}]);