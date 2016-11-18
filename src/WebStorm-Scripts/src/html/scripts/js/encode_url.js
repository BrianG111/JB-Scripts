var a = "http://www.sitepoint.com/directory name/?param=value";
var b = escape(a)

var c = "http%3A//www.sitepoint.com/directory%20name/" +
      "%3Fparam%3Dvalue";
var d = unescape(c); 