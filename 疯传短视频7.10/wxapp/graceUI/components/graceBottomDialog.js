Component({
    properties: {
        show: {
            type: Boolean,
            value: !1
        },
        background: {
            type: String,
            value: "rgba(0, 0, 0, 0.5)"
        },
        borderRadius: {
            type: String,
            value: "0rpx"
        }
    },
    data: {
        isIpx: !1
    },
    methods: {
        closeDialog: function() {
            this.triggerEvent("closeDialog");
        },
        stopFun: function() {}
    },
    options: {
        multipleSlots: !0
    },
    ready: function() {
        var e = this;
        wx.getSystemInfo({
            success: function(t) {
                -1 != t.model.search("iPhone X") && e.setData({
                    isIpx: !0
                });
            }
        });
    }
});