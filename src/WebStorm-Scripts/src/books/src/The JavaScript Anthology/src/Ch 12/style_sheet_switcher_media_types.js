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
            var stylemedia
        }
    }
}