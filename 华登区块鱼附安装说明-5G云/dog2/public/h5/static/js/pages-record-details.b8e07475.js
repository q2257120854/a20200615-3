(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-record-details"],{"00d8":function(e,t,i){"use strict";function a(e){for(var t=1;t<arguments.length;t++){var i=null!=arguments[t]?arguments[t]:{},a=Object.keys(i);"function"===typeof Object.getOwnPropertySymbols&&(a=a.concat(Object.getOwnPropertySymbols(i).filter(function(e){return Object.getOwnPropertyDescriptor(i,e).enumerable}))),a.forEach(function(t){n(e,t,i[t])})}return e}function n(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o="USER_KEY",r="TOKEN_KEY",d=function(){var e="";return e=uni.getStorageSync(o),e||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},s=function(e){uni.setStorage({key:o,data:e})},c=function(e){uni.setStorageSync(r,e)},u=function(){return uni.getStorageSync(r)},l=function(){uni.clearStorage()},f=function(e){uni.setStorageSync("uid",e)},v=function(){return uni.getStorageSync("uid")},g=function(e){uni.setStorageSync("logid",e)},m=function(){return uni.getStorageSync("logid")},p="/",b={index:p+"default/index",home:{info:p+"port/member/info"},main:{bazaar:p+"port/index/index",order:p+"port/index/appointment",adopt:p+"port/index/adopt"},center:{code:p+"port/member/verifycode",password:p+"port/member/changePwd",passtwo:p+"port/member/changePwd2",pid:p+"port/member/realname",close:p+"port/member/changeMethodStatus",card:p+"port/member/myPaymentMethod",type:p+"port/member/getPaymentType",submit:p+"port/member/submitMethod",message:p+"port/member/systemMessage",team:p+"port/member/myTeam",friends:p+"port/member/inviteFriends"},service:{insert:p+"port/server_center/workorder",submit:p+"port/server_center/submitWorkorder",order:p+"port/server_center/workorderList"},login:{login:p+"port/login",logo:p+"port/login/get_enter_logo",forget:p+"port/login/forgetpwd"},reg:{register:p+"port/login/register",code:p+"port/login/verifycode",agree:p+"port/login/get_user_regagree"},interests:{qrcode:p+"port/member/integralLog",integral:p+"port/member/integralLog",roll:p+"port/member/givingIntegral",sell:p+"port/member/assetSale"},record:{pay:p+"port/order/pay",adopt:p+"port/order/index",make:p+"port/member/appointment",update:p+"port/order/pay",passtwo:p+"port/order/auditPass",submit:p+"port/order/complaint",complaint:p+"record/payment",transfer:p+"port/order/transfer",details:p+"port/order/detail",undo:p+"port/order/detail"}},h=function(e,t,i,n){var o=this,r=uni.getStorageSync("token");""==r&&uni.reLaunch({url:"/pages/login/login"});i=a({token:uni.getStorageSync("token")},i);uni.request({url:t,method:"GET",data:i,success:function(t){t=t.data;1==t.code?n(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){console.log(e),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),o.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},_={api:b,auth:h,setToken:c,getToken:u,removeToken:l,getUserInfo:d,setUserInfo:s,setId:f,getId:v,setLogid:g,getLogid:m};t.default=_},"1f64":function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,".footer[data-v-3cddadaa]{left:0;bottom:0;width:100%;color:#fff;height:%?100?%;position:fixed;background-color:#181e30}.footer_item[data-v-3cddadaa]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-3cddadaa]{top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?10?%}.footer_item.big_item[data-v-3cddadaa]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-3cddadaa]{width:%?100?%;height:%?100?%}.active[data-v-3cddadaa]{color:#5d8afc}",""])},"22c1":function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var a={methods:{jump:function(e){uni.navigateTo({url:e})},change_nav:function(e){this.$store.commit("change_page",e)}},computed:{footer_nav:function(){return this.$store.state.footer_store.footer_nav},now_index:function(){return uni.getStorageSync("css")}}};t.default=a},2844:function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,".account[data-v-78ada9e4],.credentials[data-v-78ada9e4],.text[data-v-78ada9e4]{padding:%?26?%;background:#fff;border-bottom:%?2?% solid #bbb}.text[data-v-78ada9e4]{color:#333;font-size:%?30?%;line-height:%?70?%}.title[data-v-78ada9e4]{color:#333;font-size:%?36?%;padding-bottom:%?20?%}.title1[data-v-78ada9e4]{color:#333;font-size:%?36?%;padding-bottom:%?20?%}.uni-media-list[data-v-78ada9e4]{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:%?10?% %?20?%;-webkit-box-sizing:border-box}.uni-list-cell[data-v-78ada9e4]{background-color:#fff;border-bottom:%?2?% solid #c8c7cc}.uni-list-cell-hover[data-v-78ada9e4]{background-color:#ddd}.uni-media-list-logo[data-v-78ada9e4]{width:30%;height:%?110?%}.uni-media-list-logo uni-image[data-v-78ada9e4]{width:%?110?%;height:%?110?%}.uni-media-list-body[data-v-78ada9e4]{flex:1;width:30%;-ms-flex:1;height:100%;-webkit-flex:1;-webkit-box-flex:1;padding-right:%?40?%;display:-webkit-flex;-webkit-flex-direction:column}.uni-media-list-text-top[data-v-78ada9e4]{width:100%;font-size:%?28?%;line-height:%?40?%}.uni-ellipsis[data-v-78ada9e4],.uni-media-list-text-bottom[data-v-78ada9e4],.uni-media-list-text-top[data-v-78ada9e4]{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;-o-text-overflow:ellipsis}.img1[data-v-78ada9e4]{color:#ddd;width:%?360?%;height:%?360?%;font-size:%?200?%;text-align:center;line-height:%?360?%;background-color:#eee;border:%?4?% solid #ddd}.image[data-v-78ada9e4]{height:%?360?%}.credentials[data-v-78ada9e4]{margin-bottom:%?100?%}",""])},3444:function(e,t,i){"use strict";i.r(t);var a=i("d8ed"),n=i("d96f");for(var o in n)"default"!==o&&function(e){i.d(t,e,function(){return n[e]})}(o);i("94bf");var r=i("2877"),d=Object(r["a"])(n["default"],a["a"],a["b"],!1,null,"3cddadaa",null);t["default"]=d.exports},"5f6f":function(e,t,i){var a=i("1f64");"string"===typeof a&&(a=[[e.i,a,""]]),a.locals&&(e.exports=a.locals);var n=i("4f06").default;n("fbc8b054",a,!0,{sourceMap:!1,shadowMode:!1})},"768f":function(e,t,i){"use strict";i.r(t);var a=i("8592"),n=i.n(a);for(var o in a)"default"!==o&&function(e){i.d(t,e,function(){return a[e]})}(o);t["default"]=n.a},8592:function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var a=o(i("00d8")),n=o(i("3444"));function o(e){return e&&e.__esModule?e:{default:e}}a.default.getUserInfo();var r={components:{footerNav:n.default},data:function(){return{imageSrc:"",cat:"",card_list:[],name:"",mobile:"",token:uni.getStorageSync("token"),user:uni.getStorageSync("user"),details:uni.getStorageSync("type")}},onShow:function(){this.name=this.user.nickname,this.mobile=this.user.account,a.default.auth(this,a.default.api.record.transfer+"?token="+this.token,{type:this.details.type},function(e,t){if(1==t.code)for(var i=t.data.orderlist,a=0;a<i.length;a++)i[a].id==e.details.id&&(e.cat=i[a],e.card_list=i[a].seller_paymentmethod)})},methods:{}};t.default=r},"94bf":function(e,t,i){"use strict";var a=i("5f6f"),n=i.n(a);n.a},aeb7:function(e,t,i){"use strict";var a=i("f2e2"),n=i.n(a);n.a},d8ed:function(e,t,i){"use strict";var a=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",[i("v-uni-view",{staticClass:"footer"},e._l(e.footer_nav,function(t,a){return i("v-uni-view",{key:a,class:"footer_item "+("big"==t.size?"big_item":""),staticStyle:{width:"33.3%"},on:{click:function(t){t=e.$handleEvent(t),e.change_nav(a)}}},[i("v-uni-view",{on:{click:function(i){i=e.$handleEvent(i),e.jump(t.pagePath)}}},[i("v-uni-image",{attrs:{src:a==e.now_index?t.select_icon:t.icon,mode:""}}),i("v-uni-view",{class:a==e.now_index?"active":""},[e._v(e._s(t.name))])],1)],1)}))],1)},n=[];i.d(t,"a",function(){return a}),i.d(t,"b",function(){return n})},d96f:function(e,t,i){"use strict";i.r(t);var a=i("22c1"),n=i.n(a);for(var o in a)"default"!==o&&function(e){i.d(t,e,function(){return a[e]})}(o);t["default"]=n.a},d9e9:function(e,t,i){"use strict";i.r(t);var a=i("eae2"),n=i("768f");for(var o in n)"default"!==o&&function(e){i.d(t,e,function(){return n[e]})}(o);i("aeb7");var r=i("2877"),d=Object(r["a"])(n["default"],a["a"],a["b"],!1,null,"78ada9e4",null);t["default"]=d.exports},eae2:function(e,t,i){"use strict";var a=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",{staticClass:"content"},[i("v-uni-view",{staticClass:"text"},[e._v("區塊編號："+e._s(e.cat.ordersn)),i("br"),e._v("區塊貓："+e._s(e.cat.levelname)),i("br"),e._v("價值："+e._s(e.cat.price)),i("br"),e._v("智能合約收益："+e._s(e.cat.cycle)+" 天 / "+e._s(e.cat.figure)+" %"),i("br"),e._v("轉讓時間："+e._s(e.cat.createtime)),i("br"),e._v("轉讓方："+e._s(e.name)),i("br"),e._v("轉讓方聯系電話："+e._s(e.mobile)),i("br"),e._v("領養方："+e._s(e.cat.nickname)),i("br"),e._v("領養方聯系電話："+e._s(e.cat.account)),i("br"),e._v("區塊狀態："),1==e.cat.status?[e._v("待付款")]:2==e.cat.status?[e._v("審核中")]:[e._v("已完成")],i("br"),e._v("收益狀態：等待收益"),i("br")],2),i("v-uni-view",{staticClass:"account"},[i("v-uni-view",{staticClass:"title"},[e._v("轉讓方收款賬號")]),e._l(e.card_list,function(t,a){return i("v-uni-view",{key:a,staticClass:"uni-list-cell",attrs:{"hover-class":"uni-list-cell-hover"}},[i("v-uni-view",{staticClass:"uni-list-cell-navigate uni-navigate-right uni-media-list"},[i("v-uni-view",{staticClass:"uni-media-list-logo"},[i("v-uni-image",{attrs:{src:t.logo}})],1),i("v-uni-view",{staticClass:"uni-media-list-body"},[i("v-uni-view",{staticClass:"uni-media-list-text-top"},[e._v("賬戶名稱："+e._s(t.titleofaccount))]),i("v-uni-view",{staticClass:"uni-media-list-text-top"},[e._v("賬戶賬號："+e._s(t.account))]),i("v-uni-view",{staticClass:"uni-media-list-text-top"},[e._v("賬戶類型："+e._s(t.typename))])],1)],1)],1)})],2),i("v-uni-view",{staticClass:"credentials"},[i("v-uni-view",{staticClass:"title1"},[e._v("付款憑證")]),i("v-uni-image",{staticClass:"image",attrs:{src:e.cat.payment_voucher,mode:"widthFix"},on:{click:function(t){t=e.$handleEvent(t),e.chooseImage(t)}}})],1),i("footerNav")],1)},n=[];i.d(t,"a",function(){return a}),i.d(t,"b",function(){return n})},f2e2:function(e,t,i){var a=i("2844");"string"===typeof a&&(a=[[e.i,a,""]]),a.locals&&(e.exports=a.locals);var n=i("4f06").default;n("f1eef0b0",a,!0,{sourceMap:!1,shadowMode:!1})}}]);