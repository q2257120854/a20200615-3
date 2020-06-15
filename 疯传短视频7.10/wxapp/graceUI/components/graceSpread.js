Component({
    properties: {
        height: {
            type: String,
            value: "300px"
        },
        btnTxt: {
            type: String,
            value: "展开阅读全文"
        },
        btnColor: {
            type: String,
            value: "#999999"
        }
    },
    data: {
        isBtn: !0
    },
    methods: {
        spreadContent: function() {
            this.setData({
                height: "auto",
                isBtn: !1
            });
        }
    }
});