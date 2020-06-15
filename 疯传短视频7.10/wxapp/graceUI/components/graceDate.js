var cYear, cMonth, cDay, TheDate, CalendarData = new Array(100), madd = new Array(12), tgString = "甲乙丙丁戊己庚辛壬癸", dzString = "子丑寅卯辰巳午未申酉戌亥", numString = "一二三四五六七八九十", monString = "正二三四五六七八九十冬腊", weekString = "日一二三四五六", sx = "鼠牛虎兔龙蛇马羊猴鸡狗猪";

function GetBit(t, a) {
    return t >> a & 1;
}

function e2c() {
    var t, a, e, n, h = !1, i = (TheDate = 3 != arguments.length ? new Date() : new Date(arguments[0], arguments[1], arguments[2])).getYear();
    for (i < 1900 && (i += 1900), t = 365 * (i - 1921) + Math.floor((i - 1921) / 4) + madd[TheDate.getMonth()] + TheDate.getDate() - 38, 
    TheDate.getYear() % 4 == 0 && 1 < TheDate.getMonth() && t++, a = 0; ;a++) {
        for (e = n = CalendarData[a] < 4095 ? 11 : 12; 0 <= e; e--) {
            if (t <= 29 + GetBit(CalendarData[a], e)) {
                h = !0;
                break;
            }
            t = t - 29 - GetBit(CalendarData[a], e);
        }
        if (h) break;
    }
    cYear = 1921 + a, cMonth = n - e + 1, cDay = t, 12 == n && (cMonth == Math.floor(CalendarData[a] / 65536) + 1 && (cMonth = 1 - cMonth), 
    cMonth > Math.floor(CalendarData[a] / 65536) + 1 && cMonth--);
}

function GetcDateString() {
    var t = "";
    return t += cDay < 11 ? "初" : cDay < 20 ? "十" : cDay < 30 ? "廿" : "三十", cDay % 10 == 0 && 10 != cDay || (t += numString.charAt((cDay - 1) % 10)), 
    t;
}

function GetLunarDay(t, a, e) {
    return t < 1921 || 2020 < t ? "" : (e2c(t, a = 0 < parseInt(a) ? a - 1 : 11, e), 
    GetcDateString());
}

