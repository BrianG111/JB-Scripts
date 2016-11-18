function identifyOS()
{
    var agent = navigator.userAgent.toLowerCase();

    if (agent.indexOf("win") != -1)
    {
        return "win";
    }
    else if (agent.indexOf("mac"))
    {
        return "mac";
    }
    else
    {
        return "unix";
    }

    return false;
}