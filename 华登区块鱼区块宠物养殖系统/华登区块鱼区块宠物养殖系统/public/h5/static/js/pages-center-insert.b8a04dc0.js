(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-center-insert"],{"00d8":function(e,t,i){"use strict";function n(e){for(var t=1;t<arguments.length;t++){var i=null!=arguments[t]?arguments[t]:{},n=Object.keys(i);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(i).filter(function(e){return Object.getOwnPropertyDescriptor(i,e).enumerable}))),n.forEach(function(t){a(e,t,i[t])})}return e}function a(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o="USER_KEY",r="TOKEN_KEY",c=function(){var e="";return e=uni.getStorageSync(o),e||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},s=function(e){uni.setStorage({key:o,data:e})},u=function(e){uni.setStorageSync(r,e)},l=function(){return uni.getStorageSync(r)},d=function(){uni.clearStorage()},f=function(e){uni.setStorageSync("uid",e)},p=function(){return uni.getStorageSync("uid")},m=function(e){uni.setStorageSync("logid",e)},h=function(){return uni.getStorageSync("logid")},v="/",g={index:v+"default/index",home:{info:v+"port/member/info"},main:{bazaar:v+"port/index/index",order:v+"port/index/appointment",adopt:v+"port/index/adopt"},center:{code:v+"port/member/verifycode",password:v+"port/member/changePwd",passtwo:v+"port/member/changePwd2",pid:v+"port/member/realname",close:v+"port/member/changeMethodStatus",card:v+"port/member/myPaymentMethod",type:v+"port/member/getPaymentType",submit:v+"port/member/submitMethod",message:v+"port/member/systemMessage",team:v+"port/member/myTeam",friends:v+"port/member/inviteFriends"},service:{insert:v+"port/server_center/workorder",submit:v+"port/server_center/submitWorkorder",order:v+"port/server_center/workorderList"},login:{login:v+"port/login",logo:v+"port/login/get_enter_logo",forget:v+"port/login/forgetpwd"},reg:{register:v+"port/login/register",code:v+"port/login/verifycode",agree:v+"port/login/get_user_regagree"},interests:{qrcode:v+"port/member/integralLog",integral:v+"port/member/integralLog",roll:v+"port/member/givingIntegral",sell:v+"port/member/assetSale"},record:{pay:v+"port/order/pay",adopt:v+"port/order/index",make:v+"port/member/appointment",update:v+"port/order/pay",passtwo:v+"port/order/auditPass",submit:v+"port/order/complaint",complaint:v+"record/payment",transfer:v+"port/order/transfer",details:v+"port/order/detail",undo:v+"port/order/detail"}},k=function(e,t,i,a){var o=this,r=uni.getStorageSync("token");""==r&&uni.reLaunch({url:"/pages/login/login"});i=n({token:uni.getStorageSync("token")},i);uni.request({url:t,method:"GET",data:i,success:function(t){t=t.data;1==t.code?a(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){console.log(e),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),o.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},b={api:g,auth:k,setToken:u,getToken:l,removeToken:d,getUserInfo:c,setUserInfo:s,setId:f,getId:p,setLogid:m,getLogid:h};t.default=b},"06d9":function(module,exports,__webpack_require__){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var _service=_interopRequireDefault(__webpack_require__("00d8")),_card=_interopRequireDefault(__webpack_require__("f19b")),_footer_nav=_interopRequireDefault(__webpack_require__("3444"));function _interopRequireDefault(e){return e&&e.__esModule?e:{default:e}}var _default={components:{mpvuePicker:_card.default,footerNav:_footer_nav.default},data:function(){return{pickerSingleArray:[],user:uni.getStorageSync("user"),token:uni.getStorageSync("token"),name:"",account:"",mobile:"",verifycode:"",code:"",type:"",image:"display:none;",countdown:62,radio:1,imageSrc:"",themeColor:"#007AFF",pickerText:"请选择",mode:"",deepLength:1,pickerValueDefault:[0]}},onShow:function(){this.mobile=this.user.account,_service.default.auth(this,_service.default.api.center.type+"?token="+this.token,{},function(e,t){if(1==t.code){var i=t.data.typelist;e.pickerSingleArray=i,console.log(i)}})},methods:{chooseImage:function(){var e=this;uni.chooseImage({count:1,sizeType:["compressed"],sourceType:["album"],success:function(t){var i=t.tempFilePaths[0];e.imageSrc=i},fail:function(e){console.log("chooseImage fail",e)}})},verification:function(){var e=this;uni.request({url:_service.default.api.center.code,method:"GET",data:{token:this.token,account:this.mobile},success:function(t){t=t.data;uni.showToast({icon:"none",title:t.msg}),1==t.code&&e.codetime(e,60)}})},codetime:function(e,t){e.countdown=t<10?"0"+t:t,t--,t<0?e.countdown=61:setTimeout(function(){e.codetime(e,t)},1e3)},showSinglePicker:function(){this.mode="selector",this.deepLength=1,this.pickerValueDefault=[0],this.$refs.mpvuePicker.show()},onConfirm:function(e){this.imageSrc="",this.pickerText=e.name,this.code=e.ispaymentcode,this.type=e.type,0==e.ispaymentcode?this.image="display:none;":this.image="display:block;"},update:function update(){if(console.log(this),""!=this.type)if(""!=this.name)if(""!=this.account)if(6==this.verifycode.length)if(1!=this.code||""!=this.imageSrc)var uploadTask=uni.uploadFile({url:_service.default.api.center.submit+"?token="+this.token,filePath:this.imageSrc,name:"file",formData:{type:this.type,titleofaccount:this.name,account:this.account,verifycode:this.verifycode,ispaymentcode:this.code},success:function success(res){res=res.data,console.log(res),res=eval("("+res+")"),uni.showToast({icon:"none",title:res.msg}),1==res.code&&setTimeout(function(){uni.navigateTo({url:"/pages/center/card"})},1e3)}});else uni.showToast({icon:"none",title:"请上传付款凭证"});else uni.showToast({icon:"none",title:"请输入六位验证码"});else uni.showToast({icon:"none",title:"请输入账户账号"});else uni.showToast({icon:"none",title:"请输入账户名称"});else uni.showToast({icon:"none",title:"银行未选择"})}}};exports.default=_default},"1f64":function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,".footer[data-v-3cddadaa]{left:0;bottom:0;width:100%;color:#fff;height:%?100?%;position:fixed;background-color:#181e30}.footer_item[data-v-3cddadaa]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-3cddadaa]{top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?10?%}.footer_item.big_item[data-v-3cddadaa]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-3cddadaa]{width:%?100?%;height:%?100?%}.active[data-v-3cddadaa]{color:#5d8afc}",""])},"22c1":function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n={methods:{jump:function(e){uni.navigateTo({url:e})},change_nav:function(e){this.$store.commit("change_page",e)}},computed:{footer_nav:function(){return this.$store.state.footer_store.footer_nav},now_index:function(){return uni.getStorageSync("css")}}};t.default=n},2579:function(e,t,i){"use strict";var n=i("c440"),a=i.n(n);a.a},3195:function(e,t,i){"use strict";i.r(t);var n=i("c801"),a=i.n(n);for(var o in n)"default"!==o&&function(e){i.d(t,e,function(){return n[e]})}(o);t["default"]=a.a},3444:function(e,t,i){"use strict";i.r(t);var n=i("d8ed"),a=i("d96f");for(var o in a)"default"!==o&&function(e){i.d(t,e,function(){return a[e]})}(o);i("94bf");var r=i("2877"),c=Object(r["a"])(a["default"],n["a"],n["b"],!1,null,"3cddadaa",null);t["default"]=c.exports},"3aab":function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,'.pickerMask[data-v-4268632d]{position:fixed;z-index:1000;top:0;right:0;left:0;bottom:0;background:rgba(0,0,0,.6)}.mpvue-picker-content[data-v-4268632d]{position:fixed;bottom:0;left:0;width:100%;-webkit-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease;-webkit-transform:translateY(100%);-ms-transform:translateY(100%);transform:translateY(100%);z-index:3000}.mpvue-picker-view-show[data-v-4268632d]{-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0)}.mpvue-picker__hd[data-v-4268632d]{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:%?18?% %?30?%;background-color:#fff;position:relative;text-align:center;font-size:%?34?%}.uni-picker-view-mask[data-v-4268632d]{padding-top:%?400?%}.mpvue-picker__hd[data-v-4268632d]:after{content:" ";position:absolute;left:0;bottom:0;right:0;height:%?2?%;border-bottom:%?2?% solid #e5e5e5;color:#e5e5e5;-webkit-transform-origin:0 100%;-ms-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);-ms-transform:scaleY(.5);transform:scaleY(.5)}.mpvue-picker__action[data-v-4268632d]{display:block;-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;flex:1;color:#1aad19}.mpvue-picker__action[data-v-4268632d]:first-child{text-align:left;color:#888}.mpvue-picker__action[data-v-4268632d]:last-child{text-align:right}.picker-item[data-v-4268632d]{text-align:center;line-height:%?80?%;font-size:%?32?%}.mpvue-picker-view[data-v-4268632d]{position:relative;bottom:0;left:0;width:100%;height:%?476?%;background-color:#fff}',""])},"3b4e":function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,".page[data-v-07aed5ae]{width:100%}.pass[data-v-07aed5ae]{padding:%?40?% %?40?% %?0?%}.body[data-v-07aed5ae]{padding:%?0?% %?40?%;border-bottom:%?1?% solid #eee}.img1[data-v-07aed5ae]{color:#ddd;height:%?300?%;font-size:%?40?%;text-align:center;line-height:%?300?%;background-color:#fff;border:%?4?% dashed #ddd}.body .image[data-v-07aed5ae]{height:%?300?%}.uni-input[data-v-07aed5ae]{color:#6d6d72;font-size:%?34?%}",""])},"4e77":function(e,t,i){"use strict";var n=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",{staticClass:"mpvue-picker"},[i("v-uni-view",{class:{pickerMask:e.showPicker},attrs:{catchtouchmove:"true"},on:{click:function(t){t=e.$handleEvent(t),e.maskClick(t)}}}),i("v-uni-view",{staticClass:"mpvue-picker-content ",class:{"mpvue-picker-view-show":e.showPicker}},[i("v-uni-view",{staticClass:"mpvue-picker__hd",attrs:{catchtouchmove:"true"}},[i("v-uni-view",{staticClass:"mpvue-picker__action",on:{click:function(t){t=e.$handleEvent(t),e.pickerCancel(t)}}},[e._v("取消")]),i("v-uni-view",{staticClass:"mpvue-picker__action",style:{color:e.themeColor},on:{click:function(t){t=e.$handleEvent(t),e.pickerConfirm(t)}}},[e._v("确定")])],1),"selector"===e.mode&&e.pickerValueSingleArray.length>0?i("v-uni-picker-view",{staticClass:"mpvue-picker-view",attrs:{"indicator-style":"height: 40px;",value:e.pickerValue},on:{change:function(t){t=e.$handleEvent(t),e.pickerChange(t)}}},[[i("v-uni-picker-view-column",e._l(e.pickerValueSingleArray,function(t,n){return i("v-uni-view",{key:n,staticClass:"picker-item"},[e._v(e._s(t.name))])}))]],2):e._e()],1)],1)},a=[];i.d(t,"a",function(){return n}),i.d(t,"b",function(){return a})},"5f6f":function(e,t,i){var n=i("1f64");"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var a=i("4f06").default;a("fbc8b054",n,!0,{sourceMap:!1,shadowMode:!1})},"6c03":function(e,t,i){"use strict";var n=i("f9e8"),a=i.n(n);a.a},8284:function(e,t,i){"use strict";i.r(t);var n=i("06d9"),a=i.n(n);for(var o in n)"default"!==o&&function(e){i.d(t,e,function(){return n[e]})}(o);t["default"]=a.a},"8aa6":function(e,t,i){"use strict";i.r(t);var n=i("a7ec"),a=i("8284");for(var o in a)"default"!==o&&function(e){i.d(t,e,function(){return a[e]})}(o);i("2579");var r=i("2877"),c=Object(r["a"])(a["default"],n["a"],n["b"],!1,null,"07aed5ae",null);t["default"]=c.exports},"94bf":function(e,t,i){"use strict";var n=i("5f6f"),a=i.n(n);a.a},a7ec:function(e,t,i){"use strict";var n=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",{staticClass:"page"},[i("v-uni-view",{staticClass:"pass"},[i("v-uni-view",{staticClass:"log-input"},[i("v-uni-text",[e._v("银行")]),i("v-uni-view",{staticClass:"uni-input",attrs:{type:"default"},on:{click:function(t){t=e.$handleEvent(t),e.showSinglePicker(t)}}},[e._v(e._s(e.pickerText))])],1),i("v-uni-view",{staticClass:"log-input"},[i("v-uni-text",[e._v("账户名称")]),i("v-uni-input",{attrs:{type:"text",maxlength:"20",placeholder:"请填入账户名称"},model:{value:e.name,callback:function(t){e.name=t},expression:"name"}})],1),i("v-uni-view",{staticClass:"log-input"},[i("v-uni-text",[e._v("账户账号")]),i("v-uni-input",{attrs:{type:"text",maxlength:"20",placeholder:"请填入账户账号"},model:{value:e.account,callback:function(t){e.account=t},expression:"account"}})],1)],1),i("v-uni-view",{staticClass:"body",style:e.image},[i("v-uni-view",{staticClass:"text1"},[e._v("上传收款二维码：")]),e.imageSrc?[i("v-uni-image",{staticClass:"image",attrs:{src:e.imageSrc,mode:"widthFix"},on:{click:function(t){t=e.$handleEvent(t),e.chooseImage(t)}}})]:[i("v-uni-view",{staticClass:"img1"},[i("v-uni-view",{staticClass:"uni-hello-addfile",on:{click:function(t){t=e.$handleEvent(t),e.chooseImage(t)}}},[e._v("上传收款二维码")])],1)]],2),i("v-uni-view",{staticClass:"body"},[i("v-uni-view",{staticClass:"code"},[i("v-uni-input",{attrs:{type:"number",maxlength:"6",placeholder:"请输入六验证码"},model:{value:e.verifycode,callback:function(t){e.verifycode=t},expression:"verifycode"}}),e.countdown>61?i("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("获取验证码")]):e._e(),61==e.countdown?i("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("重新获取")]):e._e(),e.countdown<61?i("v-uni-button",{staticClass:"check",attrs:{disabled:"true"}},[e._v(e._s(e.countdown)+"秒")]):e._e()],1),i("v-uni-button",{staticClass:"btn-area",on:{click:function(t){t=e.$handleEvent(t),e.update(t)}}},[e._v("确认添加")])],1),i("mpvue-picker",{ref:"mpvuePicker",attrs:{themeColor:e.themeColor,mode:e.mode,deepLength:e.deepLength,pickerValueDefault:e.pickerValueDefault,pickerValueArray:e.pickerSingleArray},on:{onConfirm:function(t){t=e.$handleEvent(t),e.onConfirm(t)}}}),i("footerNav")],1)},a=[];i.d(t,"a",function(){return n}),i.d(t,"b",function(){return a})},c440:function(e,t,i){var n=i("3b4e");"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var a=i("4f06").default;a("6033c24f",n,!0,{sourceMap:!1,shadowMode:!1})},c801:function(e,t,i){"use strict";function n(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var a={data:function(){return{pickerChangeValue:[],pickerValue:[],pickerValueArrayChange:!0,modeChange:!1,pickerValueSingleArray:[],showPicker:!1}},props:{mode:{type:String,default:"selector"},pickerValueArray:{type:Array,default:function(){return[]}},pickerValueDefault:{type:Array,default:function(){return[]}},deepLength:{type:Number,default:2},themeColor:String},watch:n({pickerValueArray:function(e,t){this.pickerValueArrayChange=!0},mode:function(e,t){this.modeChange=!0}},"pickerValueArray",function(e){this.initPicker(e)}),methods:{initPicker:function(e){this.pickerValue=this.pickerValueDefault,"selector"===this.mode&&(this.pickerValueSingleArray=e)},show:function(){var e=this;setTimeout(function(){e.pickerValueArrayChange||e.modeChange?(e.initPicker(e.pickerValueArray),e.showPicker=!0,e.pickerValueArrayChange=!1,e.modeChange=!1):e.showPicker=!0},0)},maskClick:function(){this.pickerCancel()},pickerCancel:function(){this.showPicker=!1,this._initPickerVale();var e={name:this._getPickerLabelAndValue(this.pickerValue,this.mode).name,type:this._getPickerLabelAndValue(this.pickerValue,this.mode).type,ispaymentcode:this._getPickerLabelAndValue(this.pickerValue,this.mode).code};this.$emit("onCancel",e)},pickerConfirm:function(e){this.showPicker=!1,this._initPickerVale();var t={name:this._getPickerLabelAndValue(this.pickerValue,this.mode).name,type:this._getPickerLabelAndValue(this.pickerValue,this.mode).type,ispaymentcode:this._getPickerLabelAndValue(this.pickerValue,this.mode).code};this.$emit("onConfirm",t)},showPickerView:function(){this.showPicker=!0},pickerChange:function(e){this.pickerValue=e.mp.detail.value;var t={name:this._getPickerLabelAndValue(this.pickerValue,this.mode).name,type:this._getPickerLabelAndValue(this.pickerValue,this.mode).type,ispaymentcode:this._getPickerLabelAndValue(this.pickerValue,this.mode).code};this.$emit("onChange",t)},_getPickerLabelAndValue:function(e,t){var i,n,a;return"selector"===t&&(n=this.pickerValueSingleArray[e].id,i=this.pickerValueSingleArray[e].name,a=this.pickerValueSingleArray[e].ispaymentcode),{name:i,type:n,code:a}},_initPickerVale:function(){0===this.pickerValue.length&&("selector"===this.mode?this.pickerValue=[0]:"multiSelector"===this.mode&&(this.pickerValue=new Int8Array(this.pickerValueArray.length)))}}};t.default=a},d8ed:function(e,t,i){"use strict";var n=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",[i("v-uni-view",{staticClass:"footer"},e._l(e.footer_nav,function(t,n){return i("v-uni-view",{key:n,class:"footer_item "+("big"==t.size?"big_item":""),staticStyle:{width:"33.3%"},on:{click:function(t){t=e.$handleEvent(t),e.change_nav(n)}}},[i("v-uni-view",{on:{click:function(i){i=e.$handleEvent(i),e.jump(t.pagePath)}}},[i("v-uni-image",{attrs:{src:n==e.now_index?t.select_icon:t.icon,mode:""}}),i("v-uni-view",{class:n==e.now_index?"active":""},[e._v(e._s(t.name))])],1)],1)}))],1)},a=[];i.d(t,"a",function(){return n}),i.d(t,"b",function(){return a})},d96f:function(e,t,i){"use strict";i.r(t);var n=i("22c1"),a=i.n(n);for(var o in n)"default"!==o&&function(e){i.d(t,e,function(){return n[e]})}(o);t["default"]=a.a},f19b:function(e,t,i){"use strict";i.r(t);var n=i("4e77"),a=i("3195");for(var o in a)"default"!==o&&function(e){i.d(t,e,function(){return a[e]})}(o);i("6c03");var r=i("2877"),c=Object(r["a"])(a["default"],n["a"],n["b"],!1,null,"4268632d",null);t["default"]=c.exports},f9e8:function(e,t,i){var n=i("3aab");"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var a=i("4f06").default;a("4cb900b0",n,!0,{sourceMap:!1,shadowMode:!1})}}]);