CalendarData = new Array(2635, 333387, 1701, 1748, 267701, 694, 2391, 133423, 1175, 396438, 3402, 3749, 331177, 1453, 694, 201326, 2350, 465197, 3221, 3402, 400202, 2901, 1386, 267611, 605, 2349, 137515, 2709, 464533, 1738, 2901, 330421, 1242, 2651, 199255, 1323, 529706, 3733, 1706, 398762, 2741, 1206, 267438, 2647, 1318, 204070, 3477, 461653, 1386, 2413, 330077, 1197, 2637, 268877, 3365, 531109, 2900, 2922, 398042, 2395, 1179, 267415, 2635, 661067, 1701, 1748, 398772, 2742, 2391, 330031, 1175, 1611, 200010, 3749, 527717, 1452, 2742, 332397, 2350, 3222, 268949, 3402, 3493, 133973, 1386, 464219, 605, 2349, 334123, 2709, 2890, 267946, 2773, 592565, 1210, 2651, 395863, 1323, 2707, 265877), 
madd[0] = 0, madd[1] = 31, madd[2] = 59, madd[3] = 90, madd[4] = 120, madd[5] = 151, 
madd[6] = 181, madd[7] = 212, madd[8] = 243, madd[9] = 273, madd[10] = 304, madd[11] = 334, 
Component({
    properties: {
        show: {
            type: Boolean,
            value: !1
        },
        currentDate: {
            type: String,
            value: ""
        },
        isTime: {
            type: Boolean,
            value: !0
        },
        top: {
            type: String,
            value: "0"
        },
        zIndex: {
            type: String,
            value: "999"
        }
    },
    data: {
        weeks: [ "一", "二", "三", "四", "五", "六", "日" ],
        cYear: 2016,
        cMonth: 6,
        cMonthStr: "06",
        cDay: "01",
        days: "",
        currentDayIn: "",
        currentTimeIn: ""
    },
    methods: {
        close: function() {
            this.triggerEvent("closeDate");
        },
        timechange: function(t) {
            this.setData({
                currentTimeIn: t.detail.value
            });
        },
        getDaysInOneMonth: function() {
            return new Date(this.data.cYear, this.data.cMonth, 0).getDate();
        },
        getDay: function() {
            return new Date(this.data.cYear, this.data.cMonth - 1, 0).getDay();
        },
        prevYear: function() {
            this.setData({
                cYear: this.data.cYear - 1
            }), this.changeMonth();
        },
        prevMonth: function() {
            this.data.cMonth = this.data.cMonth - 1, this.data.cMonth < 1 && (this.data.cMonth = 12, 
            this.data.cYear = this.data.cYear - 1), this.data.cMonthStr = this.data.cMonth < 10 ? "0" + this.data.cMonth : this.data.cMonth, 
            this.setData({
                cMonth: this.data.cMonth,
                cMonthStr: this.data.cMonthStr,
                cYear: this.data.cYear
            }), this.changeMonth();
        },
        nextMonth: function() {
            this.data.cMonth = this.data.cMonth + 1, 12 < this.data.cMonth && (this.data.cMonth = 1, 
            this.data.cYear = this.data.cYear + 1), this.data.cMonthStr = this.data.cMonth < 10 ? "0" + this.data.cMonth : this.data.cMonth, 
            this.setData({
                cMonth: this.data.cMonth,
                cMonthStr: this.data.cMonthStr,
                cYear: this.data.cYear
            }), this.changeMonth();
        },
        nextYear: function() {
            this.setData({
                cYear: this.data.cYear + 1
            }), this.changeMonth();
        },
        changeMonth: function(t, a) {
            for (var e = [], n = this.getDaysInOneMonth(), h = 0, i = 0 - this.getDay(); i < n; i++) 0 <= i ? (e[h] = {
                date: 9 <= i ? i + 1 : "0" + (i + 1),
                nl: ""
            }, e[h].nl = GetLunarDay(this.data.cYear, this.data.cMonth, i + 1)) : e[h] = "", 
            h++;
            this.setData({
                days: e
            });
        },
        chooseDate: function(t) {
            var a = t.currentTarget.dataset.cdate;
            "undefined" != a.split("-")[2] && (this.setData({
                currentDayIn: a
            }), this.data.isTime || this.triggerEvent("changeDate", a));
        },
        submit: function() {
            this.data.isTime ? this.triggerEvent("changeDate", this.data.currentDayIn + " " + this.data.currentTimeIn) : this.triggerEvent("changeDate", this.data.currentDayIn);
        },
        initTime: function() {
            if ("" == this.data.currentDate) {
                var t = new Date();
                this.data.cYear = t.getFullYear(), this.data.cMonth = t.getMonth() + 1, this.data.cMonthStr = this.data.cMonth < 10 ? "0" + this.data.cMonth : this.data.cMonth, 
                this.data.cDay = t.getDate(), this.data.cDay = this.data.cDay < 10 ? "0" + this.data.cDay : this.data.cDay, 
                this.data.currentDayIn = this.data.cYear + "-" + this.data.cMonthStr + "-" + this.data.cDay, 
                this.data.currentTimeIn = "00:00";
            } else {
                var a = this.data.currentDate.split(" ");
                a[1] || (a[1] = "");
                var e = a[0].split("-");
                this.data.cYear = Number(e[0]), this.data.cMonth = e[1], this.data.cDay = e[2], 
                new RegExp("^0[0-9]+$").test(this.data.cMonth) && (this.data.cMonth = this.data.cMonth.substr(1, 1)), 
                this.data.cMonth = Number(this.data.cMonth), this.data.cMonthStr = this.data.cMonth < 10 ? "0" + this.data.cMonth : this.data.cMonth, 
                this.data.currentDayIn = a[0], this.data.currentTimeIn = a[1];
            }
            this.setData({
                cYear: this.data.cYear,
                cMonth: this.data.cMonth,
                cMonthStr: this.data.cMonthStr,
                cDay: this.data.cDay,
                currentDayIn: this.data.currentDayIn,
                currentTimeIn: this.data.currentTimeIn
            }), this.changeMonth();
        },
        run: function() {
            this.initTime();
        }
    }
});