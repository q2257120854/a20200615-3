var app = getApp(), WechatSI = requirePlugin("WechatSI");

Page({
    data: {
        weather: null,
        modalText: "",
        modalTitle: "",
        modalShow: !1,
        mainClass: "C1",
        dialogList: {}
    },
    onLoad: function(a) {
        var t = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "weather"
        }), d = this;
        wx.getLocation({
            altitude: "altitude",
            success: function(a) {
                wx.request({
                    url: t,
                    method: "GET",
                    data: {
                        lat: a.latitude,
                        lon: a.longitude
                    },
                    success: function(a) {
                        var t = app.crypt.Decrypt(a.data.data.data, a.data.data.key), e = JSON.parse(t);
                        console.log(e);
                        var i = e.weather.data, o = {
                            "00": "C2",
                            "01": "C9",
                            "02": "C1",
                            "03": "C3",
                            "04": "C3",
                            "05": "C3",
                            "06": "C3",
                            "07": "C3",
                            "08": "C3",
                            "09": "C3",
                            10: "C3",
                            11: "C3",
                            12: "C3",
                            13: "C4",
                            14: "C4",
                            15: "C4",
                            16: "C4",
                            17: "C4",
                            18: "C5",
                            19: "C3",
                            20: "C7",
                            21: "C3",
                            22: "C3",
                            23: "C3",
                            24: "C3",
                            25: "C3",
                            26: "C4",
                            27: "C4",
                            28: "C4",
                            29: "C7",
                            30: "C7",
                            31: "C7",
                            53: "C6",
                            99: "C8",
                            32: "C5",
                            49: "C5",
                            54: "C6",
                            55: "C6",
                            56: "C6",
                            57: "C5",
                            58: "C5",
                            301: "C3",
                            302: "C4"
                        }[(d.data.weather = i).observe.weather_code];
                        200 < i.air.aqi && "C7" !== o && (o = "C6"), d.data.mainClass = o, d.setData({
                            weather: d.data.weather,
                            mainClass: d.data.mainClass
                        }), d.playVoice();
                    }
                });
            }
        });
    },
    showModal: function(a) {
        var t = a.currentTarget.dataset.idx;
        if (null != t) {
            var e = this.data.weather.index[t];
            this.data.modalText = e.detail, this.data.modalTitle = e.name + e.info, this.data.modalShow = !0, 
            this.setData({
                modalText: this.data.modalText,
                modalTitle: this.data.modalTitle,
                modalShow: this.data.modalShow
            });
        }
    },
    modalHide: function() {
        this.data.modalShow = !1, this.setData({
            modalShow: this.data.modalShow
        });
    },
    playVoice: function() {
        WechatSI.textToSpeech({
            lang: "zh_CN",
            tts: !0,
            content: this.data.weather.current.report,
            success: function(a) {
                var t = wx.getBackgroundAudioManager();
                t.title = "天气预报", t.singer = "暂无", t.coverImgUrl = "https://img-cdn-qiniu.dcloud.net.cn/uniapp/audio/music.jpg", 
                t.src = a.filename, t.play();
            }
        });
    },
    goBack: function() {
        wx.navigateBack({
            complete: function(a) {}
        });
    },
    onShareAppMessage: function() {
        return {
            title: this.data.weather.location.city + this.data.weather.location.district + "天气怎么样，快看看~",
            path: "pages/index/index?op=weather",
            imageUrl: this.data.weather.current.thumb,
            success: function(a) {},
            fail: function() {}
        };
    }
});