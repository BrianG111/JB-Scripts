<?php
$sql  "SELECT * FROM users
       WHERE username='" . $_POST['username'] . "'
       AND password='" . $_POST['password'] . "'";

echo 'Query: ' . $sql . ' <br />';

$result = mysql_query($sql);
$rows = mysql_num_rows($result);

if ($rows > 0) {
    echo 'You are logged in!<br />';
} else {
    echo 'You are not allowed here!<br />';
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" /><br />
    <input type="text" name="password" /><br />
    <input type="submit" />
</form>
