function roundTo(base, precision)
{
	var m = Math.pow(10, precision);
	var a = Math.round(base * m) / m;
	return a;
}