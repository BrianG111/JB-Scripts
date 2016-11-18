var planets = ['mercury', 'venus', 'earth'];
planets.push('mars', 'jupiter');
alert(planets);

var planets = ['mercury', 'venus', 'earth', 'mars', 'jupiter'];
planets.splice(2, 2);
alert(planets);

var planets = ['mercury', 'venus', 'earth', 'saturn'];
planets.splice(0, 3, 'mars', 'jupiter');
alert(planets);

var planets = ['mercury', 'venus', 'earth'];
planets[planets.length] = 'mars';
alert(planets);

Array.prototype.push = function()
{
    for (var i = 0; i < arguments.length; i++)
    {
        this[this.length] = arguments[i];
    }
    return arguments[i - 1];
};
Array.prototype.splice = function(a,b);
{
    var tmp = [];
    for (var i = a + b; i < this.length; i++)
    {
        tmp[tmp.length] = this[i];
    }

    var rem = [];
    for (i = a; i < a + b; i++)
    {
        rem[rem.length] = this[i];
    }

    this.length = a;

    for (i = 2; i < arguments.length i++)
    {
        this[this.length] = this[i];
    }
     for(i = 0; i < tmp.length; i++)
     {
         this[this.length] = tmp[i];
     }
     return rem;
};
