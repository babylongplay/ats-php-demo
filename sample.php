<?php

use ats\ATS;
use ats\Utils;

ini_set("display_errors", 0);

error_reporting(E_ALL|E_STRICT);
error_reporting(E_ALL);

require_once __DIR__ . "/ats/config.php";

//********** API CONFIG **********
define("API_URL", "https://api-prod.autosystem.io");
define("OPERATOR_TOKEN", "TOKEN");
define("SECRET_KEY", "SECRET_KEY");

//********** SET CLIENT **********
$client = new ATS(
    API_URL,
    OPERATOR_TOKEN,
    SECRET_KEY
);

$userName = 'usertest1234';
$gameCode = 'WML';

//********** Utils **********
$utils = new Utils;

//********** CREATE USER **********
$param = array('userName' => $userName,'name' => 'Test Create','registeredIp' => '127.0.0.1');
$response = $client->submit(ATS_API_CREATEUSER, $param);
print_r("[USER -> CREATE] response body: $response\r\n");

//********** GET USER INFO **********
$response = $client->submit2(ATS_API_USER . "/info/$userName");
print_r("[USER -> INFO] response body: $response\r\n");

//********** GET WALLET INFO **********
$response = $client->submit2(ATS_API_USER . "/wallet/$userName");
print_r("[USER -> WALLET] response body: $response\r\n");

//********** CREDIT **********
$param = array('userName' => $userName, 'amount' => 2, 'txnId' => $utils->randomCreditTx(), 'remark' => '');
$response = $client->submit(ATS_API_FUNDCREDIT, $param);
print_r("[FUND -> CREDIT] response body: $response\r\n");

//********** DEBIT **********
$param = array('userName' => $userName, 'amount' => 1, 'txnId' => $utils->randomDebitTx(), 'remark' => '');
$response = $client->submit(ATS_API_FUNDDEBIT, $param);
print_r("[FUND -> DEBIT] response body: $response\r\n");

//********** GET FUND HISTORY **********
$response = $client->submit2(ATS_API_USER . "/fund/history");
print_r("[FUND -> HISTORY] response body: $response\r\n");

//********** LAUNCH GAME (GET URL) **********
$param = array('userName' => $userName, 'gameCode' => $gameCode, 'mobile' => ATS_DEVICE_PC, 'ip' => '127.0.0.1', 'returnUrl' => 'https://google.com');
$response = $client->submit(ATS_API_LAUNCH, $param);
print_r("[PLATFORM -> LAUNCH] response body: $response\r\n");