(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-main-shack"],{"00d8":function(t,e,n){"use strict";function i(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{},i=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(i=i.concat(Object.getOwnPropertySymbols(n).filter(function(t){return Object.getOwnPropertyDescriptor(n,t).enumerable}))),i.forEach(function(e){a(t,e,n[e])})}return t}function a(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var o="USER_KEY",r="TOKEN_KEY",s=function(){var t="";return t=uni.getStorageSync(o),t||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},c=function(t){uni.setStorage({key:o,data:t})},u=function(t){uni.setStorageSync(r,t)},l=function(){return uni.getStorageSync(r)},d=function(){uni.clearStorage()},v=function(t){uni.setStorageSync("uid",t)},f=function(){return uni.getStorageSync("uid")},m=function(t){uni.setStorageSync("logid",t)},p=function(){return uni.getStorageSync("logid")},g="/",b={index:g+"default/index",home:{info:g+"port/member/info"},main:{bazaar:g+"port/index/index",order:g+"port/index/appointment",adopt:g+"port/index/adopt",info:g+"port/index/confInfo",notice:g+"port/index/notice"},center:{code:g+"port/member/verifycode",password:g+"port/member/changePwd",passtwo:g+"port/member/changePwd2",pid:g+"port/member/realname",close:g+"port/member/changeMethodStatus",card:g+"port/member/myPaymentMethod",type:g+"port/member/getPaymentType",submit:g+"port/member/submitMethod",message:g+"port/member/systemMessage",team:g+"port/member/myTeam",friends:g+"port/member/inviteFriends"},service:{insert:g+"port/server_center/workorder",submit:g+"port/server_center/submitWorkorder",order:g+"port/server_center/workorderList"},login:{login:g+"port/login",logo:g+"port/login/get_enter_logo",forget:g+"port/login/forgetpwd"},reg:{register:g+"port/login/register",code:g+"port/login/verifycode",agree:g+"port/login/get_user_regagree"},interests:{qrcode:g+"port/member/recharge",integral:g+"port/member/integralLog",roll:g+"port/member/givingIntegral",sell:g+"port/member/assetSale",submit:g+"port/member/rechargeSubmit",earnings:g+"port/member/incomeLog"},record:{pay:g+"port/order/pay",adopt:g+"port/order/index",make:g+"port/member/appointment",update:g+"port/order/pay",passtwo:g+"port/order/auditPass",submit:g+"port/order/complaint",complaint:g+"record/payment",transfer:g+"port/order/transfer",details:g+"port/order/detail",undo:g+"port/order/detail"}},w=function(t,e,n,a){var o=this,r=uni.getStorageSync("token");""==r&&uni.reLaunch({url:"/pages/login/login"});n=i({token:uni.getStorageSync("token")},n);uni.request({url:e,method:"GET",data:n,success:function(e){e=e.data;1==e.code?a(t,e):400==e.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:e.msg})},fail:function(t){console.log(t),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(t){t=t.data;13==t.code&&(uni.showToast({icon:"none",title:t.msg}),o.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},h={api:b,auth:w,setToken:u,getToken:l,removeToken:d,getUserInfo:s,setUserInfo:c,setId:v,getId:f,setLogid:m,getLogid:p};e.default=h},"14b4":function(t,e,n){e=t.exports=n("2350")(!1),e.push([t.i,".footer[data-v-04c0d9bb]{left:0;bottom:0;width:100%;color:#fff;z-index:1000;height:%?100?%;position:fixed;background-color:#181e30}.footer_item[data-v-04c0d9bb]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-04c0d9bb]{top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?10?%}.footer_item.big_item[data-v-04c0d9bb]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-04c0d9bb]{width:%?100?%;height:%?100?%}.active[data-v-04c0d9bb]{color:#5d8afc}",""])},"202e":function(t,e,n){"use strict";var i=n("23c7"),a=n.n(i);a.a},"22c1":function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i={methods:{jump:function(t){uni.navigateTo({url:t})},change_nav:function(t){this.$store.commit("change_page",t)}},computed:{footer_nav:function(){return this.$store.state.footer_store.footer_nav},now_index:function(){return uni.getStorageSync("css")}}};e.default=i},2385:function(t,e,n){"use strict";n.r(e);var i=n("7b9c"),a=n("af32");for(var o in a)"default"!==o&&function(t){n.d(e,t,function(){return a[t]})}(o);n("202e");var r=n("2877"),s=Object(r["a"])(a["default"],i["a"],i["b"],!1,null,"d605c042",null);e["default"]=s.exports},"23c7":function(t,e,n){var i=n("417d");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var a=n("4f06").default;a("ba7dcc86",i,!0,{sourceMap:!1,shadowMode:!1})},"2a0a":function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i=r(n("3444")),a=r(n("2bde")),o=r(n("00d8"));function r(t){return t&&t.__esModule?t:{default:t}}var s={components:{uniIcon:a.default,footerNav:i.default},data:function(){return{account:"",nickname:"",integral:0,totalassets:0,is_idverifly:0,accumulated_income:0,recommend:0,adopt:0,transfer:0,make:0,level:"",token:uni.getStorageSync("token")}},onShow:function(){uni.setStorageSync("css",2),uni.setStorageSync("tabbar",0),o.default.auth(this,o.default.api.home.info+"?token="+this.token,{},function(t,e){if(1==e.code){var n=e.data.member;uni.setStorageSync("user",n),t.account=n.account,t.nickname=n.nickname,t.integral=n.integral,t.accumulated_income=n.accumulated_income,t.totalassets=n.totalassets,t.is_idverifly=n.is_idverifly,t.recommend=n.recommend_income,t.adopt=n.adoptcount,t.transfer=n.transfercount,t.make=n.appoicount,0!=n.levelname.length&&(t.level=n.levelname)}}),o.default.auth(this,o.default.api.main.info+"?token="+this.token,{},function(t,e){1==e.code&&uni.setStorageSync("config",e.data)})},methods:{jumpurl:function(t){uni.navigateTo({url:t})}}};e.default=s},"2bde":function(t,e,n){"use strict";n.r(e);var i=n("7869"),a=n("8a4c");for(var o in a)"default"!==o&&function(t){n.d(e,t,function(){return a[t]})}(o);var r=n("2877"),s=Object(r["a"])(a["default"],i["a"],i["b"],!1,null,null,null);e["default"]=s.exports},3444:function(t,e,n){"use strict";n.r(e);var i=n("5dbd"),a=n("d96f");for(var o in a)"default"!==o&&function(t){n.d(e,t,function(){return a[t]})}(o);n("7e0f");var r=n("2877"),s=Object(r["a"])(a["default"],i["a"],i["b"],!1,null,"04c0d9bb",null);e["default"]=s.exports},"417d":function(t,e,n){e=t.exports=n("2350")(!1),e.push([t.i,"uni-page-body[data-v-d605c042]{background-color:#252831}.top[data-v-d605c042]{color:#fff;text-indent:%?24?%}.text-id[data-v-d605c042]{font-size:%?30?%;line-height:%?30?%;margin:%?35?% %?28?% %?0?% %?0?%}.mobile[data-v-d605c042]{margin-top:%?35?%;line-height:%?64?%}.name[data-v-d605c042]{font-size:%?40?%}.level[data-v-d605c042]{color:#fc1;font-size:%?20?%;margin-left:%?40?%}.id[data-v-d605c042]{font-size:%?28?%;line-height:%?40?%;margin-bottom:%?30?%}.recommend[data-v-d605c042]{width:94%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:%?0?% 3%;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;border-radius:%?10?%;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;background-color:#1e1e2a}.btn[data-v-d605c042]{width:25%;height:%?140?%;color:#f1f1f1;margin-top:%?40?%;text-align:center}.btn-top[data-v-d605c042]{height:%?70?%;font-size:%?36?%;line-height:%?70?%}.btn-bottom[data-v-d605c042]{font-size:%?28?%;line-height:%?30?%}.record[data-v-d605c042]{width:94%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin:%?0?% 3%;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;border-radius:%?10?%;background-color:#3a3d46}.btn1[data-v-d605c042]{width:28%;height:%?160?%;margin-left:5%;text-align:center}.btn1-top[data-v-d605c042]{height:%?100?%}.btn1-top uni-image[data-v-d605c042]{width:%?60?%;height:%?60?%;margin-top:%?20?%}.btn1-bottom[data-v-d605c042]{color:#fff;font-size:%?28?%;line-height:%?30?%}.num[data-v-d605c042]{color:#fff;font-size:%?20?%;margin-top:%?8?%;position:absolute;border-radius:40%;padding:%?2?% %?10?%;margin-left:%?120?%;background-color:#fdb513}body.?%PAGE?%[data-v-d605c042]{background-color:#252831}",""])},"5dbd":function(t,e,n){"use strict";var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-uni-view",[n("v-uni-view",{staticClass:"footer"},t._l(t.footer_nav,function(e,i){return n("v-uni-view",{key:i,class:"footer_item "+("big"==e.size?"big_item":""),staticStyle:{width:"33.3%"},on:{click:function(e){e=t.$handleEvent(e),t.change_nav(i)}}},[n("v-uni-view",{on:{click:function(n){n=t.$handleEvent(n),t.jump(e.pagePath)}}},[n("v-uni-image",{attrs:{src:i==t.now_index?e.select_icon:e.icon,mode:""}}),n("v-uni-view",{class:i==t.now_index?"active":""},[t._v(t._s(e.name))])],1)],1)}))],1)},a=[];n.d(e,"a",function(){return i}),n.d(e,"b",function(){return a})},7869:function(t,e,n){"use strict";var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+t.type],style:{color:t.color,"font-size":t.fontSize},on:{click:function(e){e=t.$handleEvent(e),t.onClick()}}})},a=[];n.d(e,"a",function(){return i}),n.d(e,"b",function(){return a})},"7b9c":function(t,e,n){"use strict";var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-uni-view",{staticClass:"content"},[n("v-uni-view",{staticClass:"top"},[n("v-uni-view",{staticClass:"text-id",staticStyle:{widows:"20upx",float:"right"}},[n("uni-icon",{attrs:{size:"28",type:"gear"},on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/user/seting")}}})],1),n("v-uni-view",{staticClass:"mobile"},[n("span",{staticClass:"name"},[t._v(t._s(t.nickname))]),n("span",{staticClass:"level"},[t._v(t._s(t.level))])]),n("v-uni-view",{staticClass:"id"},[t._v("ID/手機："+t._s(t.account))])],1),n("v-uni-view",{staticClass:"recommend"},[n("v-uni-view",{staticClass:"btn",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/interests/integral")}}},[n("v-uni-view",{staticClass:"btn-top"},[t._v(t._s(t.integral))]),n("v-uni-view",{staticClass:"btn-bottom"},[t._v("M分")])],1),n("v-uni-view",{staticClass:"btn",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/interests/earnings")}}},[n("v-uni-view",{staticClass:"btn-top"},[t._v(t._s(t.accumulated_income))]),n("v-uni-view",{staticClass:"btn-bottom"},[t._v("累計收益")])],1),n("v-uni-view",{staticClass:"btn"},[n("v-uni-view",{staticClass:"btn-top"},[t._v(t._s(t.totalassets))]),n("v-uni-view",{staticClass:"btn-bottom"},[t._v("總資產")])],1),n("v-uni-view",{staticClass:"btn",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/interests/recommend")}}},[n("v-uni-view",{staticClass:"btn-top"},[t._v(t._s(t.recommend))]),n("v-uni-view",{staticClass:"btn-bottom"},[t._v("推薦收益")])],1)],1),n("v-uni-view",{staticStyle:{height:"20upx"}}),n("v-uni-view",{staticClass:"record"},[n("v-uni-view",{staticClass:"btn1",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/record/adopt")}}},[n("v-uni-view",{staticClass:"btn1-top"},[t.adopt>0?n("v-uni-view",{staticClass:"num"},[t._v(t._s(t.adopt))]):t._e(),n("v-uni-image",{attrs:{src:"../../static/function/adopt.png"}})],1),n("v-uni-view",{staticClass:"btn1-bottom"},[t._v("領養記錄")])],1),n("v-uni-view",{staticClass:"btn1",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/record/transfer")}}},[n("v-uni-view",{staticClass:"btn1-top"},[t.transfer>0?n("v-uni-view",{staticClass:"num"},[t._v(t._s(t.transfer))]):t._e(),n("v-uni-image",{attrs:{src:"../../static/function/transfer.png"}})],1),n("v-uni-view",{staticClass:"btn1-bottom"},[t._v("轉讓記錄")])],1),n("v-uni-view",{staticClass:"btn1",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/record/make")}}},[n("v-uni-view",{staticClass:"btn1-top"},[t.make>0?n("v-uni-view",{staticClass:"num"},[t._v(t._s(t.make))]):t._e(),n("v-uni-image",{attrs:{src:"../../static/function/make.png"}})],1),n("v-uni-view",{staticClass:"btn1-bottom"},[t._v("預約記錄")])],1)],1),n("v-uni-view",{staticStyle:{height:"20upx"}}),n("v-uni-view",{staticClass:"record"},[n("v-uni-view",{staticClass:"btn1",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/center/security")}}},[n("v-uni-view",{staticClass:"btn1-top"},[n("v-uni-image",{attrs:{src:"../../static/function/security.png"}})],1),n("v-uni-view",{staticClass:"btn1-bottom"},[t._v("安全中心")])],1),n("v-uni-view",{staticClass:"btn1",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/center/name")}}},[n("v-uni-view",{staticClass:"btn1-top"},[n("v-uni-image",{attrs:{src:"../../static/function/name.png"}})],1),n("v-uni-view",{staticClass:"btn1-bottom"},[t._v("實名驗證")])],1),n("v-uni-view",{staticClass:"btn1",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/center/card")}}},[n("v-uni-view",{staticClass:"btn1-top"},[n("v-uni-image",{attrs:{src:"../../static/function/card.png"}})],1),n("v-uni-view",{staticClass:"btn1-bottom"},[t._v("我的銀行卡")])],1),n("v-uni-view",{staticClass:"btn1",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/center/team")}}},[n("v-uni-view",{staticClass:"btn1-top"},[n("v-uni-image",{attrs:{src:"../../static/function/team.png"}})],1),n("v-uni-view",{staticClass:"btn1-bottom"},[t._v("我的團隊")])],1),n("v-uni-view",{staticClass:"btn1",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/center/friends")}}},[n("v-uni-view",{staticClass:"btn1-top"},[n("v-uni-image",{attrs:{src:"../../static/function/friends.png"}})],1),n("v-uni-view",{staticClass:"btn1-bottom"},[t._v("邀請好友")])],1),n("v-uni-view",{staticClass:"btn1",on:{click:function(e){e=t.$handleEvent(e),t.jumpurl("/pages/center/message")}}},[n("v-uni-view",{staticClass:"btn1-top"},[n("v-uni-image",{attrs:{src:"../../static/function/message.png"}})],1),n("v-uni-view",{staticClass:"btn1-bottom"},[t._v("系統消息")])],1)],1),n("footerNav")],1)},a=[];n.d(e,"a",function(){return i}),n.d(e,"b",function(){return a})},"7e0f":function(t,e,n){"use strict";var i=n("a465"),a=n.n(i);a.a},"8a4c":function(t,e,n){"use strict";n.r(e);var i=n("ceb8"),a=n.n(i);for(var o in i)"default"!==o&&function(t){n.d(e,t,function(){return i[t]})}(o);e["default"]=a.a},a465:function(t,e,n){var i=n("14b4");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var a=n("4f06").default;a("803dff7a",i,!0,{sourceMap:!1,shadowMode:!1})},af32:function(t,e,n){"use strict";n.r(e);var i=n("2a0a"),a=n.n(i);for(var o in i)"default"!==o&&function(t){n.d(e,t,function(){return i[t]})}(o);e["default"]=a.a},ceb8:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};e.default=i},d96f:function(t,e,n){"use strict";n.r(e);var i=n("22c1"),a=n.n(i);for(var o in i)"default"!==o&&function(t){n.d(e,t,function(){return i[t]})}(o);e["default"]=a.a}}]);