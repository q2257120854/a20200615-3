Component({
    properties: {
        bgrColor: {
            type: String,
            value: "#FFFFFF"
        },
        borderColor: {
            type: String,
            value: "#000000"
        },
        fontColor: {
            type: String,
            value: "#000000"
        },
        splitorColor: {
            type: String,
            value: "#000000"
        },
        timer: {
            type: String,
            value: ""
        },
        fontSize: {
            type: String,
            value: "22rpx"
        },
        width: {
            type: String,
            value: "40rpx"
        },
        splitorText: {
            type: Array,
            value: [ ":", ":", ":", "" ]
        }
    },
    data: {
        d: 0,
        h: "",
        i: "",
        s: "",
        leftTime: 0,
        outTimer: null
    },
    ready: function() {
        this.runbase();
    },
    methods: {
        runbase: function() {
            var t = this, e = this.data.timer.match(/^([0-9]{4})-([0-9]{2})-([0-9]{2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/);
            if (null == e) return this.setData({
                outTimer: setTimeout(function() {
                    t.runbase();
                }, 1e3)
            }), !1;
            var r = parseInt(e[1]);
            if (r < 1e3) return !1;
            var a = parseInt(e[2]), i = parseInt(e[3]), n = parseInt(e[4]);
            if (n < 0 || 24 < n) return !1;
            var s = parseInt(e[5]);
            if (s < 0 || 60 < s) return !1;
            var o = parseInt(e[6]);
            if (o < 0 || 60 < o) return !1;
            var u = new Date(r, a - 1, i, n, s, o);
            this.setData({
                leftTime: u
            }), clearTimeout(this.data.outTimer), this.countDown();
        },
        countDown: function() {
            var t = this, e = this.data.leftTime - new Date();
            if (0 < e) {
                var r = parseInt(e / 864e5), a = parseInt(e % 864e5 / 36e5), i = parseInt(e % 36e5 / 6e4), n = parseInt(e % 6e4 / 1e3);
                a < 10 && (a = "0" + a), i < 10 && (i = "0" + i), n < 10 && (n = "0" + n), this.setData({
                    h: a,
                    i: i,
                    s: n,
                    d: r
                }), this.setData({
                    outTimer: setTimeout(function() {
                        t.countDown();
                    }, 1e3)
                });
            } else this.setData({
                h: "00",
                i: "00",
                s: "00",
                d: 0
            }), this.triggerEvent("endDo");
        }
    }
});