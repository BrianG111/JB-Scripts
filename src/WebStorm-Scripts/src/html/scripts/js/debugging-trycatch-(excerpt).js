try
{
  .
  . //some code
  .
}
catch (err)
{
  .
  . // this gets run if the try{} block results in an error
  .
}
for (var i in err)
{
  alert(i + ': ' + err[i]);
}
var test = document.getElementsById('testdiv');

test.innerHTML += '<ul>';
for (var i = 0; i < data.length; i++)
{
  test.innerHTML += '<li>' + i '=' + data[i] + '</li>';
}
test.innerHTML += '</ul>'

var win = window.open('', win, 'width=320, height=240');

win.document.open();
win.document.write('<ul>');
for (var i = 0; i < data.length; i++)
{
  win.document.write('<li>' + '=' + data[i] + '</li>')
}
win.document.write('</ul>');
win.document.close();
document.title = '0 = ' + data[0];
