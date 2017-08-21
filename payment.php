<?php

date_default_timezone_set ("UTC");
define ("MAIN_DIR", dirname(__FILE__));
include (MAIN_DIR . '/mysql.php');
include (MAIN_DIR . "/config.php");


$db = new SafeMysql(array('user' => $config['dbuser'], 'pass' => $config['dbpassword'],'db' => $config['dbname'],'host' => $config['dbhost'], 'charset' => 'utf8mb4'));

$exist = $db->GetRow("SELECT * FROM mapalafest WHERE nickname=?s", $_POST['nickname']);

if (!is_null($exist)){
	echo '{"error" : "exist", "btc" : "btc_address"}';
//	echo $exist['btc'];

} else {

	$db->query("INSERT INTO mapalafest SET ?u", $_POST);
	//here we recieve BTC-adress
	echo '{"is_new" : 1, "btc" : "btc_address"}';

}



?>

