(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-main-bazaar"],{"00d8":function(t,e,i){"use strict";function n(t){for(var e=1;e<arguments.length;e++){var i=null!=arguments[e]?arguments[e]:{},n=Object.keys(i);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(i).filter(function(t){return Object.getOwnPropertyDescriptor(i,t).enumerable}))),n.forEach(function(e){o(t,e,i[e])})}return t}function o(t,e,i){return e in t?Object.defineProperty(t,e,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[e]=i,t}Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var a="USER_KEY",r="TOKEN_KEY",s=function(){var t="";return t=uni.getStorageSync(a),t||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},c=function(t){uni.setStorage({key:a,data:t})},u=function(t){uni.setStorageSync(r,t)},d=function(){return uni.getStorageSync(r)},l=function(){uni.clearStorage()},f=function(t){uni.setStorageSync("uid",t)},p=function(){return uni.getStorageSync("uid")},v=function(t){uni.setStorageSync("logid",t)},b=function(){return uni.getStorageSync("logid")},g="/",m={index:g+"default/index",home:{info:g+"port/member/info"},main:{bazaar:g+"port/index/index",order:g+"port/index/appointment",adopt:g+"port/index/adopt",info:g+"port/index/confInfo",notice:g+"port/index/notice"},center:{code:g+"port/member/verifycode",password:g+"port/member/changePwd",passtwo:g+"port/member/changePwd2",pid:g+"port/member/realname",close:g+"port/member/changeMethodStatus",card:g+"port/member/myPaymentMethod",type:g+"port/member/getPaymentType",submit:g+"port/member/submitMethod",message:g+"port/member/systemMessage",team:g+"port/member/myTeam",friends:g+"port/member/inviteFriends"},service:{insert:g+"port/server_center/workorder",submit:g+"port/server_center/submitWorkorder",order:g+"port/server_center/workorderList"},login:{login:g+"port/login",logo:g+"port/login/get_enter_logo",forget:g+"port/login/forgetpwd"},reg:{register:g+"port/login/register",code:g+"port/login/verifycode",agree:g+"port/login/get_user_regagree"},interests:{qrcode:g+"port/member/recharge",integral:g+"port/member/integralLog",roll:g+"port/member/givingIntegral",sell:g+"port/member/assetSale",submit:g+"port/member/rechargeSubmit",earnings:g+"port/member/incomeLog"},record:{pay:g+"port/order/pay",adopt:g+"port/order/index",make:g+"port/member/appointment",update:g+"port/order/pay",passtwo:g+"port/order/auditPass",submit:g+"port/order/complaint",complaint:g+"record/payment",transfer:g+"port/order/transfer",details:g+"port/order/detail",undo:g+"port/order/detail"}},h=function(t,e,i,o){var a=this,r=uni.getStorageSync("token");""==r&&uni.reLaunch({url:"/pages/login/login"});i=n({token:uni.getStorageSync("token")},i);uni.request({url:e,method:"GET",data:i,success:function(e){e=e.data;1==e.code?o(t,e):400==e.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:e.msg})},fail:function(t){console.log(t),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(t){t=t.data;13==t.code&&(uni.showToast({icon:"none",title:t.msg}),a.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},w={api:m,auth:h,setToken:u,getToken:d,removeToken:l,getUserInfo:s,setUserInfo:c,setId:f,getId:p,setLogid:v,getLogid:b};e.default=w},"14b4":function(t,e,i){e=t.exports=i("2350")(!1),e.push([t.i,".footer[data-v-04c0d9bb]{left:0;bottom:0;width:100%;color:#fff;z-index:1000;height:%?100?%;position:fixed;background-color:#181e30}.footer_item[data-v-04c0d9bb]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-04c0d9bb]{top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?10?%}.footer_item.big_item[data-v-04c0d9bb]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-04c0d9bb]{width:%?100?%;height:%?100?%}.active[data-v-04c0d9bb]{color:#5d8afc}",""])},"22c1":function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n={methods:{jump:function(t){uni.navigateTo({url:t})},change_nav:function(t){this.$store.commit("change_page",t)}},computed:{footer_nav:function(){return this.$store.state.footer_store.footer_nav},now_index:function(){return uni.getStorageSync("css")}}};e.default=n},"2b05":function(t,e,i){"use strict";var n=i("3447"),o=i.n(n);o.a},"2bde":function(t,e,i){"use strict";i.r(e);var n=i("7869"),o=i("8a4c");for(var a in o)"default"!==a&&function(t){i.d(e,t,function(){return o[t]})}(a);var r=i("2877"),s=Object(r["a"])(o["default"],n["a"],n["b"],!1,null,null,null);e["default"]=s.exports},3444:function(t,e,i){"use strict";i.r(e);var n=i("5dbd"),o=i("d96f");for(var a in o)"default"!==a&&function(t){i.d(e,t,function(){return o[t]})}(a);i("7e0f");var r=i("2877"),s=Object(r["a"])(o["default"],n["a"],n["b"],!1,null,"04c0d9bb",null);e["default"]=s.exports},3447:function(t,e,i){var n=i("7497");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var o=i("4f06").default;o("69a35b2e",n,!0,{sourceMap:!1,shadowMode:!1})},"3bde":function(t,e,i){"use strict";i.r(e);var n=i("ac9c"),o=i("6c95");for(var a in o)"default"!==a&&function(t){i.d(e,t,function(){return o[t]})}(a);i("2b05");var r=i("2877"),s=Object(r["a"])(o["default"],n["a"],n["b"],!1,null,"2f1b6670",null);e["default"]=s.exports},"434e":function(t,e,i){"use strict";i.r(e);var n=i("b56c"),o=i("e38b");for(var a in o)"default"!==a&&function(t){i.d(e,t,function(){return o[t]})}(a);i("c2f0");var r=i("2877"),s=Object(r["a"])(o["default"],n["a"],n["b"],!1,null,"1aead418",null);e["default"]=s.exports},"5dbd":function(t,e,i){"use strict";var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",[i("v-uni-view",{staticClass:"footer"},t._l(t.footer_nav,function(e,n){return i("v-uni-view",{key:n,class:"footer_item "+("big"==e.size?"big_item":""),staticStyle:{width:"33.3%"},on:{click:function(e){e=t.$handleEvent(e),t.change_nav(n)}}},[i("v-uni-view",{on:{click:function(i){i=t.$handleEvent(i),t.jump(e.pagePath)}}},[i("v-uni-image",{attrs:{src:n==t.now_index?e.select_icon:e.icon,mode:""}}),i("v-uni-view",{class:n==t.now_index?"active":""},[t._v(t._s(e.name))])],1)],1)}))],1)},o=[];i.d(e,"a",function(){return n}),i.d(e,"b",function(){return o})},"6c95":function(t,e,i){"use strict";i.r(e);var n=i("e2a2"),o=i.n(n);for(var a in n)"default"!==a&&function(t){i.d(e,t,function(){return n[t]})}(a);e["default"]=o.a},7497:function(t,e,i){e=t.exports=i("2350")(!1),e.push([t.i,"uni-page-body[data-v-2f1b6670]{-webkit-overflow-scrolling:touch;background-color:#252831}.content[data-v-2f1b6670]{overflow:auto;margin-bottom:%?100?%}.success[data-v-2f1b6670]{width:100%;opacity:.9;height:100%;z-index:1001;position:fixed;margin-top:%?-88?%;background:#000}.success .imges[data-v-2f1b6670]{top:10%;left:20%;width:60%;height:%?600?%;margin-top:10%;position:fixed}.success .icon[data-v-2f1b6670]{width:%?200?%;height:%?200?%;color:#fff;z-index:10000;margin-top:80%;margin-left:36%;position:relative}.icon .uni-icon[data-v-2f1b6670]{margin:%?20?%;width:%?160?%;height:%?160?%;text-align:center;line-height:%?140?%;-webkit-animation:spin-data-v-2f1b6670 .5s linear infinite;animation:spin-data-v-2f1b6670 .5s linear infinite}@-webkit-keyframes spin-data-v-2f1b6670{to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes spin-data-v-2f1b6670{to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}.top[data-v-2f1b6670]{color:#fff;text-align:right;margin:%?20?% %?26?%;background:#3a3d46;border-radius:%?10?%;padding:%?40?% %?40?% %?10?% %?40?%}.text[data-v-2f1b6670]{font-size:%?36?%}.text1[data-v-2f1b6670]{font-size:%?50?%}.top_cat[data-v-2f1b6670]{float:left;width:%?110?%;height:%?160?%;margin-top:%?-120?%}.top_cat1[data-v-2f1b6670]{float:left;width:%?90?%;height:%?120?%;margin-top:%?-80?%}.list[data-v-2f1b6670]{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex}.cat[data-v-2f1b6670]{width:44%;float:left;height:%?560?%;background:#3a3d46;border-radius:%?10?%;margin:%?0?% %?0?% %?30?% %?30?%}.image[data-v-2f1b6670]{left:20%;top:%?20?%;width:%?200?%;height:%?200?%;position:relative}.name[data-v-2f1b6670]{height:%?60?%;color:#fdb513;text-align:left;font-size:%?34?%;margin-top:%?20?%;line-height:%?60?%;padding:%?0?% %?20?%}.information[data-v-2f1b6670]{color:#fff;font-size:%?24?%;line-height:%?40?%;margin-top:%?-45?%;text-indent:%?80?%;padding-left:%?16?%}.adopt[data-v-2f1b6670],.adoption[data-v-2f1b6670],.breed[data-v-2f1b6670],.freeze[data-v-2f1b6670],.order[data-v-2f1b6670]{width:60%;color:#fff;height:%?60?%;margin:%?30?% 20%;text-align:center;line-height:%?60?%;border-radius:%?30?%}.breed[data-v-2f1b6670]{background:#888}.adopt[data-v-2f1b6670]{background:#4e89a9}.order[data-v-2f1b6670]{background:#46b39d}.adoption[data-v-2f1b6670]{background:#ff4500}.freeze[data-v-2f1b6670]{background:#9400d3}.back[data-v-2f1b6670]{width:100%;z-index:100;background:#000;position:absolute;margin-top:%?-200?%;padding:%?200?% %?0?%}.img[data-v-2f1b6670]{top:20%;width:100%;height:%?740?%;position:relative;margin-top:%?200?%}.popup[data-v-2f1b6670]{width:100%}.pop-title[data-v-2f1b6670]{height:%?60?%;line-height:%?60?%;text-align:center}.pop-title1[data-v-2f1b6670]{text-indent:%?64?%;line-height:%?64?%;margin-bottom:%?10?%}.pop-false[data-v-2f1b6670]{float:right}.pop-content[data-v-2f1b6670]{height:%?600?%;font-size:%?32?%;overflow:scroll;text-indent:%?64?%}body.?%PAGE?%[data-v-2f1b6670]{background-color:#252831}",""])},"757e":function(t,e,i){e=t.exports=i("2350")(!1),e.push([t.i,".uni-mask[data-v-1aead418]{position:fixed;z-index:998;top:0;right:0;bottom:0;left:0;background-color:rgba(0,0,0,.3)}.uni-popup[data-v-1aead418]{position:fixed;z-index:999;background-color:#fff;-webkit-box-shadow:0 0 %?30?% rgba(0,0,0,.1);box-shadow:0 0 %?30?% rgba(0,0,0,.1)}.uni-popup-middle[data-v-1aead418]{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;width:70%;height:auto;border-radius:%?30?%;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;padding:%?30?%}.uni-popup-top[data-v-1aead418]{top:0;left:0;width:100%;height:%?100?%;line-height:%?100?%;text-align:center}.uni-popup-bottom[data-v-1aead418]{left:0;bottom:0;width:100%;height:%?100?%;line-height:%?100?%;text-align:center}",""])},7869:function(t,e,i){"use strict";var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+t.type],style:{color:t.color,"font-size":t.fontSize},on:{click:function(e){e=t.$handleEvent(e),t.onClick()}}})},o=[];i.d(e,"a",function(){return n}),i.d(e,"b",function(){return o})},"7e0f":function(t,e,i){"use strict";var n=i("a465"),o=i.n(n);o.a},"8a4c":function(t,e,i){"use strict";i.r(e);var n=i("ceb8"),o=i.n(n);for(var a in n)"default"!==a&&function(t){i.d(e,t,function(){return n[t]})}(a);e["default"]=o.a},a465:function(t,e,i){var n=i("14b4");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var o=i("4f06").default;o("803dff7a",n,!0,{sourceMap:!1,shadowMode:!1})},ac9c:function(t,e,i){"use strict";var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",{staticClass:"content"},[t.successPop?i("v-uni-view",{staticClass:"success"},[i("v-uni-view",{staticClass:"icon"},[i("uni-icon",{attrs:{size:"80",type:"spinner"}})],1)],1):t._e(),i("v-uni-view",{staticClass:"top"},[i("v-uni-view",{staticClass:"text"},[t._v("集市開放")]),i("v-uni-view",{staticClass:"text1"},[t._v("瘋狂領養")]),i("v-uni-view",{staticClass:"cats"},[i("v-uni-image",{staticClass:"top_cat",attrs:{src:"../../static/cat/PersianT.png",mode:""}}),i("v-uni-image",{staticClass:"top_cat1",attrs:{src:"../../static/cat/SamT.png",mode:""}}),i("v-uni-image",{staticClass:"top_cat1",attrs:{src:"../../static/cat/BobtailT.png",mode:""}}),i("v-uni-image",{staticClass:"top_cat",attrs:{src:"../../static/cat/GaffeyT.png",mode:""}})],1)],1),i("v-uni-view",{staticClass:"list"},t._l(t.cat_list,function(e,n){return i("v-uni-view",{key:e.id,staticClass:"cat"},[i("v-uni-image",{staticClass:"image",attrs:{src:e.thumb,mode:""}}),i("v-uni-view",{staticClass:"name"},[t._v(t._s(e.catename))]),i("v-uni-view",{staticClass:"information"},[t._v("級別："+t._s(e.levelname)),i("br"),t._v("價值："+t._s(e.minprice)+"-"+t._s(e.maxprice)),i("br"),t._v("領養時間："+t._s(e.adopt_time)),i("br"),t._v("預約/即搶領養鱼饵："+t._s(e.appointment_integral)+"/"+t._s(e.adopt_integral)),i("br"),t._v("智能合約收益："+t._s(e.cycle)+"天/"+t._s(e.figure)+"%"),i("br")]),i("v-uni-button",{staticClass:"adoption",on:{click:function(i){i=t.$handleEvent(i),t.adoption(e.id,n)}}},[t._v("領養")])],1)})),i("uni-popup",{attrs:{show:t.showPopup,type:"middle"},on:{hidePopup:function(e){e=t.$handleEvent(e),t.hidePopup(e)}}},[i("v-uni-view",{staticClass:"popup"},[i("uni-icon",{staticClass:"pop-false",attrs:{type:"closeempty",size:"30"},on:{click:function(e){e=t.$handleEvent(e),t.shut(e)}}}),i("v-uni-view",{staticClass:"pop-title"},[t._v(t._s(t.poptitle))]),i("v-uni-view",{staticClass:"pop-title1"},[t._v(t._s(t.title))]),i("v-uni-view",{staticClass:"pop-content"},[i("div",{domProps:{innerHTML:t._s(t.popcontent)}})])],1)],1),i("footerNav")],1)},o=[];i.d(e,"a",function(){return n}),i.d(e,"b",function(){return o})},b56c:function(t,e,i){"use strict";var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",[i("v-uni-view",{directives:[{name:"show",rawName:"v-show",value:t.show,expression:"show"}],staticClass:"uni-mask",style:{top:t.offsetTop+"px"},on:{click:function(e){e=t.$handleEvent(e),t.hide(e)}}}),i("v-uni-view",{directives:[{name:"show",rawName:"v-show",value:t.show,expression:"show"}],class:["uni-popup","uni-popup-"+t.type]},[t._v(t._s(t.msg)),t._t("default")],2)],1)},o=[];i.d(e,"a",function(){return n}),i.d(e,"b",function(){return o})},b695:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n={props:{show:{type:Boolean,default:!1},type:{type:String,default:"middle"},msg:{type:String,default:""}},data:function(){var t=0;return{offsetTop:t}},methods:{hide:function(){this.$emit("hidePopup")}}};e.default=n},c2f0:function(t,e,i){"use strict";var n=i("d59a"),o=i.n(n);o.a},ceb8:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};e.default=n},d59a:function(t,e,i){var n=i("757e");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var o=i("4f06").default;o("26636524",n,!0,{sourceMap:!1,shadowMode:!1})},d96f:function(t,e,i){"use strict";i.r(e);var n=i("22c1"),o=i.n(n);for(var a in n)"default"!==a&&function(t){i.d(e,t,function(){return n[t]})}(a);e["default"]=o.a},e2a2:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n=s(i("00d8")),o=s(i("2bde")),a=s(i("434e")),r=s(i("3444"));function s(t){return t&&t.__esModule?t:{default:t}}var c={components:{uniIcon:o.default,footerNav:r.default,uniPopup:a.default},data:function(){return{token:uni.getStorageSync("token"),cat_list:[],successPop:!1,showPopup:!1,poptitle:"",title:"",popcontent:""}},methods:{adoption:function(t,e){var i=this.token,o=this;o.successPop=!0,setTimeout(function(){uni.request({url:n.default.api.main.adopt+"?token="+i,method:"GET",data:{id:t},success:function(t){o.successPop=!1,o.cat_list[e].block_state=1;t=t.data;uni.showToast({icon:"none",title:t.msg}),setTimeout(function(){1==t.code?uni.navigateTo({url:"/pages/record/adopt"}):uni.navigateTo({url:"/pages/main/bazaar"})},1e3)}})},6e4)},order:function(t,e){var i=this;uni.request({url:n.default.api.main.order+"?token="+this.token,method:"GET",data:{id:t},success:function(t){t=t.data;uni.showToast({icon:"none",title:t.msg}),1==t.code&&(i.cat_list[e].block_state=2,setTimeout(function(){uni.navigateTo({url:"/pages/main/bazaar"})},1e3))}})},hidePopup:function(){this.showPopup=!1},shut:function(){this.showPopup=!1}},onShow:function(){uni.setStorageSync("css",0),n.default.auth(this,n.default.api.main.bazaar+"?token="+this.token,{},function(t,e){if(1==e.code){var i=e.data;t.cat_list=i}}),0==uni.getStorageSync("pop")&&n.default.auth(this,n.default.api.main.notice+"?token="+this.token,{},function(t,e){1==e.code&&(uni.setStorageSync("pop",1),t.title=e.data.title,t.popcontent=e.data.detail,t.showPopup=!0)})}};e.default=c},e38b:function(t,e,i){"use strict";i.r(e);var n=i("b695"),o=i.n(n);for(var a in n)"default"!==a&&function(t){i.d(e,t,function(){return n[t]})}(a);e["default"]=o.a}}]);