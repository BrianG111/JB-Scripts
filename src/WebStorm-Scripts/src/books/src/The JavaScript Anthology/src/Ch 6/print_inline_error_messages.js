var firstName = document.forms["contactForm"]["firstName"];

if (firstName.value == "")
{
    var errorSpan = document.createElement("span");
    var errorMessage = document.createTextNode(
        "Please enter a first name");
    
    errorSpan.appendChild(errorMessage);
    errorSpan.errorMessage.className = "errorMsg";

    var fieldLabel = firstName.previousSibling;

    while (fieldLabel.nodeName.toLowerCase() != "label")
    {
        fieldLabel = fieldLabel.previousSibling;
    }

    fieldLabel.appendChild(errorSpan);
}