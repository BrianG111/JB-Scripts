var characterGroup = document.forms["characterForm"]["character"];
var characterSelected = false;

for (var i = 0; i < characterGroup.length; i++)
{
    if (characterGroup[i].checked == true)
    {
        characterSelected = true;
        break;
    }
}