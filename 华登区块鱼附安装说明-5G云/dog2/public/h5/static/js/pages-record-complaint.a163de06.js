(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-record-complaint"],{"0ea1":function(e,t,i){"use strict";i.r(t);var n=i("1716"),a=i.n(n);for(var o in n)"default"!==o&&function(e){i.d(t,e,function(){return n[e]})}(o);t["default"]=a.a},"168c":function(e,t,i){"use strict";i.r(t);var n=i("9241"),a=i.n(n);for(var o in n)"default"!==o&&function(e){i.d(t,e,function(){return n[e]})}(o);t["default"]=a.a},1716:function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n={data:function(){return{tabBar:[{id:3,iconPath:"/static/tabbar/refer.png",selectedIconPath:"/static/tabbar/referHL.png",pagePath:"/pages/service/repair",text:"提交工單"},{id:4,iconPath:"/static/tabbar/order.png",selectedIconPath:"/static/tabbar/orderHL.png",pagePath:"/pages/service/order",text:"我的工單"}],footer_nav:[{id:0,name:"貓貓集市",icon:"/static/tabbar/template.png",select_icon:"/static/tabbar/templateHL.png",pagePath:"/pages/main/bazaar"},{id:1,name:"服務中心",icon:"/static/tabbar/api.png",select_icon:"/static/tabbar/apiHL.png",pagePath:"/pages/main/service"},{id:2,name:"我的貓窩",icon:"/static/tabbar/component.png",select_icon:"/static/tabbar/componentHL.png",pagePath:"/pages/main/shack"}],now_index:uni.getStorageSync("css")}},methods:{jump:function(e,t){uni.setStorageSync("css",t),this.now_index=t,uni.reLaunch({url:e})},order:function(){uni.switchTab({url:"/pages/main/shack"})}}};t.default=n},"26c5":function(e,t,i){"use strict";i.r(t);var n=i("4219"),a=i.n(n);for(var o in n)"default"!==o&&function(e){i.d(t,e,function(){return n[e]})}(o);t["default"]=a.a},"26d2":function(e,t,i){"use strict";var n=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",[e.now_index<3?void 0:[i("v-uni-view",{staticClass:"footer1"},[e._l(e.tabBar,function(t,n){return i("v-uni-view",{key:n,staticClass:"footer_item",staticStyle:{width:"33.3%"}},[i("v-uni-view",{on:{click:function(i){i=e.$handleEvent(i),e.jump(t.pagePath,t.id)}}},[i("v-uni-image",{attrs:{src:t.id==e.now_index?t.selectedIconPath:t.iconPath,mode:""}}),i("v-uni-view",{class:"tab_text "+(t.id==e.now_index?"actives1":"")},[e._v(e._s(t.text))])],1)],1)}),i("v-uni-view",{staticClass:"footer_item",staticStyle:{width:"33.3%"}},[i("v-uni-view",{on:{click:function(t){t=e.$handleEvent(t),e.order()}}},[i("v-uni-image",{attrs:{src:"/static/tabbar/main.png",mode:""}}),i("v-uni-view",{staticClass:"tab_text1"},[e._v("返回貓窩")])],1)],1)],2)]],2)},a=[];i.d(t,"a",function(){return n}),i.d(t,"b",function(){return a})},4219:function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n={props:{type:String,color:String,size:[Number,String]},computed:{fontSize:function(){return"".concat(this.size,"px")}},methods:{onClick:function(){this.$emit("click")}}};t.default=n},5158:function(e,t,i){"use strict";var n=i("fc5d"),a=i.n(n);a.a},5572:function(e,t,i){"use strict";var n=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",{staticClass:"uni-icon",class:["uni-icon-"+e.type],style:{color:e.color,"font-size":e.fontSize},on:{click:function(t){t=e.$handleEvent(t),e.onClick()}}})},a=[];i.d(t,"a",function(){return n}),i.d(t,"b",function(){return a})},5692:function(e,t,i){"use strict";i.r(t);var n=i("5572"),a=i("26c5");for(var o in a)"default"!==o&&function(e){i.d(t,e,function(){return a[e]})}(o);var r=i("2877"),s=Object(r["a"])(a["default"],n["a"],n["b"],!1,null,null,null);t["default"]=s.exports},"6b29":function(e,t,i){var n=i("de12");"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var a=i("4f06").default;a("5b8193dd",n,!0,{sourceMap:!1,shadowMode:!1})},"6dfa":function(e,t,i){"use strict";i.r(t);var n=i("c09d"),a=i("168c");for(var o in a)"default"!==o&&function(e){i.d(t,e,function(){return a[e]})}(o);i("5158");var r=i("2877"),s=Object(r["a"])(a["default"],n["a"],n["b"],!1,null,"141c0988",null);t["default"]=s.exports},9241:function(e,t,i){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n=r(i("db84")),a=r(i("5692")),o=r(i("b807"));function r(e){return e&&e.__esModule?e:{default:e}}var s={components:{uniIcon:a.default,footerNav:o.default},data:function(){return{reason:"",cat:[],details:uni.getStorageSync("details"),token:uni.getStorageSync("token")}},methods:{back:function(){uni.setStorageSync("tabbar",2),uni.reLaunch({url:"/pages/record/transfer"})},present:function(){self=this,""!=self.reason?uni.showModal({content:"確認提交申訴嗎？",cancelText:"取消",confirmText:"確認",confirmColor:"#FFAE00",cancelColor:"#D2D2D2",success:function(e){e.confirm&&uni.request({url:n.default.api.record.submit,method:"GET",data:{id:self.details.id,token:self.token,reason:self.reason},success:function(e){e=e.data;uni.showToast({icon:"none",title:e.msg}),1==e.code&&(uni.setStorageSync("tabbar",3),setTimeout(function(){uni.setStorageSync("cat_time",1),uni.navigateBack({delta:1})},1e3))}})}}):uni.showToast({icon:"none",title:"申訴理由不能為空"})}},onLoad:function(){n.default.auth(this,n.default.api.record.transfer+"?token="+this.token,{type:this.details.type,page:this.details.page},function(e,t){if(1==t.code)for(var i=t.data.orderlist.data,n=0;n<i.length;n++)i[n].id==e.details.id&&(e.cat=i[n],e.card_list=i[n].seller_paymentmethod)})}};t.default=s},a820:function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,'uni-page-body[data-v-141c0988]{background-color:#e5e5e5}@font-face{font-family:HMfont-home;src:url("data:application/x-font-woff2;charset=utf-8;base64,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") format("woff2")}.icon[data-v-141c0988]{font-family:HMfont-home!important;font-size:%?56?%;font-style:normal;color:#333}.icon.biaoqing[data-v-141c0988]:before{content:"\\E797"}.icon.jianpan[data-v-141c0988]:before{content:"\\E7B2"}.icon.yuyin[data-v-141c0988]:before{content:"\\E805"}.icon.tupian[data-v-141c0988]:before{content:"\\E639"}.icon.chehui[data-v-141c0988]:before{content:"\\E904"}.icon.luyin[data-v-141c0988]:before{content:"\\E905"}.icon.luyin2[data-v-141c0988]:before{content:"\\E677"}.icon.other-voice[data-v-141c0988]:before{content:"\\E667"}.icon.my-voice[data-v-141c0988]:before{content:"\\E906"}.icon.hongbao[data-v-141c0988]:before{content:"\\E626"}.icon.tupian2[data-v-141c0988]:before{content:"\\E674"}.icon.paizhao[data-v-141c0988]:before{content:"\\E63E"}.icon.add[data-v-141c0988]:before{content:"\\E655"}.icon.close[data-v-141c0988]:before{content:"\\E607"}.icon.to[data-v-141c0988]:before{content:"\\E675"}.hidden[data-v-141c0988]{display:none!important}.popup-layer[data-v-141c0988]{-webkit-transition:all .15s linear;-o-transition:all .15s linear;transition:all .15s linear;width:96%;height:42vw;padding:%?20?% 2%;background-color:#f3f3f3;border-top:solid %?1?% #ddd;position:fixed;z-index:20;top:100%}.popup-layer.showLayer[data-v-141c0988]{-webkit-transform:translate3d(0,-42vw,0);transform:translate3d(0,-42vw,0)}.popup-layer .emoji-swiper[data-v-141c0988]{height:40vw}.popup-layer .emoji-swiper uni-swiper-item[data-v-141c0988]{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-content:flex-start;-ms-flex-line-pack:start;align-content:flex-start;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.popup-layer .emoji-swiper uni-swiper-item uni-view[data-v-141c0988]{width:12vw;height:12vw;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.popup-layer .emoji-swiper uni-swiper-item uni-view uni-image[data-v-141c0988]{width:8.4vw;height:8.4vw}.popup-layer .more-layer[data-v-141c0988]{width:100%;height:42vw}.popup-layer .more-layer .list[data-v-141c0988]{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.popup-layer .more-layer .list .box[data-v-141c0988]{width:18vw;height:18vw;border-radius:%?20?%;background-color:#fff;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;margin:0 3vw 2vw 3vw}.popup-layer .more-layer .list .box .icon[data-v-141c0988]{font-size:%?70?%}.input-box[data-v-141c0988]{width:98%;height:%?100?%;padding:0 1%;background-color:#f2f2f2;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;position:fixed;z-index:20;bottom:%?-2?%;-webkit-transition:all .15s linear;-o-transition:all .15s linear;transition:all .15s linear;border-bottom:solid %?1?% #ddd}.input-box.showLayer[data-v-141c0988]{-webkit-transform:translate3d(0,-42vw,0);transform:translate3d(0,-42vw,0)}.input-box .more[data-v-141c0988],.input-box .voice[data-v-141c0988]{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:%?90?%;height:%?100?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.input-box .send[data-v-141c0988]{\nmargin-left:%?20?%;\n-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:%?100?%;height:%?100?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.input-box .send .btn[data-v-141c0988]{width:%?90?%;height:%?56?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;background:-webkit-gradient(linear,left top,right top,from(#f09b37),to(#eb632c));background:-o-linear-gradient(left,#f09b37,#eb632c);background:linear-gradient(90deg,#f09b37,#eb632c);color:#fff;border-radius:%?6?%;font-size:%?24?%}.input-box .textbox[data-v-141c0988]{width:100%;height:%?70?%;margin-top:%?15?%}.input-box .textbox .voice-mode[data-v-141c0988]{width:calc(100% - %?2?%);height:%?68?%;border-radius:%?70?%;border:solid %?1?% #cdcdcd;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;font-size:%?28?%;background-color:#fff;color:#555}.input-box .textbox .voice-mode.recording[data-v-141c0988]{background-color:#e5e5e5}.input-box .textbox .text-mode[data-v-141c0988]{width:100%;height:%?70?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;background-color:#fff;border-radius:%?40?%}.input-box .textbox .text-mode .box[data-v-141c0988]{width:100%;padding-left:%?30?%;height:%?70?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.input-box .textbox .text-mode .box uni-textarea[data-v-141c0988]{width:100%;height:%?70?%;line-height:%?70?%}.input-box .textbox .text-mode .em[data-v-141c0988]{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:%?80?%;padding-left:%?10?%;height:%?70?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.record[data-v-141c0988]{width:40vw;height:40vw;position:fixed;top:55%;left:30%;background-color:rgba(0,0,0,.6);border-radius:%?20?%}.record .ing[data-v-141c0988]{width:100%;height:30vw;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}@-webkit-keyframes volatility-data-v-141c0988{0%{background-position:0 130%}20%{background-position:0 150%}30%{background-position:0 155%}40%{background-position:0 150%}50%{background-position:0 145%}70%{background-position:0 150%}80%{background-position:0 155%}90%{background-position:0 140%}to{background-position:0 135%}}@keyframes volatility-data-v-141c0988{0%{background-position:0 130%}20%{background-position:0 150%}30%{background-position:0 155%}40%{background-position:0 150%}50%{background-position:0 145%}70%{background-position:0 150%}80%{background-position:0 155%}90%{background-position:0 140%}to{background-position:0 135%}}.record .ing .icon[data-v-141c0988]{background-image:-webkit-gradient(linear,left top,left bottom,from(#f09b37),color-stop(50%,#fff));background-image:-o-linear-gradient(top,#f09b37,#fff 50%);background-image:linear-gradient(180deg,#f09b37,#fff 50%);background-size:100% 200%;-webkit-animation:volatility-data-v-141c0988 1.5s ease-in-out -1.5s infinite alternate;animation:volatility-data-v-141c0988 1.5s ease-in-out -1.5s infinite alternate;-webkit-background-clip:text;-webkit-text-fill-color:rgba(0,0,0,0);font-size:%?150?%;color:#f09b37}.record .cancel[data-v-141c0988]{width:100%;height:30vw;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.record .cancel .icon[data-v-141c0988]{color:#fff;font-size:%?150?%}.record .tis[data-v-141c0988]{width:100%;height:10vw;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;font-size:%?28?%;color:#fff}.record .tis.change[data-v-141c0988]{color:#f09b37}.content[data-v-141c0988]{width:100%}.content .msg-list[data-v-141c0988]{width:100%;position:absolute;top:0\n    /* bottom: 100upx; */}.content .msg-list .loading[data-v-141c0988]{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}@-webkit-keyframes stretchdelay-data-v-141c0988{0%,40%,to{-webkit-transform:scaleY(.6);transform:scaleY(.6)}20%{-webkit-transform:scaleY(1);transform:scaleY(1)}}@keyframes stretchdelay-data-v-141c0988{0%,40%,to{-webkit-transform:scaleY(.6);transform:scaleY(.6)}20%{-webkit-transform:scaleY(1);transform:scaleY(1)}}.content .msg-list .loading .spinner[data-v-141c0988]{margin:%?20?% 0;width:%?60?%;height:%?100?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between}.content .msg-list .loading .spinner uni-view[data-v-141c0988]{background-color:#f06c7a;height:%?50?%;width:%?6?%;border-radius:%?6?%;-webkit-animation:stretchdelay-data-v-141c0988 1.2s infinite ease-in-out;animation:stretchdelay-data-v-141c0988 1.2s infinite ease-in-out}.content .msg-list .loading .spinner .rect2[data-v-141c0988]{-webkit-animation-delay:-1.1s;animation-delay:-1.1s}.content .msg-list .loading .spinner .rect3[data-v-141c0988]{-webkit-animation-delay:-1s;animation-delay:-1s}.content .msg-list .loading .spinner .rect4[data-v-141c0988]{-webkit-animation-delay:-.9s;animation-delay:-.9s}.content .msg-list .loading .spinner .rect5[data-v-141c0988]{-webkit-animation-delay:-.8s;animation-delay:-.8s}.content .msg-list .row[data-v-141c0988]{padding:%?20?% 0}.content .msg-list .row .system[data-v-141c0988]{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.content .msg-list .row .system uni-view[data-v-141c0988]{padding:0 %?30?%;height:%?50?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;background-color:#c9c9c9;color:#fff;font-size:%?24?%;border-radius:%?40?%}.content .msg-list .row .system .red-envelope uni-image[data-v-141c0988]{margin-right:%?5?%;width:%?30?%;height:%?30?%}.content .msg-list .row[data-v-141c0988]:first-child{margin-top:%?20?%}.content .msg-list .row .my .left[data-v-141c0988],.content .msg-list .row .other .right[data-v-141c0988]{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}.content .msg-list .row .my .left .bubble[data-v-141c0988],.content .msg-list .row .other .right .bubble[data-v-141c0988]{max-width:70%;min-height:%?50?%;border-radius:%?10?%;padding:%?15?% %?20?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;font-size:%?32?%;word-break:break-word}.content .msg-list .row .my .left .bubble.img[data-v-141c0988],.content .msg-list .row .other .right .bubble.img[data-v-141c0988]{background-color:rgba(0,0,0,0);padding:0;overflow:hidden}.content .msg-list .row .my .left .bubble.img uni-image[data-v-141c0988],.content .msg-list .row .other .right .bubble.img uni-image[data-v-141c0988]{max-width:%?350?%;max-height:%?350?%}.content .msg-list .row .my .left .bubble.red-envelope[data-v-141c0988],.content .msg-list .row .other .right .bubble.red-envelope[data-v-141c0988]{background-color:rgba(0,0,0,0);padding:0;overflow:hidden;position:relative;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start}.content .msg-list .row .my .left .bubble.red-envelope uni-image[data-v-141c0988],.content .msg-list .row .other .right .bubble.red-envelope uni-image[data-v-141c0988]{width:%?250?%;height:%?313?%}.content .msg-list .row .my .left .bubble.red-envelope .tis[data-v-141c0988],.content .msg-list .row .other .right .bubble.red-envelope .tis[data-v-141c0988]{position:absolute;top:6%;font-size:%?26?%;color:#9c1712}.content .msg-list .row .my .left .bubble.red-envelope .blessing[data-v-141c0988],.content .msg-list .row .other .right .bubble.red-envelope .blessing[data-v-141c0988]{position:absolute;bottom:14%;color:#e9b874;width:80%;text-align:center;overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2}.content .msg-list .row .my .left .bubble.voice .icon[data-v-141c0988],.content .msg-list .row .other .right .bubble.voice .icon[data-v-141c0988]{font-size:%?40?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}.content .msg-list .row .my .left .bubble.voice .icon[data-v-141c0988]:after,.content .msg-list .row .other .right .bubble.voice .icon[data-v-141c0988]:after{content:" ";width:%?53?%;height:%?53?%;border-radius:100%;position:absolute;-webkit-box-sizing:border-box;box-sizing:border-box}.content .msg-list .row .my .left .bubble.voice .length[data-v-141c0988],.content .msg-list .row .other .right .bubble.voice .length[data-v-141c0988]{font-size:%?28?%}.content .msg-list .row .my .right[data-v-141c0988],.content .msg-list .row .other .left[data-v-141c0988]{-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;width:%?80?%;height:%?80?%}.content .msg-list .row .my .right uni-image[data-v-141c0988],.content .msg-list .row .other .left uni-image[data-v-141c0988]{width:%?80?%;height:%?80?%;border-radius:50%}.content .msg-list .row .my[data-v-141c0988]{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}.content .msg-list .row .my .left[data-v-141c0988]{min-height:%?80?%;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}.content .msg-list .row .my .left .bubble[data-v-141c0988]{background-color:#f06c7a;color:#fff}.content .msg-list .row .my .left .bubble.voice .icon[data-v-141c0988]{color:#fff}.content .msg-list .row .my .left .bubble.voice .length[data-v-141c0988]{margin-right:%?20?%}@-webkit-keyframes my-play-data-v-141c0988{0%{-webkit-transform:translateX(80%);transform:translateX(80%)}to{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes my-play-data-v-141c0988{0%{-webkit-transform:translateX(80%);transform:translateX(80%)}to{-webkit-transform:translateX(0);transform:translateX(0)}}.content .msg-list .row .my .left .bubble.play .icon[data-v-141c0988]:after{border-left:solid %?10?% rgba(240,108,122,.5);-webkit-animation:my-play-data-v-141c0988 1s linear infinite;animation:my-play-data-v-141c0988 1s linear infinite}.content .msg-list .row .my .right[data-v-141c0988]{margin-left:%?15?%}.content .msg-list .row .other[data-v-141c0988]{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}.content .msg-list .row .other .left[data-v-141c0988]{margin-right:%?15?%}.content .msg-list .row .other .right[data-v-141c0988]{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}.content .msg-list .row .other .right .username[data-v-141c0988]{width:100%;height:%?45?%;font-size:%?24?%;color:#999;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}.content .msg-list .row .other .right .username .name[data-v-141c0988]{margin-right:%?50?%}.content .msg-list .row .other .right .bubble[data-v-141c0988]{background-color:#fff;color:#333}.content .msg-list .row .other .right .bubble.voice .icon[data-v-141c0988]{color:#333}.content .msg-list .row .other .right .bubble.voice .length[data-v-141c0988]{margin-left:%?20?%}@-webkit-keyframes other-play-data-v-141c0988{0%{-webkit-transform:translateX(-80%);transform:translateX(-80%)}to{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes other-play-data-v-141c0988{0%{-webkit-transform:translateX(-80%);transform:translateX(-80%)}to{-webkit-transform:translateX(0);transform:translateX(0)}}.content .msg-list .row .other .right .bubble.play .icon[data-v-141c0988]:after{border-right:solid %?10?% hsla(0,0%,100%,.8);-webkit-animation:other-play-data-v-141c0988 1s linear infinite;animation:other-play-data-v-141c0988 1s linear infinite}.windows .mask[data-v-141c0988]{position:fixed;top:100%;width:100%;height:100%;z-index:1000;background-color:rgba(0,0,0,.6);opacity:0;-webkit-transition:opacity .2s ease-out;-o-transition:opacity .2s ease-out;transition:opacity .2s ease-out}.windows .layer[data-v-141c0988]{position:fixed;width:80%;height:70%;left:10%;z-index:1001;border-radius:%?20?%;overflow:hidden;top:100%;-webkit-transform:scale3d(.5,.5,1);transform:scale3d(.5,.5,1);-webkit-transition:all .2s ease-out;-o-transition:all .2s ease-out;transition:all .2s ease-out}.windows.show[data-v-141c0988]{display:block}.windows.show .mask[data-v-141c0988]{top:0;opacity:1}.windows.show .layer[data-v-141c0988]{-webkit-transform:translate3d(0,-85vh,0) scaleX(1);transform:translate3d(0,-85vh,0) scaleX(1)}.windows.hide[data-v-141c0988]{display:block}.windows.hide .mask[data-v-141c0988]{top:0;opacity:0}.open-redenvelope[data-v-141c0988]{width:100%;height:70vh;background-color:#cf3c35;position:relative}.open-redenvelope .top[data-v-141c0988]{width:100%;background-color:#fe5454;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;border-radius:0 0 100% 100%;-webkit-box-shadow:inset 0 %?-20?% 0 #9c1712;box-shadow:inset 0 %?-20?% 0 #9c1712;margin-bottom:%?65?%}.open-redenvelope .top .close-btn[data-v-141c0988]{width:100%;height:%?80?%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end;margin-bottom:%?30?%}.open-redenvelope .top .close-btn .icon[data-v-141c0988]{color:#9c1712;margin-top:%?10?%;margin-right:%?10?%}.open-redenvelope .top uni-image[data-v-141c0988]{width:%?130?%;height:%?130?%;border:solid %?12?% #cf3c35;border-radius:100%;margin-bottom:%?-65?%}.open-redenvelope .blessing[data-v-141c0988],.open-redenvelope .from[data-v-141c0988],.open-redenvelope .money[data-v-141c0988],.open-redenvelope .showDetails[data-v-141c0988]{width:90%;padding:%?5?% 5%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;font-size:%?32?%;color:#fff}.open-redenvelope .money[data-v-141c0988]{font-size:%?100?%;color:#f8d757;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding-top:%?20?%}.open-redenvelope .showDetails[data-v-141c0988]{position:absolute;bottom:%?20?%;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;font-size:%?28?%;color:#f8d757}.open-redenvelope .showDetails .icon[data-v-141c0988]{font-size:%?26?%;color:#f8d757}.top[data-v-141c0988]{color:#929292;font-size:%?30?%;text-indent:%?32?%;line-height:%?60?%;background:#f5eda8}.body[data-v-141c0988]{padding:%?30?% 5%}.text[data-v-141c0988]{color:#999;font-size:%?30?%;line-height:%?60?%}.text1[data-v-141c0988]{color:#666;font-size:%?34?%;text-indent:%?20?%;line-height:%?64?%}.textarea uni-textarea[data-v-141c0988]{width:90%;height:%?200?%;line-height:%?50?%;background:#fff;padding:%?0?% %?32?%;border:%?2?% solid #5d8afc}body.?%PAGE?%[data-v-141c0988]{background-color:#e5e5e5}',""])},b807:function(e,t,i){"use strict";i.r(t);var n=i("26d2"),a=i("0ea1");for(var o in a)"default"!==o&&function(e){i.d(t,e,function(){return a[e]})}(o);i("bfc9");var r=i("2877"),s=Object(r["a"])(a["default"],n["a"],n["b"],!1,null,"a91eaefa",null);t["default"]=s.exports},bfc9:function(e,t,i){"use strict";var n=i("6b29"),a=i.n(n);a.a},c09d:function(e,t,i){"use strict";var n=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("v-uni-view",{staticClass:"content"},[i("v-uni-view",{staticClass:"back"},[i("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(t){t=e.$handleEvent(t),e.back()}}})],1),i("v-uni-view",{staticClass:"top"},[e._v("申訴後由客服人員介入調查！")]),i("v-uni-view",{staticClass:"body"},[i("v-uni-view",{staticClass:"text"},[e._v("訂單編號")]),i("v-uni-view",{staticClass:"text1"},[e._v(e._s(e.cat.ordersn))]),i("v-uni-view",{staticClass:"text"},[e._v("訂單金額")]),i("v-uni-view",{staticClass:"text1"},[e._v(e._s(e.cat.price))]),i("v-uni-view",{staticClass:"text"},[e._v("對方名稱")]),i("v-uni-view",{staticClass:"text1"},[e._v(e._s(e.cat.nickname))]),i("v-uni-view",{staticClass:"text"},[e._v("申訴理由")]),i("v-uni-view",{staticClass:"textarea"},[i("v-uni-textarea",{attrs:{placeholder:"寫下申訴的理由",maxlength:"200"},model:{value:e.reason,callback:function(t){e.reason=t},expression:"reason"}})],1),i("v-uni-button",{staticClass:"btn-area",on:{click:function(t){t=e.$handleEvent(t),e.present(t)}}},[e._v("提交申訴")])],1),i("footerNav")],1)},a=[];i.d(t,"a",function(){return n}),i.d(t,"b",function(){return a})},db84:function(e,t,i){"use strict";function n(e){for(var t=1;t<arguments.length;t++){var i=null!=arguments[t]?arguments[t]:{},n=Object.keys(i);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(i).filter(function(e){return Object.getOwnPropertyDescriptor(i,e).enumerable}))),n.forEach(function(t){a(e,t,i[t])})}return e}function a(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o="USER_KEY",r="TOKEN_KEY",s=function(){var e="";return e=uni.getStorageSync(o),e||{avatar:"../../static/img/avatar.png",bottom_text:"广州锐合技术支持QQ：8396048",level_name:"普通会员",nickname:"锐合网络",uid:0,icode:"18024553545"}},c=function(e){uni.setStorage({key:o,data:e})},l=function(e){uni.setStorageSync(r,e)},d=function(){return uni.getStorageSync(r)},b=function(){uni.clearStorage()},f=function(e){uni.setStorageSync("uid",e)},p=function(){return uni.getStorageSync("uid")},m=function(e){uni.setStorageSync("logid",e)},u=function(){return uni.getStorageSync("logid")},g="http://blockcat.8396048.com/",w={index:g+"default/index",home:{info:g+"port/member/info"},main:{bazaar:g+"port/index/index",order:g+"port/index/appointment",adopt:g+"port/index/adopt",result:g+"port/index/adoptResult",info:g+"port/index/confInfo",notice:g+"port/index/notice"},center:{code:g+"port/member/verifycode",password:g+"port/member/changePwd",passtwo:g+"port/member/changePwd2",pid:g+"port/member/realname",close:g+"port/member/changeMethodStatus",card:g+"port/member/myPaymentMethod",type:g+"port/member/getPaymentType",submit:g+"port/member/submitMethod",message:g+"port/member/systemMessage",team:g+"port/member/myTeam",friends:g+"port/member/inviteFriends"},service:{insert:g+"port/server_center/workorder",submit:g+"port/server_center/submitWorkorder",order:g+"port/server_center/workorderList"},login:{login:g+"port/login",logo:g+"port/login/get_enter_logo",forget:g+"port/login/forgetpwd"},reg:{register:g+"port/login/register",code:g+"port/login/verifycode",agree:g+"port/login/get_user_regagree"},interests:{qrcode:g+"port/member/recharge",integral:g+"port/member/integralLog",roll:g+"port/member/givingIntegral",sell:g+"port/member/assetSale",submit:g+"port/member/rechargeSubmit",earnings:g+"port/member/incomeLog"},record:{pay:g+"port/order/pay",adopt:g+"port/order/index",make:g+"port/member/appointment",update:g+"port/order/pay",passtwo:g+"port/order/auditPass",submit:g+"port/order/complaint",complaint:g+"record/payment",transfer:g+"port/order/transfer",details:g+"port/order/detail",undo:g+"port/order/revoke"}},x=function(e,t,i,a){var o=this,r=uni.getStorageSync("token");""==r&&(uni.setStorageSync("token",""),uni.reLaunch({url:"/pages/login/login"}));i=n({token:uni.getStorageSync("token")},i);uni.request({url:t,method:"GET",data:i,success:function(t){t=t.data;1==t.code?a(e,t):400==t.code?(uni.setStorageSync("token",""),setTimeout(function(){uni.reLaunch({url:"/pages/login/login"})},2e3)):uni.showToast({icon:"none",title:t.msg})},fail:function(e){console.log(e),uni.showToast({icon:"none",title:"网站消息获取错误"})},complete:function(e){e=e.data;13==e.code&&(uni.showToast({icon:"none",title:e.msg}),o.removeToken(),uni.reLaunch({url:"/pages/login/login"})),uni.hideLoading()}})},v={api:w,auth:x,setToken:l,getToken:d,removeToken:b,getUserInfo:s,setUserInfo:c,setId:f,getId:p,setLogid:m,getLogid:u};t.default=v},de12:function(e,t,i){t=e.exports=i("2350")(!1),t.push([e.i,".footer[data-v-a91eaefa]{left:0;bottom:0;width:100%;color:#fff;z-index:1000;height:%?100?%;position:fixed;background:#181e30}.footer1[data-v-a91eaefa]{left:0;bottom:0;width:100%;color:#fff;height:%?100?%;position:fixed;background-color:#fff}.footer_item[data-v-a91eaefa]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-a91eaefa]{margin-top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?0?%}.footer_item.big_item[data-v-a91eaefa]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-a91eaefa]{width:%?100?%;height:%?100?%}.actives[data-v-a91eaefa]{color:#5d8afc}.actives1[data-v-a91eaefa]{color:#5d8afc}.tab_text1[data-v-a91eaefa]{color:#fdb513}",""])},fc5d:function(e,t,i){var n=i("a820");"string"===typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);var a=i("4f06").default;a("62d1180d",n,!0,{sourceMap:!1,shadowMode:!1})}}]);