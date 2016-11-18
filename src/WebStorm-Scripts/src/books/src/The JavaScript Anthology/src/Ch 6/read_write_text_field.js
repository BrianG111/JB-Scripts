var formByIndex = document.forms[0];
var formById = document.forms["contactForm"];
var firstNameElement = document.forms["contactForm"].elements[0];
var lastnameElement = document.forms["contactForm"].elements["lastName"];
var contactForm = document.forms["contactForm"];
var oldValue = contactForm["firstName"].value;
contactForm["firstName"].value = "Zaphod";