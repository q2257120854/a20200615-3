(global["webpackJsonp"] = global["webpackJsonp"] || []).push([ [ "pages/media/reward" ], {
    "0980": function _(t, a, e) {
        "use strict";
        e.r(a);
        var n = e("13e9"), c = e.n(n);
        for (var o in n) {
            "default" !== o && function(t) {
                e.d(a, t, function() {
                    return n[t];
                });
            }(o);
        }
        a["default"] = c.a;
    },
    "13e9": function e9(t, a, e) {
        "use strict";
        (function(t) {
            Object.defineProperty(a, "__esModule", {
                value: !0
            }), a.default = void 0;
            var n = function n() {
                return e.e("graceUI/components/gracePage").then(e.bind(null, "a87e"));
            }, c = function c() {
                return e.e("graceUI/components/graceHeader").then(e.bind(null, "6031"));
            }, o = e("2c14"), u = e("2f10");
            getApp().siteInfo = o;
            var r = {
                data: function data() {
                    return {
                        list: []
                    };
                },
                onLoad: function onLoad() {
                    var a = this, e = u.url("entry/wxapp/index", {
                        m: "dk_video",
                        op: "reward_list"
                    });
                    t.request({
                        url: e,
                        method: "GET",
                        data: {},
                        success: function success(t) {
                            "ok" == t.data.status && (a.list = t.data.data);
                        }
                    });
                },
                backApp: function backApp(t) {
                    console.log(t);
                },
                methods: {
                    doReward: function doReward(t) {
                        var a = t.target.dataset.price;
                        u.getUserInfo(function(t) {
                            u.request({
                                url: "entry/wxapp/pay",
                                data: {
                                    price: a,
                                    m: "dk_video"
                                },
                                cachetime: "0",
                                success: function success(t) {
                                    t.data && t.data.data && !t.data.errno && wx.requestPayment({
                                        timeStamp: t.data.data.timeStamp,
                                        nonceStr: t.data.data.nonceStr,
                                        package: t.data.data.package,
                                        signType: "MD5",
                                        paySign: t.data.data.paySign,
                                        success: function success(t) {
                                            wx.showModal({
                                                title: "系统提示",
                                                content: "感谢您的支持",
                                                showCancel: !1
                                            });
                                        },
                                        fail: function fail(t) {
                                            wx.showModal({
                                                title: "系统提示",
                                                content: "打赏失败",
                                                showCancel: !1
                                            });
                                        }
                                    });
                                },
                                fail: function fail(t) {
                                    wx.showModal({
                                        title: "系统提示",
                                        content: t.data.message ? t.data.message : "错误",
                                        showCancel: !1,
                                        success: function success(t) {}
                                    });
                                }
                            });
                        }, t.detail);
                    },
                    goBack: function goBack() {
                        t.navigateBack({
                            delta: 1
                        });
                    }
                },
                components: {
                    gracePage: n,
                    graceHeader: c
                }
            };
            a.default = r;
        }).call(this, e("543d")["default"]);
    },
    "4df4": function df4(t, a, e) {
        "use strict";
        var n = e("8d22"), c = e.n(n);
        c.a;
    },
    "83fe": function fe(t, a, e) {
        "use strict";
        e.r(a);
        var n = e("cdf7"), c = e("0980");
        for (var o in c) {
            "default" !== o && function(t) {
                e.d(a, t, function() {
                    return c[t];
                });
            }(o);
        }
        e("4df4");
        var u, r = e("f0c5"), d = Object(r["a"])(c["default"], n["b"], n["c"], !1, null, null, null, !1, n["a"], u);
        a["default"] = d.exports;
    },
    "8d22": function d22(t, a, e) {},
    "9f12": function f12(t, a, e) {
        "use strict";
        (function(t) {
            e("fa54");
            n(e("66fd"));
            var a = n(e("83fe"));
            function n(t) {
                return t && t.__esModule ? t : {
                    default: t
                };
            }
            t(a.default);
        }).call(this, e("543d")["createPage"]);
    },
    cdf7: function cdf7(t, a, e) {
        "use strict";
        var n, c = function c() {
            var t = this, a = t.$createElement;
            t._self._c;
        }, o = [];
        e.d(a, "b", function() {
            return c;
        }), e.d(a, "c", function() {
            return o;
        }), e.d(a, "a", function() {
            return n;
        });
    }
}, [ [ "9f12", "common/runtime", "common/vendor" ] ] ]);