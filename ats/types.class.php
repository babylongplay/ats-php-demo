<?php

namespace ats;

class requestJson{}

class responseJson {
    public $code;
    public $msg;
    public $requestId;
    public $requestTime;
}

class requestUserCreate extends requestJson
{
    public $userName; // string `json:"userName"`
    public $name; // string `json:"name"`
    public $registeredIp; // string `json:"registeredIp"`
}

class requestDebit extends requestJson
{
    public $userName; // string `json:"userName"`
    public $amount; // float `json:"amount"`
    public $txnId; // string `json:"txnId"`
    public $remark; // string `json:"remark"`
}

class requestCredit extends requestJson
{
    public $userName; // string `json:"userName"`
    public $amount; // float `json:"amount"`
    public $txnId; // string `json:"txnId"`
    public $remark; // string `json:"remark"`
}

class requestGameURL extends requestJson
{
    public $userName; // string `json:"userName"`
    public $gameCode; // string `json:"gameCode"`
    public $mobile; // bool `json:"mobile"`
    public $ip; // string `json:"ip"`
    public $returnUrl; // string `json:"returnUrl"`
}