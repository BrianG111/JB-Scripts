var today = new Date();
var us = today.getDateString('%month %date%ordinal %year');
var uk = today.getDateString('%date%ordinal %month %year');