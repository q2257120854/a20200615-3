var util = require("we7/resource/js/util.js"), crypt = require("we7/resource/js/crypt.js");

App({
    onLaunch: function(e) {
        wx.setStorageSync("enter_scene", e.scene);
    },
    onShow: function(e) {},
    onHide: function() {},
    onError: function(e) {
        console.log(e);
    },
    util: util,
    crypt: crypt,
    userInfo: {
        sessionid: null
    },
    globalData: {
        clicknum: 0
    },
    siteInfo: require("siteinfo.js")
});