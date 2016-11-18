var planets = [];

planets['inner'] = ['mercury', 'venus', 'earth'];
planets['outer'] = ['uranus', 'neptune', 'pluto'];

for (var i = 0; i < planets.length; i++)
{
    alert(planets[i]);
}
for (var i in planets)
{
    alert(planets[i]);
}
for (var i in planets)
{
    if (typeof planets[i] != 'function')
    {
      // Planets[i] is a value we're interested in
    }
}
var myData = {'name1': value1, 'name2': value2, ...};