(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-login-forget"],{"0afc":function(e,t,n){"use strict";var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"page"},[n("v-uni-view",{staticClass:"back"},[n("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(t){t=e.$handleEvent(t),e.back()}}})],1),n("v-uni-view",{staticStyle:{margin:"0 50upx"}},[n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("手機號碼")]),n("v-uni-input",{attrs:{type:"text",name:"account",maxlength:"11",placeholder:"請輸入手機號碼"},model:{value:e.account,callback:function(t){e.account=t},expression:"account"}})],1),n("v-uni-view",{staticClass:"code"},[n("v-uni-input",{attrs:{type:"number",name:"verifycode",maxlength:"6",placeholder:"請輸入六驗證碼"},model:{value:e.verifycode,callback:function(t){e.verifycode=t},expression:"verifycode"}}),e.countdown>61?n("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("獲取驗證碼")]):e._e(),61==e.countdown?n("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("重新獲取")]):e._e(),e.countdown<61?n("v-uni-button",{staticClass:"check",attrs:{disabled:"true"}},[e._v(e._s(e.countdown)+"秒")]):e._e()],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("設定密碼")]),n("v-uni-input",{attrs:{type:"text",name:"pwd",password:"true",maxlength:"20",placeholder:"密碼至少六位數字加字母"},model:{value:e.pwd,callback:function(t){e.pwd=t},expression:"pwd"}})],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("確認密碼")]),n("v-uni-input",{attrs:{type:"text",name:"repwd",password:"true",maxlength:"20",placeholder:"請確認您的密碼"},model:{value:e.repwd,callback:function(t){e.repwd=t},expression:"repwd"}})],1),n("v-uni-button",{staticClass:"btn-area",on:{click:function(t){t=e.$handleEvent(t),e.update(t)}}},[e._v("確認修改")])],1)],1)},o=[];n.d(t,"a",function(){return r}),n.d(t,"b",function(){return o})},"26c5":function(e,t,n){"use strict";n.r(t);var r=n("4219"),o=n.n(r);for(var i in r)"default"!==i&&function(e){n.d(t,e,function(){return r[e]})}(i);t["default"]=o.a},4219:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};t.default=r},5572:function(e,t,n){"use strict";var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+e.type],style:{color:e.color,"font-size":e.fontSize},on:{click:function(t){t=e.$handleEvent(t),e.onClick()}}})},o=[];n.d(t,"a",function(){return r}),n.d(t,"b",function(){return o})},5692:function(e,t,n){"use strict";n.r(t);var r=n("5572"),o=n("26c5");for(var i in o)"default"!==i&&function(e){n.d(t,e,function(){return o[e]})}(i);var a=n("2877"),c=Object(a["a"])(o["default"],r["a"],r["b"],!1,null,null,null);t["default"]=c.exports},6742:function(e,t,n){var r=n("8ebe");"string"===typeof r&&(r=[[e.i,r,""]]),r.locals&&(e.exports=r.locals);var o=n("4f06").default;o("6bf32ffe",r,!0,{sourceMap:!1,shadowMode:!1})},"8ebe":function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,"uni-page-body[data-v-14e5fad2]{background:#f7f7f7}.log-lable[data-v-14e5fad2]{width:100%;font-size:%?48?%;font-weight:700;margin-top:%?120?%;text-align:center;color:#000}.code uni-input[data-v-14e5fad2]{padding-left:%?30?%}.log-input[data-v-14e5fad2]{width:auto;height:%?90?%;background:#fff;margin-top:%?42?%;line-height:%?90?%;padding-left:%?40?%;border-radius:%?45?%}.log-input uni-text[data-v-14e5fad2]{width:30%;float:left;font-size:%?24?%;text-align:justify}.log-remark[data-v-14e5fad2]{width:100%;height:%?18?%;font-size:%?19?%;font-weight:500;margin-top:%?30?%;line-height:%?46?%;color:#656565}.agreement[data-v-14e5fad2]{font-size:%?28?%;text-align:right;margin-top:%?40?%}.agr_text[data-v-14e5fad2]{float:right;color:#5d8afc;margin-right:%?120?%}.oauth-row[data-v-14e5fad2]{top:0;left:0;width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;position:absolute;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.oauth-image[data-v-14e5fad2]{width:100 upx;height:100 upx;margin:0 40 upx;border-radius:100 upx;background-color:#fff;border:1 upx solid #ddd}.oauth-image uni-image[data-v-14e5fad2]{width:%?60?%;height:%?60?%;margin:%?20?%}body.?%PAGE?%[data-v-14e5fad2]{background:#f7f7f7}",""])},"9a94":function(e,t,n){"use strict";var r=n("6742"),o=n.n(r);o.a},a9f2:function(e,t,n){"use strict";e.exports={error:"",check:function(e,t){for(var n=0;n<t.length;n++){if(!t[n].checkType)return!0;if(!t[n].name)return!0;if(!t[n].errorMsg)return!0;if(!e[t[n].name])return this.error=t[n].errorMsg,!1;switch(t[n].checkType){case"string":var r=new RegExp("^.{"+t[n].checkRule+"}$");if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"int":r=new RegExp("^(-[1-9]|[1-9])[0-9]{"+t[n].checkRule+"}$");if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"between":if(!this.isNumber(e[t[n].name]))return this.error=t[n].errorMsg,!1;var o=t[n].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[n].name]>o[1]||e[t[n].name]<o[0])return this.error=t[n].errorMsg,!1;break;case"betweenD":r=/^-?[1-9][0-9]?$/;if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;o=t[n].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[n].name]>o[1]||e[t[n].name]<o[0])return this.error=t[n].errorMsg,!1;break;case"betweenF":r=/^-?[0-9][0-9]?.+[0-9]+$/;if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;o=t[n].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[n].name]>o[1]||e[t[n].name]<o[0])return this.error=t[n].errorMsg,!1;break;case"same":if(e[t[n].name]!=t[n].checkRule)return this.error=t[n].errorMsg,!1;break;case"notsame":if(e[t[n].name]==t[n].checkRule)return this.error=t[n].errorMsg,!1;break;case"email":r=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"phoneno":r=/^1[0-9]{10,10}$/;if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"zipcode":r=/^[0-9]{6}$/;if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"reg":r=new RegExp(t[n].checkRule);if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"in":if(-1==t[n].checkRule.indexOf(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"notnull":if(null==e[t[n].name]||e[t[n].name].length<1)return this.error=t[n].errorMsg,!1;break}}return!0},isNumber:function(e){var t=/^-?[1-9][0-9]?.?[0-9]*$/;return t.test(e)}}},bc49:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r=i(n("db84")),o=i(n("5692"));function i(e){return e&&e.__esModule?e:{default:e}}n("a9f2");var a={components:{uniIcon:o.default},data:function(){return{account:"",verifycode:"",pwd:"",repwd:"",countdown:62}},onShow:function(){},methods:{back:function(){uni.reLaunch({url:"/pages/login/login"})},verification:function(){var e=this;self=this,11==self.account.length?/^1[3|4|5|7|8|9][0-9]\d{8,11}$/.test(self.account)?uni.request({url:r.default.api.reg.code,method:"GET",data:{mobile:self.account,temp:"sms_forget"},success:function(t){t=t.data;1==t.code?(uni.showToast({icon:"none",title:t.msg}),e.codetime(e,60)):uni.showToast({icon:"none",title:t.msg})}}):uni.showToast({icon:"none",title:"手機號碼格式不正確"}):uni.showToast({icon:"none",title:"請輸入11位的手機號碼"})},codetime:function(e,t){e.countdown=t<10?"0"+t:t,t--,t<0?e.countdown=61:setTimeout(function(){e.codetime(e,t)},1e3)},update:function(){this.verifycode.length<6?uni.showToast({icon:"none",title:"請輸入六位驗證碼"}):this.pwd===this.repwd?uni.request({url:r.default.api.login.forget,method:"POST",data:{account:this.account,verifycode:this.verifycode,pwd:this.pwd,repwd:this.repwd},success:function(e){e=e.data;1==e.code?uni.showModal({title:"修改成功",content:e.msg,showCancel:!1,success:function(e){uni.reLaunch({url:"/pages/login/login"})}}):uni.showModal({title:"修改失敗",content:e.msg,showCancel:!1,success:function(e){}})},complete:function(){uni.hideLoading()}}):uni.showToast({icon:"none",title:"設定密碼輸入不壹致"})}}};t.default=a},db84:function(e,t,n){"use strict";function r(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},r=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(r=r.concat(Object.getOwnPropertySymbols(n).filter(function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable}))),r.forEach(function(t){o(e,t,n[t])})}return e}function o(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i="USER_KEY",a="TOKEN_KEY",c=function(){var e="";return e=uni.getStorageSync(i),e||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},u=function(e){uni.setStorage({key:i,data:e})},s=function(e){uni.setStorageSync(a,e)},l=function(){return uni.getStorageSync(a)},d=function(){uni.clearStorage()},f=function(e){uni.setStorageSync("uid",e)},p=function(){return uni.getStorageSync("uid")},g=function(e){uni.setStorageSync("logid",e)},m=function(){return uni.getStorageSync("logid")},h="http://blockcat.8396048.com/",b={index:h+"default/index",home:{info:h+"port/member/info"},main:{bazaar:h+"port/index/index",order:h+"port/index/appointment",adopt:h+"port/index/adopt",result:h+"port/index/adoptResult",info:h+"port/index/confInfo",notice:h+"port/index/notice"},center:{code:h+"port/member/verifycode",password:h+"port/member/changePwd",passtwo:h+"port/member/changePwd2",pid:h+"port/member/realname",close:h+"port/member/changeMethodStatus",card:h+"port/member/myPaymentMethod",type:h+"port/member/getPaymentType",submit:h+"port/member/submitMethod",message:h+"port/member/systemMessage",team:h+"port/member/myTeam",friends:h+"port/member/inviteFriends"},service:{insert:h+"port/server_center/workorder",submit:h+"port/server_center/submitWorkorder",order:h+"port/server_center/workorderList"},login:{login:h+"port/login",logo:h+"port/login/get_enter_logo",forget:h+"port/login/forgetpwd"},reg:{register:h+"port/login/register",code:h+"port/login/verifycode",agree:h+"port/login/get_user_regagree"},interests:{qrcode:h+"port/member/recharge",integral:h+"port/member/integralLog",roll:h+"port/member/givingIntegral",sell:h+"port/member/assetSale",submit:h+"port/member/rechargeSubmit",earnings:h+"port/member/incomeLog"},record:{pay:h+"port/order/pay",adopt:h+"port/order/index",make:h+"port/member/appointment",update:h+"port/order/pay",passtwo:h+"port/order/auditPass",submit:h+"port/order/complaint",complaint:h+"record/payment",transfer:h+"port/order/transfer",details:h+"port/order/detail",undo:h+"port/order/revoke"}},v=function(e,t,n,o){var i=this,a=uni.getStorageSync("token");""==a&&(uni.setStorageSync("token",""),uni.navigateTo({url:"/pages/login/login"}));n=r({token:uni.getStorageSync("token")},n);uni.request({url:t,method:"GET",data:n,success:function(t){t=t.data;1==t.code?o(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.navigateTo({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){console.log(e),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),i.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},w={api:b,auth:v,setToken:s,getToken:l,removeToken:d,getUserInfo:c,setUserInfo:u,setId:f,getId:p,setLogid:g,getLogid:m};t.default=w},fa30:function(e,t,n){"use strict";n.r(t);var r=n("0afc"),o=n("fbd2");for(var i in o)"default"!==i&&function(e){n.d(t,e,function(){return o[e]})}(i);n("9a94");var a=n("2877"),c=Object(a["a"])(o["default"],r["a"],r["b"],!1,null,"14e5fad2",null);t["default"]=c.exports},fbd2:function(e,t,n){"use strict";n.r(t);var r=n("bc49"),o=n.n(r);for(var i in r)"default"!==i&&function(e){n.d(t,e,function(){return r[e]})}(i);t["default"]=o.a}}]);