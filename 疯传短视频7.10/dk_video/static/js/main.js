(this["webpackJsonpncov-area"] = this["webpackJsonpncov-area"] || []).push([
	[0],
	{
		103: function(k, h, d) {},
		104: function(k, h, d) {},
		147: function(k, h, d) {},
		148: function(k, h, d) {},
		150: function(k, h, d) {
			function z() {
				var c, e, a = new Promise(function(b, a) {
					c = b;
					e = a
				});
				return {
					rtResolve: c,
					rtReject: e,
					rtPromise: a
				}
			}
			d.r(h);
			k = d(0);
			var c = d.n(k);
			k = d(7);
			k = d.n(k);
			h = (d(82), d(2));
			var m = d.n(h),
				p = d(11),
				q = d(3),
				r = d(4),
				u = d(9),
				v = d(8),
				w = d(10);
			h = d(20);
			var x = d.n(h);
			h = d(72);
			var C = d.n(h),
				F = (d(103), d(104), function(d) {
					function e(a) {
						var b;
						Object(q.a)(this, e);
						(b = Object(u.a)(this, Object(v.a)(e).call(this, a))).jumpDetail = function(b) {
							(b = b.target.dataset.url) && (window.location.href = b)
						};
						b.handleMore = function(a) {
							var f = b.state.allData;
							a = f.length;
							f = f.slice(0, a);
							b.setState({
								count: a,
								showData: f
							})
						};
						a = a.data || [];
						return b.state = {
							allData: a,
							showData: a.slice(0, 5),
							count: 5
						}, b
					}
					return Object(w.a)(e, d), Object(r.a)(e, [{
						key: "render",
						value: function() {
							var a = this.state,
								b = a.showData,
								f = a.allData;
							a = !0;
							b.length >= f.length && (a = !1);
							var e = !1;
							0 === f.length && (e = !0);
							b = b.map(function(b, a) {
								var f = b.distance,
									e = "";
								0 > f ? e = "暂无信息" : 1E3 < f ? (f = (f /= 1E3).toFixed(2), e = "".concat(f, "km")) : e = "".concat(f, "m");
								f = "".concat(b.cnt_sum_certain, "人");
								return 0 > b.cnt_sum_certain && (f = "未公布"), c.a.createElement("tr", {
									key: a
								}, c.a.createElement("td", null, c.a.createElement("p", {
									className: "area"
								}, b.show_address)), c.a.createElement("td", null, c.a.createElement("p", null, f)), c.a.createElement("td", null, c.a.createElement("p", null, e)))
							});
							return c.a.createElement("div", {
								className: "train-lst"
							}, c.a.createElement("div", {
								className: "title"
							}, this.props.title), c.a.createElement("div", {
								className: "wrap"
							}, c.a.createElement("table", {
								id: "trafficList"
							}, c.a.createElement("thead", null, c.a.createElement("tr", null, c.a.createElement("th", {
								width: "34%"
							}, "确诊地点"), c.a.createElement("th", {
								width: "33%"
							}, "确诊人数"), c.a.createElement("th", {
								width: "33%"
							}, "与我距离"))), c.a.createElement("tbody", null, e ? c.a.createElement("tr", null, c.a.createElement("td", {
								colSpan: "5"
							}, "未查询到相关信息")) : b)), !e && a ? c.a.createElement("div", {
								id: "viewMore",
								className: "more-box",
								onClick: this.handleMore
							}, c.a.createElement("div", {
								className: "line-whole"
							}, "查看更多"), c.a.createElement("div", {
								className: "arrow-down",
								"data-action": "viewMore"
							})) : null))
						}
					}], [{
						key: "getDerivedStateFromProps",
						value: function(a, b) {
							return a.data !== b.allData ? {
								allData: a.data,
								showData: a.data.slice(0, 5),
								count: 5
							} : null
						}
					}]), e
				}(c.a.Component)),
				A = d(49),
				B = (d(146), function() {
					function c(e) {
						Object(q.a)(this, c);
						this.name = "storage"
					}
					return Object(r.a)(c, [{
						key: "setItem",
						value: function(c) {
							var a = {
								name: "",
								value: "",
								expires: "",
								startTime: (new Date).getTime()
							},
								b = {};
							(Object.assign(b, a, c), b.expires) ? localStorage.setItem(b.name, JSON.stringify(b)) : (Object.prototype.toString.call(b.value), "[object Object]" == Object.prototype.toString.call(b.value) && (b.value = JSON.stringify(b.value)), "[object Array]" == Object.prototype.toString.call(b.value) && (b.value = JSON.stringify(b.value)), localStorage.setItem(b.name, b.value))
						}
					}, {
						key: "getItem",
						value: function(c) {
							var a = localStorage.getItem(c);
							try {
								a = JSON.parse(a)
							} catch (b) {}
							return a && a.startTime ? (new Date).getTime() - a.startTime > a.expires ? (localStorage.removeItem(c), null) : a.value : a
						}
					}, {
						key: "removeItem",
						value: function(c) {
							localStorage.removeItem(c)
						}
					}, {
						key: "clear",
						value: function() {
							localStorage.clear()
						}
					}]), c
				}()),
				I = (d(147), function(d) {
					function e(a) {
						var b;
						return Object(q.a)(this, e), (b = Object(u.a)(this, Object(v.a)(e).call(this, a))).onClose = Object(p.a)(m.a.mark(function t() {
							return m.a.wrap(function(a) {
								for (;;) switch (a.prev = a.next) {
								case 0:
									b.setState({
										show: !1
									});
								case 1:
								case "end":
									return a.stop()
								}
							}, t)
						})), b.onCloseGPS = Object(p.a)(m.a.mark(function n() {
							return m.a.wrap(function(a) {
								for (;;) switch (a.prev = a.next) {
								case 0:
									b.setState({
										showgps: !1
									}), b.gpscanceled = !0;
								case 2:
								case "end":
									return a.stop()
								}
							}, n)
						})), b.handleContinue = Object(p.a)(m.a.mark(function g() {
							var a;
							return m.a.wrap(function(c) {
								for (;;) switch (c.prev = c.next) {
								case 0:
									a = b.state.cityInStorage, console.log(a), b.props.onSelect(a), a && b.storage.setItem({
										name: "cityInfo",
										value: a,
										expires: 432E5
									}), b.onClose();
								case 5:
								case "end":
									return c.stop()
								}
							}, g)
						})), b.handleChange = Object(p.a)(m.a.mark(function D() {
							var a;
							return m.a.wrap(function(c) {
								for (;;) switch (c.prev = c.next) {
								case 0:
									a = b.state.cityInfo, b.props.onSelect(a), a && b.storage.setItem({
										name: "cityInfo",
										value: a,
										expires: 432E5
									}), b.onClose();
								case 4:
								case "end":
									return c.stop()
								}
							}, D)
						})), b.checkLocation = Object(p.a)(m.a.mark(function E() {
							var a, c;
							return m.a.wrap(function(e) {
								for (;;) switch (e.prev = e.next) {
								case 0:
									return a = b.storage.getItem("cityInfo"), b.setState({
										cityInStorage: a
									}), e.next = 4, b.getLocation();
								case 4:
									if (c = e.sent) {
										e.next = 9;
										break
									} /*TIMEINTERNET + DUOKE*/
									return console.log("getLocation error"), b.gpscanceled || b.props.onSelect(a), e.abrupt("return");
								case 9:
									b.setState({
										cityInfo: c
									}), a && a.city !== c.city ? b.setState({
										show: !0
									}) : b.storage.setItem({
										name: "cityInfo",
										value: c,
										expires: 432E5
									}), b.props.onSelect(c);
								case 12:
								case "end":
									return e.stop()
								}
							}, E)
						})), b.gps = function() {
							return; // 断开采用微信公众号定位
							return new Promise(function(a, c) {
								(b.setState({
									showgps: !0
								}), window.qq && window.qq.maps) ? (new window.qq.maps.Geolocation("LUXBZ-C3AKJ-3IQFB-KWW4F-UQ7C3-GFB6O", "search-all")).getLocation(function(c) {

									a({
										lat: c.lat,
										lng: c.lng
									});
									console.log("latitude:", c.lat, "longitude:", c.lng);
									b.setState({
										showgps: !1
									});
									b.gpsreport("success")

									alert(c.lat);


								}, function(c) {
									a(null);
									console.log("get gps fail", c);
									b.setState({
										showgps: !1
									});
									b.gpsreport("fail")
								}, {
									timeout: 5E3
								}) : (a(null), b.gpsreport("fail"))
							})
						}, b.getGPS = function() {
							return new Promise(function(a, c) {
								b.setState({
									showgps: !0
								});
								Promise.race([new Promise(function(b, a) {
									setTimeout(function() {
										b("timeout")
									}, 5E3)
								}), new Promise(function(b, a) {
									window.navigator.geolocation ? window.navigator.geolocation.getCurrentPosition(function(a) {
										b({
											lng: a.coords.longitude,
											lat: a.coords.latitude
										});
										console.log("get gps info success longitude: ".concat(a.coords.longitude, ", latitude: ").concat(a.coords.latitude))
									}, function(a) {
										console.log("get gps fail", a);
										b(null)
									}) : b(null)
								})]).then(function(c) {
									b.setState({
										showgps: !1
									});
									"timeout" === c ? (a(null), console.log("get gps time out"), b.gpsreport("timeout")) : (c ? b.gpsreport("success") : b.gpsreport("fail"), a(c))
								})
							})
						}, b.gpsreport = function() {
							var b = Object(p.a)(m.a.mark(function H(b) {
								return m.a.wrap(function(a) {
									for (;;) switch (a.prev = a.next) {
									case 0:
										return a.prev = 0, a.next = 3, x.a.get(gpsError, {
											params: {
												message: b
											}
										});
									case 3:
										a.next = 8;
										break;
									case 5:
										a.prev = 5, a.t0 = a.
										catch (0), console.log(a.t0);
									case 8:
									case "end":
										return a.stop()
									}
								}, H, null, [
									[0, 5]
								])
							}));
							return function(a) {
								return b.apply(this, arguments)
							}
						}(), b.getLocation = Object(p.a)(m.a.mark(function G() {
							var a, c, e;
							return m.a.wrap(function(d) {
								for (;;) switch (d.prev = d.next) {
								case 0:
									return d.next = 2, b.gps();
								case 2:
									if (!(a = d.sent) || b.gpscanceled) {
										d.next = 30;
										break
									}
									return d.prev = 4, d.next = 7, x.a.get(getLocationByGps, {
										params: {
											lat: a.lat,
											lng: a.lng
										}
									});
								case 7:
									if (!(200 <= (c = d.sent).status && 300 > c.status || 304 === c.status)) {
										d.next = 19;
										break
									}
									if (!c.data.data) {
										d.next = 15;
										break
									}
									return e = c.data.data, console.log("get location success", c.data.data), d.abrupt("return", {
										province: e.strProvinceCN,
										city: e.strCity,
										district: e.strDistrict,
										lat: a.lat,
										lng: a.lng
									});
								case 15:
									return console.log("get location no data"), d.abrupt("return", null);
								case 17:
									d.next = 21;
									break;
								case 19:
									 /*TIMEINTERNET + DUOKE*/
									return console.log("qurey city fail", c), d.abrupt("return", null);
								case 21:
									d.next = 28;
									break;
								case 23:
									return d.prev = 23, d.t0 = d.
									catch (4), window.BeaconAction.onEvent("get_gps_fail", "get_gps_fail", {}), console.log("qurey city fail", d.t0), d.abrupt("return", null);
								case 28:
									d.next = 32;
									break;
								case 30:
									return console.log("no gps data"), d.abrupt("return", null);
								case 32:
								case "end":
									return d.stop()
								}
							}, G, null, [
								[4, 23]
							])
						})), b.state = {
							cityInfo: null,
							cityInStorage: null,
							show: !1,
							showgps: !1
						}, b.gpscanceled = !1, b.storage = new B, b
					}
					return Object(w.a)(e, d), Object(r.a)(e, [{
						key: "componentDidMount",
						value: function() {
							this.checkLocation()
						}
					}, {
						key: "componentWillUnmount",
						value: function() {
							this.storage = null
						}
					}, {
						key: "render",
						value: function() {
							var a = this.state,
								b = a.show,
								f = a.cityInfo;
							a = a.showgps;
							var d = null;
							return f && f.city && (d = c.a.createElement("p", null, "您当前所在的地区为", f.city)), console.log(a), c.a.createElement("div", null, c.a.createElement(A.a, {
								className: "dialog",
								wrapClassName: "dialog-wrap ui-dialog",
								onClose: this.onClose,
								visible: b
							}, c.a.createElement("div", {
								className: "ui-dialog-info"
							}, d, c.a.createElement("p", null, "是否切换城市？")), c.a.createElement("div", {
								className: "search-btn"
							}, c.a.createElement("div", {
								className: "ui-btn btn-reset",
								onClick: this.handleContinue
							}, "继续浏览"), c.a.createElement("div", {
								className: "ui-btn",
								onClick: this.handleChange
							}, "立即切换"))), c.a.createElement(A.a, {
								className: "dialog gps-dialog",
								wrapClassName: "dialog-wrap",
								onClose: this.onCloseGPS,
								visible: a
							}, c.a.createElement("div", {
								className: "ui-gps-dialog-info"
							}, c.a.createElement("p", null, "正在获取地理位置信息")), c.a.createElement("div", {
								className: "search-btn"
							}, c.a.createElement("div", {
								className: "ui-btn btn-reset",
								onClick: this.onCloseGPS
							}, "取消"))))
						}
					}]), e
				}(c.a.Component)),
				J = (d(148), function(d) {
					function e() {
						var a;
						return Object(q.a)(this, e), (a = Object(u.a)(this, Object(v.a)(e).call(this))).getListData = function() {
							var b = a.state,
								c = b.activeIndex,
								d = b.curArea,
								e = [];
							b = b.position;
							for (var g = 0; g < c || 0 === g; g++) {
								if (0 === c) return Object.keys(b);
								e = d[g];
								if (!(b = b[e]) && 2 === c) return ["全部"];
								if (!b && 1 === c) return [e];
								e = 2 === g ? [e] : Object.keys(b)
							}
							return e
						}, a.areaClickHandler = function(b) {
							if (document.documentElement.style.overflow = "hidden", document.body.style.overflow = "hidden", a.state.activeIndex === b) return console.log("点击自己"), void a.hideList();
							a.setState({
								showList: !0,
								activeIndex: b
							})
						}, a.props_hooks = function(b) {
							a.props.onSelect(b);
							console.log("props_hooks", b);
							window.BeaconAction.onEvent("city_select", "city_select", {
								province_name: b[0],
								city_name: b[1],
								district_name: b[2]
							})
						}, a.areaSelectHandler = function(b) {
							console.log(b);
							var c = a.state,
								d = c.activeIndex;
							c = c.curArea;
							c[d] = b;
							a.changeNext(c, d, b);
							a.setState({
								curArea: c,
								activeIndex: -1
							});
							a.props_hooks(c);
							a.hideList()
						}, a.hideList = function() {
							document.documentElement.style.overflow = "";
							document.body.style.overflow = "";
							console.log("hideList");
							a.setState({
								showList: !1,
								activeIndex: -1
							})
						}, a.getSelectArea = function() {
							var b = a.state,
								d = b.activeIndex;
							return c.a.createElement("div", {
								className: "area-sele"
							}, b.curArea.map(function(b, f) {
								return c.a.createElement("div", {
									key: f,
									className: "area-sele-item ".concat(f === d ? "active" : ""),
									onClick: function() {
										a.areaClickHandler(f)
									}
								}, c.a.createElement("span", null, b), c.a.createElement("div", {
									className: "icon ".concat(f === d ? "up" : "")
								}))
							}))
						}, a.getSelectList = function() {
							var b = a.getListData();
							return c.a.createElement("div", {
								className: "area-list"
							}, c.a.createElement("div", {
								className: "list"
							}, b.map(function(b, d) {
								return c.a.createElement("div", {
									key: d,
									className: "item",
									onClick: function() {
										a.areaSelectHandler(b)
									}
								}, b)
							})))
						}, a.state = {
							showList: !1,
							curArea: ["广东省", "深圳市", "全部"],
							position: [],
							activeIndex: -1
						}, a
					}
					return Object(w.a)(e, d), Object(r.a)(e, [{
						key: "resetInput",
						value: function(a) {
							this.setState({
								curArea: a
							})
						}
					}, {
						key: "componentDidMount",
						value: function() {
							var a = this;
							x.a.get(getPosition).then(function(b) {
								console.log(b);
								200 === b.status && a.setState({
									position: b.data.position
								})
							})
						}
					}, {
						key: "changeNext",
						value: function(a, b, c) {
							var d = this.state.position;
							0 !== b ? 1 === b && d[a[0]] && (c = Object.keys(d[a[0]][c])[0], a[2] = c) : (b = Object.keys(d[c])[0], a[1] = b, c = Object.keys(d[c][b])[0], a[2] = c)
						}
					}, {
						key: "render",
						value: function() {
							var a = this.state.showList;
							return c.a.createElement("div", {
								className: "area-sele-wrapper"
							}, this.getSelectArea(), a ? this.getSelectList() : null)
						}
					}]), e
				}(c.a.Component));
			h = d(75);
			var K = d.n(h);
			h = d(76);
			var L = d.n(h),
				M = {
					width: "100%",
					height: "calc(0.426 * 100vw)",
					backgroundColor: "#ebebeb",
					position: "relative"
				},
				N = {
					width: "100%",
					height: "100%"
				},
				O = {
					position: "absolute",
					width: "100%",
					padding: "0 15px 9px 10px",
					boxSizing: "border-box",
					bottom: 0,
					display: "flex",
					flexDirection: "row",
					justifyContent: "space-between",
					alignItems: "center"
				},
				P = {
					fontSize: "12px",
					color: "#FFFFFF"
				},
				Q = {
					opacity: .8,
					fontSize: "12px",
					color: "#FFFFFF"
				},
				R = function(d) {
					function e() {
						return Object(q.a)(this, e), Object(u.a)(this, Object(v.a)(e).apply(this, arguments))
					}
					return Object(w.a)(e, d), Object(r.a)(e, [{
						key: "render",
						value: function() {
							var a = K()().format("MM-DD");
							a = "".concat(a, " 更新");
							return c.a.createElement("div", {
								style: M
							}, c.a.createElement("img", {
								alt: "banner",
								style: N,
								src: L.a
							}), c.a.createElement("div", {
								style: O
							}, c.a.createElement("div", {
								style: Q
							}, "来自卫健委等机构发布数据"), c.a.createElement("div", {
								style: P
							}, a)))
						}
					}]), e
				}(c.a.Component),
				S = 1,
				l = new(function() {
					function c() {
						Object(q.a)(this, c);
						this.ua = window.navigator.userAgent;
						this.app = this.appDetect();
						this.os = this.osDetect()
					}
					return Object(r.a)(c, [{
						key: "appDetect",
						value: function() {
							var c, a = !1,
								b = !1,
								d = !1,
								t = !1,
								n = !1,
								g = "";
							return (c = this.ua.match(/MicroMessenger\/([\d\.]*)/i)) ? (a = !0, g = c[1]) : (c = this.ua.match(/ QQ[\s\/]([\d\.]*)/i)) ? (b = !0, g = c[1]) : (c = this.ua.match(/QQLiveBrowser\/([\d\.]*)/i)) ? (d = !0, g = c[1]) : (c = this.ua.match(/qnreading\/([\d\.]*)/i)) ? (t = !0, g = c[1]) : (c = this.ua.match(/qqnews\/([\d\.]*)/i)) && (n = !0, g = c[1]), {
								weixin: a,
								mqq: b,
								QQLiveBrowser: d,
								kuaibao: t,
								qqnews: n,
								version: g
							}
						}
					}, {
						key: "osDetect",
						value: function() {
							var c, a, b, d, t = !1,
								n = !1,
								g = "";
							return (c = this.ua.match(/(Android);?[\s\/]+([\d.]+)?/)) ? (t = !0, g = c[2]) : (a = this.ua.match(/(iPhone\sOS)\s([\d_]+)/), b = this.ua.match(/(iPad).*OS\s([\d_]+)/), d = this.ua.match(/(iPod)(.*OS\s([\d_]+))?/), a ? (g = a[2], a = !0, n = !0) : b ? (g = b[2], b = !0, n = !0) : d && (g = d[2], d = !0, n = !0)), {
								android: t,
								ios: n,
								iphone: a,
								ipad: b,
								ipod: d,
								version: g
							}
						}
					}]), c
				}());
			d = z();
			var y = d.rtResolve,
				T = (d.rtReject, d.rtPromise);
			l.os.android && l.app.kuaibao ? (d = document.createElement("script"), d.src = "//mat1.gtimg.com/www/reading/android/js/jsapi/jsapi.js", d.async = !0, d.onload = y, d.onreadystatechange = function() {
				"complete" == this.readyState && (console.log("readyResolve"), y())
			}, document.getElementsByTagName("head")[0].appendChild(d)) : (l.os.iphone || l.os.ipad) && l.app.kuaibao ? window.TencentNews && window.__TencentNewsInjected ? setTimeout(y, 0) : document.addEventListener("TencentNewsJSInjectionComplete", function() {
				window.__TencentNewsInjected || (window.__TencentNewsInjected = !0, console.log("readyResolve"), y())
			}) : console.warn("not ready");
			d = function(d) {
				function e(a) {
					var b;
					return Object(q.a)(this, e), (b = Object(u.a)(this, Object(v.a)(e).call(this, a))).selectRef = c.a.createRef(), b.getData = function() {
						var a = Object(p.a)(m.a.mark(function g(a) {
							var c, d, e, f, n, h, k, l;
							return m.a.wrap(function(g) {
								for (;;) switch (g.prev = g.next) {
								case 0:
									return c = b.state, d = c.province, e = c.city, f = c.district, n = c.lat, h = c.lng, k = null, "default" === a && (k = 1), g.prev = 3, g.next = 6, x.a.get(getCommunity, {
										params: {
											province: d,
											city: e,
											district: f,
											lat: n,
											lng: h,
											isdefault: k
										}
									});
								case 6:
									(200 <= (l = g.sent).status && 300 > l.status || 304 === l.status) && b.setState({
										allData: l.data.community
									});
									console.log(l);
									g.next = 14;
									break;
								case 11:
									g.prev = 11, g.t0 = g.
									catch (3), console.log(g.t0);
								case 14:
								case "end":
									return g.stop()
								}
							}, g, null, [
								[3, 11]
							])
						}));
						return function(b) {
							return a.apply(this, arguments)
						}
					}(), b.updateSelect = function() {
						var a = b.state;
						b.selectRef.current.resetInput([a.province, a.city, "全部"])
					}, b.onCitySelect = function(a) {
						null !== a && b.setState({
							province: a.province,
							city: a.city,
							lat: a.lat,
							lng: a.lng,
							gpscity: a.city
						}, function() {
							b.updateSelect();
							b.getData()
						})
					}, b.onAreaSelect = function(a) {
						0 !== a.length && b.setState({
							province: a[0],
							city: a[1],
							district: a[2]
						}, function() {
							b.getData()
						})
					}, b.refresh = function() {
						b.storage.clear();
						window.location.reload()
					}, b.state = {
						startDate: new Date,
						allData: {},
						province: "广东省",
						city: "深圳市",
						district: null,
						lat: null,
						lng: null,
						gpscity: ""
					}, b.storage = new B, b
				}
				return Object(w.a)(e, d), Object(r.a)(e, [{
					key: "componentDidMount",
					value: function() {
						this.getData("default");
						window.BeaconAction.onEvent("page_show", "page_show", {});
						window.navigator.userAgent.match(/qnreading\/([\d\.]*)/i) && T.then(function() {
							l.os.iphone || l.os.ipad ? window.TencentNews && window.TencentNews.setActionBtn(1) : l.os.android && window.TencentReading && window.TencentReading.invokeMethod("openShareBtn");
							(function(a) {
								var b = a.title;
								b = void 0 === b ? "" : b;
								var c = a.shareContent;
								c = void 0 === c ? "" : c;
								var d = a.url;
								d = void 0 === d ? "" : d;
								a = a.imgUrl;
								a = void 0 === a ? "" : a;
								var e = z(),
									f = e.rtResolve;
								e.rtReject;
								e = "gKbCallback" + S++;
								window[e] = function(a) {
									a && ("string" == typeof a && (a = JSON.parse(a)), 1 == a.success ? f(!0) : f(!1))
								};
								l.os.android ? window.TencentReading.setShareArticleInfo(b, b, c, d, a, e) : (l.os.iphone || l.os.ipad) && (e && (window.TencentNews.shareCompleteCallback = window[e]), window.TencentNews.setNoRefreshAfterLogin && window.TencentNews.setNoRefreshAfterLogin(1), window.TencentNews.setShareArticleInfo && window.TencentNews.setShareArticleInfo(b, b, c, d, a))
							})({
								title: "新型肺炎小区速查",
								shareContent: "关注疫情，关爱家人，持续更新数据，始终保驾护航@ 腾讯看点",
								url: window.location.href,
								imgUrl: "https://search.imtt.qq.com/ncov_area/share_pic.jpeg"
							})
						});
						try {
							var a = void 0,
								b = C.a.parse(window.location.href.split("?")[1]);
							b && b.channelid && (a = b.channelid);
							(new Image).src = "https://searchlog.html5.qq.com/log/newreport?platform=android&appID=100&appName=community_search&pageID=100&pageName=community_search&entryScene=000&entryStatus=000&searchPageStatus=000&entryContent=000&searchPageContent=000&moduleType=page&moduleName=community_search&entryTime=".concat(Date.now(), "&actionTime=").concat(Date.now(), "&r=").concat(Math.random(), "&channelId=").concat(a)
						} catch (f) {
							console.log(f)
						}
					}
				}, {
					key: "componentWillUnmount",
					value: function() {
						this.storage = null
					}
				}, {
					key: "render",
					value: function() {
						var a = this.state,
							b = a.allData,
							d = a.province;
						a = a.city;
						b = b[d] && b[d][a];
						d = [];
						for (var e in b) d.push({
							districtName: e,
							districtData: b[e]
						});
						d.sort(function(a, b) {
							return a.districtData[0] && b.districtData[0] ? a.districtData[0].distance - b.districtData[0].distance : 0
						});
						e = d.map(function(a) {
							var b = a.districtName;
							a = a.districtData;
							return c.a.createElement(F, {
								key: b,
								data: a,
								title: "".concat(b, "(").concat(a.length, "个确诊地点)")
							})
						});
						return c.a.createElement("div", {
							className: "App"
						}, c.a.createElement(R, null), c.a.createElement(J, {
							onSelect: this.onAreaSelect,
							ref: this.selectRef
						}), 0 < e.length ? e : c.a.createElement("div", {
							style: {
								marginTop: "200px"
							}
						}, "您所在的地区未查询到相关数据"), 0 < e.length ? c.a.createElement("div", {
							style: {
								width: "100%",
								textAlign: "center",
								padding: "20px 10px",
								boxSizing: "border-box",
								fontSize: "12px"
							}
						}, "到底啦，持续更新中") : null, c.a.createElement(I, {
							onSelect: this.onCitySelect
						}))
					}
				}]), e
			}(c.a.Component);
			"localhost" === window.location.hostname || "[::1]" === window.location.hostname || window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/);
			k.a.render(c.a.createElement(d, null), document.getElementById("root"));
			"serviceWorker" in navigator && navigator.serviceWorker.ready.then(function(c) {
				c.unregister()
			})
		},
		76: function(k, h, d) {
			k.exports = banner
		},
		77: function(k, h, d) {
			k.exports = d(150)
		},
		82: function(k, h, d) {}
	}, [
		[77, 1, 2]
	]
]);