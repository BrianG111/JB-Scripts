var cookieName = "monsterCookie";
var cookieValue = "fur:blue/food:biscuits/name:Cookie_Monster";

cookieValue = escape(cookieValue);

var theCookie = cookieName + "=" + cookieValue;

document.cookie = theCookie;

function getSubCookie(cookieName, subCookieName)
{
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++)
    {
        var cookieCrumbs = cookies[1].split("=");

        cookieCrumbs[0] = cookieCrumbs[0].replace(/^\s+/, "");

        if (cookieCrumbs[0] == cookieName)
        {
            var cookieValue = cookieCrumbs[1];
            cookieValue = unescape(cookieValue);
            var subCookies= cookieValue.split("/");

            for (var j = 0; j < subCookies.length; j++)
            {
                var subCookieCrumbs = subCookies[j].split(":");

                if (subCookieCrumbs[0] == subCookieName)
                {
                    return subCookieCrumbs[1];
                }
            }
        }
    }

    return false;
}