var telephoneString = "(03) 9555 5555";
var emailString = "bill@microsoft.com";
var pattern = /^(\(\d+\) ?)?(\d+[\- ])*\d+$/;

var a = pattern.test(telephoneString);
var b = pattern.test(emailString);