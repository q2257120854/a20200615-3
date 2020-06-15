module.exports = {
    currentTime: function(e, t) {
        var r = new Date().getTime();
        return t && (r += t), e ? this.formatDateTime(r / 1e3, "str") : r;
    },
    formatDateTime: function(e, t) {
        e = parseInt(e);
        var r = new Date();
        e < 9e10 ? r.setTime(1e3 * e) : r.setTime(e);
        var a = r.getFullYear(), n = r.getMonth() + 1;
        n = n < 10 ? "0" + n : n;
        var s = r.getDate();
        s = s < 10 ? "0" + s : s;
        var o = r.getHours();
        o = o < 10 ? "0" + o : o;
        var i = r.getMinutes(), p = r.getSeconds();
        return i = i < 10 ? "0" + i : i, p = p < 10 ? "0" + p : p, "str" == t ? a + "-" + n + "-" + s + " " + o + ":" + i + ":" + p : [ a, n, s, o, i, p ];
    },
    dateTimeToTimeStamp: function(e) {
        var t = e.match(/^([0-9]{4})-([0-9]{2})-([0-9]{2}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/);
        if (null == t) {
            var r = e.match(/^([0-9]{2})\/([0-9]{2})\/([0-9]{4}) ([0-9]{2}):([0-9]{2}):([0-9]{2})$/);
            if (null == r) return console.log("时间格式错误 E001"), !1;
            var a = parseInt(r[3]), n = parseInt(r[1]), s = parseInt(r[2]), o = parseInt(r[4]), i = parseInt(r[5]), p = parseInt(r[6]);
        } else a = parseInt(t[1]), n = parseInt(t[2]), s = parseInt(t[3]), o = parseInt(t[4]), 
        i = parseInt(t[5]), p = parseInt(t[6]);
        return a < 1e3 ? (console.log("时间格式错误"), !1) : o < 0 || 24 < o ? (console.log("时间格式错误"), 
        !1) : i < 0 || 60 < i ? (console.log("时间格式错误"), !1) : p < 0 || 60 < p ? (console.log("时间格式错误"), 
        !1) : Date.parse(new Date(a, n - 1, s, o, i, p)) / 1e3;
    },
    fromTimer: function(e) {
        var t = new Date().getTime() - 1e3 * e;
        return (t = parseInt(t / 1e3)) < 180 ? "刚刚" : 180 <= t && t < 3600 ? parseInt(t / 60) + "分钟前" : 3600 <= t && t < 86400 ? parseInt(t / 3600) + "小时前" : 86400 <= t && t < 2592e3 ? parseInt(t / 86400) + "天前" : this.formatDateTime(e, "str");
    }
};