(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-center-insert"],{"20f8":function(e,t,n){"use strict";var i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("v-uni-view",{staticClass:"page"},[n("v-uni-view",{staticClass:"back"},[n("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(t){t=e.$handleEvent(t),e.back()}}})],1),n("v-uni-view",{staticClass:"pass"},[n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("銀行")]),n("v-uni-view",{staticClass:"uni-input",attrs:{type:"default"},on:{click:function(t){t=e.$handleEvent(t),e.showSinglePicker(t)}}},[e._v(e._s(e.pickerText))])],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("賬戶名稱")]),n("v-uni-input",{attrs:{type:"text",maxlength:"20",placeholder:"請填入賬戶名稱"},model:{value:e.name,callback:function(t){e.name=t},expression:"name"}})],1),n("v-uni-view",{staticClass:"log-input"},[n("v-uni-text",[e._v("賬戶賬號")]),n("v-uni-input",{attrs:{type:"text",maxlength:"20",placeholder:"請填入賬戶賬號"},model:{value:e.account,callback:function(t){e.account=t},expression:"account"}})],1)],1),n("v-uni-view",{staticClass:"body",style:e.image},[n("v-uni-view",{staticClass:"text1"},[e._v("上傳收款二維碼：")]),e.imageSrc?[n("v-uni-image",{staticClass:"image",attrs:{src:e.imageSrc,mode:"widthFix"},on:{click:function(t){t=e.$handleEvent(t),e.chooseImage(t)}}})]:[n("v-uni-view",{staticClass:"img1"},[n("v-uni-view",{staticClass:"uni-hello-addfile",on:{click:function(t){t=e.$handleEvent(t),e.chooseImage(t)}}},[e._v("上傳收款二維碼")])],1)]],2),n("v-uni-view",{staticClass:"body"},[n("v-uni-view",{staticClass:"code"},[n("v-uni-input",{attrs:{type:"number",maxlength:"6",placeholder:"請輸入六驗證碼"},model:{value:e.verifycode,callback:function(t){e.verifycode=t},expression:"verifycode"}}),e.countdown>61?n("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("獲取驗證碼")]):e._e(),61==e.countdown?n("v-uni-button",{staticClass:"check",on:{click:function(t){t=e.$handleEvent(t),e.verification(t)}}},[e._v("重新獲取")]):e._e(),e.countdown<61?n("v-uni-button",{staticClass:"check",attrs:{disabled:"true"}},[e._v(e._s(e.countdown)+"秒")]):e._e()],1),1==e.status?[n("v-uni-button",{staticClass:"btn-area",on:{click:function(t){t=e.$handleEvent(t),e.update(t)}}},[e._v("確認添加")])]:[n("v-uni-button",{staticClass:"btn-area"},[e._v("確認添加")])]],2),n("mpvue-picker",{ref:"mpvuePicker",attrs:{themeColor:e.themeColor,mode:e.mode,deepLength:e.deepLength,pickerValueDefault:e.pickerValueDefault,pickerValueArray:e.pickerSingleArray},on:{onConfirm:function(t){t=e.$handleEvent(t),e.onConfirm(t)}}}),n("footerNav")],1)},o=[];n.d(t,"a",function(){return i}),n.d(t,"b",function(){return o})},"22fd":function(module,exports,__webpack_require__){"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;var _service=_interopRequireDefault(__webpack_require__("e108")),_uniIcon=_interopRequireDefault(__webpack_require__("5d50")),_card=_interopRequireDefault(__webpack_require__("3cd9")),_footer_nav=_interopRequireDefault(__webpack_require__("14b4"));function _interopRequireDefault(e){return e&&e.__esModule?e:{default:e}}var _default={components:{uniIcon:_uniIcon.default,mpvuePicker:_card.default,footerNav:_footer_nav.default},data:function(){return{pickerSingleArray:[],user:uni.getStorageSync("user"),token:uni.getStorageSync("token"),name:"",account:"",mobile:"",verifycode:"",code:"",type:"",image:"display:none;",countdown:62,radio:1,imageSrc:"",themeColor:"#007AFF",pickerText:"請選擇",mode:"",deepLength:1,pickerValueDefault:[0],status:1}},onShow:function(){this.mobile=this.user.account,_service.default.auth(this,_service.default.api.center.type+"?token="+this.token,{},function(e,t){if(1==t.code){var n=t.data.typelist;e.pickerSingleArray=n}})},methods:{back:function(){uni.reLaunch({url:"/pages/center/card"})},chooseImage:function(){var e=this;uni.chooseImage({count:1,sizeType:["compressed"],sourceType:["album"],success:function(t){var n=t.tempFilePaths[0];e.imageSrc=n},fail:function(e){console.log("chooseImage fail",e)}})},verification:function(){var e=this;uni.request({url:_service.default.api.center.code,method:"GET",data:{token:this.token,account:this.mobile},success:function(t){t=t.data;uni.showToast({icon:"none",title:t.msg}),1==t.code&&e.codetime(e,60)}})},codetime:function(e,t){e.countdown=t<10?"0"+t:t,t--,t<0?e.countdown=61:setTimeout(function(){e.codetime(e,t)},1e3)},showSinglePicker:function(){this.mode="selector",this.deepLength=1,this.pickerValueDefault=[0],this.$refs.mpvuePicker.show()},onConfirm:function(e){this.imageSrc="",this.pickerText=e.name,this.code=e.ispaymentcode,this.type=e.type,0==e.ispaymentcode?this.image="display:none;":this.image="display:block;"},update:function update(){6==this.verifycode.length?""!=this.type?""!=this.name?""!=this.account?1!=this.code||""!=this.imageSrc?(self=this,uni.showModal({content:"確認添加銀行卡信息嗎？",cancelText:"取消",confirmText:"確認",confirmColor:"#FFAE00",cancelColor:"#D2D2D2",success:function success(res){if(res.confirm){self.status=0;var uploadTask=uni.uploadFile({url:_service.default.api.center.submit+"?token="+self.token,filePath:self.imageSrc,name:"file",formData:{type:self.type,titleofaccount:self.name,account:self.account,verifycode:self.verifycode,ispaymentcode:self.code},success:function success(res){res=res.data,console.log(res),res=eval("("+res+")"),uni.showToast({icon:"none",title:res.msg}),1==res.code?setTimeout(function(){uni.navigateBack({delta:1})},1e3):self.status=1}})}}})):uni.showToast({icon:"none",title:"請上傳付款憑證"}):uni.showToast({icon:"none",title:"請輸入賬戶賬號"}):uni.showToast({icon:"none",title:"請輸入賬戶名稱"}):uni.showToast({icon:"none",title:"銀行未選擇"}):uni.showToast({icon:"none",title:"請輸入六位驗證碼"})}}};exports.default=_default},"6d0c":function(e,t,n){t=e.exports=n("2350")(!1),t.push([e.i,"uni-page-body[data-v-7469c23e]{background:#f2f2f2}.pass[data-v-7469c23e]{padding:%?40?% %?40?% %?0?%}.body[data-v-7469c23e]{padding:%?0?% %?40?%}.img1[data-v-7469c23e]{color:#ddd;height:%?300?%;font-size:%?40?%;text-align:center;line-height:%?300?%;background-color:#fff;border:%?4?% dashed #ddd}.body .image[data-v-7469c23e]{height:%?300?%}.uni-input[data-v-7469c23e]{color:#6d6d72;font-size:%?34?%}body.?%PAGE?%[data-v-7469c23e]{background:#f2f2f2}",""])},7167:function(e,t,n){"use strict";n.r(t);var i=n("20f8"),o=n("ff08");for(var a in o)"default"!==a&&function(e){n.d(t,e,function(){return o[e]})}(a);n("e80c");var c=n("2877"),s=Object(c["a"])(o["default"],i["a"],i["b"],!1,null,"7469c23e",null);t["default"]=s.exports},"8f8e":function(e,t,n){var i=n("6d0c");"string"===typeof i&&(i=[[e.i,i,""]]),i.locals&&(e.exports=i.locals);var o=n("4f06").default;o("fadfcaf0",i,!0,{sourceMap:!1,shadowMode:!1})},e80c:function(e,t,n){"use strict";var i=n("8f8e"),o=n.n(i);o.a},ff08:function(e,t,n){"use strict";n.r(t);var i=n("22fd"),o=n.n(i);for(var a in i)"default"!==a&&function(e){n.d(t,e,function(){return i[e]})}(a);t["default"]=o.a}}]);