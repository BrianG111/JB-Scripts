addLoadListener(function()
{
    var people = [
        ['darth', 'Darth Vader'],
        ['palpatine', 'Emperor Palpatine'],
        ['boba', 'Boba Fett'],
        ['chewbacca', 'Chewbacca']
    ];

    var n = Math.floor(Math.random() * people.length);

    var img = document.getElementById('father');

    img.src = people[n][0] + '.gif';
    img.alt = people[n][1];
});