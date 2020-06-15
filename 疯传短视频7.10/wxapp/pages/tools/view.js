var app = getApp();

Page({
    data: {
        url: ""
    },
    onLoad: function(n) {
        this.data.url = app.util.base64_decode(n.url), this.setData({
            url: this.data.url
        });
    },
    onReady: function() {},
    onShow: function() {},
    onHide: function() {},
    onUnload: function() {},
    onPullDownRefresh: function() {},
    onReachBottom: function() {},
    onShareAppMessage: function() {}
});