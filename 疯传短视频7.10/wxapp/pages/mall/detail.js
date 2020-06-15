var app = getApp();

Page({
    data: {
        itemId: 0,
        product: null,
        coupon: {
            color: "#9F6DFA",
            ltBg: "#F5F5F5",
            height: "180rpx",
            unit: "￥",
            number: 0,
            txt: "满0元可用",
            title: "本商品专用券",
            desc: "有效期至2018-05-20",
            btn: "领取"
        },
        prom: {},
        graceSkeleton: !0,
        top: 0
    },
    onLoad: function(t) {
        this.data.itemId = t.id, this.setData({
            itemId: this.data.itemId
        });
    },
    openGoods: function() {
        wx.navigateToMiniProgram({
            appId: this.data.prom.appid,
            path: this.data.prom.path,
            success: function(t) {}
        });
    },
    onShareAppMessage: function(t) {
        return {
            title: this.data.product.title,
            path: "pages/index/index?gid=" + this.data.itemId,
            imageUrl: this.data.product.thumb,
            success: function(t) {},
            fail: function() {}
        };
    },
    onReady: function() {
        var d = this, t = app.util.url("entry/wxapp/api", {
            m: "dk_video",
            k: "mall",
            o: "detail",
            id: this.data.itemId
        });
        wx.request({
            url: t,
            method: "GET",
            success: function(t) {
                var a = app.crypt.Decrypt(t.data.data.data, t.data.data.key), o = JSON.parse(a);
                setTimeout(function() {
                    d.data.product = o.product, d.data.prom = o.prom, d.data.coupon.number = o.product.discount, 
                    o.product.coupon_amount > o.product.price ? d.data.coupon.txt = "满" + o.product.coupon_amount + "元可用" : d.data.coupon.txt = "下单即用", 
                    d.data.coupon.desc = "有效期至" + o.product.coupon_end, d.data.graceSkeleton = !1, d.setData({
                        product: d.data.product,
                        prom: d.data.prom,
                        coupon: d.data.coupon,
                        graceSkeleton: d.data.graceSkeleton
                    });
                }, 500);
            }
        });
    }
});