(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-login-forget"],{"0294":function(e,t,r){"use strict";r.r(t);var n=r("e8a5"),o=r("a634");for(var i in o)"default"!==i&&function(e){r.d(t,e,function(){return o[e]})}(i);r("d91b");var a=r("2877"),u=Object(a["a"])(o["default"],n["a"],n["b"],!1,null,"719180a2",null);t["default"]=u.exports},"176b":function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};t.default=n},"2ed0":function(e,t,r){"use strict";var n=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+e.type],style:{color:e.color,"font-size":e.fontSize},on:{click:function(t){t=e.$handleEvent(t),e.onClick()}}})},o=[];r.d(t,"a",function(){return n}),r.d(t,"b",function(){return o})},3258:function(e,t,r){var n=r("67b9");"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var o=r("4f06").default;o("33255f54",n,!0,{sourceMap:!1,shadowMode:!1})},"3aeb":function(e,t,r){"use strict";r.r(t);var n=r("176b"),o=r.n(n);for(var i in n)"default"!==i&&function(e){r.d(t,e,function(){return n[e]})}(i);t["default"]=o.a},"5d50":function(e,t,r){"use strict";r.r(t);var n=r("2ed0"),o=r("3aeb");for(var i in o)"default"!==i&&function(e){r.d(t,e,function(){return o[e]})}(i);var a=r("2877"),u=Object(a["a"])(o["default"],n["a"],n["b"],!1,null,null,null);t["default"]=u.exports},"67b9":function(e,t,r){t=e.exports=r("2350")(!1),t.push([e.i,"uni-page-body[data-v-719180a2]{background:#f2f2f2}.log-lable[data-v-719180a2]{width:100%;font-size:%?48?%;font-weight:700;margin-top:%?120?%;text-align:center;color:#000}.code uni-input[data-v-719180a2]{padding-left:%?30?%}.log-input[data-v-719180a2]{width:auto;height:%?90?%;background:#fff;margin-top:%?42?%;line-height:%?90?%;padding-left:%?40?%;-webkit-border-radius:%?45?%;border-radius:%?45?%}.log-input uni-text[data-v-719180a2]{width:30%;float:left;font-size:%?24?%;text-align:justify}.log-remark[data-v-719180a2]{width:100%;height:%?18?%;font-size:%?19?%;font-weight:500;margin-top:%?30?%;line-height:%?46?%;color:#656565}.agreement[data-v-719180a2]{font-size:%?28?%;text-align:right;margin-top:%?40?%}.agr_text[data-v-719180a2]{float:right;color:#5d8afc;margin-right:%?120?%}.oauth-row[data-v-719180a2]{top:0;left:0;width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;position:absolute;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.oauth-image[data-v-719180a2]{width:100 upx;height:100 upx;margin:0 40 upx;-webkit-border-radius:100 upx;border-radius:100 upx;background-color:#fff;border:1 upx solid #ddd}.oauth-image uni-image[data-v-719180a2]{width:%?60?%;height:%?60?%;margin:%?20?%}body.?%PAGE?%[data-v-719180a2]{background:#f2f2f2}",""])},"67cc":function(e,t,r){"use strict";e.exports={error:"",check:function(e,t){for(var r=0;r<t.length;r++){if(!t[r].checkType)return!0;if(!t[r].name)return!0;if(!t[r].errorMsg)return!0;if(!e[t[r].name])return this.error=t[r].errorMsg,!1;switch(t[r].checkType){case"string":var n=new RegExp("^.{"+t[r].checkRule+"}$");if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"int":n=new RegExp("^(-[1-9]|[1-9])[0-9]{"+t[r].checkRule+"}$");if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"between":if(!this.isNumber(e[t[r].name]))return this.error=t[r].errorMsg,!1;var o=t[r].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[r].name]>o[1]||e[t[r].name]<o[0])return this.error=t[r].errorMsg,!1;break;case"betweenD":n=/^-?[1-9][0-9]?$/;if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;o=t[r].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[r].name]>o[1]||e[t[r].name]<o[0])return this.error=t[r].errorMsg,!1;break;case"betweenF":n=/^-?[0-9][0-9]?.+[0-9]+$/;if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;o=t[r].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[r].name]>o[1]||e[t[r].name]<o[0])return this.error=t[r].errorMsg,!1;break;case"same":if(e[t[r].name]!=t[r].checkRule)return this.error=t[r].errorMsg,!1;break;case"notsame":if(e[t[r].name]==t[r].checkRule)return this.error=t[r].errorMsg,!1;break;case"email":n=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"phoneno":n=/^1[0-9]{10,10}$/;if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"zipcode":n=/^[0-9]{6}$/;if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"reg":n=new RegExp(t[r].checkRule);if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"in":if(-1==t[r].checkRule.indexOf(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"notnull":if(null==e[t[r].name]||e[t[r].name].length<1)return this.error=t[r].errorMsg,!1;break}}return!0},isNumber:function(e){var t=/^-?[1-9][0-9]?.?[0-9]*$/;return t.test(e)}}},a634:function(e,t,r){"use strict";r.r(t);var n=r("e0bb"),o=r.n(n);for(var i in n)"default"!==i&&function(e){r.d(t,e,function(){return n[e]})}(i);t["default"]=o.a},d91b:function(e,t,r){"use strict";var n=r("3258"),o=r.n(n);o.a},e0bb:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n=i(r("e108")),o=i(r("5d50"));function i(e){return e&&e.__esModule?e:{default:e}}r("67cc");var a={components:{uniIcon:o.default},data:function(){return{account:"",verifycode:"",pwd:"",repwd:"",countdown:62,status:1}},onShow:function(){},methods:{back:function(){uni.reLaunch({url:"/pages/login/login"})},verification:function(){var e=this;self=this,11==self.account.length?/^1[3|4|5|7|8|9][0-9]\d{8,11}$/.test(self.account)?uni.request({url:n.default.api.reg.code,method:"GET",data:{mobile:self.account,temp:"sms_forget"},success:function(t){t=t.data;1==t.code?(uni.showToast({icon:"none",title:t.msg}),e.codetime(e,60)):uni.showToast({icon:"none",title:t.msg})}}):uni.showToast({icon:"none",title:"手機號碼格式不正確"}):uni.showToast({icon:"none",title:"請輸入11位的手機號碼"})},codetime:function(e,t){e.countdown=t<10?"0"+t:t,t--,t<0?e.countdown=61:setTimeout(function(){e.codetime(e,t)},1e3)},update:function(){var e=this;this.verifycode.length<6?uni.showToast({icon:"none",title:"請輸入六位驗證碼"}):this.pwd===this.repwd?(this.status=0,uni.request({url:n.default.api.login.forget,method:"POST",data:{account:this.account,verifycode:this.verifycode,pwd:this.pwd,repwd:this.repwd},success:function(t){t=t.data;1==t.code?uni.showModal({title:"修改成功",content:t.msg,showCancel:!1,success:function(e){uni.reLaunch({url:"/pages/login/login"})}}):(e.status=1,uni.showModal({title:"修改失敗",content:t.msg,showCancel:!1,success:function(e){}}))},complete:function(){uni.hideLoading()}})):uni.showToast({icon:"none",title:"設定密碼輸入不壹致"})}}};t.default=a},e108:function(e,t,r){"use strict";function n(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter(function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable}))),n.forEach(function(t){o(e,t,r[t])})}return e}function o(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i="USER_KEY",a="TOKEN_KEY",u=function(){var e="";return e=uni.getStorageSync(i),e},s=function(e){uni.setStorage({key:i,data:e})},c=function(e,t){var r=[];r.push(e),r.push(t),uni.setStorageSync("User_paw",r)},l=function(e){uni.setStorageSync("memory",e)},d=function(e){uni.setStorageSync(a,e)},f=function(){return uni.getStorageSync(a)},p=function(){uni.clearStorage()},g=function(e){uni.setStorageSync("uid",e)},m=function(){return uni.getStorageSync("uid")},h=function(e){uni.setStorageSync("logid",e)},b=function(){return uni.getStorageSync("logid")},v={arch:"魚餌",receive:"捕撈",status:"繁殖中",freeze:"凍結中",species:"區塊魚"},w="http://127.0.0.1/",k={index:w+"default/index",home:{info:w+"port/member/info"},main:{bazaar:w+"port/index/index",order:w+"port/index/appointment",adopt:w+"port/index/adopt",result:w+"port/index/adoptResult",info:w+"port/index/confInfo",notice:w+"port/index/notice"},center:{code:w+"port/member/verifycode",password:w+"port/member/changePwd",passtwo:w+"port/member/changePwd2",pid:w+"port/member/realname",close:w+"port/member/changeMethodStatus",card:w+"port/member/myPaymentMethod",type:w+"port/member/getPaymentType",submit:w+"port/member/submitMethod",message:w+"port/member/systemMessage",team:w+"port/member/myTeam",friends:w+"port/member/inviteFriends"},service:{insert:w+"port/server_center/workorder",submit:w+"port/server_center/submitWorkorder",order:w+"port/server_center/workorderList",weixin:w+""},login:{login:w+"port/login",logo:w+"port/login/get_enter_logo",forget:w+"port/login/forgetpwd"},reg:{register:w+"port/login/register",code:w+"port/login/verifycode",agree:w+"port/login/get_user_regagree",reg:w+"port/member/uploadimg"},interests:{qrcode:w+"port/member/recharge",integral:w+"port/member/integralLog",roll:w+"port/member/givingIntegral",sell:w+"port/member/assetSale",submit:w+"port/member/rechargeSubmit",earnings:w+"port/member/incomeLog",assets:w+"port/member/myAssets",detailed:w+"port/member/getVirtualmoneyLog"},record:{pay:w+"port/order/pay",adopt:w+"port/order/index",make:w+"port/member/appointment",update:w+"port/order/pay",passtwo:w+"port/order/auditPass",submit:w+"port/order/complaint",complaint:w+"record/payment",transfer:w+"port/order/transfer",details:w+"port/order/detail",undo:w+"port/order/revoke"}},y=function(e,t,r,o){var i=this,a=uni.getStorageSync("token");""==a&&(uni.setStorageSync("token",""),uni.reLaunch({url:"/pages/login/login"}));r=n({token:uni.getStorageSync("token")},r);uni.request({url:t,method:"GET",data:r,success:function(t){t=t.data;1==t.code?o(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){console.log(e),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),i.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},x={api:k,auth:y,setToken:d,getToken:f,removeToken:p,getUserInfo:u,setUserInfo:s,setId:g,getId:m,setLogid:h,getLogid:b,config:v,User_paw:c,Memory:l};t.default=x},e8a5:function(e,t,r){"use strict";var n=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-uni-view",{staticClass:"page"},[r("v-uni-view",{staticClass:"back"},[r("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(t){t=e.$handleEvent(t),e.back()}}})],1),r("v-uni-view",{staticStyle:{margin:"0 50upx"}},[r("v-uni-view",{staticClass:"log-input"},[r("v-uni-text",[e._v("手機號碼")]),r("v-uni-input",{attrs:{type:"text",name:"account",maxlength:"11",placeholder:"請輸入手機號碼"},model:{value:e.account,callback:function(t){e.account=t},expression:"account"}})],1),r("v-uni-view",{staticClass:"code"},[r("v-uni-input",{attrs:{type:"number",name:"verifycode",maxlength:"6",placeholder:"請輸入六驗證碼"},model:{value:e.verifycode,callback:function(t){e.verifycode=t},expression:"verifycode"}}),e.countdown>61?r("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("獲取驗證碼")]):e._e(),61==e.countdown?r("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("重新獲取")]):e._e(),e.countdown<61?r("v-uni-button",{staticClass:"check",attrs:{disabled:"true"}},[e._v(e._s(e.countdown)+"秒")]):e._e()],1),r("v-uni-view",{staticClass:"log-input"},[r("v-uni-text",[e._v("設定密碼")]),r("v-uni-input",{attrs:{type:"text",name:"pwd",password:"true",maxlength:"20",placeholder:"密碼至少六位數字加字母"},model:{value:e.pwd,callback:function(t){e.pwd=t},expression:"pwd"}})],1),r("v-uni-view",{staticClass:"log-input"},[r("v-uni-text",[e._v("確認密碼")]),r("v-uni-input",{attrs:{type:"text",name:"repwd",password:"true",maxlength:"20",placeholder:"請確認您的密碼"},model:{value:e.repwd,callback:function(t){e.repwd=t},expression:"repwd"}})],1),1==e.status?[r("v-uni-button",{staticClass:"btn-area",on:{click:function(t){t=e.$handleEvent(t),e.update(t)}}},[e._v("確認修改")])]:[r("v-uni-button",{staticClass:"btn-area"},[e._v("確認修改")])]],2)],1)},o=[];r.d(t,"a",function(){return n}),r.d(t,"b",function(){return o})}}]);