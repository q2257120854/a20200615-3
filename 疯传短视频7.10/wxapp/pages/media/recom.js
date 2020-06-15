var videoObj, app = getApp(), TxvContext = requirePlugin("tencentvideo");

Component({
    data: {
        p: 1,
        newId: 0,
        oldId: 0,
        isEnd: !1,
        lists: [],
        showBack: !1,
        isLoading: !1,
        swiperCurrent: 0,
        playState: !0,
        windowHeight: 2e3
    },
    methods: {
        onLoad: function(t) {
            var s = this;
            wx.getSystemInfo({
                success: function(t) {
                    var a = t.statusBarHeight + 44, e = t.statusBarHeight, i = t.windowHeight;
                    s.setData({
                        navigationBarHeight: a,
                        statusBarHeight: e,
                        windowHeight: i
                    });
                }
            });
        },
        onReady: function() {
            this.selfReset(), this.getData();
        },
        selfReset: function() {
            this.setData({
                p: 1,
                newId: 0,
                oldId: 0,
                lists: [],
                isEnd: !1,
                swiperCurrent: 0,
                playState: !1,
                adsense: ""
            });
        },
        getData: function() {
            if (!this.data.isLoading && !this.data.isEnd) {
                wx.showLoading({
                    title: "加载中"
                }), this.setData({
                    isLoading: !0
                });
                var s = {};
                s.page = this.data.p++;
                s.page;
                var n = this, t = app.util.url("entry/wxapp/api", {
                    k: "video",
                    m: "dk_video",
                    o: "recom"
                });
                wx.request({
                    url: t,
                    method: "POST",
                    data: {
                        page: this.data.p
                    },
                    success: function(t) {
                        if (0 == t.data.code) {
                            wx.hideLoading();
                            var a = app.crypt.Decrypt(t.data.data.data, t.data.data.key), e = JSON.parse(a), i = e.items;
                            1 == s.page ? (n.setData({
                                lists: i,
                                newId: 0 < i.length ? i[n.data.swiperCurrent || 0].id : 0,
                                adsense: e.adsense
                            }), 0 < n.data.lists.length && (wx.showToast({
                                title: "加载中",
                                icon: "loading"
                            }), setTimeout(function() {
                                wx.hideToast(), TxvContext.getTxvContext("video-" + n.data.newId).play(), n.addBrowse();
                            }, 1e3))) : n.setData({
                                lists: this.data.lists.concat(i)
                            }), i.length < 1 && n.setData({
                                isEnd: !0
                            }), n.setData({
                                isLoading: !1
                            });
                        }
                    }
                });
            }
        },
        changeStatus: function() {
            if (0 != this.data.lists.length) {
                var t = !this.data.playState;
                t ? (videoObj = TxvContext.getTxvContext("video-" + this.data.newId)).play() : TxvContext.getTxvContext("video-" + this.data.newId).pause(), 
                this.setData({
                    playState: t
                });
            }
        },
        playActive: function(t) {
            var a = this.data.lists, e = 0, i = 0;
            for (var s in a) a[s].id == this.data.newId && (1 == t && (s < a.length - 1 ? (e = a[s = parseInt(s) + 1].id, 
            i = parseInt(this.data.swiperCurrent) + 1) : (e = a[0].id, i = 0)), -1 == t && (0 != s ? (e = a[s = parseInt(s) - 1].id, 
            i = parseInt(this.data.swiperCurrent) - 1) : (e = a[a.length - 1].id, i = a.length - 1)));
            this.setData({
                swiperCurrent: i,
                oldId: this.data.newId,
                newId: e,
                playState: !0
            });
            var n = this.data.swiperCurrent % 10;
            TxvContext.getTxvContext("video-" + this.data.oldId).pause(), (videoObj = TxvContext.getTxvContext("video-" + this.data.newId)).play(), 
            this.addBrowse(), 5 == n && this.getData();
        },
        addBrowse: function() {
            var t = getApp().globalData.clicknum;
            if (getApp().globalData.clicknum = this.clicknum + 1, "" != this.data.adsense && t % 5 == 0 && wx.createInterstitialAd) {
                var a = wx.createInterstitialAd({
                    adUnitId: this.data.adsense
                });
                a && a.show().catch(function(t) {});
            }
        },
        onShareAppMessage: function() {
            var t = this.data.lists[this.data.swiperCurrent];
            return {
                title: t.title,
                imageUrl: t.icon,
                path: "pages/index/index?vid=" + t.id
            };
        },
        touchStart: function(t) {
            this.setData({
                startY: t.touches[0].clientY,
                moveY: 0
            });
        },
        touchEnd: function(t) {
            var a = this;
            a.setData({
                endY: t.changedTouches[0].clientY
            });
            var e = a.data.startY - a.data.endY;
            if (0 < e) 50 < Math.abs(e) && a.playActive(1); else if (e < 0) {
                50 < Math.abs(e) && a.playActive(-1);
            }
        }
    },
    pageLifetimes: {
        show: function() {
            "function" == typeof this.getTabBar && this.getTabBar() && this.getTabBar().setData({
                selected: 0
            });
        }
    }
});