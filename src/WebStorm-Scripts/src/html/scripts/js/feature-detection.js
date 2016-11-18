var xmlHttpExists = typeof XMLHttpRequest;
var byIdExists = typeof document.getElementById;

if (typeof document.designMOde != undefined)
{
    document.designMode = 'on';
}
else
{
    return false;
}