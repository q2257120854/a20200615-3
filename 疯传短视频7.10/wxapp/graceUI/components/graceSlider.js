var _windowWidth = wx.getSystemInfoSync().windowWidth;

Component({
    properties: {
        bgColor: {
            type: String,
            value: "#F6F7F8"
        },
        activeColor: {
            type: String,
            value: "#3688FF"
        },
        width: {
            type: Number,
            value: 750
        },
        height: {
            type: Number,
            value: 2
        },
        blockBgColor: {
            type: String,
            value: "#FFFFFF"
        },
        blockSize: {
            type: Number,
            value: 30
        },
        min: {
            type: Number,
            value: 0
        },
        minDefault: {
            type: Number,
            value: 0
        },
        max: {
            type: Number,
            value: 100
        },
        maxDefault: {
            type: Number,
            value: 100
        }
    },
    data: {
        realWidth: 200,
        realMax: 200,
        xMin: 0,
        left1: 0,
        xMax: 100,
        currentBlock: "",
        minValue: 0,
        maxValue: 100,
        activeWidth: 0,
        activeLeft: 0
    },
    methods: {
        px2upx: function(a) {
            return 750 / _windowWidth * a;
        },
        upx2px: function(a) {
            return _windowWidth / 750 * a;
        },
        setSlider: function() {
            this.data.xMin = (this.data.minDefault - this.data.min) / (this.data.max - this.data.min) * this.data.realMax, 
            this.data.xMax = (this.data.maxDefault - this.data.min) / (this.data.max - this.data.min) * this.data.realMax, 
            this.data.minValue = this.data.minDefault, this.data.maxValue = this.data.maxDefault, 
            this.data.activeLeft = this.data.xMin + 5, this.data.activeWidth = this.data.xMax - this.data.xMin, 
            this.setData({
                xMin: this.data.xMin,
                xMax: this.data.xMax,
                minValue: this.data.minValue,
                maxValue: this.data.maxValue,
                activeLeft: this.data.activeLeft,
                activeWidth: this.data.activeWidth
            });
        },
        touchstart: function(a) {
            if (this.data.currentBlock = a.target.dataset.tag, "min" == this.data.currentBlock) {
                var t = a.pageX || a.changedTouches[0].pageX;
                t -= this.data.left1, this.data.xMin = t;
            } else {
                t = a.pageX || a.changedTouches[0].pageX;
                t -= this.data.left1, this.data.xMax = t;
            }
            this.setData({
                currentBlock: this.data.currentBlock,
                xMin: this.data.xMin,
                xMax: this.data.xMax
            });
        },
        touchmove: function(a) {
            this.calculate(a);
        },
        calculate: function(a) {
            var t = a.pageX || a.changedTouches[0].pageX;
            if (t -= this.data.left1, "min" == this.data.currentBlock) {
                var i = this.data.xMin + (t - this.data.xMin);
                i < 0 && (i = 0), i >= this.data.realMax && (i = this.data.realMax), this.data.xMin = i;
                var e = this.data.xMin / this.data.realMax * (this.data.max - this.data.min);
                e = parseInt(e), e += this.data.min, this.data.minValue = e;
            } else {
                var h = this.data.xMax + (t - this.data.xMax);
                h < 0 && (h = 0), h >= this.data.realMax && (h = this.data.realMax), this.data.xMax = h;
                e = this.data.xMax / this.data.realMax * (this.data.max - this.data.min);
                e = parseInt(e), e += this.data.min, this.data.maxValue = e;
            }
            this.setData({
                currentBlock: this.data.currentBlock,
                xMin: this.data.xMin,
                xMax: this.data.xMax,
                minValue: this.data.minValue,
                maxValue: this.data.maxValue
            }), this.data.maxValue >= this.data.minValue ? this.triggerEvent("change", [ this.data.minValue, this.data.maxValue ]) : this.triggerEvent("change", [ this.data.maxValue, this.data.minValue ]);
        }
    },
    ready: function() {
        this.data.realWidth = this.upx2px(this.data.width), this.data.left1 = (_windowWidth - this.data.realWidth) / 2, 
        this.data.realMax = this.data.realWidth - this.data.blockSize, this.setData({
            realWidth: this.data.realWidth,
            realMax: this.data.realMax,
            left1: this.data.left1
        }), this.setSlider();
    }
});