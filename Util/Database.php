<?php

require_once('Util/Configuration.php');

$db = null;

try {
	$db = new \PDO('mysql:dbname=OpSecDB;host=localhost;charset=utf8', DATABASE_USERNAME, DATABASE_PASSWORD);
} catch (\PDOException $exception) {
	die($exception->getMessage());
}
