(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pages-record-adopt"],{"14b4":function(t,e,a){"use strict";a.r(e);var i=a("52f2"),n=a("f355");for(var s in n)"default"!==s&&function(t){a.d(e,t,function(){return n[t]})}(s);a("48b9");var o=a("2877"),c=Object(o["a"])(n["default"],i["a"],i["b"],!1,null,"ec14f616",null);e["default"]=c.exports},4834:function(t,e,a){"use strict";var i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-uni-view",{staticClass:"page"},[a("v-uni-view",{staticClass:"back"},[a("uni-icon",{attrs:{size:"28",type:"arrowleft"},on:{click:function(e){e=t.$handleEvent(e),t.back()}}})],1),a("v-uni-scroll-view",{staticClass:"uni-swiper-tab",attrs:{id:"tab-bar","scroll-x":""}},t._l(t.tabBars,function(e,i){return a("v-uni-view",{key:e.id,class:["swiper-tab-list",t.tabIndex==i?"active":""],attrs:{id:e.id,"data-current":i},on:{click:function(a){a=t.$handleEvent(a),t.tapTab(i,e.id)}}},[t._v(t._s(e.name))])}),1),a("v-uni-scroll-view",{staticClass:"msg-list"},[t._l(t.adopt_list,function(e,i){return a("v-uni-view",{key:e.id,staticClass:"card"},[a("v-uni-view",{staticClass:"card-number",on:{click:function(a){a=t.$handleEvent(a),t.details(e.id,t.tabid)}}},[a("v-uni-image",{staticClass:"img",attrs:{src:"../../static/function/number.png"}}),a("v-uni-view",{staticClass:"number"},[t._v("區塊編號："+t._s(e.ordersn))])],1),a("v-uni-view",{staticClass:"card-content",on:{click:function(a){a=t.$handleEvent(a),t.details(e.id,t.tabid)}}},[a("v-uni-view",{staticClass:"text"},[a("v-uni-view",[t._v(t._s(t.species)+"：")]),a("v-uni-view",{staticClass:"array"},[t._v(t._s(e.levelname))])],1),a("v-uni-view",{staticClass:"text"},[a("v-uni-view",[t._v("價值：")]),a("v-uni-view",{staticClass:"array"},[t._v(t._s(e.product_price))])],1),a("v-uni-view",{staticClass:"text"},[a("v-uni-view",[t._v("智能合約收益：")]),a("v-uni-view",{staticClass:"array"},[t._v(t._s(e.cycle)+" 天 / "+t._s(e.figure)+" %")])],1),2==t.tabid?[a("v-uni-view",{staticClass:"text"},[a("v-uni-view",[t._v("獲得收益：")]),a("v-uni-view",{staticClass:"array"},[t._v(t._s(e.income))])],1)]:t._e(),a("v-uni-view",{staticClass:"text"},[a("v-uni-view",[t._v("轉讓時間：")]),a("v-uni-view",{staticClass:"array"},[t._v(t._s(e.createtime))])],1),e.income_status<1?[t.tabid<3?[a("v-uni-view",{staticClass:"text"},[e.status<1?[a("v-uni-view",[t._v("待付款截止時間：")])]:[a("v-uni-view",[t._v("待審核截止時間：")])],a("v-uni-view",{staticClass:"array"},[a("uni-countdown",{attrs:{timer:e.time}})],1)],2)]:t._e()]:t._e()],2),a("v-uni-view",{staticClass:"card-bottom"},[1==t.tabid?[e.status<1?[a("v-uni-view",{staticClass:"card-lable"},[t._v("待付款")]),a("v-uni-view",{staticClass:"check1",on:{click:function(a){a=t.$handleEvent(a),t.payment(e.id)}}},[t._v("付款")])]:[a("v-uni-view",{staticClass:"card-lable"},[t._v("區塊寫入中")])]]:2==t.tabid?[0==e.income_status?[a("v-uni-view",{staticClass:"card-lable"},[t._v("已完成（等待收益）")])]:1==e.income_status?[a("v-uni-view",{staticClass:"card-lable"},[t._v("已完成（收益中）")])]:[a("v-uni-view",{staticClass:"card-lable-no"},[t._v("已完成（結束收益）")])]]:[-1==e.status?[a("v-uni-view",{staticClass:"card-lable"},[t._v("已取消")])]:-2==e.status?[a("v-uni-view",{staticClass:"card-lable"},[t._v("已申訴")])]:[a("v-uni-view",{staticClass:"card-lable"},[t._v("已轉讓")])]]],2)],1)}),a("uni-load-more",{attrs:{loadingType:t.loadingType,contentText:t.contentText}})],2),a("footerNav")],1)},n=[];a.d(e,"a",function(){return i}),a.d(e,"b",function(){return n})},"48b9":function(t,e,a){"use strict";var i=a("5291"),n=a.n(i);n.a},"51cb":function(t,e,a){"use strict";var i=a("859d"),n=a.n(i);n.a},5291:function(t,e,a){var i=a("c384");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var n=a("4f06").default;n("79948359",i,!0,{sourceMap:!1,shadowMode:!1})},"52f2":function(t,e,a){"use strict";var i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-uni-view",[t.now_index<3?void 0:[a("v-uni-view",{staticClass:"footer1"},[t._l(t.tabBar,function(e,i){return a("v-uni-view",{key:i,staticClass:"footer_item",staticStyle:{width:"33.3%"}},[a("v-uni-view",{on:{click:function(a){a=t.$handleEvent(a),t.jump(e.pagePath,e.id)}}},[a("v-uni-image",{attrs:{src:e.id==t.now_index?e.selectedIconPath:e.iconPath,mode:""}}),a("v-uni-view",{class:"tab_text "+(e.id==t.now_index?"actives1":"")},[t._v(t._s(e.text))])],1)],1)}),a("v-uni-view",{staticClass:"footer_item",staticStyle:{width:"33.3%"}},[a("v-uni-view",{on:{click:function(e){e=t.$handleEvent(e),t.order()}}},[a("v-uni-image",{attrs:{src:"/static/tabbar/main.png",mode:""}}),a("v-uni-view",{staticClass:"tab_text1"},[t._v("返回亀窩")])],1)],1)],2)]],2)},n=[];a.d(e,"a",function(){return i}),a.d(e,"b",function(){return n})},"79cd":function(t,e,a){"use strict";a.r(e);var i=a("d4bf"),n=a.n(i);for(var s in i)"default"!==s&&function(t){a.d(e,t,function(){return i[t]})}(s);e["default"]=n.a},"859d":function(t,e,a){var i=a("ae64");"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var n=a("4f06").default;n("66115b06",i,!0,{sourceMap:!1,shadowMode:!1})},"9df3":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i={data:function(){return{tabBar:[{id:3,iconPath:"/static/tabbar/refer.png",selectedIconPath:"/static/tabbar/referHL.png",pagePath:"/pages/service/repair",text:"提交工單"},{id:4,iconPath:"/static/tabbar/order.png",selectedIconPath:"/static/tabbar/orderHL.png",pagePath:"/pages/service/order",text:"我的工單"}],footer_nav:[{id:0,name:"亀集市",icon:"/static/tabbar/template.png",select_icon:"/static/tabbar/templateHL.png",pagePath:"/pages/main/bazaar"},{id:1,name:"服務中心",icon:"/static/tabbar/api.png",select_icon:"/static/tabbar/apiHL.png",pagePath:"/pages/main/service"},{id:2,name:"我的亀窩",icon:"/static/tabbar/component.png",select_icon:"/static/tabbar/componentHL.png",pagePath:"/pages/main/shack"}],now_index:uni.getStorageSync("css")}},methods:{jump:function(t,e){uni.setStorageSync("css",e),this.now_index=e,uni.reLaunch({url:t})},order:function(){uni.switchTab({url:"/pages/main/shack"})}}};e.default=i},ae64:function(t,e,a){e=t.exports=a("2350")(!1),e.push([t.i,"uni-page-body[data-v-2070acde]{background:#f2f2f2}.page .active[data-v-2070acde]{color:#fdb513;border-bottom:%?6?% solid #fdb513}.uni-swiper-tab[data-v-2070acde]{width:100%;z-index:1000;height:%?100?%;position:fixed;line-height:%?90?%;white-space:nowrap;background-color:#fff}.uni-scroll-view[data-v-2070acde]{width:100%;height:100%;position:relative;max-height:inherit;-webkit-overflow-scrolling:touch}.msg-list[data-v-2070acde]{margin-top:%?100?%}div[data-v-2070acde]{-webkit-box-sizing:border-box;box-sizing:border-box}.swiper-tab-list[data-v-2070acde]{color:#666;width:33.3%;height:%?90?%;font-size:%?30?%;text-align:center;display:inline-block}.card[data-v-2070acde]{width:100%;margin-top:%?4?%;background-color:#fff}.img[data-v-2070acde]{width:%?40?%;height:%?40?%;margin:%?30?% %?20?%}.number[data-v-2070acde]{font-size:%?36?%;margin-top:%?-80?%;text-indent:%?80?%}.text[data-v-2070acde]{height:%?60?%;font-size:%?30?%;line-height:%?60?%;text-indent:%?24?%}.text uni-view[data-v-2070acde]{float:left}.array[data-v-2070acde]{color:#fdb513}.card-bottom[data-v-2070acde]{height:%?100?%;padding:%?20?% %?40?%}body.?%PAGE?%[data-v-2070acde]{background:#f2f2f2}",""])},c384:function(t,e,a){e=t.exports=a("2350")(!1),e.push([t.i,".footer[data-v-ec14f616]{left:0;bottom:0;width:100%;color:#fff;z-index:1000;height:%?100?%;position:fixed;background:#181e30}.footer1[data-v-ec14f616]{left:0;bottom:0;width:100%;color:#fff;height:%?100?%;position:fixed;background-color:#fff}.footer_item[data-v-ec14f616]{float:left;width:33.3%;height:%?100?%;font-size:%?24?%;text-align:center;color:#7a7e83}.footer_item uni-image[data-v-ec14f616]{margin-top:%?10?%;width:%?46?%;height:%?46?%;margin-bottom:%?0?%}.footer_item.big_item[data-v-ec14f616]{top:%?-40?%;position:relative}.footer_item.big_item uni-image[data-v-ec14f616]{width:%?100?%;height:%?100?%}.actives[data-v-ec14f616]{color:#5d8afc}.actives1[data-v-ec14f616]{color:#5d8afc}.tab_text1[data-v-ec14f616]{color:#fdb513}",""])},d4bf:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var i=r(a("e108")),n=r(a("5d50")),s=r(a("34e3")),o=r(a("14b4")),c=r(a("37fb"));function r(t){return t&&t.__esModule?t:{default:t}}var d={components:{uniIcon:n.default,uniLoadMore:s.default,footerNav:o.default,uniCountdown:c.default},data:function(){return{loadingType:0,contentText:{contentdown:"上拉顯示更多",contentrefresh:"正在加載...",contentnomore:"沒有更多數據了"},adopt_list:[],time_list:[],isHistoryLoading:!1,scrollAnimation:!1,scrollToView:"",pages:1,page:0,isClickChange:!1,tabIndex:0,tabid:1,status:uni.getStorageSync("tabbar"),newsitems:[],tabBars:[],token:uni.getStorageSync("token"),species:""}},onShow:function(){var t=i.default.config.receive;this.species=i.default.config.species,this.tabBars=[{name:t+"中",id:"1"},{name:"已"+t,id:"2"},{name:"取消/申訴",id:"3"}],uni.setStorageSync("time",1),this.tabIndex=uni.getStorageSync("tabbar"),this.time(this),this.loadHistory()},onReachBottom:function(){this.loadHistory()},onBackPress:function(){uni.switchTab({url:"/pages/main/shack"})},methods:{time:function(t){1==uni.getStorageSync("cat_time")?(uni.setStorageSync("cat_time",0),t.page=0,t.adopt_list=[],t.loadHistory()):setTimeout(function(){t.time(t)},2e3)},back:function(){uni.reLaunch({url:"/pages/main/shack"})},loadHistory:function(t){if(!this.isHistoryLoading)if(this.page<this.pages){this.loadingType=1;var e=this.status;(e<1||e>3)&&(e=1);this.keywords;this.isHistoryLoading=!0,this.scrollAnimation=!1;var a=this.page+1;i.default.auth(this,i.default.api.record.adopt+"?token="+this.token,{type:e,page:a},function(t,e){if(1==e.code){for(var i=new Date,n=Date.parse(i),s=e.data.orderlist.data,o=0;o<s.length;o++){if(s[o].count_down>0){var c=n+1e3*s[o].count_down;c=new Date(c);var r=c.getFullYear(),d=c.getMonth()+1;d<10&&(d="0"+d);var u=c.getDate();u<10&&(u="0"+u);var l=c.getHours();l<10&&(l="0"+l);var v=c.getMinutes();v<10&&(v="0"+v);var f=c.getSeconds();switch(f<10&&(f="0"+f),uni.getSystemInfoSync().platform){case"ios":var g=r+"/"+d+"/"+u+" "+l+":"+v+":"+f;break;default:g=r+"-"+d+"-"+u+" "+l+":"+v+":"+f;break}s[o].time=g}else s[o].time=s[o].createtime;t.adopt_list.push(s[o])}t.pages=e.data.orderlist.last_page,t.page=a,t.scrollAnimation=!0,t.isHistoryLoading=!1,t.page==t.pages?t.loadingType=2:t.loadingType=0}})}else this.loadingType=2},undo:function(t){uni.request({url:i.default.api.record.undo+"?token="+this.token,method:"GET",data:{id:t},success:function(t){t=t.data;uni.showToast({icon:"none",title:t.msg}),1==t.code&&(uni.setStorageSync("tabbar",1),setTimeout(function(){uni.reLaunch({url:"/pages/record/adopt"})},1e3))}})},details:function(t,e){var a={page:this.page,type:e,id:t};uni.setStorageSync("details",a),uni.setStorageSync("tabbar",e-1),uni.navigateTo({url:"/pages/record/particulars"})},getElSize:function(t){return new Promise(function(e,a){uni.createSelectorQuery().select("#"+t).fields({size:!0,scrollOffset:!0},function(t){e(t)}).exec()})},tapTab:function(t,e){if(uni.setStorageSync("aid",e),this.status=e,this.page=0,this.pages=1,this.adopt_list=[],this.loadHistory(),uni.setStorageSync("tabbar",e),this.tabid=e,this.tabIndex==t)return!1;this.isClickChange=!0,this.tabIndex=t},payment:function(t){uni.navigateTo({url:"/pages/record/payment?id="+t})}}};e.default=d},e55a:function(t,e,a){"use strict";a.r(e);var i=a("4834"),n=a("79cd");for(var s in n)"default"!==s&&function(t){a.d(e,t,function(){return n[t]})}(s);a("51cb");var o=a("2877"),c=Object(o["a"])(n["default"],i["a"],i["b"],!1,null,"2070acde",null);e["default"]=c.exports},f355:function(t,e,a){"use strict";a.r(e);var i=a("9df3"),n=a.n(i);for(var s in i)"default"!==s&&function(t){a.d(e,t,function(){return i[t]})}(s);e["default"]=n.a}}]);