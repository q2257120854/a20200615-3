(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-record-particulars"],{"00d8":function(t,e,i){"use strict";function n(t){for(var e=1;e<arguments.length;e++){var i=null!=arguments[e]?arguments[e]:{},n=Object.keys(i);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(i).filter(function(t){return Object.getOwnPropertyDescriptor(i,t).enumerable}))),n.forEach(function(e){o(t,e,i[e])})}return t}function o(t,e,i){return e in t?Object.defineProperty(t,e,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[e]=i,t}Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var a="USER_KEY",r="TOKEN_KEY",c=function(){var t="";return t=uni.getStorageSync(a),t||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},s=function(t){uni.setStorage({key:a,data:t})},u=function(t){uni.setStorageSync(r,t)},d=function(){return uni.getStorageSync(r)},l=function(){uni.clearStorage()},f=function(t){uni.setStorageSync("uid",t)},p=function(){return uni.getStorageSync("uid")},v=function(t){uni.setStorageSync("logid",t)},b=function(){return uni.getStorageSync("logid")},g="/",m={index:g+"default/index",home:{info:g+"port/member/info"},main:{bazaar:g+"port/index/index",order:g+"port/index/appointment",adopt:g+"port/index/adopt",info:g+"port/index/confInfo",notice:g+"port/index/notice"},center:{code:g+"port/member/verifycode",password:g+"port/member/changePwd",passtwo:g+"port/member/changePwd2",pid:g+"port/member/realname",close:g+"port/member/changeMethodStatus",card:g+"port/member/myPaymentMethod",type:g+"port/member/getPaymentType",submit:g+"port/member/submitMethod",message:g+"port/member/systemMessage",team:g+"port/member/myTeam",friends:g+"port/member/inviteFriends"},service:{insert:g+"port/server_center/workorder",submit:g+"port/server_center/submitWorkorder",order:g+"port/server_center/workorderList"},login:{login:g+"port/login",logo:g+"port/login/get_enter_logo",forget:g+"port/login/forgetpwd"},reg:{register:g+"port/login/register",code:g+"port/login/verifycode",agree:g+"port/login/get_user_regagree"},interests:{qrcode:g+"port/member/recharge",integral:g+"port/member/integralLog",roll:g+"port/member/givingIntegral",sell:g+"port/member/assetSale",submit:g+"port/member/rechargeSubmit"},record:{pay:g+"port/order/pay",adopt:g+"port/order/index",make:g+"port/member/appointment",update:g+"port/order/pay",passtwo:g+"port/order/auditPass",submit:g+"port/order/complaint",complaint:g+"record/payment",transfer:g+"port/order/transfer",details:g+"port/order/detail",undo:g+"port/order/detail"}},h=function(t,e,i,o){var a=this,r=uni.getStorageSync("token");""==r&&uni.reLaunch({url:"/pages/login/login"});i=n({token:uni.getStorageSync("token")},i);uni.request({url:e,method:"GET",data:i,success:function(e){e=e.data;1==e.code?o(t,e):400==e.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:e.msg})},fail:function(t){console.log(t),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(t){t=t.data;13==t.code&&(uni.showToast({icon:"none",title:t.msg}),a.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},w={api:m,auth:h,setToken:u,getToken:d,removeToken:l,getUserInfo:c,setUserInfo:s,setId:f,getId:p,setLogid:v,getLogid:b};e.default=w},"14b4":function(t,e,i){e=t.exports=i("2350")(!1),e.push([t.i,".footer[data-v-04c0d9bb]{left:0;bottom:0;width:100%;color:#fff;z-index:1000;height:%?100?%;position:fixed;background-color:#181e30}.footer_item[data-v-04c0d9bb]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-04c0d9bb]{top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?10?%}.footer_item.big_item[data-v-04c0d9bb]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-04c0d9bb]{width:%?100?%;height:%?100?%}.active[data-v-04c0d9bb]{color:#5d8afc}",""])},2135:function(t,e,i){"use strict";i.r(e);var n=i("2dbf"),o=i("6f8d");for(var a in o)"default"!==a&&function(t){i.d(e,t,function(){return o[t]})}(a);i("7899");var r=i("2877"),c=Object(r["a"])(o["default"],n["a"],n["b"],!1,null,"b1ce4484",null);e["default"]=c.exports},"22c1":function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n={methods:{jump:function(t){uni.navigateTo({url:t})},change_nav:function(t){this.$store.commit("change_page",t)}},computed:{footer_nav:function(){return this.$store.state.footer_store.footer_nav},now_index:function(){return uni.getStorageSync("css")}}};e.default=n},"2bde":function(t,e,i){"use strict";i.r(e);var n=i("7869"),o=i("8a4c");for(var a in o)"default"!==a&&function(t){i.d(e,t,function(){return o[t]})}(a);var r=i("2877"),c=Object(r["a"])(o["default"],n["a"],n["b"],!1,null,null,null);e["default"]=c.exports},"2dbf":function(t,e,i){"use strict";var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",{staticClass:"content"},[i("v-uni-view",{staticClass:"back"},[i("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(e){e=t.$handleEvent(e),t.back("/pages/record/adopt")}}})],1),i("v-uni-view",{staticClass:"text"},[t._v("區塊編號："+t._s(t.cat.ordersn)),i("br"),t._v("區塊貓："+t._s(t.cat.levelname)),i("br"),t._v("價值："+t._s(t.cat.price)),i("br"),t._v("智能合約收益："+t._s(t.cat.cycle)+" 天 / "+t._s(t.cat.figure)+" %"),i("br"),t._v("轉讓時間："+t._s(t.cat.createtime)),i("br"),t._v("轉讓方："+t._s(t.cat.seller_nickname)),i("br"),t._v("轉讓方聯系電話："+t._s(t.cat.seller_account)),i("br"),t._v("領養方："+t._s(t.cat.nickname)),i("br"),t._v("領養方聯系電話："+t._s(t.cat.account)),i("br"),t._v("區塊狀態："),1==t.cat.status?[t._v("待付款")]:2==t.cat.status?[t._v("審核中")]:[t._v("已完成")],i("br"),t._v("收益狀態：等待收益"),i("br")],2),i("v-uni-view",{staticClass:"account"},[i("v-uni-view",{staticClass:"title"},[t._v("轉讓方收款賬號")]),t._l(t.card_list,function(e,n){return i("v-uni-view",{key:n,staticClass:"uni-list-cell",attrs:{"hover-class":"uni-list-cell-hover"}},[i("v-uni-view",{staticClass:"uni-list-cell-navigate uni-navigate-right uni-media-list",on:{click:function(i){i=t.$handleEvent(i),t.popup(e.paymentcode)}}},[i("v-uni-view",{staticClass:"uni-media-list-logo"},[i("v-uni-image",{attrs:{src:e.logo}})],1),i("v-uni-view",{staticClass:"uni-media-list-body"},[i("v-uni-view",{staticClass:"uni-media-list-text-top"},[t._v("賬戶名稱："+t._s(e.titleofaccount))]),i("v-uni-view",{staticClass:"uni-media-list-text-top"},[t._v("賬戶賬號："+t._s(e.account))]),i("v-uni-view",{staticClass:"uni-media-list-text-top"},[t._v("賬戶類型："+t._s(e.typename))])],1)],1)],1)})],2),i("uni-popup",{attrs:{show:t.showPopup,type:"middle"},on:{hidePopup:function(e){e=t.$handleEvent(e),t.hidePopup(e)}}},[i("v-uni-view",{staticClass:"popup"},[i("uni-icon",{staticClass:"pop-false",attrs:{type:"closeempty",size:"30"},on:{click:function(e){e=t.$handleEvent(e),t.shut(e)}}}),i("v-uni-image",{attrs:{src:t.picture}})],1)],1),i("v-uni-view",{staticClass:"credentials"},[i("v-uni-view",{staticClass:"title1"},[t._v("付款憑證")]),t.imageSrc?[i("v-uni-image",{staticClass:"image",attrs:{src:t.imageSrc,mode:"widthFix"}})]:[i("v-uni-view",{staticClass:"img1"},[i("v-uni-view",{staticClass:"uni-hello-addfile"},[t._v("付款憑證未上傳")])],1)]],2),i("footerNav")],1)},o=[];i.d(e,"a",function(){return n}),i.d(e,"b",function(){return o})},3444:function(t,e,i){"use strict";i.r(e);var n=i("5dbd"),o=i("d96f");for(var a in o)"default"!==a&&function(t){i.d(e,t,function(){return o[t]})}(a);i("7e0f");var r=i("2877"),c=Object(r["a"])(o["default"],n["a"],n["b"],!1,null,"04c0d9bb",null);e["default"]=c.exports},"434e":function(t,e,i){"use strict";i.r(e);var n=i("b56c"),o=i("e38b");for(var a in o)"default"!==a&&function(t){i.d(e,t,function(){return o[t]})}(a);i("c2f0");var r=i("2877"),c=Object(r["a"])(o["default"],n["a"],n["b"],!1,null,"1aead418",null);e["default"]=c.exports},"5dbd":function(t,e,i){"use strict";var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",[i("v-uni-view",{staticClass:"footer"},t._l(t.footer_nav,function(e,n){return i("v-uni-view",{key:n,class:"footer_item "+("big"==e.size?"big_item":""),staticStyle:{width:"33.3%"},on:{click:function(e){e=t.$handleEvent(e),t.change_nav(n)}}},[i("v-uni-view",{on:{click:function(i){i=t.$handleEvent(i),t.jump(e.pagePath)}}},[i("v-uni-image",{attrs:{src:n==t.now_index?e.select_icon:e.icon,mode:""}}),i("v-uni-view",{class:n==t.now_index?"active":""},[t._v(t._s(e.name))])],1)],1)}))],1)},o=[];i.d(e,"a",function(){return n}),i.d(e,"b",function(){return o})},"5fb8":function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n=c(i("00d8")),o=c(i("2bde")),a=c(i("434e")),r=c(i("3444"));function c(t){return t&&t.__esModule?t:{default:t}}n.default.getUserInfo();var s={components:{uniIcon:o.default,uniPopup:a.default,footerNav:r.default},data:function(){return{cat:"",picture:"",imageSrc:"",card_list:[],showPopup:!1,token:uni.getStorageSync("token"),user:uni.getStorageSync("user"),details:uni.getStorageSync("type")}},onLoad:function(){var t=uni.getStorageSync("details");n.default.auth(this,n.default.api.record.adopt+"?token="+this.token,{type:t.type,page:t.page},function(e,i){if(1==i.code)for(var n=i.data.orderlist.data,o=0;o<n.length;o++)n[o].id==t.id&&(e.cat=n[o],console.log(n[o]),e.imageSrc=n[o].payment_voucher,e.card_list=n[o].seller_paymentmethod)})},methods:{hidePopup:function(){this.showPopup=!1},shut:function(){this.showPopup=!1},back:function(t){uni.navigateTo({url:t})},popup:function(t){this.picture=t,this.showPopup=!0}}};e.default=s},"6f8d":function(t,e,i){"use strict";i.r(e);var n=i("5fb8"),o=i.n(n);for(var a in n)"default"!==a&&function(t){i.d(e,t,function(){return n[t]})}(a);e["default"]=o.a},"757e":function(t,e,i){e=t.exports=i("2350")(!1),e.push([t.i,".uni-mask[data-v-1aead418]{position:fixed;z-index:998;top:0;right:0;bottom:0;left:0;background-color:rgba(0,0,0,.3)}.uni-popup[data-v-1aead418]{position:fixed;z-index:999;background-color:#fff;-webkit-box-shadow:0 0 %?30?% rgba(0,0,0,.1);box-shadow:0 0 %?30?% rgba(0,0,0,.1)}.uni-popup-middle[data-v-1aead418]{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;width:70%;height:auto;border-radius:%?30?%;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;padding:%?30?%}.uni-popup-top[data-v-1aead418]{top:0;left:0;width:100%;height:%?100?%;line-height:%?100?%;text-align:center}.uni-popup-bottom[data-v-1aead418]{left:0;bottom:0;width:100%;height:%?100?%;line-height:%?100?%;text-align:center}",""])},7869:function(t,e,i){"use strict";var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+t.type],style:{color:t.color,"font-size":t.fontSize},on:{click:function(e){e=t.$handleEvent(e),t.onClick()}}})},o=[];i.d(e,"a",function(){return n}),i.d(e,"b",function(){return o})},7899:function(t,e,i){"use strict";var n=i("a8c3"),o=i.n(n);o.a},"7e0f":function(t,e,i){"use strict";var n=i("a465"),o=i.n(n);o.a},"8a4c":function(t,e,i){"use strict";i.r(e);var n=i("ceb8"),o=i.n(n);for(var a in n)"default"!==a&&function(t){i.d(e,t,function(){return n[t]})}(a);e["default"]=o.a},a465:function(t,e,i){var n=i("14b4");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var o=i("4f06").default;o("803dff7a",n,!0,{sourceMap:!1,shadowMode:!1})},a8c3:function(t,e,i){var n=i("b61a");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var o=i("4f06").default;o("3845cbde",n,!0,{sourceMap:!1,shadowMode:!1})},b56c:function(t,e,i){"use strict";var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",[i("v-uni-view",{directives:[{name:"show",rawName:"v-show",value:t.show,expression:"show"}],staticClass:"uni-mask",style:{top:t.offsetTop+"px"},on:{click:function(e){e=t.$handleEvent(e),t.hide(e)}}}),i("v-uni-view",{directives:[{name:"show",rawName:"v-show",value:t.show,expression:"show"}],class:["uni-popup","uni-popup-"+t.type]},[t._v(t._s(t.msg)),t._t("default")],2)],1)},o=[];i.d(e,"a",function(){return n}),i.d(e,"b",function(){return o})},b61a:function(t,e,i){e=t.exports=i("2350")(!1),e.push([t.i,".account[data-v-b1ce4484],.credentials[data-v-b1ce4484],.text[data-v-b1ce4484]{padding:%?26?%;background:#fff;border-bottom:%?2?% solid #bbb}.text[data-v-b1ce4484]{color:#333;font-size:%?30?%;line-height:%?70?%}.pop-false[data-v-b1ce4484]{float:right}.popup[data-v-b1ce4484]{width:100%}.popup uni-image[data-v-b1ce4484]{width:%?480?%;height:%?480?%;margin:0 5%}.title[data-v-b1ce4484]{color:#333;font-size:%?36?%;padding-bottom:%?20?%}.title1[data-v-b1ce4484]{color:#333;font-size:%?36?%;padding-bottom:%?20?%}.uni-media-list[data-v-b1ce4484]{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:%?10?% %?20?%;-webkit-box-sizing:border-box}.img1[data-v-b1ce4484]{color:#ddd;height:%?300?%;font-size:%?40?%;text-align:center;line-height:%?300?%;background-color:#fff;border:%?4?% dashed #ddd}.uni-list-cell[data-v-b1ce4484]{background-color:#fff;border-bottom:%?2?% solid #c8c7cc}.uni-list-cell-hover[data-v-b1ce4484]{background-color:#ddd}.uni-media-list-logo[data-v-b1ce4484]{width:30%;height:%?110?%}.uni-media-list-logo uni-image[data-v-b1ce4484]{width:%?110?%;height:%?110?%}.uni-media-list-body[data-v-b1ce4484]{flex:1;width:30%;-ms-flex:1;height:100%;-webkit-flex:1;-webkit-box-flex:1;padding-right:%?40?%;display:-webkit-flex;-webkit-flex-direction:column}.uni-media-list-text-top[data-v-b1ce4484]{width:100%;font-size:%?28?%;line-height:%?40?%}.uni-ellipsis[data-v-b1ce4484],.uni-media-list-text-bottom[data-v-b1ce4484],.uni-media-list-text-top[data-v-b1ce4484]{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis}.image[data-v-b1ce4484]{height:%?360?%}.credentials[data-v-b1ce4484]{margin-bottom:%?100?%}",""])},b695:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n={props:{show:{type:Boolean,default:!1},type:{type:String,default:"middle"},msg:{type:String,default:""}},data:function(){var t=0;return{offsetTop:t}},methods:{hide:function(){this.$emit("hidePopup")}}};e.default=n},c2f0:function(t,e,i){"use strict";var n=i("d59a"),o=i.n(n);o.a},ceb8:function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};e.default=n},d59a:function(t,e,i){var n=i("757e");"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var o=i("4f06").default;o("26636524",n,!0,{sourceMap:!1,shadowMode:!1})},d96f:function(t,e,i){"use strict";i.r(e);var n=i("22c1"),o=i.n(n);for(var a in n)"default"!==a&&function(t){i.d(e,t,function(){return n[t]})}(a);e["default"]=o.a},e38b:function(t,e,i){"use strict";i.r(e);var n=i("b695"),o=i.n(n);for(var a in n)"default"!==a&&function(t){i.d(e,t,function(){return n[t]})}(a);e["default"]=o.a}}]);