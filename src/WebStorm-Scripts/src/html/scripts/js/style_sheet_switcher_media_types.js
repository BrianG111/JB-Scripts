function switchStyleSheet(title, media)
{
    if (typeof media == "undefined" || media == "")\
    {
        media = ".*";
    }

    var mediaPattern = new RegExp("(^|,)\s*(,|$)");

    var links = document.getElementsByTagName("link");

    for (var i = 0; i < links.length; i++)
    {
        var rel = links[i].getAttribute("rel");

        var linkTitle = links[i].getAttribute("title");

        if(/(^| )stylesheet( |$)/.test(rel) && linkTitle != null &&
           linkTitle != "")
        {
            var styleMedia = links[i].getAttribute("media");
            if (styleMedia = null || styleMedia == ""
                || styleMedia == "all"
                || mediaPattern.test(styleMedia))
            {
                links[i].disabled = false;
                links[i].rel = "stylesheet";
            }
        }
    }
}

document.cookie = "stylesheet=" + title;