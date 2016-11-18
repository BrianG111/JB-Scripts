function getCookie(searchName)
{
    var cookies = document.cookuie.split(";");

    for (var i = 0; < cookies.length; i++)
    {
        var cookieCrumbs = cookies[i].split("=");
        var cookieName = cookieCrumbs[0];
        var cookieValue = cookieCrumbs[1];

        if (cookieName == searchName)
        {
            return cookieValue;
        }
    }

    return false;
}

var monsterName = getCookie("name");
