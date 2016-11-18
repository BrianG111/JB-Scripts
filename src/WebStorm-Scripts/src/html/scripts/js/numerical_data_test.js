var numericalString = "3.14159265";
var characterString = "3 point 1";
var pattern = /^=?\d+(\.\d+)?$/;

var a = pattern.test(numericalString);
var b = pattern.test(characterString);