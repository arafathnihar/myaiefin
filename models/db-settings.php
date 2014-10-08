<?php

/*----------*/		

//Database Information

$db_host = "mysql.2freehosting.com"; //Host address (most likely localhost)

$db_name = "u741222660_aie"; //Name of Database

$db_user = "u741222660_aie"; //Name of database user

$db_pass = "ucsc@123"; //Password for database user

$db_table_prefix = "uf_";



// All SQL queries use PDO now

function pdoConnect(){

	// Let this function throw a PDO exception if it cannot connect

	global $db_host, $db_name, $db_user, $db_pass;

	$db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);

	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	return $db;

}



GLOBAL $errors;

GLOBAL $successes;



$errors = array();

$successes = array();



//Direct to install directory, if it exists

if(is_dir("install/"))

{

	header("Location: install/");

	die();



}