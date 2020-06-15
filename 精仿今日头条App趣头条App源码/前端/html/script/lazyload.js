// +----------------------------------------------------------------------
// | 源码来自锦尚中国源码论坛，仅供学习研究
// +----------------------------------------------------------------------
// | 新闻资讯APP系统 V1.0版
// +----------------------------------------------------------------------
// | QQ技术：1013175107   电话/微信：123
// +----------------------------------------------------------------------
// | 请务必尊重知识产权 严格保证不恶意传播产品源码、不得直接对产品本身
// | 进行二次转售或倒卖、不得对产品进行简单包装后声称为自己的产品等。
// | 否则我们有权利收回产品，并根据事态轻重追究相应法律责任。
// +----------------------------------------------------------------------
// | Copyright (c) 2018-2019 http://www.baidu.com/ All rights reserved.
// +----------------------------------------------------------------------
(function( window, undefined ) {
    "use strict";
    var _loadImgNodes;
    var auiLazyload = function(params) {
        this.errorImage = params.errorImage||false;
        this._init(params);
    };
    auiLazyload.prototype = {
        _init: function(params) {
            var self = this;
            _loadImgNodes = document.querySelectorAll('[data-src]');
            self._judgeImages();
            window.addEventListener('scroll', function(){
                _loadImgNodes = document.querySelectorAll('[data-src]');
                self._judgeImages();
            }, false);
        },
        _judgeImages:function() {
            var self = this;
            if(_loadImgNodes.length){
                for(var i = 0;  i < _loadImgNodes.length; i++){
                    if (_loadImgNodes[i].getBoundingClientRect().top < window.innerHeight) {
                        self._loadImage(_loadImgNodes[i]);
                    }
                }
            }
        },
        _loadImage:function(el){
            var self = this;
            var img = new Image();
            img.src = el.getAttribute('data-src');
            el.src = el.getAttribute('data-src');
            el.removeAttribute("data-src");
            // // 图片加载失败
            img.onerror = function() {
                el.src = self.errorImage || el.getAttribute('src');
                el.removeAttribute("data-src");
            };
        }
    }
    window.auiLazyload = auiLazyload;
})(window);
