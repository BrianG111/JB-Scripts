function makePopup(url, width, height, overflow)
{
    if (width > 640) { width = 640; }
    if (height > 480) { height = 480; }


    if (overflow == '' || !/^(scroll|resize|both)$/.test(overflow))
    {
        overflow = 'both';
    }

    var win = window.open(url, '',
        'width=' + width + ',height=' + height
       + ',scrollbars=' + (/^(scroll|both)$/.test(overflow) ?
        'yes' : 'no')
       + ',resizeable=' + (/^(resize|both)$/.test(overflow)?
        'yes' : 'no')
       + ',status=yes,toolbar=no,menubar=no,location=no'
    );

    return win;
}

document.getElementById('survey_link').onclick = function()
{
    var survey = makePopup(this.href, 640, 480, 'scroll');

    return survey.closed;
};

var cpanel = makePopup('cpanel.html', 480, 240, 'resize');
cpanel.close();