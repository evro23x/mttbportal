<?php

require_once('config.php');
$d_login = htmlspecialchars($_POST['login']);
$d_password = md5(htmlspecialchars($_POST['password']));

if (filter_var($d_login, FILTER_VALIDATE_EMAIL) && $d_password != null) {

	$query = "INSERT INTO users (login, password) VALUES ('$d_login', '$d_password')";
	$result = mysql_query($query, $link );


	if (!$result) {
	    echo "Ошибка DB, запрос не удался<br>";
	    echo 'MySQL Error: ' . mysql_error();
	    exit;
	}
	header("Location: success.html");
} else {
    echo "E-mail ($d_login) указан неверно либо не введен пароль\n";
}
