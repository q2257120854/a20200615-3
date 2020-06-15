Component({
    options: {
        multipleSlots: !0
    },
    properties: {
        customHeader: {
            type: Boolean,
            value: !0
        },
        headerHeight: {
            type: Number,
            value: 44
        },
        headerIndex: {
            type: Number,
            value: 999
        },
        headerBG: {
            type: String,
            value: "none"
        },
        statusBarBG: {
            type: String,
            value: "none"
        },
        footerIndex: {
            type: Number,
            value: 999
        },
        rbWidth: {
            type: Number,
            value: 100
        },
        rbBottom: {
            type: Number,
            value: 100
        },
        rbRight: {
            type: Number,
            value: 20
        },
        footerBg: {
            type: String,
            value: ""
        },
        isSwitchPage: {
            type: Boolean,
            value: !1
        }
    },
    data: {
        statusBarHeight: 0,
        iphoneXButtomHeight: 0,
        BoundingWidth: "0px"
    },
    ready: function() {
        try {
            if ((e = wx.getSystemInfoSync()).model = e.model.replace(" ", ""), e.model = e.model.toLowerCase(), 
            -1 == e.model.indexOf("iphonex") && -1 == e.model.indexOf("iphone11") || this.setData({
                iphoneXButtomHeight: e.windowWidth / 750 * 50
            }), !this.data.customHeader) return null;
            this.setData({
                statusBarHeight: e.statusBarHeight
            });
            var e = wx.getMenuButtonBoundingClientRect();
            this.setData({
                BoundingWidth: e.width + 20 + "px"
            });
        } catch (e) {
            return null;
        }
    }
});