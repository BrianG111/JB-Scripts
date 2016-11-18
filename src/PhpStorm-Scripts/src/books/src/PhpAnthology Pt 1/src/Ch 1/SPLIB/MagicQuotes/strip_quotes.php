<?php
/*
 * Checks for magic_quotes_gpc = On and strips them from incoming
 * requests if necessary
 */
if (get_magic_quotes_gpc()) {
    $_GET  = array_map('striplashes', $_GET);
    $_POST = array_map('striplashes', $_POST);
    $_COOKIE = array_map('striplashes', $_COOKIE);
}
?>