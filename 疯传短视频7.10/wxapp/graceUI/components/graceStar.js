Component({
    properties: {
        fontSize: {
            type: String,
            value: "50rpx"
        },
        totalstars: {
            type: Number,
            value: 5
        },
        starnum: {
            type: Number,
            value: 0
        },
        color: {
            type: String,
            value: "#E1E1E1"
        },
        activecolor: {
            type: String,
            value: "#F5C359"
        },
        cantap: {
            type: Boolean,
            value: !0
        }
    },
    methods: {
        changnum: function(t) {
            if (this.data.cantap) {
                var e = t.currentTarget.dataset.val;
                this.triggerEvent("starChange", e + 1);
            }
        }
    }
});