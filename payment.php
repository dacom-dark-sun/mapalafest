<?php

date_default_timezone_set ("UTC");
define ("MAIN_DIR", dirname(__FILE__));
include (MAIN_DIR . '/mysql.php');
include (MAIN_DIR . "/config.php");
require __DIR__ . '/vendor/autoload.php';

use Coinbase\Wallet\Resource\Account;
use Coinbase\Wallet\Resource\Address;
use Coinbase\Wallet\Enum\CurrencyCode;
use Coinbase\Wallet\Resource\Transaction;
use Coinbase\Wallet\Value\Money;
use Coinbase\Wallet\Client;
use Coinbase\Wallet\Configuration;


if ($_POST['nickname']){
$db = new SafeMysql(array('user' => $config['dbuser'], 'pass' => $config['dbpassword'],'db' => $config['dbname'],'host' => $config['dbhost'], 'charset' => 'utf8mb4'));

    $data['nickname'] = $_POST['nickname'];
	$data['kolvo'] = $_POST['kolvo'];
	$data['email'] = $_POST['email'];
	$data['phone'] = $_POST['phone'];

	$db->query("INSERT INTO mapalafest SET ?u", $data);
}






function create_address($username,$config){

 		$apiKey = $config['apikey'];
		$apiSecret = $config['apisecret'];
        $configuration = Configuration::apiKey($apiKey, $apiSecret);
        $client = Client::create($configuration);
        
        $account = $client->getAccount($config['account']);
               
        $address = new Address([
            'name' => $username,
        ]);

        $client->createAccountAddress($account, $address);
        $address = $client->decodeLastResponse();
     	
     return $address['data']['address'];
}

 function get_btc_rate(){
        
        $jsnsrc = "https://blockchain.info/ticker";
        $json = file_get_contents($jsnsrc);
        $json = json_decode($json);
        $btc_rate = $json->RUB->last;
        
        return $btc_rate;

    }

 function get_keys($nickname, $pass){
        $cmd = "python3 pub_keys.py" . " DCM " . "'" . $nickname . "'" . " " . $pass;
        $out = shell_exec($cmd);  
        $out = json_decode($out, true);
        return $out;
}


?>

