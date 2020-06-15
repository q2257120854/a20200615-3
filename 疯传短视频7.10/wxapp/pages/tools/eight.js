var app = getApp();

Page({
    data: {
        hours: [ "00:00-00:59子", "01:00-01:59丑", "02:00-02:59丑", "03:00-03:59寅", "04:00-04:59寅", "05:00-05:59卯", "06:00-06:59卯", "07:00-07:59辰", "08:00-08:59辰", "09:00-09:59巳", "10:00-10:59巳", "11:00-11:59午", "12:00-12:59午", "13:00-13:59未", "14:00-14:59未", "15:00-15:59申", "16:00-16:59申", "17:00-17:59酉", "18:00-18:59酉", "19:00-19:59戌", "20:00-20:59戌", "21:00-21:59亥", "22:00-22:59亥", "23:00-23:59子" ],
        hour: 0,
        date: "2020-01-01",
        gender: 0,
        name: "",
        formShow: !0,
        detail: null,
        share: {}
    },
    formSubmit: function(a) {
        var i = this, t = a.detail.value;
        if ("" == t.username) return wx.showToast({
            title: "请填写姓名",
            icon: "none"
        }), !1;
        var e = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "eight"
        });
        wx.request({
            url: e,
            method: "GET",
            data: t,
            success: function(a) {
                var t = app.crypt.Decrypt(a.data.data.data, a.data.data.key), e = JSON.parse(t);
                console.log(e), i.data.detail = e.detail, i.setData({
                    detail: i.data.detail
                });
            }
        });
    },
    bindDateChange: function(a) {
        console.log(a), this.data.date = a.detail.value, this.setData({
            date: this.data.date
        });
    },
    bindHourChange: function(a) {
        this.data.hour = a.detail.value, this.setData({
            hour: this.data.hour
        });
    },
    onReady: function() {
        var i = this, a = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "eight",
            o: "init"
        });
        wx.request({
            url: a,
            method: "GET",
            success: function(a) {
                var t = app.crypt.Decrypt(a.data.data.data, a.data.data.key), e = JSON.parse(t);
                i.data.share = e.share, i.setData({
                    share: i.data.share
                });
            }
        });
    },
    onShareAppMessage: function() {
        return {
            title: this.data.share.title,
            path: "pages/index/index?op=eight",
            imageUrl: this.data.share.thumb
        };
    }
});