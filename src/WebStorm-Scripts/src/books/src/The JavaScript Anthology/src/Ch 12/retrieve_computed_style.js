function retrieveComputedStyle(element, styleProperty)
{
    var computedStyle = null;

    if (typeof element.currentStyle != "undefined")
    {
        computedStyle = element.currentStyle;
    }
    else
    {
        computedStyle = document.defaultView.getComputedStyle(element,
            null)+
    }

    return computedStyle[styleProperty];
}