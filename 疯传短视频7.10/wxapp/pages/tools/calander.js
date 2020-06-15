var graceDate = require("../../graceUI/jsTools/date.js"), startDay = getNowFormatDate(), timeRegion = 14;

function getNowFormatDate() {
    var a = new Date(), t = a.getFullYear(), e = a.getMonth() + 1, r = a.getDate();
    return 1 <= e && e <= 9 && (e = "0" + e), 0 <= r && r <= 9 && (r = "0" + r), t + "-" + e + "-" + r;
}

for (var weekday = [ "周日", "周一", "周二", "周三", "周四", "周五", "周六" ], dateList = [], todayTimer = graceDate.dateTimeToTimeStamp(startDay + " 01:01:00"), i = 0; i < timeRegion; i++) {
    var timeStamp = todayTimer + 3600 * i * 24, obj = {};
    obj.day = graceDate.formatDateTime(timeStamp, "str").substring(5, 10);
    var date = new Date();
    date.setTime(1e3 * timeStamp), obj.week = weekday[date.getDay()], obj.date = date.getFullYear() + "-" + obj.day, 
    dateList.push(obj);
}

var app = getApp(), WechatSI = requirePlugin("WechatSI");

Page({
    data: {
        dateList: dateList,
        currentIndex: 0,
        dateData: null,
        hourData: {},
        cnHours: [ "子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥" ],
        shareData: {}
    },
    onLoad: function(a) {
        this.changeDay(0);
    },
    changeDay: function(a) {
        var r = this, i = 0;
        a && (i = a.currentTarget.dataset.index);
        var t = this.data.dateList[i];
        this.setData({
            currentIndex: i
        });
        var e = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "calander"
        });
        wx.request({
            url: e,
            method: "GET",
            data: {
                date: t.date
            },
            success: function(a) {
                var t = app.crypt.Decrypt(a.data.data.data, a.data.data.key), e = JSON.parse(t);
                r.data.dateData = e.calander.data.date, r.data.hourData = e.calander.data.hour, 
                r.data.shareData = e.calander.data.share, r.setData({
                    dateData: r.data.dateData,
                    hourData: r.data.hourData,
                    shareData: r.data.shareData
                }), 0 == i && r.playVoice();
            }
        });
    },
    playVoice: function() {
        WechatSI.textToSpeech({
            lang: "zh_CN",
            tts: !0,
            content: "今天是农历：" + this.data.dateData.yinli,
            success: function(a) {
                var t = wx.getBackgroundAudioManager();
                t.title = "日期播报", t.singer = "暂无", t.coverImgUrl = "", t.src = a.filename, t.play();
            },
            fail: function(a) {
                uni.showToast({
                    duration: 1500,
                    title: "语音播报失败"
                });
            }
        });
    },
    onShareAppMessage: function() {
        return {
            title: this.data.shareData.title,
            path: "pages/index/index?op=calander",
            imageUrl: this.data.shareData.thumb,
            success: function(a) {},
            fail: function() {}
        };
    },
    backIndex: function() {
        wx.navigateBack({
            delta: 99999
        });
    }
});