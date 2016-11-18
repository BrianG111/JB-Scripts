var today = new Date();
var now12 = today.getTimeString(12);
var now24 = today.getTimeString(24);

alert('12 hour time: ' + now12);
alert('24 hour time ' + now24);

str += ':';
var secs = this.getSeconds();
str += (secs < 10 ? '0' : '') + secs;

var message = today.getDateString('Created at '
    + today.getTimeString(24)
    + ', on %day, %month the %date%ordinal');

// var message = today.getDateString('Inscribed at '
// + today.getTimeString(24)
// + ', on %day, %month the %date%ordinal');

alert(message);