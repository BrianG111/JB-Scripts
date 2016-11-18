var start;

addLoadListener(function()
{
    start = new Date();

    displayTime()
    setInterval('displayTime()', 1000);
});

var diff = (new Date().getTime() - start.getTime()) % 360000000;
var time = [];

var hrs = Math.floor(diff / 3600000);
hrs = (hrs < 10 ? '0' : '') + hrs;
time[0] = hrs.charAt(0);
time[1] = hrs.charAt(1);

var mins =  Math.floor(diff / 60000);
mins = (mins < 10 ? '0' : '') + mins;
time[2] = mins.charAt(0);
time[3] = mins.charAt(1);

var secs = Math.floor(diff / 1000);
secs = (secs < 10 ? '0' : '') + secs;
time[4] = secs.charAt(0);
time[5] = secs.charAt(1);
diff -= secs * 1000;

var millis = diff;
millis = (millis < 10 ? '0' : '') + millis;
time[6] = millis.charAt(0);
time[7] = millis.charAt(1);

setInterval('displayTime()', 50);