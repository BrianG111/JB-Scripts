/**
 * Created by stagiair1 on 18-11-2016.
 */
function addStyleRule(styleSheet, selector, properties, index)
{
    if (typeof styleSheet.addRule != "undefined")
    {
        styleSheet.addRule(selector, properties, index)
    }
    else if (typeof styleSheet.insertRule())
}