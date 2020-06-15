var app = getApp();

Page({
    data: {
        mainColor: ""
    },
    onLoad: function(a) {
        var e = this, t = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "tools"
        });
        wx.request({
            url: t,
            method: "GET",
            success: function(a) {
                var t = app.crypt.Decrypt(a.data.data.data, a.data.data.key), o = JSON.parse(t);
                e.data.items = o.items, e.data.mainColor = o.init.color_primary, e.setData({
                    mainColor: e.data.mainColor
                });
            }
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
    onShareAppMessage: function() {}
});