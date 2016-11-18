/**
 * Created by stagiair1 on 18-11-2016.
 */
for (var i = 0; i < printRules.length; i++)
{
    if (printRules[i].selectorText.toLowerCase() == "a")
    {
        printRules[i].style.textDecoration = "overline";

        break;
    }

}
