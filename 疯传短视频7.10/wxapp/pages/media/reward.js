var app = getApp();

Page({
    data: {
        list: []
    },
    onLoad: function(a) {
        var n = this, t = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "reward"
        });
        wx.request({
            url: t,
            method: "GET",
            success: function(a) {
                var t = app.crypt.Decrypt(a.data.data.data, a.data.data.key), e = JSON.parse(t);
                console.log(e.items), n.data.list = e.items, n.setData({
                    list: n.data.list
                });
            }
        });
    },
    doReward: function(a) {
        var t = a.target.dataset.price;
        app.util.getUserInfo(function(a) {
            app.util.url("entry/wxapp/pay", {
                price: t,
                m: "dk_video"
            });
            app.util.request({
                url: "entry/wxapp/pay",
                data: {
                    price: t,
                    m: "dk_video"
                },
                cachetime: "0",
                success: function(a) {
                    a.data && a.data.data && !a.data.errno && wx.requestPayment({
                        timeStamp: a.data.data.timeStamp,
                        nonceStr: a.data.data.nonceStr,
                        package: a.data.data.package,
                        signType: "MD5",
                        paySign: a.data.data.paySign,
                        success: function(a) {
                            wx.showModal({
                                title: "系统提示",
                                content: "感谢您的支持",
                                showCancel: !1
                            });
                        },
                        fail: function(a) {
                            wx.showModal({
                                title: "系统提示",
                                content: "打赏失败",
                                showCancel: !1
                            });
                        }
                    });
                },
                fail: function(a) {
                    wx.showModal({
                        title: "系统提示",
                        content: a.data.message ? a.data.message : "错误",
                        showCancel: !1,
                        success: function(a) {}
                    });
                }
            });
        }, a.detail);
    },
    goBack: function() {
        wx.navigateBack({
            delta: 1
        });
    }
});