<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');

if (isset($_POST['register'])) {
    $username = mysql_real_escape_string($_POST['username']);
}
?>