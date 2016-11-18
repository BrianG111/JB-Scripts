function getScrollingPosition()
{
    var position = [0, 0];

    if (typeof window.pageYOffset != 'undefined')
    {
        position = [
            window.pageXOffset,
            window.pageYOffset
        ];
    }

    else if (typeof document.documentElement.scrollTop
        != 'undefined' && document.documentElement.scrollTop > 0)
    {
        position = [
            document.documentElement.scrollLeft,
            document.documentElement.scrollTop
        ];
    }

    else if (typeof document.body.scrollTop != 'undefined')
    {
        position = [
            document.body.scrollLeft,
            document.body.scrollTop
        ];
    }

    return position;
}

// Use this if problems with scrolling.

// window.setInterval(function()
// {
//    var scrollpos = getScrollingPosition();
//    document.title = 'left=' + scrollpos[0] + ' top=' +
//        scrollpos[1];
// }, 250);

window.onscroll = function()
{
    var scrollpos = getScrollingPosition();
    document.title = 'left=' + scrollpos[0] + ' top=' +
            scrollpos[1];
}