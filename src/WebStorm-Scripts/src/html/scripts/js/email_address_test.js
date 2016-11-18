var validEmail = "anakin36@tatooine.com";
var invalidEmail = "darth@thedeathstar";
var pattern = /^[\w\.\-]+@([\w\-]+\.)+[a-zA-Z]+$/;

var a = pattern.test(validEmail);
var b = pattern.test(invalidEmail);