Component({
    properties: {
        background: {
            type: String,
            value: "#F8F8F8"
        },
        height: {
            type: Number,
            value: 44
        },
        haveStatusBar: {
            type: Boolean,
            value: !0
        },
        isSeize: {
            type: Boolean,
            value: !0
        },
        zIndex: {
            type: Number,
            value: 99
        }
    },
    data: {
        top: 0,
        BoundingWidth: "50px"
    },
    ready: function() {
        if (this.data.haveStatusBar) {
            var t = wx.getSystemInfoSync();
            this.setData({
                top: t.statusBarHeight
            });
            var e = wx.getMenuButtonBoundingClientRect();
            this.setData({
                BoundingWidth: e.width + 20 + "px"
            });
        }
    }
});