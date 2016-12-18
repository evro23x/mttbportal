<?php

require_once('config.php');

$d_login = htmlspecialchars($_POST['login']);
$d_password = md5(htmlspecialchars($_POST['password']));

// if (filter_var($d_login, FILTER_VALIDATE_EMAIL) && $d_password != null) {

$query = "SELECT login, password FROM users WHERE login = '$d_login' and password = '$d_password'";
$result = mysql_query($query, $link );
if (!$result) {
    echo "Ошибка DB, запрос не удался\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

$n = mysql_num_rows ($result);
if ( $n == 0 ) {
    header("Location: error.html");
}

for ( $i=0; $i<$n; $i++ )
{
    $row = mysql_fetch_array($result);
}

if ($row["login"] == $d_login and $row["password"] == $d_password) {
    header("Location: success.html");
}
// }
