var pattern = /closures/;
var string = "JavaScript programmers love closures";
var result = string.replace(pattern, "bananas");

var pattern = /JavaScript (.*) closures/;
var result = string.replace(pattern, "Visual Basic $1 debugging");
function transformToLowercase(theString)
{
    return theString.toLowercase();
}

var string = "Element name should be LOWERCASE.";
var pattern = /LOWERCASE/;
var result = string.replace(pattern, transformToLowercase);