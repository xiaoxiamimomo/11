<?php
date_default_timezone_set('Asia/Shanghai');

function connDB($dbConf)
{
	$conn = mysql_connect($dbConf['host'], $dbConf['user'], $dbConf['pass'], true);

	if ($conn) {
		mysql_query('set names \'utf8\';', $conn);
		return $conn;
	}
	return false;
}

function getDb()
{
	$db1 = array(
		'host' => '10.2.109.213:3306',
		'user' => 'root',
		'pass' => 'Qwe493898@',
		'DB_CHARSET'=> 'utf8mb4'
	);
	
	$db = connDB($db1);
	
	mysql_select_db('数据库名称', $db);

	mysql_query('set names \'utf8mb4\'', $db);
	
	return $db;
}

function getTablePrefix(){
	return '表前缀';
}

function getAppId(){
	return '微信小程序appid';
}

function getAppSecret(){
	return '微信小程序appsecret';
}