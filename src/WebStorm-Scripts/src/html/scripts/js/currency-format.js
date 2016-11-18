function formatTo(base, precision)
{
	var a = roundTo(base, precision);
	var s = a.toString();
	
	var decimalIndex = s.indexOf(".");
	if (precision > 0 && decimalIndex < 0)
	{
		decimalIndex = s.length;
		s += '.';
	}
	while (decimalIndex + precision + 1 > s.length)
	{
		s += '0';
	}
	return s;
}