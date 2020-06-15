Component({
    properties: {
        reloadTxt: {
            type: Array,
            value: [ "松开手指开始刷新", "数据刷新中", "数据已经刷新" ]
        },
        reloadBgColor: {
            type: Array,
            value: [ "", "", "#63D2BC" ]
        },
        reloadColor: {
            type: Array,
            value: [ "#999999", "#63D2BC", "#FFFFFF" ]
        },
        width: {
            type: String,
            value: "750rpx"
        },
        marginLeft: {
            type: String,
            default: "0rpx"
        }
    },
    data: {
        reloadStatus: 5,
        height: 0,
        startY: 0,
        startTime: 0
    },
    methods: {
        touchstart: function(t) {
            this.startY = t.moveY, this.startTime = new Date().getTime(), this.setData({
                startY: t.moveY,
                startTime: new Date().getTime()
            });
        },
        touchmove: function(t) {
            0 < this.data.scrollTop || (0 < this.data.height || new Date().getTime() - this.data.startTime < 200 || 100 < t.moveY - this.data.startY && this.setData({
                reloadStatus: 0,
                height: 100
            }));
        },
        touchend: function(t) {
            80 < this.data.height ? (this.setData({
                reloadStatus: 1
            }), this.triggerEvent("reload")) : this.setData({
                reloadStatus: 5,
                height: 0
            });
        },
        endReload: function() {
            var t = this;
            this.setData({
                reloadStatus: 2
            }), setTimeout(function() {
                t.setData({
                    reloadStatus: 5,
                    height: 0
                });
            }, 1e3);
        }
    }
});