(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-reg-agree"],{"05be":function(e,t,n){"use strict";var r=n("841f"),o=n.n(r);o.a},"0e25":function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r=i(n("db84")),o=i(n("5692"));function i(e){return e&&e.__esModule?e:{default:e}}var a={data:function(){return{terms:""}},components:{uniIcon:o.default},onLoad:function(){var e=this;uni.request({url:r.default.api.reg.agree,method:"GET",success:function(t){t=t.data;1==t.code&&(e.terms=t.data.registration_agreement)}})},methods:{back:function(){uni.reLaunch({url:"/pages/reg/reg"})}}};t.default=a},2379:function(e,t,n){"use strict";n.r(t);var r=n("da53"),o=n("c90c");for(var i in o)"default"!==i&&function(e){n.d(t,e,function(){return o[e]})}(i);n("05be");var a=n("2877"),u=Object(a["a"])(o["default"],r["a"],r["b"],!1,null,"0ea3922b",null);t["default"]=u.exports},"26c5":function(e,t,n){"use strict";n.r(t);var r=n("b722"),o=n.n(r);for(var i in r)"default"!==i&&function(e){n.d(t,e,function(){return r[e]})}(i);t["default"]=o.a},"470d":function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,"uni-page-body[data-v-0ea3922b]{background:#f7f7f7}body.?%PAGE?%[data-v-0ea3922b]{background:#f7f7f7}",""])},5572:function(e,t,n){"use strict";var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+e.type],style:{color:e.color,"font-size":e.fontSize},on:{click:function(t){t=e.$handleEvent(t),e.onClick()}}})},o=[];n.d(t,"a",function(){return r}),n.d(t,"b",function(){return o})},5692:function(e,t,n){"use strict";n.r(t);var r=n("5572"),o=n("26c5");for(var i in o)"default"!==i&&function(e){n.d(t,e,function(){return o[e]})}(i);var a=n("2877"),u=Object(a["a"])(o["default"],r["a"],r["b"],!1,null,null,null);t["default"]=u.exports},"841f":function(e,t,n){var r=n("470d");"string"===typeof r&&(r=[[e.i,r,""]]),r.locals&&(e.exports=r.locals);var o=n("4f06").default;o("747661ce",r,!0,{sourceMap:!1,shadowMode:!1})},b722:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};t.default=r},c90c:function(e,t,n){"use strict";n.r(t);var r=n("0e25"),o=n.n(r);for(var i in r)"default"!==i&&function(e){n.d(t,e,function(){return r[e]})}(i);t["default"]=o.a},da53:function(e,t,n){"use strict";var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"page"},[n("v-uni-view",{staticClass:"back"},[n("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(t){t=e.$handleEvent(t),e.back()}}})],1),n("v-uni-view",{staticStyle:{margin:"40upx 38upx"}},[n("div",{domProps:{innerHTML:e._s(e.terms)}})])],1)},o=[];n.d(t,"a",function(){return r}),n.d(t,"b",function(){return o})},db84:function(e,t,n){"use strict";function r(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},r=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(r=r.concat(Object.getOwnPropertySymbols(n).filter(function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable}))),r.forEach(function(t){o(e,t,n[t])})}return e}function o(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i="USER_KEY",a="TOKEN_KEY",u=function(){var e="";return e=uni.getStorageSync(i),e||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},c=function(e){uni.setStorage({key:i,data:e})},s=function(e){uni.setStorageSync(a,e)},d=function(){return uni.getStorageSync(a)},l=function(){uni.clearStorage()},f=function(e){uni.setStorageSync("uid",e)},p=function(){return uni.getStorageSync("uid")},g=function(e){uni.setStorageSync("logid",e)},m=function(){return uni.getStorageSync("logid")},b="http://bc.hhwl168.com/",v={index:b+"default/index",home:{info:b+"port/member/info"},main:{bazaar:b+"port/index/index",order:b+"port/index/appointment",adopt:b+"port/index/adopt",result:b+"port/index/adoptResult",info:b+"port/index/confInfo",notice:b+"port/index/notice"},center:{code:b+"port/member/verifycode",password:b+"port/member/changePwd",passtwo:b+"port/member/changePwd2",pid:b+"port/member/realname",close:b+"port/member/changeMethodStatus",card:b+"port/member/myPaymentMethod",type:b+"port/member/getPaymentType",submit:b+"port/member/submitMethod",message:b+"port/member/systemMessage",team:b+"port/member/myTeam",friends:b+"port/member/inviteFriends"},service:{insert:b+"port/server_center/workorder",submit:b+"port/server_center/submitWorkorder",order:b+"port/server_center/workorderList"},login:{login:b+"port/login",logo:b+"port/login/get_enter_logo",forget:b+"port/login/forgetpwd"},reg:{register:b+"port/login/register",code:b+"port/login/verifycode",agree:b+"port/login/get_user_regagree"},interests:{qrcode:b+"port/member/recharge",integral:b+"port/member/integralLog",roll:b+"port/member/givingIntegral",sell:b+"port/member/assetSale",submit:b+"port/member/rechargeSubmit",earnings:b+"port/member/incomeLog",assets:b+"port/member/myAssets"},record:{pay:b+"port/order/pay",adopt:b+"port/order/index",make:b+"port/member/appointment",update:b+"port/order/pay",passtwo:b+"port/order/auditPass",submit:b+"port/order/complaint",complaint:b+"record/payment",transfer:b+"port/order/transfer",details:b+"port/order/detail",undo:b+"port/order/revoke"}},y=function(e,t,n,o){var i=this,a=uni.getStorageSync("token");""==a&&(uni.setStorageSync("token",""),uni.reLaunch({url:"/pages/login/login"}));n=r({token:uni.getStorageSync("token")},n);uni.request({url:t,method:"GET",data:n,success:function(t){t=t.data;1==t.code?o(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){console.log(e),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),i.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},h={api:v,auth:y,setToken:s,getToken:d,removeToken:l,getUserInfo:u,setUserInfo:c,setId:f,getId:p,setLogid:g,getLogid:m};t.default=h}}]);