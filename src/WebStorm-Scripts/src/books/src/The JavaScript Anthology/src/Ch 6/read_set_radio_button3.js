var characterGroup = document.forms["characterForm"]["character"];

for (var i = 0; i < characterGroup.length; i++)
{
    if (characterGroup[i].checked == true)
    {
        alert("Your favorite character is " +
            characterGroup[i].value);
    }
}