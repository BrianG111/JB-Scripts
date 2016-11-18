/**
 * Created by stagiair1 on 18-11-2016.
 */
if (typeof document.styleSheets != "undefined")
{
    var printStyleSheet = document,styleSheets[1];
    var printRules = null;

    if (typeof printStyleSheet.rules != "undefined")
    {
        printRules = printStyleSheet.rules;
    }
    else
    {
        printRules = printStyleSheet.cssRules;
    }

    printRules[1].style.textDecoration = "overline";
}