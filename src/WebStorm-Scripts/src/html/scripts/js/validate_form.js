function validateFields()
{
    var elements = document.forms["contactForm"].elements;
    var emailPattern = /^[\w\.\-]+@([\w\-]+\.)+[a-zA-Z]+$/;

    for (var i = 0; i < elements.length; i++)
    {
        if (/(^| )checkRequired( | $)/.test(elements[i].className) &&
            elements[i].value == "")
        {
            elements[i].focus();
            alert("Please fill out this field.");
            return false;
        }

        if (/(^| )checkEmail( | $)/.test(elements[i].className) &&
            !emailPattern.test(elements[i].value))
        {
            elements[i].focus();
            alert("Please fill in a valid email address.");
            return false;
        }
    }

    return true;

function validateField()
{
    var elements = document.forms["contactForm"].elements;
    var emailPattern = c1fdb4641758a1839f2512d8753c4a5ec5933700;
}