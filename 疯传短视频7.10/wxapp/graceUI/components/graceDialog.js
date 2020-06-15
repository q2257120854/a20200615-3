Component({
    properties: {
        show: {
            type: Boolean,
            value: !1
        },
        width: {
            type: String,
            value: "580rpx"
        },
        isCloseBtn: {
            type: Boolean,
            value: !0
        },
        closeBtnColor: {
            type: String,
            value: "#FF0036"
        },
        isTitle: {
            type: Boolean,
            value: !0
        },
        title: {
            type: String,
            value: ""
        },
        titleWeight: {
            type: Boolean,
            value: !0
        },
        titleSize: {
            type: String,
            value: "28rpx"
        },
        titleColor: {
            type: String,
            value: "#333333"
        },
        isBtns: {
            type: Boolean,
            value: !0
        },
        background: {
            type: String,
            value: "rgba(0, 0, 0, 0.5)"
        },
        borderRadius: {
            type: String,
            value: "6rpx"
        }
    },
    data: {},
    methods: {
        closeDialog: function() {
            this.triggerEvent("closeDialog");
        },
        stopFun: function() {}
    },
    options: {
        multipleSlots: !0
    }
});