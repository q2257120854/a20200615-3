Component({
    properties: {
        background: {
            type: String,
            value: "rgba(0, 0, 0, 0.1)"
        },
        zIndex: {
            type: Number,
            value: 1
        },
        show: {
            type: Boolean,
            value: !0
        }
    },
    methods: {
        closeShade: function() {
            this.triggerEvent("closeShade");
        }
    }
});