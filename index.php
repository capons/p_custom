<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

require_once("app/Autoloader.php");

$t = new \app\system\test\Test();
$t = new \app\database\Database();

echo $t->test();

?>

