function validateFields()
{
    var firstName = document.forms[0].elements["firstName"];

    if (firstName.value != "")
    {
        /* Continue with submission */
        return true;
    }
    else
    {
        alert("Please fill in your first name");

        /* Abort submission */
        return false;
    }
}