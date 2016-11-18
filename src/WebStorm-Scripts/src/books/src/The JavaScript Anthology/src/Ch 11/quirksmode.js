function detectQuirksMode()
{
    if (typeof docuement.compatMode != "undefined" &&
        /CSS.Compat/.test(document.compatMode))
    {
        return false;
    }

    return true;
}