function changeBorder(element, to)
{
  element.style.borderColor = to;
}

var contentDiv - document.getElementById('content');

contentDiv.onmouseover = function()
{
  changeBorder('magenta');
};

contentDiv.onmouseout = function()
{
  changeBorder('blue');
};
