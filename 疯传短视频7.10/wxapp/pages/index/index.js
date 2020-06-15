var app = getApp();

Page({
    data: {
        reloadBgColor: [ "#ffffff", "#ffffff", "#ffffff" ],
        reloadColor: [ "#888888", "#FF6666", "#33CC99" ],
        currentIndex: 0,
        mainHeight: 1e3,
        cateAll: [],
        cates: [],
        itemAll: [],
        pages: [],
        loadingTypes: [],
        scrollTops: [],
        mainColor: "",
        init: {},
        share: {},
        toolBar: !0,
        menuShow: !1
    },
    onLoad: function(a) {
        var t = a.vid;
        if ("" != t && null != t && null != t) {
            var e = a.uniacid;
            "" != e && null != e && null != e ? 0 < e && this.toMedia(t, e) : this.toMedia(t);
        }
        var i = a.gid;
        "" != i && null != i && null != i && this.toGoods(i);
        var n = a.op;
        "" != n && null != n && null != n && ("weather" == n && this.openWeather(), "calander" == n && this.openCalander(), 
        "eight" == n && this.openEight());
    },
    onReady: function() {
        var t = this;
        setTimeout(function() {
            wx.createSelectorQuery().select("#gBody").fields({
                size: !0
            }, function(a) {
                t.setData({
                    mainHeight: a.height
                });
            }).exec();
        }, 1e3), this.initPage();
    },
    navChange: function(a) {
        this.setData({
            currentIndex: a.detail
        });
    },
    swiperChange: function(a) {
        var t = a.detail.current;
        this.setData({
            currentIndex: t
        }), 2 == this.data.loadingTypes[this.data.currentIndex] && 4 == this.data.loadingTypes[this.ata.currentIndex] || this.loadData();
    },
    initPage: function() {
        var n = this, a = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "init"
        });
        wx.request({
            url: a,
            method: "GET",
            success: function(a) {
                var t = app.crypt.Decrypt(a.data.data.data, a.data.data.key), e = JSON.parse(t);
                n.data.cateAll = e.cates, n.data.init = e.init, n.data.mainColor = e.init.color_primary, 
                n.data.reloadColor[1] = e.init.color_primary, n.data.share = e.share;
                for (var i = 0; i < n.data.cateAll.length; i++) n.data.itemAll.push([]), n.data.cates.push(n.data.cateAll[i].title), 
                n.data.pages.push(1), n.data.loadingTypes.push(3), n.data.scrollTops.push(0);
                n.setData({
                    itemAll: n.data.itemAll,
                    cates: n.data.cates,
                    pages: n.data.pages,
                    loadingTypes: n.data.loadingTypes,
                    scrollTops: n.data.scrollTops,
                    mainColor: n.data.mainColor,
                    reloadColor: n.data.reloadColor,
                    init: n.data.init,
                    share: n.data.share
                }), console.log(n.data.init), n.loadData();
            }
        });
    },
    loadData: function(a) {
        var i = this;
        a || (this.data.loadingTypes.splice(this.data.currentIndex, 1, 1), this.setData({
            loadingTypes: this.data.loadingTypes
        }));
        var t = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "video",
            o: "list",
            cateid: this.data.cateAll[this.data.currentIndex].id,
            page: this.data.pages[this.data.currentIndex]
        });
        wx.request({
            url: t,
            method: "GET",
            data: {},
            success: function(a) {
                if (1 == a.data.status) {
                    var t = app.crypt.Decrypt(a.data.data.data, a.data.data.key), e = JSON.parse(t);
                    1 == i.data.pages[i.data.currentIndex] ? i.data.itemAll.splice(i.data.currentIndex, 1, e.items) : i.data.itemAll[i.data.currentIndex] = i.data.itemAll[i.data.currentIndex].concat(e.items), 
                    i.setData({
                        itemAll: i.data.itemAll
                    }), i.data.pages[i.data.currentIndex]++, i.setData({
                        pages: i.data.pages
                    }), setTimeout(function() {
                        i.data.loadingTypes.splice(i.data.currentIndex, 1, 3), i.setData({
                            loadingTypes: i.data.loadingTypes
                        });
                    }, 300);
                } else -2 == a.data.status ? (console.log("empty"), i.data.itemAll[i.data.currentIndex] = "empty", 
                i.data.loadingTypes.splice(i.data.currentIndex, 1, 4), i.setData({
                    itemAll: i.data.itemAll,
                    loadingTypes: i.data.loadingTypes
                })) : -1 == a.data.status && (console.log("nomore"), i.data.loadingTypes.splice(i.data.currentIndex, 1, 2), 
                i.setData({
                    loadingTypes: i.data.loadingTypes
                }));
            },
            complete: function() {
                a && setTimeout(function() {
                    i.selectComponent("#graceReload" + i.data.currentIndex).endReload();
                }, 300);
            }
        });
    },
    scrollend: function(a) {
        if (2 == this.data.loadingTypes[this.data.currentIndex] || 4 == this.data.loadingTypes[this.data.currentIndex]) return !1;
        this.loadData();
    },
    scroll: function(a) {
        this.data.scrollTops[this.data.currentIndex] = a.detail.scrollTop, this.setData({
            scrollTops: this.data.scrollTops
        });
    },
    touchstart: function(a) {
        var t = {
            scrollTop: this.data.scrollTops[this.data.currentIndex],
            moveY: a.changedTouches[0].pageY
        };
        this.selectComponent("#graceReload" + this.data.currentIndex).touchstart(t);
    },
    touchmove: function(a) {
        var t = {
            scrollTop: this.data.scrollTops[this.data.currentIndex],
            moveY: a.changedTouches[0].pageY
        };
        this.selectComponent("#graceReload" + this.data.currentIndex).touchmove(t);
    },
    touchend: function(a) {
        var t = {
            scrollTop: this.data.scrollTops[this.data.currentIndex],
            moveY: a.changedTouches[0].pageY
        };
        this.selectComponent("#graceReload" + this.data.currentIndex).touchend(t);
    },
    reload: function() {
        this.data.pages[this.data.currentIndex] = 1, this.data.loadingTypes.splice(this.data.currentIndex, 1, 3), 
        this.setData({
            pages: this.data.pages,
            loadingTypes: this.data.loadingTypes
        }), this.loadData(1);
    },
    openMedia: function(t) {
        var e = t.currentTarget.dataset.uniacid;
        if (0 != e) {
            var i = t.currentTarget.dataset.appid;
            wx.showModal({
                title: "提示",
                content: "即将进入高清页面进行播放",
                cancelColor: "cancelColor",
                success: function(a) {
                    a.confirm && wx.navigateToMiniProgram({
                        appId: i,
                        path: "pages/index/index?vid=" + t.currentTarget.dataset.vid + "&uniacid=" + e
                    });
                }
            });
        } else {
            var a = t.currentTarget.dataset.type;
            if ("link" == a) return wx.navigateTo({
                url: "../tools/view?url=" + app.util.base64_encode(t.currentTarget.dataset.path)
            }), !0;
            if ("wxapp" == a) return wx.navigateToMiniProgram({
                appId: t.currentTarget.dataset.appid,
                path: t.currentTarget.dataset.path
            }), !0;
            wx.navigateTo({
                url: "../media/detail?vid=" + t.currentTarget.dataset.vid
            });
        }
    },
    openGoods: function(a) {
        wx.navigateToMiniProgram({
            appId: a.currentTarget.dataset.appid,
            path: a.currentTarget.dataset.path,
            success: function(a) {}
        });
    },
    toMedia: function(a) {
        var t = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : 0;
        wx.navigateTo({
            url: "../media/detail?vid=" + a + "&uniacid=" + t
        });
    },
    toGoods: function(a) {
        wx.navigateTo({
            url: "../mall/detail?id=" + a
        });
    },
    onShareAppMessage: function(a) {
        var t;
        return "menu" == a.from ? t = {
            title: this.data.share.title,
            path: "pages/index/index",
            imageUrl: this.data.share.image
        } : (console.log(a), "video" == a.target.dataset.type ? t = {
            title: a.target.dataset.title,
            path: "pages/index/index?vid=" + a.target.dataset.id,
            imageUrl: a.target.dataset.thumb
        } : "goods" == a.target.dataset.type && (t = {
            title: a.target.dataset.title,
            path: "pages/index/index?gid=" + a.target.dataset.id,
            imageUrl: a.target.dataset.thumb
        })), t;
    },
    showmenu: function() {
        0 == this.data.menuShow ? this.data.menuShow = !0 : this.data.menuShow = !1, this.setData({
            menuShow: this.data.menuShow
        });
    },
    menuHide: function() {
        this.data.menuShow = !1, this.setData({
            menuShow: this.data.menuShow
        });
    },
    openMall: function() {
        wx.navigateTo({
            url: "../mall/index"
        });
    },
    openWeather: function() {
        wx.navigateTo({
            url: "../tools/weather"
        });
    },
    openCalander: function() {
        wx.navigateTo({
            url: "../tools/calander"
        });
    },
    openEight: function() {
        wx.navigateTo({
            url: "../tools/eight"
        });
    },
    openNav: function(a) {
        var t = a.currentTarget.dataset.type;
        t && (1 == t ? wx.navigateTo({
            url: "../tools/view?url=" + app.util.base64_encode(a.currentTarget.dataset.path)
        }) : wx.navigateToMiniProgram({
            appId: a.currentTarget.dataset.appid,
            path: a.currentTarget.dataset.path
        }));
    }
});