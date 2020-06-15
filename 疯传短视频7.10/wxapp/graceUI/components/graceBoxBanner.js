Component({
    properties: {
        items: {
            type: Array,
            value: []
        },
        color: {
            type: Array,
            value: [ "#333333", "#999999", "#999999" ]
        },
        fontSize: {
            type: Array,
            value: [ "36rpx", "24rpx", "24rpx" ]
        },
        background: {
            type: String,
            value: ""
        },
        padding: {
            type: String,
            value: "25rpx"
        }
    }
});