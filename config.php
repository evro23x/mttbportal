<?php
	$host = "localhost";
	$database = "testtest123123";
	$dbuser = "testtest123123";
	$dbpassword = "testtest123123";

	if (!$link = mysql_connect('localhost', 'testtest123123', 'testtest123')) {
	    echo 'Не удалось подключиться к mysql';
	    exit;
	}
	
	// mysql_query("SET NAMES 'utf8'");
	
	if (!mysql_select_db('testtest123123', $link)) {
	    echo 'Не удалось выбрать базу данных';
	    exit;
	}
