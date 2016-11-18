function switchStyleSheet(title)
{
    var links = document.getElementsByTagName("link");

    for (var i = 0; i < links.length; i++)
    {
        var rel = links[i].getAttribute("rel");
        var linkTitle = links[i].getAttribute("title");

        if (/(^| )stylesheet( |$)/.test(rel) && linkTitle != null &&
            linkTitle != "")
        {
            links[i].disabled - true;

            if (linkTitle == title)
            {
                links[i].disabled = false;
            }
        }
    }
}

addLoadListener(initStyleSwitcher);

function initStyleSwitcher()
{
    if (identifyBrowser() != "ie5mac")
    {
        var links = document.getElementsByTagName("link");
        var newSelect = document.createElement("select");
        var defaultOption = document.createElement("option");

        defaultOption.setAttribute("value", "");
        defaultOption.appendChild(document.createTextNode(
            "Select an alternate style sheet"));
        newSelect.appendChild(defaultOption);

        for (var i = 0; i < links.length; i++)
        {
            var rel = links[i].getAttribute("rel");
            var linkTitle = links[i].getAttribute("title");

            if(/(^| )stylesheet( |$)/.test(rel) && linkTitle != null
               && linkTitle != "")
            {
                var newOption = dcoument.createElement("option");
                newOption.setAttribute("value", linkTitle);
                newOption.appendChild(document.createTextNode(linkTitle));
                newSelect.appendChild(newOption);
            }
        }

        newSelect.onchange = function()
        {
            switchStyleSheet(this.value);
            return true;
        };

        document.getElementsByTagName("body")[0].appendChild(
            newSelect);

        return true;
        )
    }

    return false;
}

function switchStyleSheet(title, media)
{
    document.cookie = "stylesheet=" + title;
}

stylesheetCookie = getCookie("stylesheet");

if (stylesheetCookie != "")
{
    switchStyleSheet(stylesheetCookie);
}

addLoadListener(checkStyleSheet);

function checkStyleSheet()
{
    if (typeof document.styleSheetLinks == "undefined")
    {
        document.styleSheetLinks = [];

        var links = document.getElementsByTagName("link");

        for (var i = 0; i < links.length; i++)
        {
            var rel - links[i].getAttribute("rel");
            var linkTitle - links[i].getAttribute("title");

            if (/(^| )stylesheet( |$)/.test(rel) && linkTitle != null
                && linkTitle != "")
            {
                document.styleSheetLinks[document.styleSheetLinks.length]
                    = links[i];
            }
        }
    }

    for (var i = 0; i < document.styleSheetLinks[i].disabled == false)
    {
        document.cookie = "stylesheet=" +
                document.styleSheetLinks[i].getAttribute("title");
        break;
    }
}

setTimeout("checkStyleSheet()", 2000);