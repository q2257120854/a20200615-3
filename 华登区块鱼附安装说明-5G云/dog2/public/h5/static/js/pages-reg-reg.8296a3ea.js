(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-reg-reg"],{"00d8":function(e,t,n){"use strict";function r(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},r=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(r=r.concat(Object.getOwnPropertySymbols(n).filter(function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable}))),r.forEach(function(t){o(e,t,n[t])})}return e}function o(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i="USER_KEY",a="TOKEN_KEY",s=function(){var e="";return e=uni.getStorageSync(i),e||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},u=function(e){uni.setStorage({key:i,data:e})},c=function(e){uni.setStorageSync(a,e)},l=function(){return uni.getStorageSync(a)},d=function(){uni.clearStorage()},f=function(e){uni.setStorageSync("uid",e)},m=function(){return uni.getStorageSync("uid")},p=function(e){uni.setStorageSync("logid",e)},g=function(){return uni.getStorageSync("logid")},h="/",v={index:h+"default/index",home:{info:h+"port/member/info"},main:{bazaar:h+"port/index/index",order:h+"port/index/appointment",adopt:h+"port/index/adopt"},center:{code:h+"port/member/verifycode",password:h+"port/member/changePwd",passtwo:h+"port/member/changePwd2",pid:h+"port/member/realname",close:h+"port/member/changeMethodStatus",card:h+"port/member/myPaymentMethod",type:h+"port/member/getPaymentType",submit:h+"port/member/submitMethod",message:h+"port/member/systemMessage",team:h+"port/member/myTeam",friends:h+"port/member/inviteFriends"},service:{insert:h+"port/server_center/workorder",submit:h+"port/server_center/submitWorkorder",order:h+"port/server_center/submitWorkorder"},login:{login:h+"port/login",logo:h+"port/login/get_enter_logo",forget:h+"port/login/forgetpwd"},reg:{register:h+"port/login/register",code:h+"port/login/verifycode"},interests:{integral:h+"port/member/integralLog",roll:h+"port/member/givingIntegral",sell:h+"port/member/assetSale"},record:{pay:h+"port/order/pay",adopt:h+"port/order/index",make:h+"port/member/appointment",update:h+"port/order/pay",passtwo:h+"record/payment",submit:h+"record/payment",complaint:h+"record/payment",transfer:h+"port/order/transfer"}},b=function(e,t,n,o){var i=this,a=uni.getStorageSync("token");""==a&&uni.reLaunch({url:"/pages/login/login"});n=r({token:uni.getStorageSync("token")},n);uni.request({url:t,method:"GET",data:n,success:function(t){t=t.data;1==t.code?o(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),i.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},w={api:v,auth:b,setToken:c,getToken:l,removeToken:d,getUserInfo:s,setUserInfo:u,setId:f,getId:m,setLogid:p,getLogid:g};t.default=w},"6a49":function(e,t,n){"use strict";n.r(t);var r=n("aad0"),o=n("80bf");for(var i in o)"default"!==i&&function(e){n.d(t,e,function(){return o[e]})}(i);n("e1f0");var a=n("2877"),s=Object(a["a"])(o["default"],r["a"],r["b"],!1,null,"2992e548",null);t["default"]=s.exports},"7c04":function(e,t,n){var r=n("b4bf");"string"===typeof r&&(r=[[e.i,r,""]]),r.locals&&(e.exports=r.locals);var o=n("4f06").default;o("f754fa88",r,!0,{sourceMap:!1,shadowMode:!1})},"80bf":function(e,t,n){"use strict";n.r(t);var r=n("e2f3"),o=n.n(r);for(var i in r)"default"!==i&&function(e){n.d(t,e,function(){return r[e]})}(i);t["default"]=o.a},aad0:function(e,t,n){"use strict";var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"content"},[n("v-uni-form",{on:{submit:function(t){t=e.$handleEvent(t),e.formSubmit(t)},reset:function(t){t=e.$handleEvent(t),e.formReset(t)}}},[n("v-uni-view",{staticStyle:{margin:"0 50upx"}},[n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("手机号码")]),n("v-uni-input",{attrs:{type:"text",name:"account",maxlength:"11",placeholder:"请输入手机号码"},model:{value:e.account,callback:function(t){e.account=t},expression:"account"}})],1),n("v-uni-view",{staticClass:"code"},[n("v-uni-input",{attrs:{type:"number",name:"verifycode",maxlength:"6",placeholder:"请输入六验证码"},model:{value:e.verifycode,callback:function(t){e.verifycode=t},expression:"verifycode"}}),e.countdown>61?n("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("获取验证码")]):e._e(),61==e.countdown?n("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("重新获取")]):e._e(),e.countdown<61?n("v-uni-button",{staticClass:"check",attrs:{disabled:"true"}},[e._v(e._s(e.countdown)+"秒")]):e._e()],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("用户名")]),n("v-uni-input",{attrs:{type:"text",name:"nickname",maxlength:"20",placeholder:"请输入您的用户名"},model:{value:e.nickname,callback:function(t){e.nickname=t},expression:"nickname"}})],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("设定密码")]),n("v-uni-input",{attrs:{type:"text",name:"pwd",password:"true",maxlength:"20",placeholder:"密码至少六位数字加字母"},model:{value:e.pwd,callback:function(t){e.pwd=t},expression:"pwd"}})],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("确认密码")]),n("v-uni-input",{attrs:{type:"text",name:"repwd",password:"true",maxlength:"20",placeholder:"请确认您的密码"},model:{value:e.repwd,callback:function(t){e.repwd=t},expression:"repwd"}})],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("设置二级密码")]),n("v-uni-input",{attrs:{type:"text",name:"pwd2",password:"true",maxlength:"20",placeholder:"必须填六位数字的密码"},model:{value:e.pwd2,callback:function(t){e.pwd2=t},expression:"pwd2"}})],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("确认二级密码")]),n("v-uni-input",{attrs:{type:"text",name:"repwd2",password:"true",maxlength:"20",placeholder:"确认您的二级密码"},model:{value:e.repwd2,callback:function(t){e.repwd2=t},expression:"repwd2"}})],1),n("v-uni-view",{staticClass:"agreement"},[e._v("注册即视为同意"),n("v-uni-navigator",{staticClass:"agr_text",attrs:{url:"/pages/reg/agree"}},[e._v("《用户注册协定》")])],1),n("v-uni-button",{staticClass:"btn-area",attrs:{formType:"submit"}},[e._v("注册")])],1)],1)],1)},o=[];n.d(t,"a",function(){return r}),n.d(t,"b",function(){return o})},b4bf:function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,".log-lable[data-v-2992e548]{width:100%;font-size:%?48?%;font-weight:700;margin-top:%?120?%;text-align:center;color:#000}.log-prompt[data-v-2992e548]{width:100%;height:%?24?%;font-size:%?24?%;font-weight:500;margin-top:%?80?%;line-height:%?46?%;color:#999}.log-input[data-v-2992e548]{width:auto;height:%?90?%;margin-top:%?42?%;line-height:%?90?%;padding-left:%?40?%;border-radius:%?45?%;background:#f7f7f7}.log-input uni-text[data-v-2992e548]{width:30%;float:left;font-size:%?24?%;text-align:justify}.log-remark[data-v-2992e548]{width:100%;height:%?18?%;font-size:%?19?%;font-weight:500;margin-top:%?30?%;line-height:%?46?%;color:#656565}.agreement[data-v-2992e548]{font-size:%?28?%;text-align:right;margin-top:%?40?%}.agr_text[data-v-2992e548]{float:right;color:#5d8afc;margin-right:%?120?%}.oauth-row[data-v-2992e548]{top:0;left:0;width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;position:absolute;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.oauth-image[data-v-2992e548]{width:%?100?%;height:%?100?%;margin:0 %?40?%;border-radius:%?100?%;background-color:#fff;border:%?2?% solid #ddd}.oauth-image uni-image[data-v-2992e548]{width:%?60?%;height:%?60?%;margin:%?20?%}",""])},b9a5:function(e,t,n){"use strict";e.exports={error:"",check:function(e,t){for(var n=0;n<t.length;n++){if(!t[n].checkType)return!0;if(!t[n].name)return!0;if(!t[n].errorMsg)return!0;if(!e[t[n].name])return this.error=t[n].errorMsg,!1;switch(t[n].checkType){case"string":var r=new RegExp("^.{"+t[n].checkRule+"}$");if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"int":r=new RegExp("^(-[1-9]|[1-9])[0-9]{"+t[n].checkRule+"}$");if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"between":if(!this.isNumber(e[t[n].name]))return this.error=t[n].errorMsg,!1;var o=t[n].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[n].name]>o[1]||e[t[n].name]<o[0])return this.error=t[n].errorMsg,!1;break;case"betweenD":r=/^-?[1-9][0-9]?$/;if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;o=t[n].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[n].name]>o[1]||e[t[n].name]<o[0])return this.error=t[n].errorMsg,!1;break;case"betweenF":r=/^-?[0-9][0-9]?.+[0-9]+$/;if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;o=t[n].checkRule.split(",");if(o[0]=Number(o[0]),o[1]=Number(o[1]),e[t[n].name]>o[1]||e[t[n].name]<o[0])return this.error=t[n].errorMsg,!1;break;case"same":if(e[t[n].name]!=t[n].checkRule)return this.error=t[n].errorMsg,!1;break;case"notsame":if(e[t[n].name]==t[n].checkRule)return this.error=t[n].errorMsg,!1;break;case"email":r=/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"phoneno":r=/^1[0-9]{10,10}$/;if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"zipcode":r=/^[0-9]{6}$/;if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"reg":r=new RegExp(t[n].checkRule);if(!r.test(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"in":if(-1==t[n].checkRule.indexOf(e[t[n].name]))return this.error=t[n].errorMsg,!1;break;case"notnull":if(null==e[t[n].name]||e[t[n].name].length<1)return this.error=t[n].errorMsg,!1;break}}return!0},isNumber:function(e){var t=/^-?[1-9][0-9]?.?[0-9]*$/;return t.test(e)}}},e1f0:function(e,t,n){"use strict";var r=n("7c04"),o=n.n(r);o.a},e2f3:function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r=o(n("00d8"));function o(e){return e&&e.__esModule?e:{default:e}}n("b9a5");var i={data:function(){return{nickname:"",account:"",pwd:"",repwd:"",pwd2:"",repwd2:"",verifycode:"",countdown:62}},onShow:function(){},methods:{verification:function(){var e=this;self=this,11==self.account.length?/^1[3|4|5|7|8][0-9]\d{8,11}$/.test(self.account)?uni.request({url:r.default.api.reg.code,method:"GET",data:{mobile:self.account,temp:"sms_reg"},success:function(t){t=t.data;1==t.code?(uni.showToast({icon:"none",title:t.msg}),e.codetime(e,60)):uni.showToast({icon:"none",title:t.msg})}}):uni.showToast({icon:"none",title:"手机号码格式不正确"}):uni.showToast({icon:"none",title:"请输入11位的手机号码"})},codetime:function(e,t){e.countdown=t<10?"0"+t:t,t--,t<0?e.countdown=61:setTimeout(function(){e.codetime(e,t)},1e3)},formSubmit:function(e){var t=e.detail.value;uni.showLoading({title:"提交中..."}),uni.request({url:r.default.api.reg.register,method:"POST",data:t,success:function(e){e=e.data;1==e.code?uni.showModal({title:"注册成功",content:e.msg,showCancel:!1,success:function(e){uni.reLaunch({url:"/pages/login/login"})}}):uni.showModal({title:"注册失败",content:e.msg,showCancel:!1,success:function(e){}})},complete:function(){uni.hideLoading()}})}}};t.default=i}}]);