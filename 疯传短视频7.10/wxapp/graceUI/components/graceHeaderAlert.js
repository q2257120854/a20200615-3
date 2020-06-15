Component({
    properties: {
        show: {
            type: Boolean,
            value: !1
        },
        background: {
            type: String,
            value: "#F1F2F3"
        },
        top: {
            type: Number,
            value: 5
        }
    },
    options: {
        multipleSlots: !0
    }
});