(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-login-forget"],{"00d8":function(e,t,r){"use strict";function n(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter(function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable}))),n.forEach(function(t){o(e,t,r[t])})}return e}function o(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i="USER_KEY",a="TOKEN_KEY",c=function(){var e="";return e=uni.getStorageSync(i),e||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},s=function(e){uni.setStorage({key:i,data:e})},u=function(e){uni.setStorageSync(a,e)},l=function(){return uni.getStorageSync(a)},d=function(){uni.clearStorage()},f=function(e){uni.setStorageSync("uid",e)},g=function(){return uni.getStorageSync("uid")},p=function(e){uni.setStorageSync("logid",e)},m=function(){return uni.getStorageSync("logid")},h="/",b={index:h+"default/index",home:{info:h+"port/member/info"},main:{bazaar:h+"port/index/index",order:h+"port/index/appointment",adopt:h+"port/index/adopt",info:h+"port/index/confInfo",notice:h+"port/index/notice"},center:{code:h+"port/member/verifycode",password:h+"port/member/changePwd",passtwo:h+"port/member/changePwd2",pid:h+"port/member/realname",close:h+"port/member/changeMethodStatus",card:h+"port/member/myPaymentMethod",type:h+"port/member/getPaymentType",submit:h+"port/member/submitMethod",message:h+"port/member/systemMessage",team:h+"port/member/myTeam",friends:h+"port/member/inviteFriends"},service:{insert:h+"port/server_center/workorder",submit:h+"port/server_center/submitWorkorder",order:h+"port/server_center/workorderList"},login:{login:h+"port/login",logo:h+"port/login/get_enter_logo",forget:h+"port/login/forgetpwd"},reg:{register:h+"port/login/register",code:h+"port/login/verifycode",agree:h+"port/login/get_user_regagree"},interests:{qrcode:h+"port/member/recharge",integral:h+"port/member/integralLog",roll:h+"port/member/givingIntegral",sell:h+"port/member/assetSale",submit:h+"port/member/rechargeSubmit",earnings:h+"port/member/incomeLog"},record:{pay:h+"port/order/pay",adopt:h+"port/order/index",make:h+"port/member/appointment",update:h+"port/order/pay",passtwo:h+"port/order/auditPass",submit:h+"port/order/complaint",complaint:h+"record/payment",transfer:h+"port/order/transfer",details:h+"port/order/detail",undo:h+"port/order/detail"}},w=function(e,t,r,o){var i=this,a=uni.getStorageSync("token");""==a&&uni.reLaunch({url:"/pages/login/login"});r=n({token:uni.getStorageSync("token")},r);uni.request({url:t,method:"GET",data:r,success:function(t){t=t.data;1==t.code?o(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){console.log(e),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),i.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},v={api:b,auth:w,setToken:u,getToken:l,removeToken:d,getUserInfo:c,setUserInfo:s,setId:f,getId:g,setLogid:p,getLogid:m};t.default=v},"3e4f":function(e,t,r){"use strict";var n=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("v-uni-view",{staticClass:"content"},[r("v-uni-view",{staticStyle:{margin:"0 50upx"}},[r("v-uni-view",{staticClass:"log-input"},[r("v-uni-text",[e._v("手機號碼")]),r("v-uni-input",{attrs:{type:"text",name:"account",maxlength:"11",placeholder:"請輸入手機號碼"},model:{value:e.account,callback:function(t){e.account=t},expression:"account"}})],1),r("v-uni-view",{staticClass:"code"},[r("v-uni-input",{attrs:{type:"number",name:"verifycode",maxlength:"6",placeholder:"請輸入六驗證碼"},model:{value:e.verifycode,callback:function(t){e.verifycode=t},expression:"verifycode"}}),e.countdown>61?r("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("獲取驗證碼")]):e._e(),61==e.countdown?r("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("重新獲取")]):e._e(),e.countdown<61?r("v-uni-button",{staticClass:"check",attrs:{disabled:"true"}},[e._v(e._s(e.countdown)+"秒")]):e._e()],1),r("v-uni-view",{staticClass:"log-input"},[r("v-uni-text",[e._v("設定密碼")]),r("v-uni-input",{attrs:{type:"text",name:"pwd",password:"true",maxlength:"20",placeholder:"密碼至少六位數字加字母"},model:{value:e.pwd,callback:function(t){e.pwd=t},expression:"pwd"}})],1),r("v-uni-view",{staticClass:"log-input"},[r("v-uni-text",[e._v("確認密碼")]),r("v-uni-input",{attrs:{type:"text",name:"repwd",password:"true",maxlength:"20",placeholder:"請確認您的密碼"},model:{value:e.repwd,callback:function(t){e.repwd=t},expression:"repwd"}})],1),r("v-uni-button",{staticClass:"btn-area",on:{click:function(t){t=e.$handleEvent(t),e.update(t)}}},[e._v("確認修改")])],1)],1)},o=[];r.d(t,"a",function(){return n}),r.d(t,"b",function(){return o})},"62aa":function(e,t,r){t=e.exports=r("2350")(!1),t.push([e.i,".log-lable[data-v-9fbe56e8]{width:100%;font-size:%?48?%;font-weight:700;margin-top:%?120?%;text-align:center;color:#000}.log-prompt[data-v-9fbe56e8]{width:100%;height:%?24?%;font-size:%?24?%;font-weight:500;margin-top:%?80?%;line-height:%?46?%;color:#999}.log-input[data-v-9fbe56e8]{width:auto;height:%?90?%;margin-top:%?42?%;line-height:%?90?%;padding-left:%?40?%;border-radius:%?45?%;background:#f7f7f7}.log-input uni-text[data-v-9fbe56e8]{width:30%;float:left;font-size:%?24?%;text-align:justify}.log-remark[data-v-9fbe56e8]{width:100%;height:%?18?%;font-size:%?19?%;font-weight:500;margin-top:%?30?%;line-height:%?46?%;color:#656565}.agreement[data-v-9fbe56e8]{font-size:%?28?%;text-align:right;margin-top:%?40?%}.agr_text[data-v-9fbe56e8]{float:right;color:#5d8afc;margin-right:%?120?%}.oauth-row[data-v-9fbe56e8]{top:0;left:0;width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;position:absolute;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.oauth-image[data-v-9fbe56e8]{width:100 upx;height:100 upx;margin:0 40 upx;border-radius:100 upx;background-color:#fff;border:1 upx solid #ddd}.oauth-image uni-image[data-v-9fbe56e8]{width:%?60?%;height:%?60?%;margin:%?20?%}",""])},"6e6f":function(e,t,r){var n=r("62aa");"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var o=r("4f06").default;o("72e2d417",n,!0,{sourceMap:!1,shadowMode:!1})},"82da":function(e,t,r){"use strict";var n=r("6e6f"),o=r.n(n);o.a},b12c:function(e,t,r){"use strict";r.r(t);var n=r("c3f4"),o=r.n(n);for(var i in n)"default"!==i&&function(e){r.d(t,e,function(){return n[e]})}(i);t["default"]=o.a},b9a5:function(e,t,r){"use strict";e.exports={error:"",check:function(e,t){for(var r=0;r<t.length;r++){if(!t[r].checkType)return!0;if(!t[r].name)return!0;if(!t[r].errorMsg)return!0;if(!e[t[r].name])return this.error=t[r].errorMsg,!1;switch(t[r].checkType){case"string":var n=new RegExp("^.{"+t[r].checkRule+"}$");if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"int":n=new RegExp("^(-[1-9]|[1-9])[0-9]{"+t[r].checkRule+"}$");if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"between":if(!this.isNumber(e[t[r].name]))return this.error=t[r].errorMsg,!1;var o=t[r].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[r].name]>o[1]||e[t[r].name]<o[0])return this.error=t[r].errorMsg,!1;break;case"betweenD":n=/^-?[1-9][0-9]?$/;if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;o=t[r].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[r].name]>o[1]||e[t[r].name]<o[0])return this.error=t[r].errorMsg,!1;break;case"betweenF":n=/^-?[0-9][0-9]?.+[0-9]+$/;if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;o=t[r].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[r].name]>o[1]||e[t[r].name]<o[0])return this.error=t[r].errorMsg,!1;break;case"same":if(e[t[r].name]!=t[r].checkRule)return this.error=t[r].errorMsg,!1;break;case"notsame":if(e[t[r].name]==t[r].checkRule)return this.error=t[r].errorMsg,!1;break;case"email":n=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"phoneno":n=/^1[0-9]{10,10}$/;if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"zipcode":n=/^[0-9]{6}$/;if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"reg":n=new RegExp(t[r].checkRule);if(!n.test(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"in":if(-1==t[r].checkRule.indexOf(e[t[r].name]))return this.error=t[r].errorMsg,!1;break;case"notnull":if(null==e[t[r].name]||e[t[r].name].length<1)return this.error=t[r].errorMsg,!1;break}}return!0},isNumber:function(e){var t=/^-?[1-9][0-9]?.?[0-9]*$/;return t.test(e)}}},c3f4:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n=o(r("00d8"));function o(e){return e&&e.__esModule?e:{default:e}}r("b9a5");var i={data:function(){return{account:"",verifycode:"",pwd:"",repwd:"",countdown:62}},onShow:function(){},methods:{verification:function(){var e=this;self=this,11==self.account.length?/^1[3|4|5|7|8][0-9]\d{8,11}$/.test(self.account)?uni.request({url:n.default.api.reg.code,method:"GET",data:{mobile:self.account,temp:"sms_forget"},success:function(t){t=t.data;1==t.code?(uni.showToast({icon:"none",title:t.msg}),e.codetime(e,60)):uni.showToast({icon:"none",title:t.msg})}}):uni.showToast({icon:"none",title:"手機號碼格式不正確"}):uni.showToast({icon:"none",title:"請輸入11位的手機號碼"})},codetime:function(e,t){e.countdown=t<10?"0"+t:t,t--,t<0?e.countdown=61:setTimeout(function(){e.codetime(e,t)},1e3)},update:function(){this.verifycode.length<6?uni.showToast({icon:"none",title:"請輸入六位驗證碼"}):this.pwd===this.repwd?uni.request({url:n.default.api.login.forget,method:"POST",data:{account:this.account,verifycode:this.verifycode,pwd:this.pwd,repwd:this.repwd},success:function(e){e=e.data;1==e.code?uni.showModal({title:"修改成功",content:e.msg,showCancel:!1,success:function(e){uni.reLaunch({url:"/pages/login/login"})}}):uni.showModal({title:"修改失敗",content:e.msg,showCancel:!1,success:function(e){}})},complete:function(){uni.hideLoading()}}):uni.showToast({icon:"none",title:"設定密碼輸入不壹致"})}}};t.default=i},cdbb:function(e,t,r){"use strict";r.r(t);var n=r("3e4f"),o=r("b12c");for(var i in o)"default"!==i&&function(e){r.d(t,e,function(){return o[e]})}(i);r("82da");var a=r("2877"),c=Object(a["a"])(o["default"],n["a"],n["b"],!1,null,"9fbe56e8",null);t["default"]=c.exports}}]);