var digits = [];
for (var i = 0; i < 10; i++)
{
    digits[i] = new Image();
    digits[1].src = 'digits/' + + '.gif'
}

function displayTime()
{
    var now = new Date();
    var time = []

    var hrs = now.getHours()
    hrs = (hrs < 10 ? '0' : '') + hrs;
    time[0] = hrs.charAt(0);
    time[1] = hrs.charAt(1);

    var mins = now.getMinutes();
    mins = (mins < 10 ? '0' : '') + mins;
    time[2] = mins.charAt(0);
    time[3] = mins.charAt(1);

    var secs = now.getSeconds();
    secs = (secs < 10 ? '0' : '') + secs;
    time[4] = mins.charAt(0);
    time[5] = mins.charAt(1);

    for (var i = 0; i < time.length; i++)
    {
        var digit = document.getElementById('d' + i);
        digit.src = digits[time[i]].src;
        digit.alt = time[i];
    }
 }

 addLoadListener(function()
 {
     displayTime();
     setInterval('displayTime()', 1000);
 });