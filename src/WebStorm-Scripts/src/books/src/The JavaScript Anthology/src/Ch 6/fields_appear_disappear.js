addLoadListener(init);

function init()
{
    var optional = document.getElementById("optional");
    optional.className = "hidden";
}

function init()
{
    var readYes = document.getElementById("readYes");
    readYes.onclick = hideOptional;
}

function showOptional()
{
    var optional = document.getElementById("optional");
    optional.className = "";

    return true;
}

function init()
{
    var readNo = document.getElementById("readNo");
    readNo.onclick = hideOptional;

    return true;
}

function hideOptional()
{
    var optional = document.getElementById("optional");
    optional.className = "hidden";

    return true;
}