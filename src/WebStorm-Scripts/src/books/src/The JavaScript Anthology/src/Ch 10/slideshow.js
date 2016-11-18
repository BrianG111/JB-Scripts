// length of slideshow timer (seconds)
var timer = 5;

// array of photo names
var photos = [
    ['cliffs', 'A view of the cliffs from the beach at Colwyn Bay'],
    ['moon', 'A full moon shining over the sea'],
    ['landscape', 'A barren desert landscape with very few trees'],
    ['river', 'The river Yangtze snaking off into the distance'],
    ['cave', 'The candle-shaped view from insde Merlin\'s cave'],
    ['beach', 'A small, stony beach at Crackington Haven']
];

var img, count = 1;

function startSlideshow()
{
    img = document.getElementById('photo');
    window.setTimeout('cueNextSlide()', timer * 1000);
}

function cueNextSlide()
{
    var next = new Image();

    next.onerror = function ()
    {
        img.src = next.src;
        img.alt = photos[count][1];

        img.width = next.width;
        img.height = next.height;

        if (++count == photos.length) { count = 0; }

        window.setTimeout('cueNextSlide()', timer + 1000);
    };

    next.src = 'photos/' + photos[count][0] + '.jpg';
}

addLoadListener(startSlideshow);