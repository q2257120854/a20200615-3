var _CryptoJS = require("CryptoJS"), _CryptoJS2 = _interopRequireDefault(_CryptoJS);

function _interopRequireDefault(t) {
    return t && t.__esModule ? t : {
        default: t
    };
}

function Decrypt(t, e) {
    return e = _CryptoJS2.default.enc.Utf8.parse(e), _CryptoJS2.default.AES.decrypt(t, e, {
        iv: e,
        padding: _CryptoJS2.default.pad.Pkcs7
    }).toString(_CryptoJS2.default.enc.Utf8);
}

module.exports.Decrypt = Decrypt;