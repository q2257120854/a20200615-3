Component({
    properties: {
        show: {
            type: Boolean,
            value: !1
        },
        top: {
            type: Number,
            value: 0
        },
        bgColor: {
            type: String,
            value: "#F0F0F0"
        },
        menuWidth: {
            type: String,
            value: "258rpx"
        },
        background: {
            type: String,
            value: "rgba(0,0,0, 0.3)"
        },
        borderRadius: {
            type: String,
            value: "0rpx"
        }
    },
    methods: {
        hideMenu: function() {
            this.triggerEvent("hideMenu");
        }
    }
});