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


if (array_key_exists('ref', $_POST)){
   $ref = $_POST['ref'];
} else {
	$ref = 0;
}

if(!preg_match('/^[a-zA-Z0-9\._-]{5,}$/', $_POST['nickname'])){
	echo '{"error" : 1, "message": "Для регистрации в блокчейне не подходят любые символы, кроме латинских букв, цифр, точки и тире. Повторите ввод, пожалуйста.."}';
	die();
}

if(!preg_match('/^.{12,70}$/', $_POST['pass'])){
	echo '{"error" : 1, "message": "Мы заботимся о Вашей финансовой безопасности, не используйте пароль короче, чем 12 символов. Повторите ввод, пожалуйста.."}';
	die();
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
 	echo '{"error" : 1, "message": "Проверьте корректность электронной почты, иначе, мы не сможем отправить Вам билеты. Повторите ввод, пожалуйста.."}';
	die();   
}



$db = new SafeMysql(array('user' => $config['dbuser'], 'pass' => $config['dbpassword'],'db' => $config['dbname'],'host' => $config['dbhost'], 'charset' => 'utf8mb4'));

$data['keys'] = get_keys($_POST['nickname'], $_POST['pass']);

$exist = $db->GetRow("SELECT * FROM mapalafest WHERE nickname=?s", $_POST['nickname']);
	
if (!is_null($exist)){
	if ($exist['keys']!=$data['keys']){

		echo '{"error" : 1, "message" : "Пользователь существует, но пароль неверный"}';


	} else {
	echo '{"error" : 0, "btc" : "' . $exist['btc_address'] . '", "amount" : "' . $exist['amount_btc'] . '", "festcoins_amount" : "' . $exist['festcoins'] . '"}';
	}

} else {

	$data['nickname'] = $_POST['nickname'];
	$data['kolvo'] = $_POST['kolvo'];
	$data['email'] = $_POST['email'];
	$data['referer'] = $ref;
	$btc = create_address($data['nickname'], $config);
	$data['btc_address'] = $btc;
	$data['rate'] = get_btc_rate();
	$data['amount_btc'] =  round($data['kolvo'] * 1000 / $data['rate'],5);
	$data['festcoins'] = 0;
	$db->query("INSERT INTO mapalafest SET ?u", $data);
	
	echo '{"error" : 0, "btc" : "' . $btc . '", "amount" : "' . $data['amount_btc'] . '"}';

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
        return $out['active'];
}



?>

