Component({
    properties: {
        bgcolor: {
            type: String,
            value: "#FFFFFF"
        },
        isFixed: {
            type: Boolean,
            value: !0
        }
    },
    data: {
        height: "0rpx"
    },
    ready: function() {
        var t = this;
        wx.getSystemInfo({
            success: function(e) {
                -1 != e.model.replace(" ", "").search("iPhoneX") && t.setData({
                    height: "50rpx"
                });
            }
        });
    }
});