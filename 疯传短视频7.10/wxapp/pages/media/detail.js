var a, t = getApp(), e = requirePlugin("tencentvideo");

Page({
    data: {
        vid: "",
        detail: null,
        adsense: null,
        extend: null,
        videoHeight: 500,
        recom: [],
        showGuide: !1,
        shareShow: !1,
        scene: 0
    },
    onLoad: function(d) {
        var i = this;
        this.data.vid = d.vid;
        var n = t.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "video",
            o: "detail",
            id: d.vid
        });
        wx.request({
            url: n,
            method: "GET",
            success: function(d) {
                var n = t.crypt.Decrypt(d.data.data.data, d.data.data.key), s = JSON.parse(n);
                s.detail.vid = t.crypt.Decrypt(s.detail.vid, s.detail.key), i.data.detail = s.detail, 
                i.data.adsense = s.adsense, i.data.extend = s.extend;
                var o = wx.getSystemInfoSync().windowHeight;
                1 == i.data.detail.ismob ? i.data.videoHeight = o - 250 : i.data.videoHeight = o - o / 2 - 200, 
                i.data.scene = wx.getStorageSync("enter_scene"), i.setData({
                    vid: i.data.vid,
                    detail: i.data.detail,
                    adsense: i.data.adsense,
                    extend: i.data.extend,
                    videoHeight: i.data.videoHeight,
                    scene: i.data.scene
                }), a = e.getTxvContext("txv1");
                var r = getApp().globalData.clicknum;
                if (getApp().globalData.clicknum = i.clicknum + 1, "" != i.data.adsense.ad_modal && i.data.adsense.ad_per > 0 && r % i.data.adsense.ad_per == 0 && wx.createInterstitialAd) {
                    var c = wx.createInterstitialAd({
                        adUnitId: i.data.adsense.ad_modal
                    });
                    c && c.show().catch(function(a) {});
                }
            }
        });
    },
    onReady: function() {
        var a = wx.getStorageSync("first_play");
        "0" != a && "" != a && null != a || (wx.setStorageSync("first_play", "1"), this.showGuide()), 
        this.getRand();
    },
    getRand: function() {
        var a = this, e = t.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "video",
            o: "rand"
        });
        wx.request({
            url: e,
            method: "GET",
            success: function(e) {
                var d = t.crypt.Decrypt(e.data.data.data, e.data.data.key), i = JSON.parse(d);
                a.data.recom = i.items, a.setData({
                    recom: a.data.recom
                });
            }
        });
    },
    onPlayEnd: function(a) {
        !1 === a.detail.isAd && 1 == this.data.extend.ended_box && (this.data.shareShow = !0, 
        this.setData({
            shareShow: this.data.shareShow
        }));
    },
    onShareAppMessage: function(a) {
        return {
            title: this.data.detail.title,
            path: "pages/index/index?vid=" + this.data.vid,
            imageUrl: this.data.detail.icon,
            success: function(a) {},
            fail: function() {}
        };
    },
    toBack: function() {
        wx.navigateBack({
            delta: 1,
            complete: function(a) {}
        });
    },
    backHome: function() {
        wx.navigateBack({
            delta: 999
        });
    },
    openMedia: function(a) {
        wx.redirectTo({
            url: "../media/detail?vid=" + a.currentTarget.dataset.vid
        });
    },
    openGoods: function(a) {
        wx.navigateToMiniProgram({
            appId: a.currentTarget.dataset.appid,
            path: a.currentTarget.dataset.path,
            success: function(a) {}
        });
    },
  openMall: function () {
   
    wx.switchTab({ url: '../mall/index' })
      
  },
    closeGuide: function() {
        this.data.showGuide = !1, this.setData({
            showGuide: this.data.showGuide
        });
    },
    openGuide: function() {
        this.data.showGuide = !0, this.setData({
            showGuide: this.data.showGuide
        });
    },
    rePlay: function() {
        this.data.shareShow = !1, this.setData({
            shareShow: this.data.shareShow
        }), a.replay();
    },
    shareHide: function() {
        this.data.shareShow = !1, this.setData({
            shareShow: this.data.shareShow
        });
    },
    openReward: function() {
        wx.navigateTo({
            url: "../media/reward"
        });
    }
});