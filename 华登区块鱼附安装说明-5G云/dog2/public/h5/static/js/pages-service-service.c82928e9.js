(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-service-service"],{"00f2":function(n,t,e){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i=u(e("5692"));function u(n){return n&&n.__esModule?n:{default:n}}var r={components:{uniIcon:i.default},data:function(){return{webviewStyles:{progress:{color:"#FF3333"}},url:""}},onShow:function(){var n=uni.getStorageSync("config");this.url=n.customer_service},methods:{back:function(n){uni.reLaunch({url:"/pages/main/service"})}}};t.default=r},"26c5":function(n,t,e){"use strict";e.r(t);var i=e("b722"),u=e.n(i);for(var r in i)"default"!==r&&function(n){e.d(t,n,function(){return i[n]})}(r);t["default"]=u.a},5572:function(n,t,e){"use strict";var i=function(){var n=this,t=n.$createElement,e=n._self._c||t;return e("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+n.type],style:{color:n.color,"font-size":n.fontSize},on:{click:function(t){t=n.$handleEvent(t),n.onClick()}}})},u=[];e.d(t,"a",function(){return i}),e.d(t,"b",function(){return u})},5692:function(n,t,e){"use strict";e.r(t);var i=e("5572"),u=e("26c5");for(var r in u)"default"!==r&&function(n){e.d(t,n,function(){return u[n]})}(r);var c=e("2877"),o=Object(c["a"])(u["default"],i["a"],i["b"],!1,null,null,null);t["default"]=o.exports},"60e5":function(n,t,e){"use strict";e.r(t);var i=e("00f2"),u=e.n(i);for(var r in i)"default"!==r&&function(n){e.d(t,n,function(){return i[n]})}(r);t["default"]=u.a},"765b":function(n,t,e){"use strict";e.r(t);var i=e("bd28"),u=e("60e5");for(var r in u)"default"!==r&&function(n){e.d(t,n,function(){return u[n]})}(r);var c=e("2877"),o=Object(c["a"])(u["default"],i["a"],i["b"],!1,null,"2b3d6683",null);t["default"]=o.exports},b722:function(n,t,e){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var i={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};t.default=i},bd28:function(n,t,e){"use strict";var i=function(){var n=this,t=n.$createElement,e=n._self._c||t;return e("v-uni-view",[e("v-uni-view",{staticClass:"back"},[e("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(t){t=n.$handleEvent(t),n.back()}}})],1),e("v-uni-view",{staticClass:"content",on:{touchstart:function(t){t=n.$handleEvent(t),n.hideDrawer(t)}}},[e("v-uni-web-view",{attrs:{"webview-styles":n.webviewStyles,src:n.url}})],1)],1)},u=[];e.d(t,"a",function(){return i}),e.d(t,"b",function(){return u})}}]);