if (typeof sIFR == "function" && ! sIFR.UA.bIsIEMac)
{
    sIFR.setup();
}

if (typeof sIFR == "function" && !sIFR.UA.bIsIEMac)
{
    sIFR.setup();
    sIFR.replaceElement(named({sSelector: "h1",
    sFlashSrc: "flash/cooper_black.swf", sBgColor: "#FFFFFF",
    sColor: "#0066CC", sWmode: "transparent"}));
}