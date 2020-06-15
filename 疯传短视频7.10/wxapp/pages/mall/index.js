var app = getApp();

Page({
    data: {
        reloadBgColor: [ "#ffffff", "#ffffff", "#ffffff" ],
        reloadColor: [ "#888888", "#FF6666", "#33CC99" ],
        currentIndex: 0,
        mainHeight: 600,
        cateAll: [],
        cates: [],
        itemAll: [],
        pages: [],
        loadingTypes: [],
        scrollTops: [],
        mainColor: ""
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
    initPage: function() {
        var s = this, a = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "mall",
            o: "cates"
        });
        wx.request({
            url: a,
            method: "GET",
            success: function(a) {
                var t = app.crypt.Decrypt(a.data.data.data, a.data.data.key), e = JSON.parse(t);
                s.data.cateAll = e.cates, s.data.mainColor = e.init.color_primary, s.data.reloadColor[1] = e.init.color_primary;
                for (var d = 0; d < s.data.cateAll.length; d++) s.data.itemAll.push([]), s.data.cates.push(s.data.cateAll[d].name), 
                s.data.pages.push(1), s.data.loadingTypes.push(3), s.data.scrollTops.push(0);
                s.setData({
                    itemAll: s.data.itemAll,
                    cates: s.data.cates,
                    pages: s.data.pages,
                    loadingTypes: s.data.loadingTypes,
                    scrollTops: s.data.scrollTops,
                    mainColor: s.data.mainColor,
                    reloadColor: s.data.reloadColor
                }), s.loadData();
            }
        });
    },
    loadData: function(a) {
        var d = this;
        a || (this.data.loadingTypes.splice(this.data.currentIndex, 1, 1), this.setData({
            loadingTypes: this.data.loadingTypes
        }));
        var t = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "mall",
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
                    1 == d.data.pages[d.data.currentIndex] ? d.data.itemAll.splice(d.data.currentIndex, 1, e.items) : d.data.itemAll[d.data.currentIndex] = d.data.itemAll[d.data.currentIndex].concat(e.items), 
                    d.setData({
                        itemAll: d.data.itemAll
                    }), d.data.pages[d.data.currentIndex]++, d.setData({
                        pages: d.data.pages
                    }), setTimeout(function() {
                        d.data.loadingTypes.splice(d.data.currentIndex, 1, 3), d.setData({
                            loadingTypes: d.data.loadingTypes
                        });
                    }, 300);
                } else -2 == a.data.status ? (console.log("empty"), d.data.itemAll[d.data.currentIndex] = "empty", 
                d.data.loadingTypes.splice(d.data.currentIndex, 1, 4), d.setData({
                    itemAll: d.data.itemAll,
                    loadingTypes: d.data.loadingTypes
                })) : -1 == a.data.status && (console.log("nomore"), d.data.loadingTypes.splice(d.data.currentIndex, 1, 2), 
                d.setData({
                    loadingTypes: d.data.loadingTypes
                }));
            },
            complete: function() {
                a && setTimeout(function() {
                    d.selectComponent("#graceReload" + d.data.currentIndex).endReload();
                }, 300);
            }
        });
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
    openGoods: function(a) {
        wx.navigateTo({
            url: "../mall/detail?id=" + a.currentTarget.dataset.id
        });
    },
    backIndex: function() {
        wx.navigateBack({
            delta: 99999
        });
    },
    onShareAppMessage: function() {}
});