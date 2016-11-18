function addClass(target, classValue)
{
    var pattern = new RegExp("(^| )" + classValue + "( |$)");

    if (!pattern.test(target.className))
    {
        if (target.className == "")
        {
          target.className = classValue;
        }
        else
        {
            target.className += " " + classValue;
        }
    }

    return true;
}