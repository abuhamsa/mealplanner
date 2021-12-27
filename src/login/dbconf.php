<?php
//DATABASE CONNECTION VARIABLES
$host = getenv('MYSQL_HOST', true) ?: getenv('MYSQL_HOST'); // Host name
$username = getenv('MYSQL_USER', true) ?: getenv('MYSQL_USER'); // Mysql username
$password = getenv('MYSQL_PASSWORD', true) ?: getenv('MYSQL_PASSWORD'); // Mysql password
$db_name = getenv('MYSQL_DATABASE', true) ?: getenv('MYSQL_DATABASE'); // Database name

//DO NOT CHANGE BELOW THIS LINE UNLESS YOU CHANGE THE NAMES OF THE MEMBERS AND LOGINATTEMPTS TABLES

$tbl_prefix = ""; //***PLANNED FEATURE, LEAVE VALUE BLANK FOR NOW*** Prefix for all database tables
$tbl_members = $tbl_prefix."members";
$tbl_attempts = $tbl_prefix."loginattempts";
