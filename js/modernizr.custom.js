/* Modernizr 2.7.1 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-cssclasses-prefixed-testprop-testallprops-prefixes-domprefixes
 */
; window.Modernizr = function (a, b, c) { function y(a) { j.cssText = a } function z(a, b) { return y(m.join(a + ";") + (b || "")) } function A(a, b) { return typeof a === b } function B(a, b) { return !!~("" + a).indexOf(b) } function C(a, b) { for (var d in a) { var e = a[d]; if (!B(e, "-") && j[e] !== c) return b == "pfx" ? e : !0 } return !1 } function D(a, b, d) { for (var e in a) { var f = b[a[e]]; if (f !== c) return d === !1 ? a[e] : A(f, "function") ? f.bind(d || b) : f } return !1 } function E(a, b, c) { var d = a.charAt(0).toUpperCase() + a.slice(1), e = (a + " " + o.join(d + " ") + d).split(" "); return A(b, "string") || A(b, "undefined") ? C(e, b) : (e = (a + " " + p.join(d + " ") + d).split(" "), D(e, b, c)) } var d = "2.7.1", e = {}, f = !0, g = b.documentElement, h = "modernizr", i = b.createElement(h), j = i.style, k, l = {}.toString, m = " -webkit- -moz- -o- -ms- ".split(" "), n = "Webkit Moz O ms", o = n.split(" "), p = n.toLowerCase().split(" "), q = {}, r = {}, s = {}, t = [], u = t.slice, v, w = {}.hasOwnProperty, x; !A(w, "undefined") && !A(w.call, "undefined") ? x = function (a, b) { return w.call(a, b) } : x = function (a, b) { return b in a && A(a.constructor.prototype[b], "undefined") }, Function.prototype.bind || (Function.prototype.bind = function (b) { var c = this; if (typeof c != "function") throw new TypeError; var d = u.call(arguments, 1), e = function () { if (this instanceof e) { var a = function () { }; a.prototype = c.prototype; var f = new a, g = c.apply(f, d.concat(u.call(arguments))); return Object(g) === g ? g : f } return c.apply(b, d.concat(u.call(arguments))) }; return e }); for (var F in q) x(q, F) && (v = F.toLowerCase(), e[v] = q[F](), t.push((e[v] ? "" : "no-") + v)); return e.addTest = function (a, b) { if (typeof a == "object") for (var d in a) x(a, d) && e.addTest(d, a[d]); else { a = a.toLowerCase(); if (e[a] !== c) return e; b = typeof b == "function" ? b() : b, typeof f != "undefined" && f && (g.className += " " + (b ? "" : "no-") + a), e[a] = b } return e }, y(""), i = k = null, e._version = d, e._prefixes = m, e._domPrefixes = p, e._cssomPrefixes = o, e.testProp = function (a) { return C([a]) }, e.testAllProps = E, e.prefixed = function (a, b, c) { return b ? E(a, b, c) : E(a, "pfx") }, g.className = g.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (f ? " js " + t.join(" ") : ""), e }(this, this.document);